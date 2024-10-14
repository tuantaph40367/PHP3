<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    // Định nghĩa quan hệ hasMany với Product
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
