<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class salesController extends Controller
{
    public function sales(){
        $penjualan = [
            ['kode' => 001, 'nama' =>'Face Wash', 'jumlah' =>3, 'total' => 100000],
            ['kode' => 002, 'nama' =>'Ayam Geprek', 'jumlah' =>15, 'total' => 150000],
            ['kode' => 003, 'nama' =>'Baju Bayi', 'jumlah' =>1, 'total' => 50000],
            ['kode' => 004, 'nama' =>'Sabun', 'jumlah' =>5, 'total' => 25000]
        ];
        return view('sales', ['sales' =>$penjualan]);
    }
    //
}
