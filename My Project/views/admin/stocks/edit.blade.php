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
          Update Stock : 
        </div>
      </div>
      <div class="card-body">
        <h5>	</h5>
        <form role="form" action="{{ route('stock.update', ['id' => $stock->id ]) }}" method="post">

        	{{ csrf_field() }}

          <div class="form-group">
            <label>Select Product</label>
            <input type="hidden" name="product_id" class="form-control" value="{{ $stock->product_id }}">

            <select name="product" class="full-width" data-init-plugin="select2" disabled="disabled">
              <option value="">Select</option>
              @foreach($products as $product)
                <option value="{{ $product->id }}" @if($stock->product_id == $product->id) selected=selected @endif>{{ $product->name }}</option>
              @endforeach
            </select>
          </div>          
          <div class="form-group">
            <label>Select Supplier</label>
            <input type="hidden" name="supplier_id" class="form-control" value="{{ $stock->supplier_id }}">

            <select name="supplier" class="full-width" data-init-plugin="select2" disabled="disabled">
              <option value="">Select</option>
              @foreach($suppliers as $supplier)
                <option value="{{ $supplier->id }}" @if($stock->supplier_id == $supplier->id) selected=selected @endif >{{ $supplier->company_name }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>Initial Stock Quantity</label>
            <input type="number" name="init_qty" class="form-control" value="{{ $stock->init_qty }}"  readonly>
          </div>
          <div class="form-group">
            <label>Reorder Level</label>
            <input type="number" name="reorder_level" class="form-control" value="{{ $stock->reorder_level }}">
          </div>         

          <div class="form-group">
            <button class="btn btn-primary" type="submit">Update stock</button>
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