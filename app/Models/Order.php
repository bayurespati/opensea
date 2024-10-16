<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $guarded = [];

    // public function items()
    // {
    //     return $this->belongsToMany(Item::class, 'order_item')->withPivot('qty');
    // }

    public function order_items()
    {
        return $this->hasMany(OrderItems::class);
    }

    public function sph()
    {
        return $this->hasMany(Sph::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
