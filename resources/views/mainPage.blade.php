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
                <form action="/selectCategory" method="get">

                    <select name="category" class="form-control" style="width:250px; margin-top: 10px;">

                        <option value="1">--- Select Category ---</option>
                        @foreach ($categories as $key => $value)
                            <option value="{{ $key }}" id="category{{$key}}">{{ $value->category_name }}</option>
                @endforeach
                    </select>
                </form>
            </ul>
            <form action="product_search" method="GET" role="search">

                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Search Product"> <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">
                        <span class="fa fa-search"></span>
                    </button>

                    </span></div>
            </form>
                <a href="#"><h5><i class="fa fa-shopping-cart" style="font-size:20px"></i>Cart(0)</h5></a>

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
</div>

<section id="summer">
        <ul id="autoWidth" class="cs-hidden">

                <div class="container">
                <div class="row">
            @foreach($card as $c)
                <div class="col-sm-3">

            <li class="item-e" style="width: 25%">
                <div class="box">
                    <div class="slide-img">
                        <img alt="5" src="{{$c->media[0]->path ?? '#'}}">
                        <div class="overlay">
                            <a  class="buy-btn">Buy Now</a>
                        </div>
                    </div>
                    <!--detail-box--------->
                    <div class="detail-box2">
                        <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                        <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                        <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                        <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                        <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <a href="#">{{$c->product_name}}</a>
                            <span>New Arrival</span>
                        </div>
                        <!--price-------->
                        <a href="#" class="price">${{$c->price}}</a>
                    </div>
                    <div class="buy-price">
                        <h1><a href="/add_to_cart/{{$c->id}}" class="cart"><i class="fa fa-shopping-cart" style="font-size:36px"></i>Add to cart</a></h1>
                    </div>
                </div>
            </li>
                </div>
            @endforeach
                </div>
                </div>

        </ul>
            <ul id="autoWidth" class="cs-hidden">
        <!--5------------------------------------>
        <li class="item-e">
            <!--box-slider--------------->
            <div class="box">
                <!--img-box---------->
                <div class="slide-img">
                    <img alt="5" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSXcAqEm293FK2omhdwJuMNGQpUnUZuLjd4wdiDzoJY5asV0c_NmtdYEDyjHIocH55xwRatgg&usqp=CAc">
                    <!--overlayer---------->
                    <div class="overlay">
                        <!--buy-btn------>
                        <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                </div>
                <!--detail-box--------->
                <div class="detail-box2">
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                </div>
                <div class="detail-box">
                    <div class="type">
                        <a href="#">Pink short</a>
                        <span>New Arrival</span>
                    </div>
                    <!--price-------->
                    <a href="#" class="price">$65</a>
                </div>
                <div class="buy-price">
                    <h1><a href="#" class="cart"><i class="fa fa-shopping-cart" style="font-size:36px"></i>Add to cart</a></h1>
                </div>
            </div>
        </li>

        <!--6------------------------------------>
        <li class="item-f">
            <!--box-slider--------------->
            <div class="box">
                <!--img-box---------->
                <div class="slide-img">
                    <img alt="6" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYK8E-Sr82ZciBqHZitcUaBWvKhjI8hUqIgg&usqp=CAU">
                    <!--overlayer---------->
                    <div class="overlay">
                        <!--buy-btn------>
                        <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                </div>
                <!--detail-box--------->
                <div class="detail-box2">
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                </div>
                <div class="detail-box">
                    <div class="type">
                        <a href="#">Multicolor fit</a>
                        <span>New Arrival</span>
                    </div>
                    <!--price-------->
                    <a href="#" class="price">$40</a>
                </div>
                <div class="buy-price">
                    <h1><a href="#" class="cart"><i class="fa fa-shopping-cart" style="font-size:36px"></i>Add to cart</a></h1>
                </div>

            </div>
        </li>
        <!--7------------------------------------>
        <li class="item-g">
            <!--box-slider--------------->
            <div class="box">
                <!--img-box---------->
                <div class="slide-img">
                    <img alt="7" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4Ivk3c7c5YVB4fXJxaim-gi8peMJnmHXfeQ&usqp=CAU">
                    <!--overlayer---------->
                    <div class="overlay">
                        <!--buy-btn------>
                        <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                </div>
                <!--detail-box--------->
                <div class="detail-box2">
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                </div>
                <div class="detail-box">
                    <div class="type">
                        <a href="#">Black long floral</a>
                        <span>New Arrival</span>
                    </div>
                    <!--price-------->
                    <a href="#" class="price">$80</a>
                </div>
                <div class="buy-price">
                    <h1><a href="#" class="cart"><i class="fa fa-shopping-cart" style="font-size:36px"></i>Add to cart</a></h1>
                </div>

            </div>
        </li>
        <!--8------------------------------------>
        <li class="item-h">
            <!--box-slider--------------->
            <div class="box">
                <!--img-box---------->
                <div class="slide-img">
                    <img alt="8" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQN6uESiD6i9_bmoBgxG_UjkXMzDzZekMbbkiaE9Z_Z_2zNzimHUV-OiHoP5npDx3BBY4eZu8l&usqp=CAc">
                    <!--overlayer---------->
                    <div class="overlay">
                        <!--buy-btn------>
                        <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                </div>
                <!--detail-box--------->
                <div class="detail-box2">
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                </div>
                <div class="detail-box">
                    <div class="type">
                        <a href="#">Denim blue short</a>
                        <span>New Arrival</span>
                    </div>
                    <!--price-------->
                    <a href="#" class="price">$69</a>
                </div>
                <div class="buy-price">
                    <h1><a href="#" class="cart"><i class="fa fa-shopping-cart" style="font-size:36px"></i>Add to cart</a></h1>
                </div>

            </div>
        </li>

    </ul>
</section>
<section id="winter">

    <ul id="autoWidth" class="cs-hidden">

        <!--5------------------------------------>
        <li class="item-e">
            <!--box-slider--------------->
            <div class="box">
                <!--img-box---------->
                <div class="slide-img">
                    <img alt="5" src="products/images/jacket1.jpg">
                    <!--overlayer---------->
                    <div class="overlay">
                        <!--buy-btn------>
                        <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                </div>
                <!--detail-box--------->
                <div class="detail-box2">
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                </div>
                <div class="detail-box">
                    <div class="type">
                        <a href="#">Lightweight cozy jacket</a>
                        <span>New Arrival</span>
                    </div>
                    <!--price-------->
                    <a href="#" class="price">$165</a>
                </div>
                <div class="buy-price">
                    <h1><a href="#" class="cart"><i class="fa fa-shopping-cart" style="font-size:36px"></i>Add to cart</a></h1>
                </div>
            </div>
        </li>

        <!--6------------------------------------>
        <li class="item-f">
            <!--box-slider--------------->
            <div class="box">
                <!--img-box---------->
                <div class="slide-img">
                    <img alt="6" src="products/images/jacket2.jpg">
                    <!--overlayer---------->
                    <div class="overlay">
                        <!--buy-btn------>
                        <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                </div>
                <!--detail-box--------->
                <div class="detail-box2">
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                </div>
                <div class="detail-box">
                    <div class="type">
                        <a href="#">Extreme cold jacket</a>
                        <span>New Arrival</span>
                    </div>
                    <!--price-------->
                    <a href="#" class="price">$160</a>
                </div>
                <div class="buy-price">
                    <h1><a href="#" class="cart"><i class="fa fa-shopping-cart" style="font-size:36px"></i>Add to cart</a></h1>
                </div>

            </div>
        </li>
        <!--7------------------------------------>
        <li class="item-g">
            <!--box-slider--------------->
            <div class="box">
                <!--img-box---------->
                <div class="slide-img">
                    <img alt="7" src="products/images/jacket3.jpg">
                    <!--overlayer---------->
                    <div class="overlay">
                        <!--buy-btn------>
                        <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                </div>
                <!--detail-box--------->
                <div class="detail-box2">
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                </div>
                <div class="detail-box">
                    <div class="type">
                        <a href="#">Denim Jacket</a>
                        <span>New Arrival</span>
                    </div>
                    <!--price-------->
                    <a href="#" class="price">$110</a>
                </div>
                <div class="buy-price">
                    <h1><a href="#" class="cart"><i class="fa fa-shopping-cart" style="font-size:36px"></i>Add to cart</a></h1>
                </div>

            </div>
        </li>
        <!--8------------------------------------>
        <li class="item-h">
            <!--box-slider--------------->
            <div class="box">
                <!--img-box---------->
                <div class="slide-img">
                    <img alt="8" src="products/images/jacket4.jpg">
                    <!--overlayer---------->
                    <div class="overlay">
                        <!--buy-btn------>
                        <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                </div>
                <!--detail-box--------->
                <div class="detail-box2">
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                </div>
                <div class="detail-box">
                    <div class="type">
                        <a href="#">Insulated blue jacket</a>
                        <span>New Arrival</span>
                    </div>
                    <!--price-------->
                    <a href="#" class="price">$69</a>
                </div>
                <div class="buy-price">
                    <h1><a href="#" class="cart"><i class="fa fa-shopping-cart" style="font-size:36px"></i>Add to cart</a></h1>
                </div>

            </div>
        </li>

    </ul>
</section>
<section id="handbags">

    <ul id="autoWidth" class="cs-hidden">

        <!--5------------------------------------>
        <li class="item-e">
            <!--box-slider--------------->
            <div class="box">
                <!--img-box---------->
                <div class="slide-img">
                    <img alt="5" src="products/images/bag1.jpg">
                    <!--overlayer---------->
                    <div class="overlay">
                        <!--buy-btn------>
                        <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                </div>
                <!--detail-box--------->
                <div class="detail-box2">
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                </div>
                <div class="detail-box">
                    <div class="type">
                        <a href="#">Coach endevour autumn bag</a>
                        <span>New Arrival</span>
                    </div>
                    <!--price-------->
                    <a href="#" class="price">$165</a>
                </div>
                <div class="buy-price">
                    <h1><a href="#" class="cart"><i class="fa fa-shopping-cart" style="font-size:36px"></i>Add to cart</a></h1>
                </div>
            </div>
        </li>

        <!--6------------------------------------>
        <li class="item-f">
            <!--box-slider--------------->
            <div class="box">
                <!--img-box---------->
                <div class="slide-img">
                    <img alt="6" src="products/images/bag2.jpg">
                    <!--overlayer---------->
                    <div class="overlay">
                        <!--buy-btn------>
                        <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                </div>
                <!--detail-box--------->
                <div class="detail-box2">
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                </div>
                <div class="detail-box">
                    <div class="type">
                        <a href="#">Coach winter bag</a>
                        <span>New Arrival</span>
                    </div>
                    <!--price-------->
                    <a href="#" class="price">$280</a>
                </div>
                <div class="buy-price">
                    <h1><a href="#" class="cart"><i class="fa fa-shopping-cart" style="font-size:36px"></i>Add to cart</a></h1>
                </div>

            </div>
        </li>
        <!--7------------------------------------>
        <li class="item-g">
            <!--box-slider--------------->
            <div class="box">
                <!--img-box---------->
                <div class="slide-img">
                    <img alt="7" src="products/images/bag3.jpg">
                    <!--overlayer---------->
                    <div class="overlay">
                        <!--buy-btn------>
                        <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                </div>
                <!--detail-box--------->
                <div class="detail-box2">
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                </div>
                <div class="detail-box">
                    <div class="type">
                        <a href="#">corean bag</a>
                        <span>New Arrival</span>
                    </div>
                    <!--price-------->
                    <a href="#" class="price">$150</a>
                </div>
                <div class="buy-price">
                    <h1><a href="#" class="cart"><i class="fa fa-shopping-cart" style="font-size:36px"></i>Add to cart</a></h1>
                </div>

            </div>
        </li>
        <!--8------------------------------------>
        <li class="item-h">
            <!--box-slider--------------->
            <div class="box">
                <!--img-box---------->
                <div class="slide-img">
                    <img alt="8" src="products/images/bag4.jpg">
                    <!--overlayer---------->
                    <div class="overlay">
                        <!--buy-btn------>
                        <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                </div>
                <!--detail-box--------->
                <div class="detail-box2">
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                </div>
                <div class="detail-box">
                    <div class="type">
                        <a href="#">Coach women's bag</a>
                        <span>New Arrival</span>
                    </div>
                    <!--price-------->
                    <a href="#" class="price">$220</a>
                </div>
                <div class="buy-price">
                    <h1><a href="#" class="cart"><i class="fa fa-shopping-cart" style="font-size:36px"></i>Add to cart</a></h1>
                </div>

            </div>
        </li>

    </ul>
</section>
<section id="boots">
    <ul id="autoWidth" class="cs-hidden">

        <!--5------------------------------------>
        <li class="item-e">
            <!--box-slider--------------->
            <div class="box">
                <!--img-box---------->
                <div class="slide-img">
                    <img alt="5" src="products/images/boot1.jpg">
                    <!--overlayer---------->
                    <div class="overlay">
                        <!--buy-btn------>
                        <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                </div>
                <!--detail-box--------->
                <div class="detail-box2">
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                </div>
                <div class="detail-box">
                    <div class="type">
                        <a href="#">Snow long boot</a>
                        <span>New Arrival</span>
                    </div>
                    <!--price-------->
                    <a href="#" class="price">$170</a>
                </div>
                <div class="buy-price">
                    <h1><a href="#" class="cart"><i class="fa fa-shopping-cart" style="font-size:36px"></i>Add to cart</a></h1>
                </div>
            </div>
        </li>

        <!--6------------------------------------>
        <li class="item-f">
            <!--box-slider--------------->
            <div class="box">
                <!--img-box---------->
                <div class="slide-img">
                    <img alt="6" src="products/images/boot2.jpg">
                    <!--overlayer---------->
                    <div class="overlay">
                        <!--buy-btn------>
                        <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                </div>
                <!--detail-box--------->
                <div class="detail-box2">
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                </div>
                <div class="detail-box">
                    <div class="type">
                        <a href="#">Off-white snow shoes</a>
                        <span>New Arrival</span>
                    </div>
                    <!--price-------->
                    <a href="#" class="price">$280</a>
                </div>
                <div class="buy-price">
                    <h1><a href="#" class="cart"><i class="fa fa-shopping-cart" style="font-size:36px"></i>Add to cart</a></h1>
                </div>

            </div>
        </li>
        <!--7------------------------------------>
        <li class="item-g">
            <!--box-slider--------------->
            <div class="box">
                <!--img-box---------->
                <div class="slide-img">
                    <img alt="7" src="data:image/jpeg;base64,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">
                    <!--overlayer---------->
                    <div class="overlay">
                        <!--buy-btn------>
                        <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                </div>
                <!--detail-box--------->
                <div class="detail-box2">
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                </div>
                <div class="detail-box">
                    <div class="type">
                        <a href="#">Snow shoes varieties</a>
                        <span>New Arrival</span>
                    </div>
                    <!--price-------->
                    <a href="#" class="price">Upto $250</a>
                </div>
                <div class="buy-price">
                    <h1><a href="#" class="cart"><i class="fa fa-shopping-cart" style="font-size:36px"></i>Add to cart</a></h1>
                </div>
            </div>
        </li>
        <!--8------------------------------------>
        <li class="item-h">
            <!--box-slider--------------->
            <div class="box">
                <!--img-box---------->
                <div class="slide-img">
                    <img alt="8" src="products/images/boot4.jpg">
                    <!--overlayer---------->
                    <div class="overlay">
                        <!--buy-btn------>
                        <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                </div>
                <!--detail-box--------->
                <div class="detail-box2">
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                    <i class="fa fa-star-o" style="font-size:28px;color:yellow"></i>
                </div>
                <div class="detail-box">
                    <div class="type">
                        <a href="#">Snow Leather boot</a>
                        <span>New Arrival</span>
                    </div>
                    <!--price-------->
                    <a href="#" class="price">$380</a>
                </div>
                <div class="buy-price">
                    <h1><a href="#" class="cart"><i class="fa fa-shopping-cart" style="font-size:36px"></i>Add to cart</a></h1>
                </div>

            </div>
        </li>

    </ul>
</section>
<!--script-link----------->
<script type="text/javascript" src="products/js/script.js"></script>

</body>
</html>
