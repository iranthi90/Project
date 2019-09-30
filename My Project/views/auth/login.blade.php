@extends('layouts.app')

@section('content')

<form id="form-login" class="p-t-15" role="form"  method="POST" action="{{ route('login') }}">
     {{ csrf_field() }}

    <!-- START Form Control-->
    <div class="form-group form-group-default {{ $errors->has('email') ? ' has-error' : '' }}">
      <label>Login</label>
      <div class="controls">
        <input type="email" name="email" placeholder="User Name"  value="{{ old('email') }}" class="form-control"  required autofocus>
         @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </div>
    </div>
    <!-- END Form Control-->
    <!-- START Form Control-->
    <div class="form-group form-group-default{{ $errors->has('password') ? ' has-error' : '' }}">
      <label>Password</label>
      <div class="controls">
        <input type="password" class="form-control" name="password" placeholder="Credentials" required>

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif

      </div>
    </div>
    <!-- START Form Control-->
    <div class="row">
      <div class="col-md-6 no-padding sm-p-l-10">
        <div class="checkbox ">
          <input type="checkbox" value="1" id="checkbox1" name="remember" {{ old('remember') ? 'checked' : '' }}>
          <label for="checkbox1">Keep Me Signed in</label>
        </div>
      </div>
      <div class="col-md-6 d-flex align-items-center justify-content-end">
        <a href="{{ route('password.request') }}" class="text-info small">Forgot Your Password?</a>
      </div>
    </div>
    <!-- END Form Control-->
    <button class="btn btn-primary btn-cons m-t-10" type="submit">Sign in</button>
</form>

@endsection
