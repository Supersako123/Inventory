<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class CategoryController extends Controller
{
  public function view(Request $request): View
  {
    $categories = Category::where('group_id', $request->user()['group_id'])->get();

    return view('/categories/view', ['categories' => $categories]);
  }

  public function add(Request $request): View
  {
    return view('/categories/addOrEdit', ['action' => 'add']);
  }

  public function edit(Request $request): View
  {
    $category = Category::where('id', $request->id)->first();


    return view('/categories/addOrEdit', ['action' => 'edit', 'category' => $category]);

  }

  public function patch(Request $request): RedirectResponse
  {
    $category = Category::where('id', $request->id);

    $category->update([
      'name' => $request->input('name')
    ]);

    return redirect(route('categories'));

  }


  public function store(Request $request): RedirectResponse
  {

    $request->validate([
      'name' => ['required'],
    ]);

    Category::create([
      'name' => $request['name'],
      'group_id' => $request->user()['group_id'],
    ]);

    return Redirect::route('categories');
  }

  public function delete(Request $request): RedirectResponse
  {
    $category = Category::where('id', $request->id);

    $category->delete();


    return redirect(route('categories'));

  }


}