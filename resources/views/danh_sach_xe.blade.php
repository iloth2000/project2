@extends('layout')
@section('content')
<center><h2>Danh sách xe !!!</h2>
<table border="1" cellspacing="0" cellpadding="0" width="90%" style="border-color: aliceblue;margin-bottom: 50px;" >
<tr style="line-height: 50px">
    <td><center>Mã</center></td>
    <td><center>Loại xe</center></td>
    <td><center>Hãng xe</center></td>
    <td><center>Giá cho thuê</center></td>
    <td><center>Mô tả</center></td>
</tr>
@foreach($arr_list as $each)
<tr style="line-height: 30px">
    <td>{{$each->cab_code}}</td>
    <td>{{$each->type_code}}</td>
    <td>{{$each->brand_code}}</td>
    <td>{{$each->price}}</td>
    <td>{{$each->description}}</td>
</tr>
    @endforeach
</table>
</center>
@endsection