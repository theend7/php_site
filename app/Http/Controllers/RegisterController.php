<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\Activity;

class RegisterController extends PrimaryController
{
    public function register(){
        return view("pages/register",$this->data);
    }
    public function goRegister(RegisterRequest $request){
    try{
        $name = $request->input("name");
        $lastName = $request->input("lastName");
        $email = $request->input("email");
        $username = $request->input("user");
        $password = $request->input("password");

        $model = new User();
        $dataCheck = $model->getSameData($email,$username);
      
        if($dataCheck->count() > 0){
            return \redirect("/register")->with("message","Already email or username in database!");
        }
        else{
            $dataSend = $model->insert($name,$lastName,$email,$username,$password);
            if($dataSend){
                $activityRegister = "Register";
                $date = date("Y-m-d");
                $model= new Activity();
                $send = $model->sendActivity($name,$lastName,$activityRegister,$date);
                return \redirect("/login")->with("message","Insert Success");
            }
            else{
                return \redirect("/register")->with("message","Insert fail");
            }
        }

    }
    catch(\PDOException $ex){
        \Log::error("An error occured while register user" . $ex->getMessage());
    }

        
       
    }
}
