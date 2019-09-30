@extends('admin.layout')

@section('content')

 <div class="row">
  <div class="col-md-12">
      <!-- START card -->
      <div class="card card-default">
        <div class="card-body align-right">
          <a href="{{ route('suppliers') }}" class="btn btn-primary btn-cons btn-animated from-left fa fa-eye">
              <span>View All Suppliers</span>
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
          Update Supplier
        </div>
      </div>
      <div class="card-body">
        <h5>	</h5>
        <form role="form" action="{{ route('supplier.update', ['id' => $supplier->id ]) }}" method="post" enctype="multipart/form-data">

        	{{ csrf_field() }}

          <div class="form-group">
            <label>Company Name</label>
            <input type="text" name="company_name" value="{{ $supplier->company_name }}" class="form-control">
          </div>          
          <div class="form-group">
            <label>First Name</label>
            <input type="text" name="fname" value="{{ $supplier->fname }}" class="form-control">
          </div>
          <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="lname" value="{{ $supplier->lname }}" class="form-control">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{ $supplier->email }}" class="form-control">
          </div>          
          <div class="form-group">
            <label>Address</label>
            <textarea name="address" class="form-control"> {{ $supplier->address }}</textarea>
          </div>
          <div class="form-group">
            <label>Phone 1</label>
            <input type="text" name="phone_1" value="{{ $supplier->phone_1 }}" class="form-control">
          </div>
          <div class="form-group">
            <label>Phone 2</label>
            <input type="text" name="phone_2" value="{{ $supplier->phone_2 }}" class="form-control">
          </div>
          <div class="form-group">
            <label>Supplier Image</label>
            @if($supplier->image)
              <br>
              <img src="{{ asset('uploads/suppliers') }}/{{ $supplier->image }}">
            @endif
            <input type="file" name="image" class="form-control">
          </div>

          <div class="form-group">
            <label>Website</label>
            <input type="text" name="website" value="{{ $supplier->website }}" class="form-control">

          </div>

          <div class="form-group">
            <label>Products Supplied</label>       
              @foreach($products as $product)
                
               <div class="checkbox check-success  ">
                  <input type="checkbox" value="{{ $product->id }}" name="products[]" id="{{ $product->id }}" 
                    @if($product->suppliers->contains($supplier->id)) checked=checked @endif
                  >
                  <label for="{{ $product->id }}">{{ $product->name }}</label>
                </div>
              @endforeach 
                         
          </div>
          

          <div class="form-group">
            <button class="btn btn-primary" type="submit">Update supplier</button>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>


@endsection