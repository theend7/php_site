<?php 
namespace App\Models;

class Questions{
    public function insertQuestion($name,$lastName,$message,$email){
        return \DB::table("kontakt")
        ->insert(["idKontakt" => null,"imeKorisnika" => $name,"prezimeKorisnika" => $lastName,"pitanje"=>$message,"emailKorisnika"=>$email]);
    }
    public function getQuestions(){
        return \DB::table("kontakt")
        ->get();
    }
    public function deleteQuestion($idQuestion){
        return \DB::table("kontakt")
        ->where("idKontakt",$idQuestion)
        ->delete();
    }
}

