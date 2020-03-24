<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destinations;
use App\Models\User;
use App\Models\Questions;
use App\Models\Experiences;
use App\Models\Activity;

use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\ExperienceDestRequest;


class AdminController extends PrimaryController
{
    public function admin(){
        try{
            $model = new Destinations();
            $destData = $model->getDest();
            $modelUser = new User();
            $usersData = $modelUser->getUsers();
            $modelQuestion = new Questions();
            $questData = $modelQuestion->getQuestions();
            $modelExperiances = new Experiences();
            $expData = $modelExperiances->getExperiences();
            $modelActivity = new Activity();
            $dataActivity = $modelActivity->getActivity();
            $this->data['adminUsers'] = $usersData;
            $this->data['adminDestinations'] = $destData;
            $this->data['adminQuestions'] = $questData;
            $this->data['experiances'] = $expData;
            $this->data['activity'] = $dataActivity;
            return view("pages/admin",$this->data);
        }
        catch(\PDOException $ex){
            \Log::error("An error occured while get some information in database" . $ex->getMessage());
        }
    }
    public function deleteUserId($idUser){
        try{
            $model = new User();
            $deleteUser = $model->deleteUser($idUser);
            $dataUsers = $model->getUsers();
            return ["data" => $dataUsers];
        }
        catch(\PDOException $ex){
            \Log::error("An error occured while deleting user" . $ex->getMessage());
        }
    }
    public function deleteDestinationId($idDestination){
        try{
            $model = new Destinations();
            $deleteDestination = $model->deleteDestination($idDestination);
            $dataDestinations = $model->getDest();
            return ["data" => $dataDestinations];
        }
        catch(\PDOException $ex){
            \Log::error("An error occured while deleting destination" . $ex->getMessage());
        }
    }
    public function deleteQuestionId($idQuestion){
        try{
            $model = new Questions();
            $deleteQuestion = $model->deleteQuestion($idQuestion);
            $dataQuestions = $model->getQuestions();
            return ["data" => $dataQuestions];
        }
        catch(\PDOException $ex){
            \Log::error("An error occured while deleting question" . $ex->getMessage());
        }
    }
    public function deleteExpId($idExp){
        try{
            $model = new Experiences();
            $deleteExp = $model->deleteExp($idExp);
            $dataExp = $model->getExperiences();
            return ["data" => $dataExp];
        }
        catch(\PDOException $ex){
            \Log::error("An error occured while deleting experiance" . $ex->getMessage());
        }
    }
    public function deleteActivityId($idActivity){
        try{
            $model = new Activity();
            $deleteActivity = $model->deleteActivity($idActivity);
            $dataActivity = $model->getActivity();
            return ["data" => $dataActivity];
        }
        catch(\PDOException $ex){
            \Log::error("An error occured while deleting activity" . $ex->getMessage());
        }
    }
    public function insertDestinations(){
        try{
            $modelCategory = new Destinations();
            $dataCategory = $modelCategory->getCategory();
            $this->data['category'] = $dataCategory;
            return view("pages/insert",$this->data);
        }
        catch(\PDOException $ex){
            \Log::error("An error occured while insert destination" . $ex->getMessage());
        }
       
    }
    public function updateDestinations(){
        return view("pages/update",$this->data);
    }
    public function updateUsers(){
        return view("pages/updateUsers",$this->data);
    }
    public function displayDestinationId($id){
        try{
            $model = new Destinations();
            $dataDest = $model->getDestinationId($id);
            $this->data['displayDestinationId'] = $dataDest;
            return view("pages/update",$this->data);
        }
        catch(\PDOException $ex){
            \Log::error("An error occured while get destination" . $ex->getMessage());
        }
    }
    public function displayUserId($id){
        try{
            $model = new User();
            $dataUser = $model->getUserId($id);
            $this->data['displayUserId'] = $dataUser;
            return view("pages/updateUsers",$this->data);
        }
        catch(\PDOException $ex){
            \Log::error("An error occured while display user" . $ex->getMessage());
        }
    }
    public function updateUser(UpdateUserRequest $request){
        try{
            $name = $request->input("name");
            $lastName = $request->input("lastName");
            $email = $request->input("email");
            $username = $request->input("username");
            $idRole = $request->input("idUloga");
            $idUser = $request->input("id");
            $model = new User();
            $updateUser = $model->update($idUser,$name,$lastName,$email,$username,$idRole);
            if($updateUser){
                return \redirect("/admin")->with("message","Success update");
            }
            else{
                return \redirect("/admin/updateUsers")->with("message","Fail update");
            }
        }
        catch(\PDOException $ex){
            \Log::error("An error occured while updating user" . $ex->getMessage());
        }
    }

    public function authUserExperience(ExperienceDestRequest $request){
        try{
            $nameAuthUser = $request->input("nameOfUser");
            $emailAuthUSer = $request->input("emailOfUser");
            $experience = $request->input("experience");
            $idDestination = $request->input("idDestAuth");
            $model = new Experiences();
            $insert = $model->insert($nameAuthUser,$emailAuthUSer,$experience,$idDestination);
            if($insert){
                return \redirect("/destinations")->with("message","You send your experience to us. Thanks!");
            }
            else{
                return \redirect("/destinations")->with("message","You dont send your experience to us,try later again!");
            }
        }
        catch(\PDOException $ex){
            \Log::error("An error occured while sending user experiance of destination" . $ex->getMessage());
        }
       
    }
    public function dateOfActivity($date){
        $model = new Activity();
        $dataOfDate = $model->dateActivity($date);
        return ["data"=>$dataOfDate];

    }
  
 
}
