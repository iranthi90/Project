@extends('layouts.default')


@section('homeslider')

<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		  <div class="item active">
		  <div class="container">
			<a href="#"><img style="width:100%" src="{{ asset('frontend/themes/images/carousel/1.png') }}" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>..</p>
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			  <a href="#"><img src="{{ asset('frontend/themes/images/carousel/2.png') }}" alt=""/></a>
				<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>

				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href="#"><img src="{{ asset('frontend/themes/images/carousel/3.png') }}" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>

				</div>
			
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="#"><img src="{{ asset('frontend/themes/images/carousel/4.png') }}" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>

				</div>
		   
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="#"><img src="{{ asset('frontend/themes/images/carousel/5.png') }}" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  	</div>
		  </div>
		  </div>

		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	  </div> 
</div>

@endsection

@section('content')

<div class="row">
	<!-- Sidebar ================================================== -->

	@include('includes.sidebar')

	<!-- Sidebar end=============================================== -->
		<div class="span9">		
			<div class="well well-small">
			<h4>Featured Products </h4>
			<div class="row-fluid">
				<ul class="thumbnails">
			  	@forelse($featured_products as $product)
			  		
			  		<li class="span3">
					  <div class="thumbnail">
					  <i class="tag"></i>
						<a href="#"><img src="{{ asset('uploads/products') }}/{{ $product->product_image }}" alt="{{ $product->name }}"></a>
						<div class="caption">
						  <h5>{{ $product->name }}</h5>
						  @if($product->total_qty)
						  	<h4><a class="btn" href="{{ route('shop.product', ['slug' => $product->slug]) }}">VIEW</a> <span class="pull-right">$. {{ $product->price }}</span></h4>
						  @else
						  	<label class="btn btn-danger">Out Of Stock</label>
						  @endif
						</div>
					  </div>
					</li>

			  	@empty
			  		<h3 class="align-center">No products found!</h3>

			  	@endforelse
				  
			  </ul>	
				<!-- <div id="featured" class="carousel slide">
				<div class="carousel-inner">
				  <div class="item active">
				  <ul class="thumbnails">
					<li class="span3">
					  <div class="thumbnail">
					  <i class="tag"></i>
						<a href="#"><img src="{{ asset('frontend/themes/images/products/b1.jpg') }}" alt=""></a>
						<div class="caption">
						  <h5>Virgin Coconut Oil</h5>
						  <h4><a class="btn" href="{{ route('shop.product', ['id' => 1]) }}">VIEW</a> <span class="pull-right">$15.00</span></h4>
						</div>
					  </div>
					</li>
					
				  </ul>
				  </div>
				   <div class="item">
				  <ul class="thumbnails">
					<li class="span3">
						<div class="thumbnail">
						<i class="tag"></i>
						<a href="#l"><img src="{{ asset('frontend/themes/images/products/b3.jpg') }}" alt=""></a>
						<div class="caption">
							<h5>Coconut </h5>
							<h4><a class="btn" href="{{ route('shop.product', ['id' => 1]) }}">VIEW</a> <span class="pull-right">$15.00</span></h4>
						</div>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail">
						<i class="tag"></i>
						<a href="#l"><img src="{{ asset('frontend/themes/images/products/b4.jpg') }}" alt=""></a>
						<div class="caption">
							<h5>Coconut </h5>
							<h4><a class="btn" href="{{ route('shop.product', ['id' => 1]) }}">VIEW</a> <span class="pull-right">$15.00</span></h4>
						</div>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail">
						<i class="tag"></i>
						<a href="#l"><img src="{{ asset('frontend/themes/images/products/b5.jpg') }}" alt=""></a>
						<div class="caption">
							<h5>Coconut </h5>
							<h4><a class="btn" href="{{ route('shop.product', ['id' => 1]) }}">VIEW</a> <span class="pull-right">$15.00</span></h4>
						</div>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail">
						<i class="tag"></i>
						<a href="#l"><img src="{{ asset('frontend/themes/images/products/b6.jpg') }}" alt=""></a>
						<div class="caption">
							<h5>Coconut </h5>
							<h4><a class="btn" href="{{ route('shop.product', ['id' => 1]) }}">VIEW</a> <span class="pull-right">$15.00</span></h4>
						</div>
						</div>
					</li>
				  </ul>
				  </div>
				   <div class="item">
				  <ul class="thumbnails">
					<li class="span3">
						<div class="thumbnail">
						<i class="tag"></i>
						<a href="#"><img src="{{ asset('frontend/themes/images/products/b1.jpg') }}" alt=""></a>
						<div class="caption">
							<h5>Coconut </h5>
							<h4><a class="btn" href="{{ route('shop.product', ['id' => 1]) }}">VIEW</a> <span class="pull-right">$15.00</span></h4>
						</div>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail">
						<i class="tag"></i>
						<a href="#l"><img src="{{ asset('frontend/themes/images/products/b2.jpg') }}" alt=""></a>
						<div class="caption">
							<h5>Coconut </h5>
							<h4><a class="btn" href="{{ route('shop.product', ['id' => 1]) }}">VIEW</a> <span class="pull-right">$15.00</span></h4>
						</div>
						</div>
					</li>
					<li class="span3">
					  <div class="thumbnail">
						<a href="{{ route('shop.product', ['id' => 1]) }}"><img src="{{ asset('frontend/themes/images/products/b4.jpg') }}" alt=""></a>
						<div class="caption">
						  <h5>Product name</h5>
						   <h4><a class="btn" href="{{ route('shop.product', ['id' => 1]) }}">VIEW</a> <span class="pull-right">$222.00</span></h4>
						</div>
					  </div>
					</li>
					<li class="span3">
						<div class="thumbnail">
						<i class="tag"></i>
						<a href="#l"><img src="{{ asset('frontend/themes/images/products/b3.jpg') }}" alt=""></a>
						<div class="caption">
							<h5>Coconut </h5>
							<h4><a class="btn" href="{{ route('shop.product', ['id' => 1]) }}">VIEW</a> <span class="pull-right">$15.00</span></h4>
						</div>
						</div>
					</li>
				  </ul>
				  </div>
				  </div>
				  <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
				  <a class="right carousel-control" href="#featured" data-slide="next">›</a>
				  </div> -->
			  </div>
		</div>
		<h4>Latest Products </h4>
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
			  		<h3 class="align-center">No products found!</h3>

			  	@endforelse
				  
			  </ul>	


			{{ $products->links() }}

		  	<br class="clr"/>



		</div>
		</div>

@endsection