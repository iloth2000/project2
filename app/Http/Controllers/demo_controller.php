<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\demo_model;
use App\cab_model;
use App\car_brand_model;
class demo_controller extends Controller
{
    public function login(){
        return view('login');
        }
    public function index(){
        $arr_1 = demo_model::index();
        $arr_2 = demo_model::cab();
        $arr_3 = demo_model::cus();
        $arr_4 = demo_model::brand();
        $arr_list = cab_model::get_all();
        $arr_t = cab_model::insert();
        $arr_brand = car_brand_model::car_brand();
        return view('index',compact('arr_1','arr_2','arr_3','arr_4','arr_list','arr_t','arr_brand'));
    }
    public function index_type($type_code){
        $arr_type = demo_model::index_type($type_code);
        return view('index',compact('arr_type'));
    }
    public function profile(){
            return view('profile');
    }
    public function profile_process(Request $rq2){
        $profile = new demo_model();
        $profile->type_code = $rq2->type_code;
        $profile->type_name = $rq2->type_name;
        $profile->car_type_update_process();
        return redirect()->route('quan_li.car_type');
    }
    public function login_process(Request $rq){
        $user = $rq->user;
        $pass = $rq->password;
        $arr_login =demo_model::login_process($user,$pass);
        if(count($arr_login)==1){
            $rq->session()->put('code',$arr_login[0]->code);
            return redirect()->route('quan_li.index');
        }
        else{
            return redirect()->route('login')->with('success','Tài khoản hoặc mật khẩu sai');
        }
    }
    public function logout(Request $rq){        
        $rq->session()->flush();
        return redirect()->route('login');
    }
   
    public function car_type(){
        $arr = demo_model::car_type();
        return view('car_type',compact('arr'));
    }
    public function car_type_insert(){
        return view('car_type_insert');
    }
    public function car_type_insert_process(Request $rq){
        $this->validate($rq,[
            'type_name'=>'required|min:1|max:50|unique:car_type,type_name'
        ],
        [
            'type_name.required'=>'Bạn chưa nhập số ghê xe',
            'type_name.min'=>'Loại xe phải có độ dài từ 1 đến 50 kí tự',
            'type_name.max'=>'Loại xe phải có độ dài từ 1 đến 50 kí tự',
            'type_name.unique'=>'Loại xe này đã tồn tại'
        ]);
        $type = new demo_model();  
        $type->type_name = $rq->type_name;
        $type->car_type_insert_process();
        return redirect()->route('quan_li.car_type');
    }
    public function car_type_update($type_code){
        $arr_type = demo_model::car_type_update($type_code);
        return view('car_type_update',compact('arr_type'));
    }
    public function car_type_update_process(Request $rq1){
        $type1 = new demo_model();
        $type1->type_code = $rq1->type_code;
        $type1->type_name = $rq1->type_name;
        $type1->car_type_update_process();
        return redirect()->route('quan_li.car_type');
    }
    public function car_type_del($type_code){
        $arr_type = demo_model::car_type_del($type_code);
        return redirect()->route('quan_li.car_type');
    }
    
}