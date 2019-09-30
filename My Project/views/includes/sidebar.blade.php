<div id="sidebar" class="span3">
			<div class="well well-small">
				<a id="myCart" href="{{ route('cart') }}">
				<img src="{{ asset('frontend/themes/images/ico-cart.png') }}" alt="cart">{{ Cart::content()->count() }} Items in your cart  <span class="badge badge-warning pull-right">${{ Cart::total() }}</span></a>
			</div>


			<br/>
			
			@if($featured_products)

			<h5>Featured Products</h5>

				@foreach($featured_products as $product)
					<div class="thumbnail">
						<img src="{{ asset('uploads/products/') }}/{{ $product->product_image }}" alt=""/>
						<div class="caption">
							<h5>{{ $product->name }}</h5>
							<h4 style="text-align:center">
								<a class="btn" href="{{ route('shop.product', ['slug' => $product->slug]) }}"> <i class="icon-zoom-in"></i></a>
								<a class="btn" href="{{ route('cart.quick.add', ['id' => $product->id ]) }}">Add to <i class="icon-shopping-cart"></i></a> 
								<button class="btn btn-primary">${{ $product->price }}</button>
							</h4>
						</div>
					</div><br/>
				@endforeach
			@endif
			<br/>
			{{--<div class="thumbnail">--}}
				{{--<img src="{{ asset('frontend/themes/images/payment_methods.png') }}" title="Payment Methods" alt="Payments Methods">--}}
				{{--<div class="caption">--}}
					{{--<h5>Payment Methods</h5>--}}
				{{--</div>--}}
			{{--</div>--}}
		</div>
