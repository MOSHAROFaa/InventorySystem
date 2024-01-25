<?php

namespace App\Http\Controllers\Pagi;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class PagiController extends Controller
{
    // this section is for pagination
    function show(){
        $data=Product::paginate(5);
        return view('getpro', ['products' => $data]);
    }
}
