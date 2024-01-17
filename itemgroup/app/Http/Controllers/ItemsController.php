<?php

namespace App\Http\Controllers;
use App\Models\itemgroups;
use App\Models\items;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function GetItemGroup()
    {
      $data =itemgroups::All();
      return view('itemgroup',['data'=>$data]);
    }
}
