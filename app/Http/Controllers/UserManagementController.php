<?php

namespace App\Http\Controllers;

use App\Models\Products;
use DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Validation\Rules;
use App\Models\User;
use Hash;


class UserManagementController extends Controller
{

  public function view(Request $request): View
  {

    $users = User::where('users.group_id', $request->user()->group_id)
      ->join('user_roles', 'users.role_id', '=', 'user_roles.id')
      ->select('users.id', 'users.name', 'users.email', 'user_roles.name as role_name')
      ->get()
      ->toArray();


    return view('users/view', ['users' => $users]);
  }

  public function add(Request $request): View
  {
    if ($request->user()->group_id != $request->user()->group_id) {
      return view('403');
    }

    if ($request->user()->role_id != 1) {
      return view('403');
    }

    return view('users/addorEdit', ['action' => 'add']);
  }

  public function patch(Request $request)
  {
    $user = User::find($_GET['id']);

    if ($user->group_id != $request->user()->group_id) {
      return view('403');
    }

    if ($request->user()->role_id != 1) {
      return view('403');
    }

    if ($user->email == $request->input('email')) {
      $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
        'role' => ['required'],
      ]);
    } else {
      $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
      ]);
    }

    $user->update([
      'name' => $request->input('name'),
      'email' => $request->input('email'),
      'password' => hash::make($request->input('password')),
      'role_id' => $request->input('role'),
    ]);

    return Redirect::route('users');

  }

  public function edit(Request $request)
  {

    if ($request->user()->role_id != 1) {
      return view('403');
    }

    $user = DB::table('users')
      ->where('id', $request['id'])
      ->first();

    if ($user->group_id != $request->user()->group_id) {
      return view('403');
    }


    if ($user) {
      $user->password = '';
    }

    return view('users/addorEdit', ['action' => 'edit', 'user' => $user]);
  }


  public function store(Request $request)
  {

    if ($request->user()->role_id != 1) {
      return view('403');
    }

    $request->validate([
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
      'password' => ['required', 'confirmed', Rules\Password::defaults()],
      'role' => ['required'],
    ]);

    User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
      'group_id' => $request->user()->group_id,
      'role_id' => $request->role,
    ]);

    return redirect(route('users'));

  }

  public function delete(Request $request)
  {


    $user = User::find($request->id);

    if ($request->user()->role_id != 1) {
      return view('403');
    }

    if ($request->user()->group_id != $user->group_id) {
      return view('403');
    }


    $user->delete();

    return redirect(route('users'));

  }

}