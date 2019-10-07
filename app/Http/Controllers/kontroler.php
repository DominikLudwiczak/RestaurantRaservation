<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\faq;

class kontroler extends Controller
{
    public function faq()
    {
        $result=faq::all();
        return view('faq')->with('result', $result);
    }

    public function menu()
    {
        
    }
}
