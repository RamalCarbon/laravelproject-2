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
        $invoice = new invoices([
            'client_name' => 'test',
            'client_address' => 'test',
            'notes' => 'test',
            'date_created' => '2020-02-02',
            'access_code' => 1           
        ]);
        $invoice->save();
        return view('posts.invoices', ['invoices' => $invoices]);
    }
}
