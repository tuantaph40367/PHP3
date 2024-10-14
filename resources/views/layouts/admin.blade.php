<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .sidebar {
            width: 200px;
            height: 100vh;
            background: #343a40;
            color: #fff;
            position: fixed;
            padding: 20px;
            transition: width 0.3s;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            display: block;
            border-radius: 4px;
            transition: background 0.3s;
        }

        .sidebar ul li a:hover {
            background: #495057;
        }

        .content {
            margin-left: 220px;
            padding: 20px;
        }

        .header {
            background: #007bff;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        .card {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .card h3 {
            margin: 0 0 10px;
        }

        .card p {
            margin: 0;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .col {
            flex: 1;
            min-width: 250px;
            /* Đảm bảo độ rộng tối thiểu */
        }

        <style>body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            margin-top: 20px;
        }

        h1 {
            color: #333;
        }

        .table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #fff;
        }

        .table th,
        .table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .btn {
            margin-right: 5px;
        }

        .alert {
            margin-top: 10px;
        }
    </style>

    </style>
</head>

<body>

    <div class="sidebar">
        <h2>Admin</h2>
        <ul>
            <li><a href="{{ url('/admin') }}">Dashboard</a></li>
            <li><a href="{{ route('categories.index') }}">Categories</a></li>
            <li><a href="{{ route('products.index') }}">Products</a></li>
            <li><a href="{{ route('users.index') }}">Users</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <li>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
        </li>
        </ul>
    </div>

    <div class="content">
        <div class="header">
            <h1>Dashboard</h1>
        </div>
        @yield('content')
    </div>

</body>

</html>
