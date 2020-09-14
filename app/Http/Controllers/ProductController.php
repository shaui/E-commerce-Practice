<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
	{
	    return view('product')->with('id', $id ); 
	    //注入變量名為$id,值為$id
	}
}
