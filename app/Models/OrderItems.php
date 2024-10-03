<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    use HasFactory;

    protected $table = 'order_item';

    protected $guarded = [];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function brand()
    {
        return $this->hasOneThrough(Brand::class, Item::class, 'id', 'id', 'item_id', 'brand_id');
    }
}
