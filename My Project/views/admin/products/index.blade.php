@extends('admin.layout')

@section('content')

 <div class="row">
  <div class="col-md-12">
      <!-- START card -->
      <div class="card card-default">
        <div class="card-body align-right">
          <a href="{{ route('product.create') }}" class="btn btn-primary btn-cons btn-animated from-left pg pg-plus">
              <span>Add New Product</span>
          </a> 

          <a href="{{ route('product.trashed') }}" class="btn btn-info btn-cons btn-animated from-left pg pg-trash">
              <span>View Trash</span>
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
              <div class="card-title">Products
              </div>
              <div class="pull-right">
                <div class="col-xs-12">
                  <input type="text" id="search-table" class="form-control pull-right" placeholder="Search">
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="card-body">
              <table class="table table-hover table-responsive-block" id="tableWithSearch">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($products as $product)
                    <tr>
                      <td class="v-align-middle semi-bold">
                        <p>{{ $product->id}}</p>
                      </td>
                      
                      <td class="v-align-middle">
                        <p>{{ $product->name}}</p>
                      </td>
                      <td class="v-align-middle">
                        <p>$. {{ $product->price}}</p>
                      </td>
                      <td class="v-align-middle">
                        <a href="{{ route('product.edit', ['slug' => $product->slug ]) }}" class="btn btn-xs btn-info"> Edit</a>
                        <a href="{{ route('product.trash', ['id' => $product->id ]) }}" class="btn btn-xs btn-danger"> Trash</a>
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