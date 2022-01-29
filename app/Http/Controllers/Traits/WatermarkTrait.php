<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

trait WatermarkTrait{
    public function insertWatermark($image, $text = "direct.co.ke", $position = 'bottom-right'){
        $imgFile = Image::make($image->getRealPath());
        $imgFile->text($text, 120, 100, function($font) {
            $font->size(24);
            $font->color('#ff0000');
            $font->align('center');
            $font->valign('center');
            $font->angle(90);
        });

        return $imgFile;
    }
}
