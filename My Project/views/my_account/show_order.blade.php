@extends('layouts.default')


@section('content')
    <div class="row">
        <div class="span12">
            <ul class="breadcrumb">
                {{--<li><a href="{{ route('my_account') }}">My Account</a> <span class="divider">/</span></li>--}}
                <li><a href="{{ route('my_account.orders') }}">My Orders</a> <span class="divider">/</span></li>
                <li class="active">Order Summary</li>
            </ul>

            <h4>Order Summary</h4>



            <div id="order_review" class="checkout">
                <table class="checkout-review-order-table">
                    <thead>
                    <tr>
                        <th class="product-name">Product</th>
                        <th class="product-total">Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($order as $product)

                        <tr class="cart_item">
                             <td class="product-name">
                            <img width="60" align= "left" src="{{ asset('uploads/products/') }}/{{ $product->product_image }}" alt=""/>
                                {{ $product->name }} <strong class="product-quantity">× {{ $product->qty }}</strong>
                            </td>
                            <td class="product-total">
                                <span class="amount"><span class="currencySymbol">$</span>{{ $product->price * $product->qty }}</span>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                    <tfoot>
                    <tr class="cart-subtotal">
                        <th>Subtotal</th>
                        <td><span class="amount"><span class="currencySymbol">${{ $subtotal }}</span></span></td>
                    </tr>
                    <tr class="shipping">
                        <th>Shipping (Flat rate) </th>
                        <td data-title="Shipping">
                            <span class="amount"><span class="currencySymbol">$</span>{{$settings->flat_ship}}</span>
                        </td>
                    </tr>
                    <tr class="tax-rate tax-rate-tax-1">
                        <th>Tax</th>
                        <td>
                            <span class="amount"><span class="currencySymbol">$</span>{{$settings->tax}}</span>
                        </td>
                    </tr>
                    <tr class="order-total">
                        <th>Total</th>
                        <td>
                            {{ $subtotal + $settings->flat_ship + $settings->tax}}
                        </td>
                    </tr>
                    </tfoot>
                </table>

                <h4>Order Details</h4>

                <table class="checkout-review-order-table">
                    <thead>
                    <tr>
                        <th class="product-name">Detail</th>
                        <th class="product-total">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="cart_item">
                        <td class="product-name">
                            Payment Status
                        </td>
                        <td class="product-total">

                            @if($order_details->payment_status == 'incomplete')
                                <span class="label label-danger">{{ ucfirst(trans ($order_details->payment_status))}}</span>

                            @elseif($order_details->payment_status == 'paid')
                                <span class="label label-success">{{ ucfirst(trans ($order_details->payment_status))}}</span>
                            @endif
                        </td>
                    </tr>

                    <tr class="cart_item">
                        <td class="product-name">
                            Order Status
                        </td>
                        <td class="product-total">

                            @if($order_details->status == 'pending')
                                <span class="label label-danger">{{ ucfirst(trans ($order_details->status))}}</span>
                            @elseif($order_details->status == 'shipped')
                                <span class="label label-warning">{{ ucfirst(trans ($order_details->status))}}</span>
                            @elseif($order_details->status == 'delivered')
                                <span class="label label-success">{{ ucfirst(trans ($order_details->status))}}</span>
                            @endif


                        </td>

                    </tr>

                    </tbody>

                </table>



            </div>


        </div>
    </div>

@endsection