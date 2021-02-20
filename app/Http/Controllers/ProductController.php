<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //hien thi san pham
    public function  index()
    {
        $sanpham = Product::all();
        return view('index', compact(['sanpham']));
    }
// them san pham
    public function create()
    {

    }

    public function edit($id)
    {

    }

    public function update()
    {

    }

    public function delete($id)
    {

    }
    //hien thi 1 san pham
    public function show()
    {

    }
}
