<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\faq;
use App\manu_kat;
use App\menu;
use App\User;
use App\messages;

class kontroler extends Controller
{
    public function faq()
    {
        $result=faq::all();
        return view('faq')->with('result', $result);
    }

    public function menu($kategoria)
    {
        $kat=manu_kat::all();
        $kat_id=manu_kat::where('kategoria', $kategoria)->first();
        $menu=menu::where('menu_kat_id', $kat_id->id)->get();
        return view('menu')->with('kat', $kat)->with('kategoria', $kategoria)->with('menu', $menu);
    }

    public function message(Request $data)
    {
        $emails=User::where('email', $data->mail)->first()->get();
        $user_id=null;
        if($data->mail==$emails->email)
        {
            $user_id=$emails->id;
        }
        
        $dane=[
            'user_ID' => $user_id,
            'email' => $data->mail,
            'msg' => $data->msg
        ];

        messages::create($dane);

        return redirect();
    }
}