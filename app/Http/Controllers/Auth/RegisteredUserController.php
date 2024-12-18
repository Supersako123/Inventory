<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use DB;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $group = Group::create();

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'group_id' => $group->id,
            'role_id' => 1,
        ]);

        DB::table('categories')->insert([
            ['name' => 'electronic', 'group_id' => $group->id],
            ['name' => 'fashion & apparel', 'group_id' => $group->id],
            ['name' => 'home & kitchen', 'group_id' => $group->id],
            ['name' => 'beauty & personal care', 'group_id' => $group->id],
            ['name' => 'health & wellness', 'group_id' => $group->id],
            ['name' => 'baby & kids', 'group_id' => $group->id],
            ['name' => 'sports & outdoors', 'group_id' => $group->id],
            ['name' => 'pet supplies', 'group_id' => $group->id],
        ]);


        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}


