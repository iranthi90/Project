@extends('admin.layout')
@section('content')

    <h2>Order Summary</h2>

    <div id="order_review" class="checkout">
        <table class="checkout-review-order-table">
            <thead>
            <tr>
            	<th></th>
                <th class="product-name" style="text-align: center;">Product</th>
                <th class="product-total" style="text-align: center;">Total</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order as $product)
                <tr class="cart_item">
                	<td>
                		<img width="60" align= "left" src="{{ asset('uploads/products/') }}/{{ $product->product_image }}" alt=""/>
                	</td>
                    <td class="product-name">
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
            	<th></th>
                <th>Subtotal</th>
                <td><span class="amount"><span class="currencySymbol">${{ $subtotal }}</span></span></td>
            </tr>
            <tr class="shipping">
            	<th></th>
                <th>Shipping (Flat rate) </th>
                <td data-title="Shipping">
                    <span class="amount"><span class="currencySymbol">$</span>{{$settings->flat_ship}}</span>
                </td>
            </tr>
            <tr class="tax-rate tax-rate-tax-1">
            	<th></th>
                <th>Tax</th>
                <td>
                    <span class="amount"><span class="currencySymbol">$</span>{{$settings->tax}}</span>
                </td>
            </tr>
            <tr class="order-total">
            	<th></th>
                <th>Total</th>
                <td>
                    ${{ $subtotal + $settings->flat_ship + $settings->tax }}
                </td>
            </tr>
            </tfoot>
        </table>

        <h3>Order Details</h3>

        <table class="checkout-review-order-table">
            <thead>
            <tr>
                <th class="product-name" style="text-align: center;">Detail</th>
                <th class="product-total" style="text-align: center;">Status</th>
                <th class="product-name" style="text-align: center;">Action</th>
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
                <td></td>
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
                <td>
                    <form role="form" action="{{ route('order.update', ['id' => $order_details->id ]) }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Select Status</label>
                        <select name="status" class="full-width" data-init-plugin="select2">
                            <option value="">Select</option>
                            <option value="pending" @if($order_details->status =='pending') selected=selected @endif>Pending</option>
                            <option value="shipped" @if($order_details->status =='shipped') selected=selected @endif>Shipped</option>
                            <option value="delivered" @if($order_details->status =='delivered') selected=selected @endif>Delivered</option>

                        </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Update Status</button>
                        </div>
                    </form>

                </td>
            </tr>

            </tbody>

        </table>



    </div>



@endsection
