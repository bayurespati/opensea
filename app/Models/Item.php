<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsToMany(User::class, 'wishlists')->where('user_id', Auth::user()->id);
    }
}
