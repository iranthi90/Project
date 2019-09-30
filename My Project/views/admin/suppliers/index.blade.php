@extends('admin.layout')

@section('content')

 <div class="row">
  <div class="col-md-12">
      <!-- START card -->
      <div class="card card-default">
        <div class="card-body align-right">
          <a href="{{ route('supplier.create') }}" class="btn btn-primary btn-cons btn-animated from-left pg pg-plus">
              <span>Add New Supplier</span>
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
              <div class="card-title">Suppliers
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
                    <th>Company Name</th>
                    <th>Name</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($suppliers as $supplier)
                    <tr>
                      <td class="v-align-middle semi-bold">
                        <p>{{ $supplier->id}}</p>
                      </td>
                      
                      <td class="v-align-middle">
                        <p>{{ $supplier->company_name}}</p>
                      </td>
                      <td class="v-align-middle">
                        <p>{{ $supplier->fname}} {{ $supplier->lname}}</p>
                      </td>
                      <td class="v-align-middle">
                        <a href="{{ route('supplier.edit', ['id' => $supplier->id ]) }}" class="btn btn-xs btn-info"> Edit</a>
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