@extends('admin.layout')

@section('content')

  <div class="row">
    <div class="col-md-12">
      <!-- START card -->
      <div class="card card-default">
        <div class="card-body align-right">
          <a href="{{ route('categories') }}" class="btn btn-primary btn-cons btn-animated from-left fa fa-eye">
              <span>View Categories</span>
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
              Create New Category
            </div>
          </div>
          <div class="card-body">
            <h5>	</h5>
            <form role="form" action="{{ route('category.store') }}" method="post">

            	{{ csrf_field() }}

              <div class="form-group">
                <label>Category Name</label>
                <input type="text" name="name" class="form-control">
              </div>
              <div class="form-group">
                <button class="btn btn-primary" type="submit">Store Category</button>
              </div>
            </form>
          </div>
        </div>
  </div>
</div>


@endsection