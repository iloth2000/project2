
@extends('layout', ['activePage' => 'car_brand', 'titlePage' => __('Hãng xe')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Quản lí hãng xe</h4>

            <h3 class="card-category"> <i>{{ __('Danh sách hãng xe') }}</i></h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Mã
                  </th>
                  <th>
                    Hãng xe
                  </th>
                  <th>
                  
                  </th>
                  <th>
                  
                  </th>
                </thead>
                <tbody>
                @foreach($arr_br as $each)
                  <tr>
                    <td>
                    {{$each->brand_code}}
                    </td>
                    <td>
                    {{$each->brand_name}}
                    </td>
                    <td><a href="{{ route('quan_li.car_brand_update',$each->brand_code) }}"><i class="material-icons">edit</i></a></td>
                    <td><a href="{{ route('quan_li.car_brand_del',$each->brand_code) }}"><i class="material-icons">close</i></a></td>
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