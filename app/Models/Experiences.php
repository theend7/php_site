<?php 
namespace App\Models;

class Experiences {
    

    public function getExperiences(){
        return \DB::table("iskustva as i")
        ->join("proizvodi as p","i.idProizvoda" ,"=" ,"p.idProizvoda")
        ->get();
    }
    public function insert($nameAuthUser,$emailAuthUSer,$experience,$idDestination){
        return \DB::table("iskustva")
        ->insert(["idIskustva"=>null,"ime"=>$nameAuthUser,"email"=>$emailAuthUSer,"tekstIskustva"=>$experience,"idProizvoda"=>$idDestination]);
    }
  
    public function deleteExp($idExp){
        return \DB::table("iskustva")
        ->where("idIskustva",$idExp)
        ->delete();
    }
}

