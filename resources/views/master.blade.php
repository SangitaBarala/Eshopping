@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <h1>User's Contact Form:</h1><br>
                        @if(\Illuminate\Support\Facades\Session::has('msg'))
                            <div class="alert alert-success">
                                <strong>Success!</strong> {{\Illuminate\Support\Facades\Session::get('msg')}}
                            </div>
                        @endif
                        <form action="/master" method="post">
                            {{csrf_field()}}
                            <input type="text"  class="form-control" placeholder="Enter your first name" name="first_name"><br>
                            <input type="text"  class="form-control" placeholder="Enter your last name" name="last_name"><br>
                            <input type="email"  class="form-control" placeholder="Enter email address" name="email"><br>
                            <input type="password"  class="form-control" placeholder="Enter password" name="password"><br>
                            <input type="text"  class="form-control" placeholder="Enter phone number" name="phone"><br>
                            <input type="text"  class="form-control" placeholder="Enter address" name="address"><br>
                            <input type="submit"  class="btn btn-primary" value="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
