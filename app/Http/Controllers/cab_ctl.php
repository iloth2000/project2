<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cab_model;
use App\demo_model;
use App\car_brand_model;
class cab_ctl extends Controller
{
    public function cab_list(){
        $arr_list = cab_model::get_all();
        $arr_t = cab_model::insert();
        return view('cab/cab_list',compact('arr_list','arr_t'));
    }
    public function cab_insert(){
        $arr_type = cab_model::insert();
        $arr_brand = car_brand_model::car_brand();
        return view('cab/cab_insert',compact('arr_type','arr_brand'));
    }
    public function cab_insert_process(Request $rq){
        $cab = new cab_model();
        $cab->car_name = $rq->car_name;
        $cab->type_code = $rq->type_code;
        $cab->brand_code = $rq->brand_code;
        $cab->price = $rq->price;
        $cab->license_plate = $rq->license_plate;       
        $cab->description  = $rq->description;
        $cab->stutus = $rq->status;
        $cab->cab_insert_process();
        return redirect()->route('quan_li.cab_list');
    }
    public function cab_update($cab_code){      
        $arr = demo_model::car_type();
        $arr1 = car_brand_model::car_brand();
        $arr_cab = cab_model::cab_update($cab_code);
        return view('cab/cab_update',compact('arr_cab','arr','arr1'));
    }
    public function cab_update_process(Request $rq1){
        $cab1 = new cab_model();
        $cab1->car_name = $rq1->car_name;
        $cab1->cab_code = $rq1->cab_code;
        $cab1->type_code = $rq1->type_code;
        $cab1->brand_code = $rq1->brand_code;
        $cab1->price = $rq1->price;
        $cab1->license_plate = $rq1->license_plate;
        $cab1->status = $rq1->status;
        $cab1->description = $rq1->description;
        $cab1->cab_update_process();
     
        return redirect()->route('quan_li.cab_list');
    }
    public function cab_del($cab_code){
        $arr_cab = cab_model::cab_del($cab_code);
        return redirect()->route('quan_li.cab_list');
    }
  
}
