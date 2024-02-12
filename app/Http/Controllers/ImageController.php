<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;

class ImageController extends Controller
{
    public function store( Request $request ) { 

        $image = $request->file('file');
        $imageName = Str::uuid() . '.' . $image->extension();
        $imageServer = Image::read($image);
        $imageServer->cover(1000,1000,'center')->save(public_path('uploads/') . $imageName);

        return response()->json(['image' => $imageName]);
    }
}
