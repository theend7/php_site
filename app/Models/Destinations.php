<?php 
namespace App\Models;

class Destinations {
    

    public function getDest(){
        return \DB::table("proizvodi")
        ->get();
    }
    public function getDestPag(){
        return \DB::table("proizvodi")->paginate(4);
    }
    public function deleteDestination($idDestination){
        return \DB::table("proizvodi")
        ->where("idProizvoda",$idDestination)
        ->delete();
    }
    public function getDestinationId($id){
        return \DB::table("proizvodi as p")
        ->join("kategorija as kat","p.idKategorija","=","kat.idKategorija")
        ->where("idProizvoda",$id)
        ->get();
    }
    public function searchData($destinationName){
        return \DB::table("proizvodi")
        ->where("naziv","like", "%" .$destinationName. "%")
        ->paginate(4)
        ->setpath('');   
    }
    public function getOneDestination($idDest){
        return \DB::table("proizvodi")
        ->where("idProizvoda",$idDest)
        ->get();
    }
    public function insertDest($picturePath,$alt,$name,$price,$idCat){
        return \DB::table("proizvodi")
        ->insert(["idProizvoda"=>null,"slika"=>$picturePath,"alt"=>$alt,"naziv"=>$name,"cena"=>$price,"idKategorija"=>$idCat]);
    }
    public function getCategory(){
        return \DB::table("kategorija")
        ->get();
    }
    public function updateDestination($idDestination,$picturePath,$alt,$name,$price){
        return \DB::table("proizvodi")
        ->where("idProizvoda",$idDestination)
        ->update(["slika"=>$picturePath,"alt"=>$alt,"naziv"=>$name,"cena"=>$price]);
    }
    
}