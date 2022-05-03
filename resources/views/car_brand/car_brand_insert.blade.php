
@extends('layout',['activePage' => 'brand_insert', 'titlePage' => __('Thêm Loại Xe')])

@section('content')
  <div class="content" >
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('quan_li.car_brand_insert_process') }}" autocomplete="off" class="form-horizontal" style="width: 70%;">
            
           
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Quản lí loại xe') }}</h4>
                <h3 class="card-category"> <i>{{ __('Thêm hãng xe') }}</i></h3>
              </div>
              <div class="card-body ">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
               
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Hãng xe') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="brand_name" id="input-email" type="text" placeholder="{{ __('Hãng xe...') }}"  required />
                      @if ($errors->has('email'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                      @endif
                      @if(count($errors) > 0) 
                      <div class="error text-danger"> 
                        @foreach($errors->all() as $err) 
                        {{$err}}<br> 
                        @endforeach 
                      </div>
                       @endif
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
     
    </div>
  </div>
@endsection