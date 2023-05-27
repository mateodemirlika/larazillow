<?php

namespace App\Http\Controllers;
use App\Models\Listing;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index(){
        return inertia('Index/Index',[
            'message'=>'Hello Mateo'
        ]);
    }
    public function show(){
        return inertia('Index/Show');
    }
}
