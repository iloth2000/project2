<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class cus_model extends Model
{
    static function get_all(){
        $sql ="select * from customer";
        $result = DB::select($sql);
        return $result;
    }
  
    public function cus_insert_process(){
        DB::insert("insert into customer(fullname,phone_number,birthday,ID_card,address,user,password) values (?,?,?,?,?,?,?)",[
            $this->fullname,
            $this->phone_number,
            $this->birthday,
            $this->ID_card,
            $this->address,
            $this->user,
            $this->password,
        ]);
    }
    static function cus_update($customer_code){ 
        $sql ="select * from customer where customer_code='$customer_code'";
        $result = DB::select($sql);
        return $result;
    }
    public function cus_update_process(){
        DB::update("update customer set fullname=? ,phone_number=?,birthday=?,ID_card=?,address=?,user=?,password=? where customer_code = ?",[
            $this->fullname,
            $this->phone_number,
            $this->birthday,
            $this->ID_card,
            $this->address,
            $this->user,
            $this->password,
            $this->customer_code
        ]);    
    }
    public static function cus_del($customer_code){
        $sql ="delete from customer where customer_code='$customer_code'";
        DB::delete($sql);
    }
}
