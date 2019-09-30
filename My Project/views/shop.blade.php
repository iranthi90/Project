@extends('layouts.default')


@section('content')

<div class="row">
	<!-- Sidebar ================================================== -->

	@include('includes.sidebar')

	<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="{{ route('home.index')}}">Home</a> <span class="divider">/</span></li>
		<li class="active">Buy Products</li>
    </ul>

	<hr class="soft"/>


<br class="clr"/>

	<div class="tab-pane  active" id="blockView">
		<ul class="thumbnails">
			@forelse($products as $product)
			  		
		  		<li class="span3">
				  <div class="thumbnail">
					  <a href="{{ route('shop.product', ['slug' => $product->slug ]) }}"><img src="{{ asset('uploads/products/') }}/{{ $product->product_image }}" alt=""/></a>
					  <div class="caption">
						  <h5>{{ $product->name }}</h5>
						  <p>{{ str_limit(strip_tags($product->description), 150, ' ...') }}</p>

						  @if($product->total_qty)
						  	<h4>
						  		<a class="btn" href="{{ route('shop.product', ['slug' => $product->slug ]) }}"> <i class="icon-zoom-in"></i></a> 
						  		<a class="btn" href="{{ route('cart.quick.add', ['id' => $product->id ]) }}">Add to <i class="icon-shopping-cart"></i></a> 
						  		<button class="btn btn-primary">$. {{ $product->price }}</button>
						  	</h4>
						  @else
						  	<label class="btn btn-danger">Out Of Stock</label>
						  @endif
					  </div>
				  </div>
			  </li>

		  	@empty
		  		<h3>No products found!</h3>

		  	@endforelse
			
		  </ul>


	<hr class="soft"/>
	</div>
</div>
	{{ $products->links() }}
	
<br class="clr"/>
</div>

@endsection