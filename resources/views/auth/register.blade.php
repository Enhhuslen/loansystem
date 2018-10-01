@extends('layouts.app')

@section('content')
<div class="register-box">
  <div class="register-logo">
    <b>hsdntknw corporation </b>Lending system</a>
  </div>
  <!-- /.login-logo -->
  <div class="register-box-body">
    <p class="register-box-msg">Register a new membership</p>
        <div class="row">
            <div class="col-md-16">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-3 control-label">Name</label>

                                <div class="col-md-8">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-3 control-label">E-Mail</label>

                                <div class="col-md-8">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-3 control-label">Password</label>

                                <div class="col-md-8">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="password-confirm" class="col-md-3 control-label">Confirm Password</label>

                                <div class="col-md-8">
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                  <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                                </div>
                            </div>

                            {{-- roles options --}}
                             <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-3 control-label">Role</label>

                                <div class="col-md-8">
                                    <select id="name" type="text" class="form-control" name="role" value="{{ old('role') }}" required >
                                        @foreach($roles as $id=>$role)
                                            <option value="{{$id}}">{{$role}}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('role'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('role') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                            <div class="col-xs-8">
                                <div class="checkbox icheck">
                                    <label>
                                        <input type="checkbox" name="remember"> I agree to the <a href="#">terms</a>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-4">
                                    <button type="submit" class="btn btn-primary btn-block btn-flat">
                                        Register
                                    </button>
                                </div>
                            </div>
                            <br>
                            <a href="login" class="col-xs-8">I already have a membership</a>
                        </form>
                    </div>
            </div>
        </div>
  </div>
</div>
@endsection
