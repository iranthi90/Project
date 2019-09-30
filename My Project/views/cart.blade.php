@extends('layouts.default')


@section('content')
<div class="row">
	<div class="span12">
    <ul class="breadcrumb">
		<li><a href="{{ route('home.index') }}">Home</a> <span class="divider">/</span></li>
		<li><a href="{{ route('shop') }}">Buy Products</a> <span class="divider">/</span></li>
		<li class="active">Cart</li>
    </ul>
	<h3>  SHOPPING CART [ <small>{{ Cart::content()->count() }} Item(s) </small>]<a href="{{ route('shop') }}" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>
	<hr class="soft"/>

	@if(Cart::content()->count() >0 )	
	
		<table class="table table-bordered">
          <thead>
            <tr>
              <th>Product</th>
              <th>Description</th>
              <th>Quantity/Update</th>
			  <th>Price</th>
              <th>Total</th>
			</tr>
          </thead>
          <tbody>
          	@foreach(Cart::content() as $product)
                <tr>
                  <td> <img width="60" src="{{ asset('uploads/products/') }}/{{ $product->model->product_image }}" alt=""/></td>
                  <td>{{ $product->name }}</td>
				  <td>
					<div class="input-append">
						<input class="span1" style="max-width:34px" placeholder="1" value="{{ $product->qty }}" id="appendedInputButtons" size="16" type="text">
						<a href="{{ route('cart.decr', ['id' => $product->rowId, 'qty' => $product->qty ]) }}" class="btn" type="button"><i class="icon-minus"></i></a>
						<a href="{{ route('cart.incr', ['id' => $product->rowId, 'qty' => $product->qty ]) }}" class="btn" type="button"><i class="icon-plus"></i></a>
						<a href="{{ route('cart.delete', ['id' => $product->rowId ]) }}" class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></a>	
					</div>
				  </td>
                  <td>${{ $product->price }}</td>
                  <td>${{ $product->total }}</td>
                </tr>

            @endforeach

           <!--  <tr>
              <td colspan="4" style="text-align:right">Total Price:	</td>
              <td> ${{ Cart::total() }}</td>
            </tr> -->
			 <!-- <tr>
              <td colspan="4" style="text-align:right">Total Discount:	</td>
              <td> $10.00</td>
            </tr> -->

			 <tr>
              <td colspan="4" style="text-align:right"><strong>TOTAL</strong></td>
              <td class="label label-important" style="display:block"> <strong> ${{ Cart::total() }} </strong></td>
            </tr>
			</tbody>
        </table>
		
		

			
			<!-- <table class="table table-bordered">
			 <tr><th>ESTIMATE YOUR SHIPPING </th></tr>
			 <tr> 
			 <td>
				<form class="form-horizontal">
				  <div class="control-group">
					<label class="control-label" for="inputCountry">Country </label>
					<div class="controls">
					  <input type="text" id="inputCountry" placeholder="Country">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="inputPost">Post Code/ Zipcode </label>
					<div class="controls">
					  <input type="text" id="inputPost" placeholder="Postcode">
					</div>
				  </div>
				  <div class="control-group">
					<div class="controls">
					  <button type="submit" class="btn">ESTIMATE </button>
					</div>
				  </div>
				</form>				  
			  </td>
			  </tr>
            </table>		 -->
		<a href="{{ route('shop') }}" class="btn btn-large"><i class="icon-arrow-left"></i> Continue Shopping </a>
		<a href="{{ route('shop.checkout') }}" class="btn btn-large pull-right">Check Out <i class="icon-arrow-right"></i></a>

	@else

		<h2 class="align-center">Cart is Empty.</h2>

	@endif
	
</div>
</div>
@endsection