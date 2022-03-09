<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\User;
use App\Models\Orders;


class AdminController extends Controller
{
    
    public function product()
    {
      return view('ADMIN.CRUD.product');
    }
    public function addproduct(Request $request)
    {
      $data=new products;
      $image=$request->file;

      $imagename=time().'.'.$image->getClientOriginalExtension();

      $request->file->move('image',$imagename);

      $data->image= $imagename;

      $data->proname=$request->proname;

      $data->price=$request->price;

      $data->category=$request->category;

      $data->subcategory=$request->subcategory;

      $data->description=$request->description;

      $data->quantity=$request->quantity;
      
      $data->save();

      return redirect()->back()->with('message','Product is added');
    }
    /*Show Products Controller*/
    public function displayproduct()
    {
      $data=products::all();
      return view('ADMIN.CRUD.displayproduct',compact('data'));
      
    }
     /*Products CRUD */
     public function deleteproduct($id){
      $data=products::find($id);
     $data->delete();
     return redirect()->back()->with('message','Product is deleted');
    }

  

    public function updateview($id){
      $data=products::find($id);
  return view('ADMIN.CRUD.updateproduct',compact('data'));
}


public function updateproduct(Request $request ,$id){
  $data=products::find($id);

  $image=$request->file;

if($image){
      $imagename=time().'.'.$image->getClientOriginalExtension();

      $request->file->move('image',$imagename);

      $data->image= $imagename;
      }


      $data->proname=$request->proname;

      $data->price=$request->price;

      $data->category=$request->category;

      $data->subcategory=$request->subcategory;

      $data->description=$request->description;

      $data->quantity=$request->quantity;
      
      $data->save();

      return redirect()->back()->with('message','Product is Updated ');

}



/*Update User */

  /*Show Users Controller*/
  public function displayuser(Request $request)
  {
    $data=user::all();
    
    $data->name=$request->name;

    $data->email=$request->email;

    $data->type=$request->type;

    $data->phone=$request->phone;

    $data->address=$request->address;

    $data->gender=$request->gender;
    

    return view('ADMIN.CRUD.displayuser',compact('data'));
  }

   /*USERS CRUD */
   public function deleteuser($id){
    $data=user::find($id);
   $data->delete();
   return redirect()->back()->with('message','User is deleted');
  }



public function updateviewuser($id){

  $data=user::find($id);
  return view('ADMIN.CRUD.updateuser',compact('data'));
}

public function updateuser(Request $request , $id){
      $data=user::find($id);


      $data->name=$request->name;

      $data->type=$request->type;

      $data->email=$request->email;

      $data->gender=$request->gender;

      $data->address=$request->address;

      $data->phone=$request->phone;
      
      $data->save();

      return redirect()->back()->with('message','User is Updated ');

}



 /*Create New User */
 
 
 public function newuser()
 {
   return view('ADMIN/CRUD/newuser');
 }
 
     public function createuser(Request $request){
      $data=new user;

     
      
      $data->name=$request->name;

      $data->email=$request->email;

      $data->type=$request->type;

      $data->phone=$request->phone;

      $data->address=$request->address;

      $data->gender=$request->gender;

      $data->password=$request->password;
      
      $data->save();

      return redirect()->back()->with('message','User is created');
     }




     //ORDERS
   //Display Orders 
public function showorders(Request $request){
  $data=orders::all();
      
      $data->name=$request->name;

      $data->phone=$request->phone;

      $data->address=$request->address;

      $data->products_proname=$request->products_proname;

      $data->quantity=$request->quantity;
      
      $data->status=$request->status;

      $data->price=$request->price;

  return view('ADMIN/CRUD/Orders',compact('data'));
}

  //Delete Order
  public function deleteorder($id){
    
    $data=orders::find($id);
    $data->delete();
    return redirect()->back()->with('message','Order is deleted');
  } 
  /*dISPLAY UPDATE TABLE */
public function updatevieworder($id){

  $data=orders::find($id);
  return view('ADMIN.CRUD.updateorders',compact('data'));
}

 
  public function updateorders(Request $request , $id){
    $data=orders::find($id);


    $data->name=$request->name;

    $data->phone=$request->phone;
    
    $data->address=$request->address;

    $data->products_proname=$request->products_proname;

    $data->quantity=$request->quantity;
    
    $data->status=$request->status;

    $data->price=$request->price;
    
    $data->save();

    return redirect()->back()->with('message','Order is Updated ');
  }
    
}
