<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Tổng số sản phẩm
        $totalProducts = Product::count();
        
        // Tổng số sản phẩm theo từng danh mục
        $categories = Category::withCount('products')->get();

        // Tổng lượt xem (giả sử bạn có một trường `views` trong model Product)
        $totalViews = Product::sum('views'); // Thay `views` bằng trường thực tế

        return view('admin.dashboard', compact('totalProducts', 'categories', 'totalViews'));
    }
}

