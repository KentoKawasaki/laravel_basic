<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Shop;

class ShopController extends Controller
{
    public function index() {

        // 1対多 親->子
        $shops = Area::find(1)->shops;
        // dd($shops);

        // 1対多(逆) 子->親
        $area = Shop::find(1)->area;
        // dd($area);

        // 多対多
        $routes = Shop::find(1)->routes;

        dd($routes);

    }
}
