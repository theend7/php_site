<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\CheckEmailRequest;
use App\Http\Requests\doResetPasswordRequest;
use App\Models\User;
use App\Models\Activity;

class AuthenticationController extends PrimaryController
{
    public function login(){
        return view("pages/login",$this->data);
    }
    public function goLogin(LoginRequest $request){
        try{
            $email = $request->input("email");
            $password = $request->input("password");
    
            $model = new User();
            $user = $model->getUser($email,$password);
            if($user->count() == 1){
                $request->session()->put("user",$user);
                $activityRegister = "Login";
                $date = date("Y-m-d");
                $model= new Activity();
                $name = session('user')[0]->ime;
                $lastName = session('user')[0]->prezime;
                $send = $model->sendActivity($name,$lastName,$activityRegister,$date);
                return \redirect("/")->with("message","Login success!");
            }else{
                return \redirect("/login")->with("message","You are not in ours database!");
            }
        }
        catch(\PDOException $ex){
            \Log::error("An error occured while login user" . $ex->getMessage());
        }
       

    }
    public function logout(Request $request){
        
            $activityRegister = "Logout";
            $model= new Activity();
            $name = session('user')[0]->ime;
            $lastName = session('user')[0]->prezime;
            $date = date("Y-m-d");
            $send = $model->sendActivity($name,$lastName,$activityRegister,$date);
            $request->session()->forget("user");
            $request->session()->flush();
            return \redirect("/login")->with("message","Success logout!");
        
        
    }
    public function forgetPassword(){
        return view("pages/forgetPass",$this->data);
    }
    public function resetPassword(CheckEmailRequest $request){
        try{
            $username = $request->input("username");
            $model = new User();
            $checkUsername = $model->getIfExistEmail($username);
            $this->data['idUserEmail'] = $checkUsername;
           
            if($checkUsername->count()>0){
                 return view("pages/resetPassword",$this->data);
                 
            }
            else{
                return \redirect("/forgetPassword")->with("message","Your email do not exist in our database!");
            }    
        }
        catch(\PDOException $ex){
            \Log::error("An error occured while reseting password" . $ex->getMessage());
        }
    }
    public function doResetPassword(doResetPasswordRequest $request){
        try{
            $idUser = $request->input("idUser");
            $newPassword = $request->input("newPass");
            $model = new User();
            $changePassword = $model->changePassword($idUser,$newPassword);
            if($changePassword){
                return \redirect("/login")->with("message","Your password successfuly changed");
            }
            else{
                return \redirect("/resetPassword")->with("message","password change fail");
            }
        }
        catch(\PDOException $ex){
            \Log::error("An error occured while reseting password" . $ex->getMessage());
        }
    }
}
