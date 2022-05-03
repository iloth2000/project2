<?php

namespace App\Http\Controllers;

use App\car_brand_model;
use Illuminate\Http\Request;

class car_brand_ctl extends Controller
{
    public function car_brand(){
        $arr_br = car_brand_model::car_brand();
        return view('car_brand/car_brand',compact('arr_br'));
    }
    public function car_brand_insert(){
        return view('car_brand/car_brand_insert');
    }
    public function car_brand_insert_process(Request $rq){
        $this->validate($rq,[
            'brand_name'=>'required|min:1|max:50|unique:car_brand,brand_name'
        ],
        [
            'brand_name.required'=>'Bạn chưa nhập hãng xe',
            'brand_name.min'=>'Tên hãng xe phải có độ dài từ 1 đến 50 kí tự',
            'brand_name.max'=>'Tên hãng xe phải có độ dài từ 1 đến 50 kí tự',
            'brand_name.unique'=>'Hãng xe này đã tồn tại'
        ]);
        $brand = new car_brand_model();
        $brand->brand_name = $rq->brand_name;
        $brand->car_brand_insert_process();
        return redirect()->route('quan_li.car_brand');
    }
    public function car_brand_update($brand_code){
        $arr_brand = car_brand_model::car_brand_update($brand_code);
        return view('car_brand/car_brand_update',compact('arr_brand'));
    }
    public function car_brand_update_process(Request $rq1){
        $brand1 = new car_brand_model();
        $brand1->brand_code = $rq1->brand_code;
        $brand1->brand_name = $rq1->brand_name;
        $brand1->car_brand_update_process();
        return redirect()->route('quan_li.car_brand');
    }
    public function car_brand_del($brand_code){
        $arr_brand = car_brand_model::car_brand_del($brand_code);
        return redirect()->route('quan_li.car_brand');
    }
}
