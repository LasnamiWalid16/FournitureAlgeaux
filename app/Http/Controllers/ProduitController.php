<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProduitController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }


    public function produits()
    {
        $produits=DB::select(" select * from produits ");

        return view('produits',compact('produits'));
    }
}
