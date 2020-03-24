<?php 
namespace App\Models;

class User{
    public function getUser($email,$password){
        return \DB::table("korisnici")
        ->select("*")
        ->where([
            ["email",$email],
            ["lozinka",md5($password)]
        ])
        ->get();
    }
    public function getUsers(){
        return \DB::table("korisnici as k")
        ->join("uloga as u","k.idUloga","=","u.idUloga")
        ->select("*")
        ->get();
    }
    public function getSameData($email,$username){
        return \DB::table("korisnici")
        ->where("email",$email)
        ->orWhere("username",$username)
        ->get();
    }
    public function insert($name,$lastName,$email,$username,$password){
        return \DB::table("korisnici")
        ->insert(["idKorisnik" => null,"ime" => $name,"prezime" => $lastName,"email"=>$email,"username"=>$username,"lozinka"=>md5($password),"idUloga"=>2]);
    }
    public function deleteUser($idUser){
        return \DB::table("korisnici")
        ->where("idKorisnik",$idUser)
        ->delete();
    }
    public function getUserId($id){
        return \DB::table("korisnici")
        ->where("idKorisnik",$id)
        ->get();
    }
    public function update($idUser,$name,$lastName,$email,$username,$idRole){
        return \DB::table("korisnici")
        ->where("idKorisnik",$idUser)
        ->update(['ime' => $name, 'prezime' => $lastName,'email'=>$email,'username'=>$username,"idUloga"=>$idRole]);
    }
    public function getIfExistEmail($username){
        return \DB::table("korisnici")
        ->select("idKorisnik")
        ->where("username",$username)
        ->get();
    }
    public function changePassword($idUser,$newPassword){
        return \DB::table("korisnici")
        ->where("idKorisnik",$idUser)
        ->update(["lozinka" => md5($newPassword)]);
    }
}