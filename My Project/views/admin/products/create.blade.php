@extends('admin.layout')

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
          Create New Product
        </div>
      </div>
      <div class="card-body">
        <h5>	</h5>
        <form role="form" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">

        	{{ csrf_field() }}

          <div class="form-group">
            <label>Product Name</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
          </div>          
          <div class="form-group">
            <label>Price</label>
            <input type="text" name="price" value="{{ old('price') }}" class="form-control">
          </div>          
          <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control"> {{ old('description') }}</textarea>
          </div>
          <div class="form-group">
            <label>Select Product Category</label>       
              @foreach($categories as $category)    
               <div class="checkbox check-success  ">
                  <input type="checkbox"  value="{{ $category->id }}" name="category[]" id="{{ $category->id }}">
                  <label for="{{ $category->id }}">{{ $category->name }}</label>
                </div>
              @endforeach            
          </div>

          <div class="form-group">
            <label>Product Image</label>
            <input type="file" name="product_image" class="form-control">
          </div>

          <div class="form-group">
            <label>Product You Tube Video ID</label>
            <input type="text" name="video"  value="{{ old('video') }}" class="form-control">

          </div>
          <div class="form-group">
            <label>Featured Product</label>       
              <div class="checkbox check-success  ">
                <input type="checkbox" value="1" name="featured" id="featured">
                <label for="featured">Yes</label>
              </div>                         
          </div>

          <div class="form-group">
            <button class="btn btn-primary" type="submit">Create a new product</button>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>


@endsection