@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __('Login')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row align-items-center">
    
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('login_process') }}">
        
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-primary text-center">
            <h3 class="card-title"><strong>{{ __('Login') }}</strong></h3>
          
          </div>
          <div class="card-body">
            <p class="card-description text-center">{{ __(' Sign in with ') }} <strong>User</strong> {{ __(' and the password ') }}<strong>secret</strong> </p>
            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">account_circle</i>
                  </span>
                </div>
                <input type="text" name="user" class="form-control" placeholder="{{ __('User...') }}" value="" required>
              </div>
              @if ($errors->has('email'))
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong>{{ $errors->first('email') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password...') }}" value="" required>
              </div>
              @if ($errors->has('password'))
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong>{{ $errors->first('password') }}</strong>
                </div>
              @endif
            </div>
           
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-primary btn-link btn-lg">{{ __('Lets Go') }}</button>
          </div>
        </div>
      </form>
      
    </div>
  </div>
</div>
@endsection