@extends('layouts.default')


@section('content')
    <div class="row">
        <div class="span12">
            <ul class="breadcrumb">
                <li><a href="{{ route('home.index') }}">Home</a> <span class="divider">/</span></li>
                <li class="active">My Account</li>
            </ul>

            <h4>My Account</h4>
            <hr class="soften"/>

            <a href="{{ route('my_account.orders') }}"><h5>Orders</h5></a>

        </div>
    </div>

@endsection