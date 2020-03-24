<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Features;

class MainController extends PrimaryController
{
    public function Main(){
        try{
            $model = new Features();
            $getFeatures = $model->getFeatures();
            $this->data['features'] = $getFeatures;
            return view("pages/main",$this->data);

        }
        catch(\PDOException $ex){
            \Log::error("An error occured while getting data on main page" . $ex->getMessage());
        }
    }
    
}
