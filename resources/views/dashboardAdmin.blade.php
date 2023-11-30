<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .dashboard {
      display: flex;
      justify-content: space-around;
      padding: 20px;
    }

    .box {
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin: 10px;
      border-radius: 8px;
      flex: 1;
      text-align: center;
    }

    .box p {
        margin-top: 10px;
    }

    .box i {
        font-size: 24px; 
        margin-bottom: 10px;
    }

    .box a {
        display: inline-block;
        padding: 8px 16px;
        background-color: #4CAF50;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s;
    }

    .box a:hover {
        background-color: #45a049;
    }

    h2 {
      color: #333;
    }
  </style>
</head>
<body>
    <x-app-layout>
        {{-- <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('DashboardAdmin') }}
            </h2>
        </x-slot> --}}
        <div class="dashboard">
            <div class="max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
                <h1 class="text-3xl font-extrabold sm:text-5xl text-green-600">
                    Selamat Datang di Dashboard Admin!
                </h1>
                <p class="sm:text-xl/relaxed text-black">
                    Disini, Anda bisa mengelola website dengan mudah dan nyaman.
                  </p>
            </div>
            <br>
        
            <div class="box">
                <h2>Products</h2>
                <i class="fas fa-shopping-bag"></i>
                <p><a href="{{ route('dashboard.product.index') }}">Show</a></p>
            </div>
            
            <div class="box">
                <h2>Transaction</h2>
                <i class="fas fa-money-check-alt"></i>
                <p><a href="{{ route('dashboard.transaction.index') }}">Show</a></p>
            </div>
            
            <div class="box">
                <h2>User</h2>
                <i class="fas fa-user"></i>
                <p><a href="{{ route('dashboard.user.index') }}">Show</a></p>
            </div>
        </div>          
</x-app-layout>
</body>
</html>
