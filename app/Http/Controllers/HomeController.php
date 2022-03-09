<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Products;
use App\Models\User;
use App\Models\Cart;
use App\Models\Orders;


class HomeController extends Controller
{
    //
    public function redirect(){
    $type=Auth::user()->type;

    if($type=='1'){
        return view('ADMIN.dashboard');
    }
    
    if($type=='2'){
        return view('APIuser.dashboard');
    }
    else{
        $data = products::paginate(3);

    $user=auth()->user();
    $count=cart::where('phone',$user->phone)->count();    
      return view('Home.home',compact('data','count'));
      
    } }
/* Guides to  Home page*/
    public function index(){
        if (Auth::id())
        {
            return redirect('redirect');
        }else{
            $data = products::paginate(3);
           // $user=auth()->user();
           //  $count=cart::where('phone',$user->phone)->count(); 
      return view('Home.home',compact('data'));
        }
      
    } 

    //Product page
    public function productpg(){
        $data = products::paginate(0);

       if ($user=auth()->user()){
   $count=cart::where('phone',$user->phone)->count(); 
    return view('Home.productpg',compact('data','count'));
}
    else{
        return view('Home.productpg',compact('data'));
    }
    }

    //Search Function in products page 
    public function search(Request $request)
    {
     $search=$request->search;
     if($search=='')
     {
         $data=products::paginate(3);
         
        $data=products::where('proname','Like','%'.$search.'%')->orwhere('category','Like','%'.$search.'%')->orwhere('subcategory','Like','%'.$search.'%')->get();
         return view('Home.productpg',compact('data'));
      
     }
else{

     $user=auth()->user();
     //$count=cart::where('phone',$user->phone)->count();

     $data=products::where('proname','Like','%'.$search.'%')->orwhere('category','Like','%'.$search.'%')->orwhere('subcategory','Like','%'.$search.'%')->get();

     return view('Home.productpg',compact('data','count'));
    }}

    public function addcart(Request $request,$id)
    {

  if(Auth::id())
  {
      $user=auth()->user();
      $products=products::find($id);
      $cart=new cart;

      $cart->name=$user->name;
      $cart->phone=$user->phone;
      $cart->address=$user->address;

    
      $cart->products_proname=$products->proname;
      $cart->price=$products->price;
      $cart->price=$products->price;

      $cart->quantity=$request->quantity;
      $cart->save();

  return redirect()->back()->with('message','Product is added to cart ');
  }  
  else{
      return redirect('login');
  }  
}
/* SHOW CART */
public function showcart(Request $request)
{
    $user=auth()->user();
    $count=cart::where('phone',$user->phone)->count();

    $data=cart::all();
      
    $data->products_proname=$request->products_proname;

    $data->quantity=$request->quantity;

    $data->price=$request->price;

   
    
    return view('Home.showcart',compact('data','count'));


}
/*Delete Cart*/ 
public function deletecart($id){

    $data=cart::find($id);

     $data->delete();

     return redirect()->back()->with('message','Product is remove from cart');
}
//Orders
public function order(Request $request)
{
    $user=auth()->user();

    $name=$user->name;
    $phone=$user->phone;
    $address=$user->address;

foreach($request->products_proname as $key=>$products_name)
   {
   $orders=new orders;

   $orders->products_proname=$request->products_proname[$key];
   $orders->price=$request->price[$key];
   $orders->quantity=$request->quantity[$key];

 $orders->name=$name;
 $orders->phone=$phone;
 $orders->address=$address;
 $orders->status='Going through delivery';

$orders->save();

   }  
   DB::table('carts')->where('phone',$phone)->delete();
   return redirect()->back()->with('message','Ordered succesfully');
   

}
   
}
