<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

trait WatermarkTrait{
    public function insertWatermark($image, $text = "direct.co.ke", $position = 'bottom-right'){
        $imgFile = Image::make($image->getRealPath());
        $imgFile->text($text, 120, 100, function($font) {
            $font->file(public_path('watermark.ttf'));
            $font->size(40);
            // $font->color('#ff0000');
            $font->color([255, 255, 255, 0.5]);
            $font->align('center');
            $font->valign('center');
            // $font->angle(45);
        });

        return $imgFile;
    }
}
