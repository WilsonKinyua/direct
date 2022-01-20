<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Database\Eloquent\SoftDeletes;

class Showroom extends Model
{
    use InteractsWithMedia;
    use HasFactory, SoftDeletes;

    public $table = 'showrooms';

    protected $appends = [
        'logo',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'location',
        'map_link',
        'phone_number',
        'email',
        'web_url',
        'admin_name',
        'admin_email',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function getLogoAttribute()
    {
        $files = $this->getMedia('logo');
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
}
