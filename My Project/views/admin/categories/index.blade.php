@extends('admin.layout')

@section('content')

 <div class="row">
  <div class="col-md-12">
      <!-- START card -->
      <div class="card card-default">
        <div class="card-body align-right">
          <a href="{{ route('category.create') }}" class="btn btn-primary btn-cons btn-animated from-left pg pg-plus">
              <span>Add New Category</span>
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
              <div class="card-title">Product Categories
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
                    <th>Category</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($categories as $category)
                    <tr>
                      <td class="v-align-middle semi-bold">
                        <p>{{ $category->id}}</p>
                      </td>
                      
                      <td class="v-align-middle">
                        <p>{{ $category->name}}</p>
                      </td>
                      <td class="v-align-middle">
                        <a href="{{ route('category.edit', ['id' => $category->id ]) }}" class="btn btn-xs btn-info"> Edit</a>

                        <a href="{{ route('category.delete', ['id' => $category->id ]) }}" class="btn btn-xs btn-danger"> Delete</a>
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