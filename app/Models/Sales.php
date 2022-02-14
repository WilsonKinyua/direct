<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Sales extends Model
{
    use HasFactory;

    public $table = 'sales';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'ref_id',
        'inventory_id',
        'showroom_id',
        'price',
        'customer_name',
        'customer_phone_number',
        'customer_email',
        'customer_address',
        'payment_method',
        'payment_status',
        'note',
        'sold_by_id',
        'created_at',
        'updated_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }


    public function inventory()
    {
        return $this->belongsTo(Inventory::class, 'inventory_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'sold_by_id');
    }

    public function showroom()
    {
        return $this->belongsTo(Showroom::class, 'showroom_id');
    }
}
