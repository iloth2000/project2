<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cus_model;
class cus_ctl extends Controller
{
    
    public function cus_list(){
        $arr_list = cus_model::get_all();
        return view('customer/cus_list',compact('arr_list'));
    }
    public function cus_insert(){
        return view('customer/cus_insert');
    }
    public function cus_insert_process(Request $rq){
        $this->validate($rq,[
            'user'=>'required|min:1|max:50|unique:customer,user'
        ],
        [
            'user.required'=>'Bạn chưa nhập tài khoản',
            'user.min'=>'Tài khoản phải có độ dài từ 1 đến 50 kí tự',
            'user.max'=>'Tài khoản phải có độ dài từ 1 đến 50 kí tự',
            'user.unique'=>'Tên đăng nhập đã tồn tại'
        ]);
        $cus = new cus_model();
        $cus->fullname = $rq->fullname;
        $cus->phone_number = $rq->phone_number;
        $cus->birthday = $rq->birthday;
        $cus->ID_card  = $rq->ID_card;
        $cus->address  = $rq->address;
        $cus->user  = $rq->user;
        $cus->password  = $rq->password;
        $cus->cus_insert_process();
        return redirect()->route('quan_li.cus_list');
    }
    public function cus_update($customer_code){
        $arr_cus = cus_model::cus_update($customer_code);
        return view('customer/cus_update',compact('arr_cus'));
    }
    public function cus_update_process(Request $rq1){
        $cus1 = new cus_model();
        $cus1->customer_code = $rq1->customer_code;
        $cus1->fullname = $rq1->fullname;
        $cus1->phone_number = $rq1->phone_number;
        $cus1->birthday = $rq1->birthday;
        $cus1->ID_card  = $rq1->ID_card;
        $cus1->address  = $rq1->address;
        $cus1->user  = $rq1->user;
        $cus1->password  = $rq1->password;
        $cus1->cus_update_process();
        return redirect()->route('quan_li.cus_list');
    }
    public function cus_del($customer_code){
        $arr_cus = cus_model::cus_del($customer_code);
        return redirect()->route('quan_li.cus_list');
    }
  
}
