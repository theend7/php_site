<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\InsertDestRequest;
use App\Http\Requests\UpdateDestinationRequest;
use App\Models\Destinations;


use Illuminate\Support\Facades\DB;

class DestinationsController extends PrimaryController
{
    public function getDestinations(){
        try{
            $model = new Destinations();
            $destData = $model->getDestPag();
            $this->data['destinations'] = $destData;
            return view("pages/destinations",$this->data);
        }
        catch(\PDOException $ex){
            \Log::error("An error occured while sending getting destinations" . $ex->getMessage());
        }
       
    }
    public function search(Request $request){
        try{
            $destinationName = $request->input("search");
            if($destinationName == ""){
                $model= new Destinations();
                $destData = $model->getDestPag();
                $this->data['destinations'] = $destData;
                return view("pages/destinations",$this->data);
            }else{
                $model = new Destinations();
                $searchData = $model->searchData($destinationName);
                $searchData->appends(["search" => $destinationName]);
                $this->data['destinations'] = $searchData;
                return view("pages/destinations", $this->data);
            }
        }
        catch(\PDOException $ex){
            \Log::error("An error occured while search destinations" . $ex->getMessage());
        }
       
           
    }
    public function pageOneDestination(Request $request){
        try{
            $idDest = $request->input("idOneDest");
            $model = new Destinations();
            $oneDestination = $model->getOneDestination($idDest);
            $this->data['oneDestination'] = $oneDestination;
            return view("pages/oneDestination",$this->data);
        }
        catch(\PDOException $ex){
            \Log::error("An error occured while selecting one destination and display it" . $ex->getMessage());
        }
      
    }
    public function doInsert(InsertDestRequest $request){
        try{
            $picture = $request->file("picture");
            $alt = $request->input("alt");
            $name = $request->input("name");
            $price = $request->input("price");
            $idCat = $request->input("destCategory");

            if($picture->isValid()){
                $model = new Destinations();
                $nameOfPicture = time()."_".$picture->getClientOriginalName();
                $picture->move(\public_path()."/images", $nameOfPicture);
                $picturePath = "images/" . $nameOfPicture;
                $sendDest = $model->insertDest($picturePath,$alt,$name,$price,$idCat);
                if($sendDest){
                    return \redirect("/admin");
                }
                else{
                    return \redirect("/author");
                }
        
            }

        }
        catch(\PDOException $ex){
            \Log::error("An error occured while insert new destination" . $ex->getMessage());
        }
      
        
    }
    public function doUpdateDestination(UpdateDestinationRequest $request){
        try{
            $newPicture = $request->file("newPicture");
            $oldPhoto = $request->input("picture");
            $alt = $request->input("alt");
            $name = $request->input("name");
            $price = $request->input("price");
            $idDestination =$request->input("id");
    
            if(empty($newPicture)){
                $picturePath= $oldPhoto;
                $model = new Destinations();
                $sendDest = $model->updateDestination($idDestination,$picturePath,$alt,$name,$price);
                if($sendDest){
                    return \redirect("/admin");
                }
                else{
                    return \redirect("/author");
                }
    
            }
            else{
                if($newPicture->isValid()){
                    $model = new Destinations();
                    $nameOfPicture = time()."_".$newPicture->getClientOriginalName();
                    $newPicture->move(\public_path()."/images", $nameOfPicture);
                    $picturePath = "images/" . $nameOfPicture;
                    $sendDest = $model->updateDestination($idDestination,$picturePath,$alt,$name,$price);
                    if($sendDest){
                        return \redirect("/admin");
                    }
                    else{
                        return \redirect("/author");
                    }
                }
            }
        }
        catch(\PDOException $ex){
            \Log::error("An error occured while updating new destination" . $ex->getMessage());
        }
    }
    
       
}
 
   

