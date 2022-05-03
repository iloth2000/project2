
@extends('layout',['activePage' => 'contract_detail', 'titlePage' => __('Thêm Loại Xe')])

@section('content')
  <div class="content" style="width: 1200px;" >
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post"  autocomplete="off" class="form-horizontal" style="width: 70%;">
          @foreach($arr_2 as $each)
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Quản lí hợp đồng') }}</h4>
                <h3 class="card-category"> <i>{{ __('Chi tiết hợp đồng ') }}</i></h3>
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
                    <label class="col-sm-2 col-form-label">{{ __('Tên khách hàng') }}</label>
                    <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="customer_name" value="{{$each->fullname}}" readonly id="input-email" type="text"  required />
                      @if ($errors->has('email'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Tên xe') }}</label>
                    <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="car_name" value="{{$each->car_name}}" readonly id="input-email" type="text"   required />
                      @if ($errors->has('email'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Biển số xe') }}</label>
                    <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="license_plate" value="{{$each->license_plate}}" readonly id="input-email" type="text"   required />
                      @if ($errors->has('email'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                    </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Giá cho thuê(theo ngày)') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="daily_rental_price" value="{{$each->daily_rental_price}}" readonly id="input-email" type="text" placeholder="{{ __('Giá...') }}"  required />
                      @if ($errors->has('email'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Số ngày đã thuê') }}</label>
                    <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                    @foreach($values as $value)  
                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="abc" readonly value="{{$value->Tong}}" id="input-email" type="text" placeholder="{{ __('Ngày trả xe...') }}"  required />
                    @endforeach  
                    @if ($errors->has('email'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                    </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Tổng hóa đơn phải trả') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="daily_rental_price" value="{{($each->daily_rental_price)*($value->Tong)}}" readonly id="input-email" type="text" placeholder="{{ __('Giá...') }}"  required />
                      @if ($errors->has('email'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              <div class="card-footer ml-auto mr-auto">
                <a href="{{ route('quan_li.contract_list') }}"><button type="button" class="btn btn-primary"  >{{ __('Quay lại') }}</button></a>
              </div>
            </div>
          </form>
        </div>
      </div>
     
    </div>
  </div>
@endsection