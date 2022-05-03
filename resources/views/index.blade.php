
@extends('layout',['activePage' => 'index', 'titlePage' => __('Thêm Loại Xe')])

@section('content')
  <div class="content" >
  <div class="container-fluid">
  <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">content_copy</i>
              </div>
              <p class="card-category">Tổng số xe</p>
              <h3 class="card-title">@foreach($arr_2 as $each1)
                    {{$each1->cab_code}}
                    @endforeach 
                <small>xe</small>
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-danger">warning</i>
                <a href="#pablo">Get More Space...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">store</i>
              </div>
              <p class="card-category">Số loại xe</p>
              <h3 class="card-title">@foreach($arr_1 as $each)
                    {{$each->type_code}}
                    @endforeach                
                </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">date_range</i> Last 24 Hours
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">info_outline</i>
              </div>
              <p class="card-category">Hãng xe đang có</p>
              <h3 class="card-title">@foreach($arr_4 as $each)
                    {{$each->brand_code}}
                    @endforeach </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">local_offer</i> Tracked from Github
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="fa fa-twitter"></i>
              </div>
              <p class="card-category">Khách hàng đã đăng kí</p>
              <h3 class="card-title">@foreach($arr_3 as $each)
                    {{$each->customer_code}}
                    @endforeach </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">update</i> Just Updated
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <div class="row" style="width: 2200px;">
        <div class="col-lg-6 col-md-12">
          <div class="card">
            <div class="card-header card-header-tabs card-header-primary">
              <div class="nav-tabs-navigation">
                <div class="nav-tabs-wrapper">
                  <span class="nav-tabs-title">Tasks:</span>
                  <ul class="nav nav-tabs" data-tabs="tabs">
                    <li class="nav-item">
                      <a class="nav-link active" href="#profile" data-toggle="tab">
                        <i class="material-icons">bug_report</i>Tất cả xe
                        <div class="ripple-container"></div>
                      </a>
                    </li>
                    <li class="nav-item">                     
                      <a class="nav-link" href="#messages" data-toggle="tab">                      
                      <select name="type_code" >
                      <option value="0">Chọn loại xe</option>
                      @foreach($arr_t as $each)                     
                        <option value="{{ route('quan_li.index_type',$each->type_code) }}">{{$each->type_name}} Chỗ</option>
                      @endforeach
                      </select>
                      
                        <div class="ripple-container"></div>
                      </a>
                     
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#settings" data-toggle="tab">
                      <form action="" method="post">
                        <select name="type_code" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}">
                      <option value="0">Chọn loại xe</option>
                      @foreach($arr_brand as $each)
                        <option value="{{$each->brand_code}}">{{$each->brand_name}}</option>
                      @endforeach
                      </select>
                      </form>
                        <div class="ripple-container"></div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            
      <div class="card-body">
        <div class="tab-content">
          <div class="tab-pane active" id="profile">     
            <div class="table-responsive">
                 <table class="table">
                 <tbody>
                  <thead class=" text-primary">
                  <th>
                    Mã
                  </th>
                  <th>
                  Tên xe
                  </th>
                  <th>
                    Loại xe
                  </th>
                  <th>
                    Hãng xe
                  </th>
                  <th>
                  Giá cho thuê
                  </th>
                  <th>
                  Biển số xe
                  </th>
                  <th>
                  Giá
                  </th>
                  <th>
                  Tình trạng
                  </th>
                  <th>
                  Mô tả
                  </th>
                  
                </thead>               
                @foreach($arr_list as $each)
                <tr>                   
                    <td>{{$each->cab_code}}</td>
                    <td>{{$each->car_name}}</td>
                    <td>
                    @foreach($arr_t as $value)
                      @if($each->type_code == $value->type_code) 
                      {{ $value->type_name }}   Chỗ         
                      @endif 
                      @endforeach
                    </td>
                    <td>{{$each->brand_name}}</td>
                    <td>{{$each->price}}</td>
                    <td>{{$each->license_plate}}</td>
                    <td>{{$each->price}}</td>
                    <td>@if($each->status==0)
                      Chưa thuê
                    @else
                    Đã được thuê
                    @endif
                  </td>
                    <td>{{$each->description}} </td>
                </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane" id="messages">
            <table class="table">
            <tbody>
                  <thead class=" text-primary">
                  <th>
                    Mã â
                  </th>
                  <th>
                  Tên xe
                  </th>
                  <th>
                    Loại xe
                  </th>
                  <th>
                    Hãng xe
                  </th>
                  <th>
                  Giá cho thuê
                  </th>
                  <th>
                  Biển số xe
                  </th>
                  <th>
                  Giá
                  </th>
                  <th>
                  Tình trạng
                  </th>
                  <th>
                  Mô tả
                  </th>
                  
                </thead>
                
                @foreach($arr_list as $each)
                <tr>                   
                    <td>{{$each->cab_code}}</td>
                    <td>{{$each->car_name}}</td>
                    <td>
                    @foreach($arr_t as $value)
                      @if($each->type_code == $value->type_code) 
                      {{ $value->type_name }}   Chỗ         
                      @endif 
                      @endforeach
                    </td>
                    <td>{{$each->brand_name}}</td>
                    <td>{{$each->price}}</td>
                    <td>{{$each->license_plate}}</td>
                    <td>{{$each->price}}</td>
                    <td>@if($each->status==0)
                      Chưa thuê
                    @else
                    Đã được thuê
                    @endif
                  </td>
                    <td>{{$each->description}} </td>
                </tr>
                  @endforeach
                </tbody>
              </table>
                </div>
                <div class="tab-pane" id="settings">
                  <table class="table">
                  â
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>      
      </div>
  </div>
@endsection