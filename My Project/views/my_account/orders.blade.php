@extends('layouts.default')


@section('content')
    <div class="row">
        <div class="span12">
            <ul class="breadcrumb">
                <li><a href="{{ route('home.index') }}">Home</a> <span class="divider">/</span></li>
                <li><a href="{{ route('my_account.orders') }}">My Orders</a> <span class="divider">/</span></li>
                 <li class="active">Orders</li>
            </ul>

            <h4>My Orders</h4>
            <hr class="soften"/>

            <div class="card-body">
                <table class="table table-hover table-responsive-block" id="tableWithSearch">
                    <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Payment Status</th>
                        <th>Order Status</th>
                        <th>Order Date</th>
                        <th></th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td class="v-align-middle semi-bold">
                                <p>{{ $order->id}}</p>
                            </td>
                            <td class="v-align-middle">

                                @if($order->payment_status == 'incomplete')
                                    <span class="label label-danger">{{ ucfirst(trans ($order->payment_status))}}</span>

                                @elseif($order->payment_status == 'paid')
                                    <span class="label label-success">{{ ucfirst(trans ($order->payment_status))}}</span>
                                @endif
                            </td>
                            <td class="v-align-middle">

                                @if($order->status == 'pending')
                                    <span class="label label-danger">{{ ucfirst(trans ($order->status))}}</span>
                                @elseif($order->status == 'shipped')
                                    <span class="label label-warning">{{ ucfirst(trans ($order->status))}}</span>
                                @elseif($order->status == 'delivered')
                                    <span class="label label-success">{{ ucfirst(trans ($order->status))}}</span>
                                @endif

                            </td>
                            <td class="v-align-middle semi-bold">
                                <p>{{ $order->created_at }}</p>
                            </td>
                            <td class="v-align-middle">
                                <a href="{{ route('my_account.order.show', ['id' => $order->id ]) }}" class="btn btn-xs btn-info"> View</a>
                            </td>
                        </tr>

                    @endforeach


                    </tbody>

                </table>
            </div>


        </div>
    </div>

@endsection