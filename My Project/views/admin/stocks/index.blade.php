@extends('admin.layout')

@section('content')

 <div class="row">
  <div class="col-md-12">
      <!-- START card -->
      <div class="card card-default">
        <div class="card-body align-right">
          <a href="{{ route('stock.create') }}" class="btn btn-primary btn-cons btn-animated from-left pg pg-plus">
              <span>Add New Stock</span>
          </a> 
        </div>
      </div>
      <!-- END card -->
      <!-- </div> -->
    </div>
  </div>

<div class="row">
  <div class="col-md-12">
      <!-- START card -->
          <div class="card card-transparent">
            <div class="card-header ">
              <div class="card-title">Stocks
              </div>
              <div class="pull-right">
                <div class="col-xs-12">
                  <input type="text" id="search-table" class="form-control pull-right" placeholder="Search">
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="card-body">
              <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Supplier Name</th>
                    <th>Initial Stock Quantity</th>
                    <th>Stock Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($stocks as $stock)
                    <tr>
                      <td class="v-align-middle semi-bold">
                        <p>{{ $stock->id }}</p>
                      </td>
                      
                      <td class="v-align-middle">
                        <p>{{ $stock->product->name }}</p>
                      </td>
                      <td class="v-align-middle">
                        <p>{{ $stock->supplier->company_name }}</p>
                      </td>
                      <td class="v-align-middle">
                        <p>{{ $stock->init_qty }}</p>
                      </td>
                      <td class="v-align-middle">
                        @if($stock->current_qty > $stock->reorder_level)
                          <span class="label label-success">Healthy : ({{ $stock->current_qty }})</span>
                        @elseif($stock->current_qty > 0 && $stock->current_qty < $stock->reorder_level)
                          <span class="label label-warning">Limited Stock :  ({{ $stock->current_qty }})</span>
                        @elseif($stock->current_qty == 0)
                          <span class="label label-danger">Out of stock</span>
                        @endif                        
                      </td>
                      <td class="v-align-middle">
                        <a href="{{ route('stock.edit', ['id' => $stock->id ]) }}" class="btn btn-xs btn-info"> Edit</a>
                      </td>                        
                  </tr>
                  @endforeach                 
                  
                </tbody>
              </table>
            </div>
          </div>
          <!-- END card -->
      </div>
</div>


@endsection