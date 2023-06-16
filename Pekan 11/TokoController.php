<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;

class TokoController extends Controller
{
    public function index()
    {
        return view('toko/index');
    }
    public function detail()
    {
        return view('toko/detail');
    }
    public function about()
    {
        return view('toko/about');
    }
    public function admin()
    {
        $products = Product::all();
        return view('toko/admin', compact('products'));
    }
    public function create()
    {
        return view('toko/create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'price'=> 'required',
            'description'=> 'required'
        ]);

        Product::create($request->all());
        return redirect()->route('produk.admin')->with('success', 'Product created successfully');
    }
    public function customer()
    {
        $customers = Customer::all();
        return view('toko/customer', compact('customers'));
    }
    public function createcustomer()
    {
        return view('toko/createcustomer');
    }
    public function pelanggan(Request $request1)
    {
        $request1->validate([
            'name'=> 'required',
            'address'=> 'required',
            'no_hp'=> 'required'
        ]);

        Customer::create($request1->all());
        return redirect()->route('customer.admin')->with('success', 'Customer created successfully');
    }
}
    
