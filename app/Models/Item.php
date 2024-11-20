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

    //Relation
    public function user()
    {
        return $this->belongsToMany(User::class, 'wishlists')->where('user_id', Auth::user()->id);
    }

    public function lini()
    {
        return $this->belongsTo(Divisi::class, 'divisi_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }

    public function diskon()
    {
        return $this->belongsTo(Diskon::class, 'diskon_id');
    }

    public function images()
    {
        return $this->hasMany(ItemImage::class, 'item_id');
    }

    //Scope
    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }
}
