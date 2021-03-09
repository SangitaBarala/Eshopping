@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('WELCOME') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main">
    <h1 style="font-family: 'Courier New'; color:chocolate; padding-top: 20px;">Brand HUES</h1>
    <h2 style="font-family: SimSun; color: white; padding: 20px;">"Trusting you in BRAND is all that matters..."</h2>
    <h3 style="font-weight: bold; color: white; padding: 30px;">EXHALE STYLE</h3>
    <p style="color:white;">`b'coz its shop O'clock somewhere`</p>
    <a href="master.blade.php">Shop Now</a>
</div>
    <style>
        .main{
            background-image: url("https://images.squarespace-cdn.com/content/v1/5442b6cce4b0cf00d1a3bef2/1596055300339-E6K7N0S3AFRUDYCS0H74/ke17ZwdGBToddI8pDm48kKbYUC7ko4ep_M3O09c6DLZZw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZUJFbgE-7XRK3dMEBRBhUpyUjG47s4lQqa3kGWpoR_DitVobFN0LmU1WvG_uZkJwkPR2-Fb7zwugw-NXPqcoGjo/Vegan-Bags-Pinkstix");
            text-align: center;
            height: 520px;
            margin-top: 40px;
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
        }
        .main a{
            font-size: 20px;
            color: blue;
            border-bottom: 1px solid red;
            padding: 4px 12px 4px 12px;
            border-radius: 10px;
            color: red;
        }
        .main a:hover{
            color: blue;
            text-decoration: none;
        }
    </style>
@endsection
