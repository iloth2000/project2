<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contract_model;
class contract_ctl extends Controller
{
    public function contract_list(){
        $arr = contract_model::contract();
        return view('contract/contract',compact('arr'));
    }
    public function contract_insert(){
        return view('contract/contract_insert');
    }
    public function contract_insert_process(Request $rq){
        $contract = new contract_model();
        $contract->customer_code = $rq->customer_code;
        $contract->cab_code = $rq->cab_code;
        $contract->deposit = $rq->deposit;
        $contract->daily_rental_price = $rq->daily_rental_price;
        $contract->return_cars_date = $rq->return_cars_date;
        $contract->date_of_hire = $rq->date_of_hire;
        $contract->expiration_date = $rq->expiration_date;
        $contract->status = $rq->status;
        $contract->contract_insert_process();
        return redirect()->route('quan_li.contract_list');
    }
    public function contract_update($contract_code){
        $arr_1 = contract_model::contract_update($contract_code);
        return view('contract/contract_update',compact('arr_1'));
    }
    public function contract_update_process(Request $rq1){
        $contract = new contract_model();
        $contract->contract_code = $rq1->contract_code;
        $contract->customer_code = $rq1->customer_code;
        $contract->cab_code = $rq1->cab_code;
        $contract->deposit = $rq1->deposit;
        $contract->daily_rental_price = $rq1->daily_rental_price;
        $contract->return_cars_date = $rq1->return_cars_date;
        $contract->date_of_hire = $rq1->date_of_hire;
        $contract->expiration_date = $rq1->expiration_date;
        $contract->status = $rq1->status;
        $contract->contract_update_process();
        return redirect()->route('quan_li.contract_list');
    }
    public function contract_del($contract_code){
        $arr_contract = contract_model::contract_del($contract_code);
        return redirect()->route('quan_li.contract_list');
    }
    public function contract_detail($contract_code){ 
        $arr_2 = contract_model::get_contract($contract_code);
        $values = contract_model::get_day($contract_code);
        return view('contract/contract_detail',compact('values','arr_2'));
        
    }
}
