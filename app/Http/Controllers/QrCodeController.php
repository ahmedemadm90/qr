<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrCodeController extends Controller
{
    public function index()
    {
        return view('qrcode');
    }
    public function create()
    {
        return view('create');
    }
    public function viewQr(Request $request)
    {
        $text = $request->text;
        return view('viewQr',compact('text'));

    }
}
