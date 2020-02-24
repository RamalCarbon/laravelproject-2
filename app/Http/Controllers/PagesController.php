<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\invoices;
class PagesController extends Controller
{
    public function index(){
        //passing a variable to a page//
        //$title= 'Welcome to laravel';
        //return view('pages.index', compact('title'));
        return view('pages.index');  
    }

    public function about(){
        return view('pages.about');
    }

    public function invoices(){
        $invoices = invoices::all(); 
        return view('posts.invoices', ['invoices' => $invoices]);
    }
}
