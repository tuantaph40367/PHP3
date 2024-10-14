<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'image', 'category_id', 'views']; // Đừng quên thêm views vào đây

    // Định nghĩa quan hệ belongsTo với Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
