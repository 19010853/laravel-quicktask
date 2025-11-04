<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    //
    public function changeLanguage(Request $request, $language)
    {
        Session::put('lang', $language);

        // Trở về trang trước đó
        return redirect()->back();
    }
}
