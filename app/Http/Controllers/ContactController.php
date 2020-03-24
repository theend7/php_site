<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Questions;

class ContactController extends PrimaryController
{
    public function contact(){
        return view("pages/contact",$this->data);
    }
    public function goContact(ContactRequest $request){
        try{
            $name = $request->input("name");
            $lastName = $request->input("lastName");
            $email = $request->input("email");
            $message = $request->input("message");
            $datum = "";
    
            $model = new Questions();
            $sendQuestion = $model->insertQuestion($name,$lastName,$message,$email);
            if($sendQuestion){
                return \redirect("/")->with("message","Your question sent successfully!");
            }
            else{
                return \redirect("/destinations")->with("message","Your question is not sent!");
            }
        }
        catch(\PDOException $ex){
            \Log::error("An error occured while sending question for admin" . $ex->getMessage());
        }
    }
}
