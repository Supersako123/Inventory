<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use App\Models\Sale;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;


class DashboardController extends Controller
{

  public function view(Request $request): View
  {
    $highestSelling = Products::select('products.*', \DB::raw('SUM(sales.total) as total_sales'))
      ->join('sales', 'products.id', '=', 'sales.products_id')
      ->where('products.group_id', $request->user()->group_id)
      ->groupBy('products.id')
      ->orderByDesc('total_sales')
      ->limit(8)
      ->get()
      ->toArray();


      $latestSales = Products::select('products.*', \DB::raw('SUM(sales.total) as total_sales'))
      ->join('sales', 'products.id', '=', 'sales.products_id')
      ->where('products.group_id', $request->user()->group_id)
      ->groupBy('products.id')
      ->orderByDesc(\DB::raw('MAX(sales.created_at)'))
      ->limit(8)
      ->get()
      ->toArray();

    $recentlyAdded = Products::where('group_id', $request->user()->group_id)
      ->orderBy('created_at', 'desc')
      ->limit(8)
      ->get()
      ->toArray();

    $users = User::where('group_id', $request->user()->group_id)->count();
    $categories = Category::where('group_id', $request->user()->group_id)->count();
    $products = Products::where('group_id', $request->user()->group_id)->count();
    $totalSales = Sale::where('group_id', $request->user()->group_id)->sum('total');


    return view(
      'dashboard',
      [
        'highestSelling' => $highestSelling,
        'latestSales' => $latestSales,
        'recentlyAdded' => $recentlyAdded,
        'users' => $users,
        'categories' => $categories,
        'products' => $products,
        'totalSales' => $totalSales,

      ]
    );
  }
}