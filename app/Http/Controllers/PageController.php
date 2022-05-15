<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
         public function index(){

               // Share button 1
               $shareButtons1 = \Share::page(
                     'https://makitweb.com/datatables-ajax-pagination-with-search-and-sort-in-laravel-8/'
               )
               ->facebook()
               ->twitter()
               ->linkedin()
               ->telegram()
               ->whatsapp() 
               ->reddit();

               // Load index view
               return view('index')->with('shareButtons1',$shareButtons1 );
         }
}