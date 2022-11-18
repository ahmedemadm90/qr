<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\QrCode as ModelsQrCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function store(Request $request)
    {
        $text = $request->text;
        $image = QrCode::format('png')
            ->size(200)
            ->generate($text);
        $output_file = '/img/img-' . time() . '.png';
        Storage::disk('public')->put($output_file, $image);
        $arr = [
            'code'=>200,
            'msg'=>'Generated Successfully',
            'qr_code_original'=>$text,
            'qr_image_path'=>public_path(). $output_file,
        ];
        ModelsQrCode::create([
            'text'=>$text,
            'qr_image_name'=>$output_file,
        ]);
        return response($arr);
    }
}
