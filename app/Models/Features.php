<?php 
namespace App\Models;

class Features {

    public function getFeatures(){
        return \DB::table("features")
        ->get();
    }
}