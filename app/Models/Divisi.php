<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    protected $table = 'divisi';

    protected $guarded = [];

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
