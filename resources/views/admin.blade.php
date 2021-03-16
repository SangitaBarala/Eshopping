<!DOCTYPE html>
<html lang="en">
<head>
    <title>Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">

            <h1 style="color: chocolate">Brand HUES!</h1>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a style="color: chocolate; font-size: 18px" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a style="color: chocolate; font-size: 18px" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <h2>Product</h2>
    <p>Select the category of product</p>
    <div class="dropdown">
        <button type="button" class="btn btn-info  dropdown-toggle" data-toggle="dropdown">
            Dropdown button
        </button>

        <div class="dropdown-menu">
            <a class="dropdown-item" href="#summer">Summer collection</a>
            <a class="dropdown-item" href="#winter">Winter collection</a>
            <a class="dropdown-item" href="#handbags">Handbags</a>
            <a class="dropdown-item" href="#boots">Boots </a>
        </div>
    </div>
    <form action="/upload"  method="get">
        <input type="text" name="product_name" placeholder="name">
        <input type="text" name="description" placeholder="description">
        <input type="number" name="in_stock" placeholder="quantity available">
        <input type="number" name="price" placeholder="$">
        <!--<input type="file" id="image" name="image">-->
       <button type="submit" class="btn btn-primary">Add</button>
   </form>

   <table class="table thead-dark table-striped table-hover">
       <thead>
       <tr>
           <th>Name</th>
           <th>Description</th>
           <th>Total in Stock</th>
           <th>Price</th>
           <th>Images</th>
           <th></th>
       </tr>
       </thead>
       <tbody>
       <ul style="list-style-type: none">
           <li>
       <tr>
           <td></td>
       </tr>
           </li>
       </ul>

       </tbody>
   </table>
</div>

</body>
</html>
