<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main(){
        if(isset($_GET['page'])){
            return view('layouts.' . $_GET['page']);
        }else{
            return view('layouts.home');
        }
    }
}
