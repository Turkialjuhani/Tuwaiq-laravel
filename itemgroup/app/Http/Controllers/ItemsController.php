<?php

namespace App\Http\Controllers;
use App\Models\itemgroups;
use App\Models\items;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;

use Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemsController extends Controller
{

  // ################# GET GROUPITEM IN HOMEPAGE ################
    public function GetItemGroup()
    {
      $data =Itemgroups::All();
      return view('itemgroup',['data'=>$data]);
    }

  // ################# SAVE GROUPITEM IN HOMEPAGE ################
    public function SaveGroupsItems(Request $request)
    {
      $data = Itemgroups::Create([
        'itemgroupname'=>$request->itemgroupname
      ]);

      $data->save();
    
      return redirect('itemgroup');
    }
    
 // ################# DELETE GROUPITEM IN HOMEPAGE ################

    public function deleteGroupItem($x)
    {
      $itemGroup = Itemgroups::find($x);
      $itemGroup ->delete();
      return redirect('itemgroup');

    }
    
  // ################# EDIT GROUPITEM IN HOMEPAGE ################

    public function editGroupItem($x)
    {
      $itemGroup = Itemgroups::where('id',$x)->first();
      return view('editgroupitem',['itemGroup'=>$itemGroup]);

    }

  // ################# UPDATE GROUPITEM IN HOMEPAGE ################

    public function UpdateGroupName(Request $req)
    {
      $itemGroup = Itemgroups::find($req->id);
      $itemGroup->itemgroupname = $req->namegruop;
      $itemGroup->save();
      return redirect('itemgroup');

    }
   // ###############ITEME HOMEPAGEe#################
    public function GetItems()
    {
      $itemgropno =Itemgroups::All();
      $data =Items::All();
      $req["itemgropno"]=$itemgropno;
      $req["data"]=$data;
      return view('items',$req);
    }
  // ################# SAVE ITEME HOMEPAGE ################
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
  // ################# DELETE ITEME HOMEPAGE ################


    public function deleteItem($y)
    {
      $item = Items::find($y);
      $item ->delete();
      return redirect('items');

    }

   // ################# EDIT ITEME HOMEPAGE ################


     public function editItem($x)
     {
      $item = Items::where('id',$x)->first();
      return view('edititem',['item'=>$item]);
 
     }
 
   // ################# UPDATE ITEME HOMEPAGE###############
 
     public function UpdateName(Request $req)
     {
      
       $item = Items::find($req->id);
       $item->itemname = $req-> itemname ;
       $item->price = $req-> price ;
       $item->qty = $req-> qty ;
       $item->color = $req-> color ;
       $item->itemgropno = $req-> itemgropno ;
       $item->save();
       return redirect('items');
 
     }

  // ################# DASHBORAD ################
  public function DisplayAddItemsgroup(){
       $data =Itemgroups::All();
       return view('dashbaord.addgroupsitem', ['data'=>$data]);

     }
     public function DispayItems()
     {
      $data = DB::table('itemgroups')
      ->join('items','itemgroups.itemgroupname','=','items.itemgropno')
      ->get();
      return view('dashbaord.cpanel',['data'=>$data]);
     }
    // ################# SAVE GROUPITEM IN DASHBORAD ################

     public function SaveGroupsItemsdashborad(Request $request)
     {
      $data = Itemgroups::Create([
        'itemgroupname'=>$request->itemgroupname
      ]);
 
       $data->save();
     
       return redirect('addgritem');
     }
     // ################# SAVE GROUPITEM IN DASHBORAD ################

     public function deleteGroupItemdash($x)
     {
       $itemGroup = Itemgroups::find($x);
       $itemGroup ->delete();
       return redirect('addgritem');
 
     }
      // ################# ITEM IN DASHBOARD ################
    
      public function DisplayAddItems(){
        $itemgropno =Itemgroups::All();
        $data =Items::All();
        $req["itemgropno"]=$itemgropno;
        $req["data"]=$data;
        return view('dashbaord.additems', $req);
      }

      // ################# SAVE IN DASHBOARD ################

      public function SaveItemsdashborad(Request $request)
     {
      $data = Items::Create([
        'itemname'=>$request-> itemname ,
        'price'=>$request->price ,
        'qty'=>$request->qty ,
        'color'=>$request->color , 
        'itemgropno'=>$request->itemgropno ,
      ]);
      $data->save();
      return redirect('additem');
     }

      // ################# DELETE IN DASHBOARD ################

     public function deleteItemdash($x)
     {
       $itemGroup = Items::find($x);
       $itemGroup ->delete();
       return redirect('additem');
 
     }

      // #################logout fuction ################
      public function logout()
      {
       Auth::logout();
       return redirect('login');
      }
      // #################HOME PAGE SHOW GROUPS ################

      public function Showitemsgroup()
      {

        $data = Itemgroups::All();
        $count=$data->count();
        return view('welcome',['data'=>$data,'count'=>$count]);

      }

   // #################HOME PAGE SHOW ITEMS ################

      public function ShowProd($id)
      {
        $data=Items::where('itemgropno',$id)
        ->get();
        Session::put('id',$id);
        return view('ShowProd',['data'=>$data]);
      }

  // #################HOME PAGE cart ################

     public function Addtocart($id){
      DB::table('cart')->insert(['iditem'=>$id]);
      $idgroup= Session::get('id');
      $count=DB::table('cart')->get()->count();
      Session::put('countitem',$count);
       return redirect('ShowProd/'. $idgroup);
  
     }
  // #################HOME PAGE Checkout ################

    public function checkout(){
      return view('checkout');
    }

  // #################HOME PAGE API TEST ################
   
   public function TestAPI()
   {
     $respones= Http::get('https://api.sampleapis.com/codingresources/codingResources');
     $data=$respones->object();
     return view('TestAPI' ,['data'=>$data]);
    }








     
    
}
