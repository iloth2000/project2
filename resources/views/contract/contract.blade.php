@extends('layout', ['activePage' => 'contract_list', 'titlePage' => __('Danh sách xe')])
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
                  Mã khách hàng
                  </th>
                  <th>
                    Mã xe
                  </th>
                  <th>
                    Tiền đặt cọc
                  </th>
                  <th>
                  Giá thuê (theo ngày)
                  </th>
                  <th>
                  Ngày thuê
                  </th>
                  <th>
                  Ngày hết hạn
                  </th>
                  <th>
                  Ngày trả xe
                  </th>
                  <th>
                  Tình trạng
                  </th>
                  <th>
                  
                  </th>
                  <th>
                  
                  </th>
                  <th>
                  
                  </th>
                </thead>
                <tbody>
                @foreach($arr as $each)
                <tr>                   
                    <td>{{$each->contract_code}}</td>
                    <td>{{$each->customer_code}}</td>
                    <td>{{$each->cab_code}}</td>
                    <td>{{$each->deposit}}</td>
                    <td>{{$each->daily_rental_price}}</td>
                    <td>{{$each->date_of_hire}}</td>
                    <td>{{$each->expiration_date}}</td>
                    <td>{{$each->return_cars_date}}</td>
                    <td>{{$each->status}} </td>
                    <td><center><a href="{{ route('quan_li.contract_update',$each->contract_code) }}"><i class="material-icons">edit</i></a></td>
                    <td><center><a href="{{ route('quan_li.contract_del',$each->contract_code) }}"><i class="material-icons">close</i></a></td>
                    <td><center><a href="{{ route('quan_li.contract_detail',$each->contract_code) }}"><i class="material-icons">open_in_newt</i></a></td>
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