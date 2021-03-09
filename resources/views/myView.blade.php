@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Users List') }} ({{count($list_of_users)}})</div>

                    <div class="card-body">
                        <ul>
                            @foreach($list_of_users as $users)
                                <li>{{$users->First_Name}} {{$users->Last_Name}} {{$users->Email}} {{$users->created_at->diffForHumans()}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
