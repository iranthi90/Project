@extends('layouts.default')


@section('content')

		<h3>Order Summary</h3>

		<div id="order_review" class="checkout">
			<table class="checkout-review-order-table">
				<thead>
				<tr>
					<th class="product-name">Product</th>
					<th class="product-total">Total</th>
				</tr>
				</thead>
				<tbody>
				@foreach(Cart::content() as $product)
					<tr class="cart_item">
						<td class="product-name">
							{{ $product->name }} <strong class="product-quantity">× {{ $product->qty }}</strong>
						</td>
						<td class="product-total">
							<span class="amount"><span class="currencySymbol">$</span>{{ $product->total }}</span>
						</td>
					</tr>
				@endforeach

				</tbody>
				<tfoot>
				<tr class="cart-subtotal">
					<th>Subtotal</th>
					<td><span class="amount"><span class="currencySymbol">$</span>{{ Cart::total() }}</span></td>
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

						<strong><span class="amount"><span class="currencySymbol">$</span> <span class="total-amount"></span> </span></strong>
					</td>
				</tr>
				</tfoot>
			</table>

			

		</div>


		@if (Auth::user())
			
			<form method="post" action="https://sandbox.payhere.lk/pay/checkout">
				<input type="hidden" name="merchant_id" value="1212585">    <!-- Replace your Merchant ID -->
				<input type="hidden" name="return_url" value="{{ request()->root() }}/return">
				<input type="hidden" name="cancel_url" value="{{ request()->root() }}/cancel">
				<input type="hidden" name="notify_url" value="{{ request()->root() }}/notify.php">

				<input type="hidden" name="order_id" value="{{$order_id }}">
				<input type="hidden" name="items" value='CDA Products'><br>
				<input type="hidden" name="currency" value="USD">
				<input type="hidden" name="amount" value="" class="total-amount-val">
				
				<h3>Customer Details</h3>
				<input type="text" readonly="" name="first_name" placeholder="First name" value="{{ Auth::user()->name }}">
				<input type="text" name="last_name" placeholder="Last name"><br>
				<input type="text" name="email" readonly="" placeholder="E mail" value="{{ Auth::user()->email }}">
				<input type="text" name="phone"  placeholder="Phone Number" required><br>
				<input type="text" name="address" placeholder="Address Line 1" required>
				<input type="text" name="city" placeholder="Address Line 2" required>
				<input type="hidden" name="country" placeholder="Country" required><br><br>
				<input type="submit" class="btn btn-large pull-left " value="Make Payment via PayHere" >



			</form>


		@else
			<table class="table table-bordered">
				<tr><th> RETURNING CUSTOMER?  </th></tr>
				 <tr> 
				 <td>
					<form id="form-login" class="p-t-15" role="form"  method="POST" action="{{ route('login') }}">
						{{ csrf_field() }}

						<div class="control-group {{ $errors->has('email') ? ' has-error' : '' }}">
						  <div class="controls">
							<input type="email" name="email" placeholder="User Name"  value="{{ old('email') }}" class="form-control"  required autofocus>

							 @if ($errors->has('email'))
					            <span class="help-block">
					                <strong>{{ $errors->first('email') }}</strong>
					            </span>
					        @endif
						  </div>
						</div>
						<div class="control-group {{ $errors->has('password') ? ' has-error' : '' }}">
						  <div class="controls">
							<input type="password" class="form-control" name="password" placeholder="Password" required>

						        @if ($errors->has('password'))
						            <span class="help-block">
						                <strong>{{ $errors->first('password') }}</strong>
						            </span>
						        @endif
						  </div>
						</div>
						<div class="control-group">
						  <div class="controls">
							<button type="submit" class="btn">Log in</button>
						  </div>
						</div>
						<div class="control-group">
							<div class="controls">
							  <a href="{{ route('register') }}" class="text-info small">Register</a> | <a href="{{ route('password.request') }}" class="text-info small">Forgot Your Password?</a>
							</div>
						</div>
					</form>
				  </td>
				  </tr>
			</table>

		@endif




@endsection


@section('scripts')

	<script type="text/javascript">
        var total = {{ Cart::total() + $settings->flat_ship + $settings->tax }};
        $('.total-amount').html(total.toFixed(2));
        $('.total-amount-val').val(total.toFixed(2));
	</script>
@endsection

