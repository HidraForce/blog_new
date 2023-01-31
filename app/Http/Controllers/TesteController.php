<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    
    public function teste(int $p1, int $p2)
    {
        # code...
       /*  $soma =$p1 +$p2;
        echo $soma; */
        /*return view('site.teste', ['x'=>$p1,'y'=>$p2]);//array */
        /* return view('site.teste', compact('p1','p2'));//compact */
        return view('site.teste')->with('x',$p1)->with('y',$p2);//with


    }
}
