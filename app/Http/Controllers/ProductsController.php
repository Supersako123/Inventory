<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use App\Models\Sale;
use DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class ProductsController extends Controller
{
  public function view(Request $request): View
  {
    $products = Products::where('group_id', $request->user()->group_id)->get();

    return view('products.view', [
      'products' => $products,
    ]);
  }

  public function add(Request $request): View
  {
    $categories = Category::where('group_id', $request->user()->group_id)->get();

    $action = 'add';
    return view('products.add', ['action' => $action, 'categories' => $categories]);
  }

  public function edit(Request $request): View
  {
    $product = DB::table('products')
      ->where('id', $request['id'])
      ->first();
    $categories = Category::where('group_id', $request->user()->group_id)->get();
    $action = 'edit';
    return view('products.add', ['action' => $action, 'product' => $product, 'categories' => $categories]);
  }

  public function patch(Request $request): RedirectResponse
  {
    $request->validate([
      'name' => ['required', 'string', 'max:255'],
      'quantity' => ['required', 'int'],
      'buying_price' => ['required', 'numeric'],
      'selling_price' => ['required', 'numeric'],
      'category_id' => ['required'],
  ], [], [
      'category_id' => 'category',  // Custom attribute name
  ]);
  

    
    $product = Products::find($_GET['id']);

    $product->update([
      'name' => $request->input('name'),
      'quantity' => $request->input('quantity'),
      'buying_price' => $request->input('buying_price'),
      'selling_price' => $request->input('selling_price'),
      'category_id' => $request->input('category_id'),
    ]);

    return Redirect::route('products');
  }


  public function store(Request $request): RedirectResponse
  {

    $request->validate([
      'name' => ['required', 'string', 'max:255'],
      'quantity' => ['required', 'int'],
      'buying_price' => ['required', 'numeric'],
      'selling_price' => ['required', 'numeric'],
      'category_id' => ['required'],
  ], [], [
      'category_id' => 'category',  // Custom attribute name
  ]);
  
    $user = $request->user();
    
  

    $product = Products::create([
      'name' => $request['name'],
      'quantity' => $request['quantity'],
      'buying_price' => $request['buying_price'],
      'selling_price' => $request['selling_price'],
      'group_id' => $user['group_id'],
      'category_id' => $request['category_id'],
    ]);

    $total = fake()->numberBetween(1,50);


   $sales = Sale::create([
      'quantity' => $total,
      'total' => $total * $request['selling_price'],
      'group_id' => $request->user()->group_id,
      'products_id' => $product->id,
    ]);

 //   dd($sales->products->name);

    return Redirect::route('products');

  }

  public function delete(Request $request): RedirectResponse
  {
    $product = Products::findorfail($request->id);
    $product->delete();
    return Redirect::route('products');
  }


}