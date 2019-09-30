@extends('admin.layout')

@section('content')



    <div class="row">
        <div class="col-md-12">

            <div class="card card-default">
                <div class="card-header ">
                    <div class="card-title">
                        <h3>Settings</h3>
                    </div>
                </div>
                <div class="card-body">
                    <h5>	</h5>
                    <form role="form" action=" {{ route('settings.change') }} " method="post" enctype="multipart/form-data">

                         {{ csrf_field() }}

                        <div class="form-group">
                            <label><h6 style="color:blue;"><strong>Contact Deatail</strong></h6></label><br>
                            <label>E mail</label>
                           <input type="text" name="email" value="{{ $settings->email }}" placeholder="Type Company E mail address" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" value="{{$settings->address}}" placeholder="Type Company Address" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Telephone</label>
                            <input type="text" name="telephone" value="{{ $settings->telephone }}"placeholder="Type Telephone Number" class="form-control">
                        </div>


                        <div class="form-group">
                            <label>Fax</label>
                            <input type="text" name="fax" value="{{ $settings->fax }}" placeholder="Type Fax Number" class="form-control">
                        </div>
                        <br>

                        <label><h6 style="color:blue;"><strong>Social Network</strong></h6></label><br>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" name="fb" value="{{ $settings->fb }}" placeholder="Facebook URL" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" name="twit" value="{{ $settings->twit}}" placeholder="Twitter URL" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Youtube</label>
                            <input type="text" name="youtube" value="{{ $settings->youtube}}" placeholder="Youtube Channel" class="form-control">
                        </div>

                            <br>
                            <label><h6 style="color:blue;"><strong>Business Detail</strong></h6></label><br>
                        <div class="form-group">
                                <label>Supplier Commision</label>
                                <input type="text" name="commis" value="{{$settings->commis}}" placeholder="Type commition rate here" class="form-control">
                            </div>
                        <div class="form-group">
                            <label>Tax Rate</label>
                            <input type="text" name="tax" value="{{ $settings->tax}}" placeholder="Type tax rate here" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Flat Shiping Rate</label>
                            <input type="text" name="flat_ship" value="{{$settings->flat_ship }}" placeholder="Type flat shipping rate here" class="form-control">
                        </div>
                        <br>
                        <div class="form-group">
                            <button class="btn btn-primary"type="submit">Change & Submit</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>


@endsection