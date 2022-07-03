<?php
namespace App\Models;

class Bill {
    public static function all(){
        return [
                [
                'id' => 1,
                'title' => 'bill one',
                'description' => 'lorem'
            ],
                [
                'id' => 2,
                'title' => 'bill two',
                'description' => 'lorem'
            ]
    
                ];
              
    }


    public static function find($id){
       $bills = self::all();


       foreach($bills as $bill){
        if($bill['id'] == $id){
            return $bill;
           }
       }
       
    }
}