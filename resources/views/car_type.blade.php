@extends('layout', ['activePage' => 'type', 'titlePage' => __('Loại xe')])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Quản lí loại xe</h4>
            <h3 class="card-category"> <i>Danh sách loại xe</i></h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Mã xe
                  </th>
                  <th>
                    Loại Xe 
                  </th>
                  <th>
                  
                  </th>
                  <th>
                  
                  </th>
                </thead>
                <tbody>
                @foreach($arr as $each)
                  <tr>
                    <td>
                    {{$each->type_code}}
                    </td>
                    <td>
                    {{$each->type_name}} chỗ
                    </td>
                    <td><a href="{{ route('quan_li.car_type_update',$each->type_code) }}"><i class="material-icons">edit</i></a></td>
                    <td><a href="{{ route('quan_li.car_type_del',$each->type_code) }}"><i class="material-icons">close</i></a></td>
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
