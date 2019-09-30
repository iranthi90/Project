@extends('layouts.default')


@section('content')


            @if($status_code == 'success')
                <label class="label label-success">Payment is successful.</label>

            @else
                <label class="label label-danger">Payment is unsuccessful.</label>
            @endif




@endsection
