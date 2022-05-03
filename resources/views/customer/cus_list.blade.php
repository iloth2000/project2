
@extends('layout', ['activePage' => 'cus', 'titlePage' => __('Danh sách xe')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Quản lí thông tin khách hàng</h4>
            <h3 class="card-category"> <i>Danh sách khách hàng</i></h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Tên khách hàng
                  </th>
                  <th>
                    Số điện thoại
                  </th>
                  <th>
                    Ngày sinh
                  </th>
                  <th>
                  CMND/Căn cước
                  </th>
                  <th>
                  Địa chỉ
                  </th>
                  <th>
                  Tài khoản
                  </th>
                  <th>
                  Mật khẩu
                  </th>
                  <th>
                  
                  </th>
                  <th>
                  
                  </th>
                </thead>
                <tbody>
                @foreach($arr_list as $each)
                <tr>                   
                <td><center>{{$each->fullname}}</center></td>
                <td><center>{{$each->phone_number}}</center></td>
                <td><center>{{$each->birthday}}</center></td>
                <td><center>{{$each->ID_card}}</center></td>
                <td><center>{{$each->address}}</center> </td>
                <td><center>{{$each->user}}</center> </td>
                <td><center>{{$each->password}}</center> </td>
                <td><center><a href="{{ route('quan_li.cus_update',$each->customer_code) }}"><i class="material-icons">edit</i></a></td>
                <td><center><a href="{{ route('quan_li.cus_del',$each->customer_code) }}"><i class="material-icons">close</i></a></td>
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