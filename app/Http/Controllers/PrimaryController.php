<?php

namespace App\Http\Controllers;
use App\Models\Navigation;
use Illuminate\Http\Request;


class PrimaryController extends Controller
{
    protected $data = [];
    public function __construct(){
        $model = new Navigation();
        $navData = $model->getNav();
        $this->data['navigation'] = $navData;
    }
}
