<?php

namespace App\Http\Controllers;


use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\View\View;


class SalesController extends Controller
{

  public function view(Request $request): View
{
    $sales = Sale::where('group_id', $request->user()->group_id)
        ->with('products') 
        ->get()
        ->map(function ($sale) {
            $sale->name = $sale->products->name; 
            return $sale;
        });

    return view('sales.view', ['sales' => $sales]);
}
  

}