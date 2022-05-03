<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class contract_model extends Model
{
    static function contract(){
        $sql ="select * from contract ";
        $result = DB::select($sql);
        return $result;
    }
    public function contract_insert_process(){
        DB::insert("insert into contract (customer_code,cab_code,deposit,daily_rental_price,return_cars_date,date_of_hire,expiration_date,status) values (?,?,?,?,?,?,?,?)",[
            $this->customer_code,
            $this->cab_code,
            $this->deposit,
            $this->daily_rental_price,
            $this->return_cars_date,
            $this->date_of_hire,
            $this->expiration_date,
            $this->status
        ]);    
    }
    static function contract_update($contract_code){ 
        $sql ="select * from contract where contract_code='$contract_code'";
        $result = DB::select($sql);        
        return $result;
    }
    public function contract_update_process(){
        DB::update("update contract set customer_code=?,cab_code=?,deposit=?,daily_rental_price=?,return_cars_date=?,date_of_hire=?,expiration_date=?,status=? where contract_code = ?",[
            $this->customer_code,
            $this->cab_code,
            $this->deposit,
            $this->daily_rental_price,
            $this->return_cars_date,
            $this->date_of_hire,
            $this->expiration_date,
            $this->status,
            $this->contract_code
        ]);         
    }
    public static function contract_del($contract_code){
        $sql ="delete from contract where contract_code='$contract_code'";
        DB::delete($sql);
    }   
    static function get_day($contract_code){ 
        $result = DB::SELECT("SELECT DATEDIFF(return_cars_date,date_of_hire) AS Tong FROM contract 
        WHERE contract_code='$contract_code'");
        return $result;       
    }
    static function get_contract($contract_code){
        $sql ="select * from contract inner join customer on contract.customer_code = customer.customer_code 
        inner join cab on contract.cab_code=cab.cab_code where contract_code='$contract_code' ";
        $result = DB::select($sql);
        return $result;
    }
}
