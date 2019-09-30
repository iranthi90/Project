@extends('layouts.default')

@section('fbshare')
	<meta property="og:url"           content="{{ url()->current() }}" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="{{ $product->name}}" />
	<meta property="og:description"   content="{{ str_limit($product->description, 150, ' ...') }}" />
	<meta property="og:image"         content="{{ asset('uploads/products/') }}/{{ $product->product_image }}" />
@endsection

@section('content')

<div class="row">
	<div class="span12">
	    <ul class="breadcrumb">
		    <li><a href="{{ route('home.index') }}">Home</a> <span class="divider">/</span></li>
		    <li><a href="{{ route('shop') }}">Buy Products</a> <span class="divider">/</span></li>
		    <li class="active">Product Details</li>
	    </ul>	
	<div class="row">	  
		<div id="gallery" class="span4">
	        <a href="{{ asset('uploads/products/') }}/{{ $product->product_image }}" title="{{ $product->name}}">

				<img src="{{ asset('uploads/products/') }}/{{ $product->product_image }}" style="width:100%" alt="{{ $product->name}}"/>
	        </a>
		<!-- <div id="differentview" class="moreOptopm carousel slide">
            <div class="carousel-inner">
              <div class="item active">
               <a href="{{ asset('frontend/themes/images/products/large/f1.jpg') }}"> 
               	<img style="width:29%" src="{{ asset('frontend/themes/images/products/large/f1.jpg') }}" alt=""/>
               </a>
               
               <a href="{{ asset('frontend/themes/images/products/large/f3.jpg') }}" > 
               	<img style="width:29%" src="{{ asset('frontend/themes/images/products/large/f3.jpg') }}" alt=""/>
               </a>
              </div>
              <div class="item">
               <a href="{{ asset('frontend/themes/images/products/large/f3.jpg') }}" > 
               	<img style="width:29%" src="{{ asset('frontend/themes/images/products/large/f3.jpg') }}" alt=""/>
               </a>
               <a href="{{ asset('frontend/themes/images/products/large/f1.jpg') }}"> 
               	<img style="width:29%" src="{{ asset('frontend/themes/images/products/large/f1.jpg') }}" alt=""/>
               </a>
               
              </div>
            </div>
          </div> -->
		  
		 	<div class="btn-toolbar">
@if(!empty($product->video))
                <iframe width="100%" height="250" src="https://www.youtube.com/embed/{{ $product->video }}">
                </iframe>

@endif
			  <!-- Load Facebook SDK for JavaScript -->
			  <div id="fb-root"></div>
			  <script>(function(d, s, id) {
			    var js, fjs = d.getElementsByTagName(s)[0];
			    if (d.getElementById(id)) return;
			    js = d.createElement(s); js.id = id;
			    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
			    fjs.parentNode.insertBefore(js, fjs);
			  }(document, 'script', 'facebook-jssdk'));</script>

			  <!-- Your share button code -->
			  <div class="fb-share-button" 
			    data-href="{{ url()->current() }}"
			    data-layout="button_count"
			    data-size="large">
			  </div>

			</div>
		</div>
			<div class="span8">
				<h3>{{ $product->name}} </h3>
				<!-- <small>- Virgin Coconut Oil is an innovative product, defined as natural oil obtained from fresh kernel of coconut by cold press method</small> -->
				<hr class="soft"/>
				<form action="{{ route('cart.add') }}" method="post" class="form-horizontal qtyFrm">
					{{ csrf_field() }}
					<input type="hidden" name="prod_id" value="{{ $product->id }}">
				  <div class="control-group">
					<label class="control-label"><span>$. {{ $product->price }}</span></label>
					
					@if($product->total_qty)
						<div class="controls">
						<input type="number" name="qty" class="span1" placeholder="Qty." value="1"  min="1" max="{{ $product->total_qty }}" />
						  <button type="submit" class="btn btn-large btn-primary pull-right"> Add to cart <i class=" icon-shopping-cart"></i></button>
						</div>
					@endif
				  </div>
				</form>
				
				<hr class="soft"/>
				<h4>@if($product->total_qty){{ $product->total_qty }} items in stock @else <label class="btn btn-danger">Out Of Stock</label> @endif </h4>

				<hr class="soft clr"/>
				<div>{!! html_entity_decode( $product->description) !!}</div>

				<!-- <a class="btn btn-small pull-right" href="#detail">More Details</a> -->
				<br class="clr"/>
			<a href="#" name="detail"></a>
			<hr class="soft"/>		

			@if(Auth::user())

			<h3>Review This Product</h3>
			@if(count($errors)> 0)
              <ul class="list-group">
                @foreach($errors->all() as $error)
                  <span style="color: red;">{{ $error }}</span><br>
                @endforeach
              </ul>
              <br>
            @endif
			
			<form action="{{ route('review.store') }}" method="post" class="form-horizontal qtyFrm">
					{{ csrf_field() }}
				<input type="hidden" name="product_id" value="{{ $product->id }}">
				<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

				<div class="form-group">
				  
		          <select name="rating" class="full-width" data-init-plugin="select2">
		              <option value="">Your Rating (1-5)</option>
		              <option value="1">1</option>
		              <option value="2">2</option>
		              <option value="3">3</option>
		              <option value="4">4</option>
		              <option value="5">5</option>
		           </select>
		           <br><br>
		       </div>

	           <div class="form-group">
	            	<textarea name="review" class="form-control" placeholder="Type Your Review Here..." cols="15" rows="5" style="width: 100%;"></textarea>
	            	<br><br>
	          	</div>

	          	<button type="submit" class="btn btn-small btn-primary pull-left"> Submit Review </button>
	          	<br><br>
			</form>

				

			@endif


			@if($product_reviews)
			<hr class="soft"/>
			<h3>Product Reviews</h3>

				@foreach($product_reviews as $review)
				<div class="row">
					<div class="span6">
						@for ($i = 1; $i <=  $review->rating ; $i++)						    
						    <i class=" icon-star"></i>
						@endfor

						- <b>{{ $review->name }}</b> on <small>{{ $review->reviewed_at }}</small> wrote<br><br>
						"{{ $review->review }}"	<br>						
					</div>					

				</div> 	
					<hr class="soft"/>

				@endforeach

			@endif

			</div>
			
			<div class="span12">
	            <!-- <ul id="productDetail" class="nav nav-tabs">
	              <li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>
	            </ul> -->
	            <!-- <div id="myTabContent" class="tab-content">
	              <div class="tab-pane fade active in" id="home">
				  <h4>Product Information</h4>
	                <table class="table table-bordered">
					<tbody>
					<tr class="techSpecRow"><th colspan="2">Product Details</th></tr>
					<tr class="techSpecRow"><td class="techSpecTD1">Manufacturer: </td><td class="techSpecTD2">Lanka Oil</td></tr>
					<tr class="techSpecRow"><td class="techSpecTD1">Exporter:</td><td class="techSpecTD2">Coco Exporters</td></tr>
					</tbody>
					</table>
					
					<h5>Features</h5>
					<p>
						Virgin Coconut Oil is an innovative product, defined as natural oil obtained from fresh kernel of coconut by cold press method. It is called “Virgin” due to its pure, raw, pristine and unadulterated state: snow white in colour, contains natural vitamins. Virgin coconut oil can be considered as one of the healthiest oils in the world. It is fit for consumption without the need for further processing. Virgin coconut oil is commonly used in cooking, especially when frying. It may also be used for making margarine and cosmetics.

					</p>


	              </div>
				</div> -->
          	</div>

	</div>
</div>
</div>

@endsection