<html lang="en">
<head>
    <title>signup Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="products/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <style>
        div.stars {
            display: inline-block;
        }

        input.star { display: none; }

        label.star {
            float: left;
            padding: 10px;
            font-size: 10px;
            color: #444;
            transition: all .2s;
        }

        input.star:checked ~ label.star:before {
            content: '\f005';
            color: #e74c3c;
            transition: all .25s;
        }

        input.star-5:checked ~ label.star:before {
            color: #e74c3c;
            text-shadow: 0 0 5px #7f8c8d;
        }

        input.star-1:checked ~ label.star:before { color: #F62; }

        label.star:hover { transform: rotate(-15deg) scale(1.3); }

        label.star:before {
            content: '\f006';
            font-family: FontAwesome;
        }


        .horline > li:not(:last-child):after {
            content: " |";
        }
        .horline > li {
            font-weight: bold;
            color: #ff7e1a;

        }
    </style>
</head>
<body>
<div id="fixedTop">
    <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light bg-warning">
        <h2><a class="navbar-brand" href="#">Brand HUES</a></h2>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Orders</a>
                </li>
               <li>
                   <form action="product_search" method="GET" role="search">

                       <div class="input-group">
                           <input type="text" class="form-control" name="search" placeholder="Search Product">
                           <span class="input-group-btn">
                            <button type="submit" class="btn btn-default">
                                <span class="fa fa-search"></span>
                            </button>

                            </span>
                       </div>
                   </form>
               </li>

            </ul>



            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li>
                        <a href="#"><h5><i class="fa fa-shopping-cart" style="font-size:20px"></i>Cart(0)</h5></a>
                    </li>
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
</div>

<section id="summer">
        <ul id="autoWidth" class="cs-hidden">

                <div class="container">
                <div class="row">
            @foreach($card as $c)
                <div class="col-sm-4">

            <li class="item-e" style="width: 25%">
                <div class="box">
                    <div class="slide-img">
                        <img alt="image" src="storage/{{$c->media[0]->path ?? '#'}}">
                        <div class="overlay">
                            <a  class="buy-btn">Buy Now</a>
                        </div>
                    </div>
                    <!--detail-box--------->
                    <form class="form-horizontal productstars" action="{{route('productStar', $c->id)}}" id="addStar" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group required">
                            <div class="col-sm-12">
                                <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                                <label class="star star-5" for="star-5"></label>
                                <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                                <label class="star star-4" for="star-4"></label>
                                <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                                <label class="star star-3" for="star-3"></label>
                                <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                                <label class="star star-2" for="star-2"></label>
                                <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                                <label class="star star-1" for="star-1"></label>
                            </div>
                        </div>
                    </form>
                    <script>
                        $('#addStar').change('.star', function(e) {
                            $(this).submit();
                        });
                    </script>
                    <div class="detail-box">
                        <div class="type">
                            <a href="#">{{$c->product_name}}</a>
                            <span>New Arrival</span>
                        </div>
                        <!--price-------->
                        <a href="#" class="price">${{$c->price}}</a>
                    </div>


                        <h6 style="padding-left: 1vw"><a href="/add_to_cart/{{$c->id}}" class="cart"><i class="fa fa-shopping-cart" style="font-size:15px"></i>Add to cart</a></h6>

                        <h6 style="float: right; margin-right: 1vw; margin-bottom: inherit; "><a href="/add_to_wishList/{{$c->id}}" class="cart"><i class="fa fa-heart" style="font-size:20px; color: red;"></i></a></h6>


                </div>
            </li>
                </div>
            @endforeach
                </div>
                </div>

        </ul>

</section>
<!--script-link----------->
<script type="text/javascript" src="products/js/script.js"></script>

</body>
</html>
