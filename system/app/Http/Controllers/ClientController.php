<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class ClientController extends Controller
{
    function showHome()
    {
        $data['list_produk'] = Produk::all();
        return view('frontview.home', $data);
    }

    function showAbout(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('frontview.about', $data);
    }

    function showBlog()
    {
        $data['list_produk'] = Produk::all();
        return view('frontview.blog', $data);
    }

    function showCart()
    {
        return view('frontview.cart');
    }

    function showShop()
    {
        $data['list_produk'] = Produk::all();
        return view('frontview.shop', $data);
    }
}