<?php
namespace Dipalha\Shop\Http\Controllers\Shop;

use App\Http\Controllers\Controller;

class HelloWorldController extends Controller
{
    public function index()
    {
        return view('helloworld::shop.helloworld');
    }
}