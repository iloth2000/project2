<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class car_brand_model extends Model
{
    static function car_brand(){
        $sql ="select * from car_brand";
        $result = DB::select($sql);
        return $result;
    }
    public function car_brand_insert_process(){
        DB::insert("insert into car_brand (brand_name) values (?)",[
            $this->brand_name,
        ]);
    
    }
    static function car_brand_update($brand_code){ 
        $sql ="select * from car_brand where brand_code='$brand_code'";
        $result = DB::select($sql);
        return $result;
    }
    public function car_brand_update_process(){
        DB::update("update car_brand set brand_name=? where brand_code = ?",[
            $this->brand_name,
            $this->brand_code
        ]);    
    }
    public static function car_brand_del($brand_code){
        $sql ="delete from car_brand where brand_code='$brand_code'";
        DB::delete($sql);
    }
}
