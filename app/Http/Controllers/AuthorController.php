<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends PrimaryController
{
    public function author(){
        return view("pages/author",$this->data);
    }
}
