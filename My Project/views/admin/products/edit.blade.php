@extends('admin.layout')

@section('styles')
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
@endsection

@section('content')

 <div class="row">
  <div class="col-md-12">
      <!-- START card -->
      <div class="card card-default">
        <div class="card-body align-right">
          <a href="{{ route('products') }}" class="btn btn-primary btn-cons btn-animated from-left fa fa-eye">
              <span>View All Products</span>
          </a> 
        </div>
      </div>
      <!-- END card -->
      <!-- </div> -->
    </div>
  </div>

<div class="row">
  <div class="col-md-12">

    <div class="card card-default">
      <div class="card-header ">
        <div class="card-title">
          Update Product : 
        </div>
      </div>
      <div class="card-body">
        <h5>	</h5>
        <form role="form" action="{{ route('product.update', ['id' => $product->id ]) }}" method="post" enctype="multipart/form-data">

        	{{ csrf_field() }}

          <div class="form-group">
            <label>Product Name</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}">
          </div>
          <div class="form-group">
            <label>Product Slug</label>
            <input type="text" name="slug" class="form-control" value="{{ $product->slug }}">
          </div>
          <div class="form-group">
            <label>Price</label>
            <input type="text" name="price" class="form-control" value="{{ $product->price }}">
          </div>         
          <div class="form-group">
            <label>Description</label>
            <textarea name="description" id="description" class="form-control">{{ $product->description }}</textarea>
          </div>
          <div class="form-group">
            <label>Select Product Category</label>       
              @foreach($categories as $category)
                
               <div class="checkbox check-success  ">
                  <input type="checkbox" value="{{ $category->id }}" name="category[]" id="{{ $category->id }}" 
                    @if($product->categories->contains($category->id)) checked=checked @endif
                  >
                  <label for="{{ $category->id }}">{{ $category->name }}</label>
                </div>
              @endforeach 
                         
          </div>
          <div class="form-group">
            <label>Product Image</label>
            <br>
            <img src="{{ asset('uploads/products/') }}/{{ $product->product_image }}">
            <input type="file" name="product_image" class="form-control">
          </div>

          <div class="form-group">
            <label>Product You Tube Video ID</label>
            <input type="text" name="video" class="form-control" value="{{ $product->video }}">

          </div>



          <div class="form-group">
            <label>Featured Product</label>       
              <div class="checkbox check-success  ">
                <input type="checkbox" value="{{ $product->featured }}" name="featured" id="featured" 
                  @if($product->featured == 1) checked=checked @endif
                >
                <label for="featured">Yes</label>
              </div>                         
          </div>

          <div class="form-group">
            <button class="btn btn-primary" type="submit">Update product</button>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>


@endsection


@section('scripts')
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>

  <script>
    $(document).ready(function() {
        $('#description').summernote();
    });
  </script>
@endsection