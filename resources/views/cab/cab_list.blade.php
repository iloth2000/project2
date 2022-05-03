@extends('layout', ['activePage' => 'cab_list', 'titlePage' => __('Danh sách xe')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Quản lí xe</h4>
            <h3 class="card-category"> <i>Danh sách xe</i></h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
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
                  <th>
                  
                  </th>
                  <th>
                  
                  </th>
                </thead>
                <tbody>
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
                    <td><center><a href="{{ route('quan_li.cab_update',$each->cab_code) }}"><i class="material-icons">edit</i></a></td>
                    <td><center><a href="{{ route('quan_li.cab_del',$each->cab_code) }}"><i class="material-icons">close</i></a></td>
                </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>    
    </div>
  </div>
</div>
@endsection