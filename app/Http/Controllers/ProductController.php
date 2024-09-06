<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage() {
        return view('produk.food-beverage');
    }

    public function beautyHealth() {
        return view('produk.beauty-health');
    }

    public function homeCare() {
        return view('produk.home-care');
    }

    public function babyKid() {
        return view('produk.baby-kid');
    }
}
