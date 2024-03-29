<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Inventory extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;

    public $table = 'inventories';

    protected $appends = [
        'pictures',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'showroom_id',
        'brand_name',
        'slug',
        'make',
        'model',
        'manufacture_year',
        'registration_year', //
        'transmission', //
        // 'condition', //
        'milage',
        'engine_type',
        'body_type',
        'interior_color',
        'exterior_color',
        'no_of_doors',
        'price',
        'engine_size', //
        'fuel',
        'description', //
        'is_active', //
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function getPicturesAttribute()
    {
        $files = $this->getMedia('pictures');
        $files->each(function ($item) {
            $item->url = $item->getUrl();
            $item->thumbnail = $item->getUrl('thumb');
            $item->preview = $item->getUrl('preview');
        });

        return $files;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function showroom()
    {
        return $this->belongsTo(Showroom::class);
    }

    public function vehicleFeatures()
    {
        return $this->belongsToMany(VehicleFeatures::class);
    }
}
