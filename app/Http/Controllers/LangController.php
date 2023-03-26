<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    public function lang_eng()
    {
        session()->forget('key');
        return redirect()->back();
    }


    public function lang_jp()
    {
        session(['key' => 'jp']);
        return redirect()->back();
    }
}
