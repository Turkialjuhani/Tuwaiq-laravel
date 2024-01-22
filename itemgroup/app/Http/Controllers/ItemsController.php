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
      $data =Itemgroups::All();
      return view('itemgroup',['data'=>$data]);
    }

    public function SaveGroupsItems(Request $request)
    {
    
      $data = Itemgroups::Create([
        'itemgroupname'=>$request->itemgroupname
      ]);

      $data->save();
    
      return redirect('itemgroup');
    }
   // iteme page
    public function GetItems()
    {
      $itemgropno =Itemgroups::All();
      $data =Items::All();
      $req["itemgropno"]=$itemgropno;
      $req["data"]=$data;
      return view('items',$req);
    }

    public function SaveItems(Request $request)
    {
      $data = Items::Create([
        'itemname'=>$request-> itemname ,
        'price'=>$request->price ,
        'qty'=>$request->qty ,
        'color'=>$request->color , 
        'itemgropno'=>$request->itemgropno ,
      ]);

      $data->save();
    
      return redirect('items');


    }
    
}
