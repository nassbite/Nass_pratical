<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class AboutController extends Controller
{
    //
    public function index() {
        $items = Http::get("https://reqres.in/api/users");
        return view('nass',['items'=>$items['data']]);
}
}