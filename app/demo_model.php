<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class demo_model extends Model
{
    
    public $user;
    public $pass;
    static function login_process($user,$pass){ 
        $arr_login =DB::select("select * from admin where user=? and password=?",[
                $user,  
                $pass
        ]);
        return $arr_login;
    }
    static function index(){
        $sql ="SELECT * FROM car_type WHERE type_code=(SELECT max(type_code) FROM car_type);";
        $result = DB::select($sql);
        return $result;
    }
    static function index_type($type_code){
        $sql ="SELECT * FROM cab WHERE type_code=$type_code;";
        $result = DB::select($sql);
        return $result;
    }
    static function brand(){
        $sql ="SELECT * FROM car_brand WHERE brand_code=(SELECT max(brand_code) FROM car_brand);";
        $result = DB::select($sql);
        return $result;
    }
    static function cab(){
        $sql ="SELECT * FROM cab WHERE cab_code=(SELECT max(cab_code) FROM cab);";
        $result = DB::select($sql);
        return $result;
    }
    static function cus(){
        $sql ="SELECT * FROM customer WHERE customer_code=(SELECT max(customer_code) FROM customer);";
        $result = DB::select($sql);
        return $result;
    }
    static function car_type(){
        $sql ="select * from car_type";
        $result = DB::select($sql);
        return $result;
    }
    public function car_type_insert_process(){
        DB::insert("insert into car_type (type_name) values (?)",[
            $this->type_name,
        ]);
    }
    static function car_type_update($type_code){ 
        $sql ="select * from car_type where type_code='$type_code'";
        $result = DB::select($sql);
        return $result;
    }
    public function car_type_update_process(){
        DB::update("update car_type set type_name=? where type_code = ?",[
            $this->type_name,
            $this->type_code
        ]);    
    }
    public static function car_type_del($type_code){
        $sql ="delete from car_type where type_code='$type_code'";
        DB::delete($sql);
    }

   
}