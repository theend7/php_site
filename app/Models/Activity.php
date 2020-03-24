<?php 
namespace App\Models;

class Activity {
    

    public function sendActivity($name,$lastName,$activityRegister,$date){
        return \DB::table("aktivnosti")
        ->insert(["idAktivnost"=>null,"ime"=>$name,"prezime"=>$lastName,"nazivAktivnosti"=>$activityRegister,"datum"=>$date]);   
    }
    public function getActivity(){
        return \DB::table("aktivnosti")
        ->orderBy("idAktivnost","DESC")
        ->get();
    }
    public function deleteActivity($idActivity){
        return \DB::table("aktivnosti")
        ->where("idAktivnost",$idActivity)
        ->delete();
    }
    public function dateActivity($date){
        return \DB::table("aktivnosti")
        ->where("datum",$date)
        ->get();
    }
}

