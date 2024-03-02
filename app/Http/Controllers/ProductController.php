<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function category()
    {
        $products = ['foodBeverage', 'beautyHealth', 'homeCare', 'babyKid'];
        return view('category', ['klasifikasi' => 'Kategori Produk', 'products' => $products]);
    }
    public function foodBeverage()
    {
        $products = ['Ayam Geprek', 'Bakso', 'Tahu Telur'];
        return view('category', ['klasifikasi' => 'Food Beverage', 'products' => $products]);
    }
    public function beautyHealth()
    {
        $products = ['Face Wash', 'Toner', 'Serum'];
        return view('category', ['klasifikasi' => 'Beauty Health', 'products' => $products]);
    }
    public function homeCare()
    {
        $products = ['Sabun', 'Sapu', 'Handsanitizer'];
        return view('category', ['klasifikasi' => 'Home Care', 'products' => $products]);
    }
    public function babyKid()
    {
        $products = ['Minyak Telon', 'Susu', 'Baju Bayi'];
        return view('category', ['klasifikasi' => 'Baby Kid', 'products' => $products]);
    }
}