@extends('layouts.admin')

@section('content')
    <div class="row mb-4">
        <!-- Card Welcome -->
        <div class="col-md-3">
            <div class="card bg-light shadow-sm mb-4">
                <div class="card-body">
                    <h3>Welcome to Admin Dashboard</h3>
                    <p>This is a simple admin panel without using any template.</p>
                </div>
            </div>
        </div>

        <!-- Card New Orders -->
        <div class="col-md-3">
            <div class="card bg-primary text-white shadow-sm mb-4">
                <div class="card-body">
                    <h3>Tổng số sản phẩm</h3>
                    <p>{{ $totalProducts }}</p>
                </div>
            </div>
        </div>

        <!-- Card Users -->
        <div class="col-md-3">
            <div class="card bg-success text-white shadow-sm mb-4">
                <div class="card-body">
                    <h3>Tổng lượt xem</h3>
                    <p>{{ $totalViews }}</p>
                </div>
            </div>
        </div>

        <!-- Card Categories -->
        <div class="col-md-3">
            <div class="card bg-warning text-dark shadow-sm mb-4">
                <div class="card-body">
                    <h3>Số sản phẩm theo danh mục</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Tên danh mục</th>
                                <th>Số sản phẩm</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->products_count }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('categories.index') }}" class="btn btn-outline-dark mt-2">View Categories</a>
                </div>
            </div>
        </div>
    </div>
@endsection
