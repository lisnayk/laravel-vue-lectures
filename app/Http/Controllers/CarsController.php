<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarsController extends AppBaseController
{
  public function index(){
      $query = Car::query();
      $query->with(["model"]);
      return $this->sendResponse($query->paginate(),"ok");
  }
}
