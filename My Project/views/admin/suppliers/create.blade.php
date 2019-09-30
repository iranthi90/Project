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
          Create New Supplier
        </div>
      </div>
      <div class="card-body">
        <h5>	</h5>
        <form role="form" action="{{ route('supplier.store') }}" method="post" enctype="multipart/form-data">

        	{{ csrf_field() }}

          <div class="form-group">
            <label>Company Name</label>
            <input type="text" name="company_name" value="{{ old('company_name') }}" class="form-control">
          </div>          
          <div class="form-group">
            <label>First Name</label>
            <input type="text" name="fname" value="{{ old('fname') }}" class="form-control">
          </div>
          <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="lname" value="{{ old('lname') }}" class="form-control">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control">
          </div>          
          <div class="form-group">
            <label>Address</label>
            <textarea name="address" class="form-control"> {{ old('address') }}</textarea>
          </div>
          <div class="form-group">
            <label>Phone 1</label>
            <input type="text" name="phone_1" value="{{ old('phone_1') }}" class="form-control">
          </div>
          <div class="form-group">
            <label>Phone 2</label>
            <input type="text" name="phone_2" value="{{ old('phone_2') }}" class="form-control">
          </div>
          <div class="form-group">
            <label>Supplier Image</label>
            <input type="file" name="image" class="form-control">
          </div>

          <div class="form-group">
            <label>Website</label>
            <input type="text" name="website" value="{{ old('website') }}" class="form-control">

          </div>

          <div class="form-group">
            <label>Products Supplied</label>       
              @foreach($products as $product)    
               <div class="checkbox check-success  ">
                  <input type="checkbox"  value="{{ $product->id }}" name="products[]" id="{{ $product->id }}">
                  <label for="{{ $product->id }}">{{ $product->name }}</label>
                </div>
              @endforeach            
          </div>
          

          <div class="form-group">
            <button class="btn btn-primary" type="submit">Create a new supplier</button>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>


@endsection