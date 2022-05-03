<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class cab_model extends Model
{
    static function get_all(){
        $sql ="select * from cab  inner join car_brand on cab.brand_code=car_brand.brand_code ";
        $result = DB::select($sql);
        return $result;
    }
    static function insert(){ 
        $sql ="select * from car_type";
        $result = DB::select($sql);
        return $result;
    }
    public function cab_insert_process(){
        DB::insert("insert into cab(car_name,type_code,brand_code,price,license_plate,status,description) values (?,?,?,?,?,0,?)",[
            $this->car_name,
            $this->type_code,
            $this->brand_code,
            $this->price,
            $this->license_plate,   
            $this->description,
        ]);
    }
    static function cab_update($cab_code){ 
        $sql ="select * from cab inner join car_type on cab.type_code=car_type.type_code inner join car_brand on cab.brand_code=car_brand.brand_code  where cab_code='$cab_code'";
        $result = DB::select($sql);
        return $result;
    }
    public function cab_update_process(){
        DB::update("update cab set car_name=?,type_code=? ,brand_code=?,price=?,license_plate=?,status=?,description=? where cab_code = ?",[
            $this->car_name,
            $this->type_code,
            $this->brand_code,
            $this->price,
            $this->license_plate,
            $this->status,
            $this->description,
            $this->cab_code
        ]);    
    }
    public static function cab_del($cab_code){
        $sql ="delete from cab where cab_code='$cab_code'";
        DB::delete($sql);
    }
   
}
