<?php

namespace App\Http\Controllers;

class ProdukController extends Controller
{
    //
    public function index()
    {
        return view('produk');
    }

    public function admin()
    {
        return view('admin-produk');
    }

    public function menu()
    {
        return view('menu');
    }

    public function tambah()
    {
        return view('produk-add');
    }
}
