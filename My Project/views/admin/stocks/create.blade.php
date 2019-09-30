@extends('admin.layout')

@section('content')

 <div class="row">
  <div class="col-md-12">
      <!-- START card -->
      <div class="card card-default">
        <div class="card-body align-right">
          <a href="{{ route('stocks') }}" class="btn btn-primary btn-cons btn-animated from-left fa fa-eye">
              <span>View All Stocks</span>
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
          Create New Stock
        </div>
      </div>
      <div class="card-body">
        <h5>	</h5>
        <form role="form" action="{{ route('stock.store') }}" method="post">

        	{{ csrf_field() }}

          <div class="form-group">
            <label>Select Product</label>
            <select name="product_id" class="full-width" data-init-plugin="select2">
              <option value="">Select</option>
              @foreach($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
              @endforeach
            </select>
          </div>          
          <div class="form-group">
            <label>Select Supplier</label>
            <select name="supplier_id" class="full-width" data-init-plugin="select2">
              <option value="">Select</option>
              @foreach($suppliers as $supplier)
                <option value="{{ $supplier->id }}">{{ $supplier->company_name }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>Initial Stock Quantity</label>
            <input type="number" name="init_qty" class="form-control" value="{{ old('init_qty') }}">
          </div>
          <div class="form-group">
            <label>Reorder Level</label>
            <input type="number" name="reorder_level" class="form-control" value="{{ old('reorder_level') }}">
          </div>
          

          <div class="form-group">
            <button class="btn btn-primary" type="submit">Create a new stock</button>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>


@endsection