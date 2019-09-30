@extends('admin.layout')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <!-- START card -->
            <div class="card card-transparent">
                <div class="card-header ">
                    <div class="card-title"><h2>Order Management</h2>
                    </div>

                    <div class="clearfix"></div>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-responsive-block" id="order-table">
                        <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer Name</th>
                            <th>Payment Status</th>
                            <th>Order Status</th>
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
                                    <p>{{ $order->user->name}}</p>
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
                                <td class="v-align-middle">
                                    <a href="{{ route('order.show', ['id' => $order->id ]) }}" class="btn btn-xs btn-info"> View</a>
                                </td>
                            </tr>

                        @endforeach


                        </tbody>

                    </table>
                </div>
            </div>
            <!-- END card -->
        </div>
    </div>







@endsection
