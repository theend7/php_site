<?php 
namespace App\Models;

class Navigation {
    

    public function getNav(){
        return \DB::table("linkovi")
        ->get();
    }
}

