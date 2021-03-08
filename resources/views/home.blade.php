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
    <h1 style="font-family: 'Courier New'; color:chocolate;">Shopping Hues</h1>
    <h2 style="font-family: SimSun; color: black; padding: 20px;">"Fashion is an instant language that speaks for you..."</h2>
    <h3>For </h3>
    <a href="">Shop Now</a>
</div>
    <style>
        .main{
            background-image: url("https://i.pinimg.com/originals/46/bf/a6/46bfa67b6767468cbd7534443ed73bec.jpg");
            text-align: center;
            height: 500px;
            margin-top: 40px;
        }
        .main a{
            font-size: 18px;
            color: blue;
            border-bottom: 1px solid chocolate;
            padding: 4px 12px 4px 12px;
            border-radius: 10px;
            color: chocolate;
        }
        .main a:hover{
            color: blue;
            text-decoration: none;
        }
    </style>
@endsection
