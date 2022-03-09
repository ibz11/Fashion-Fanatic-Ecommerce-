<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
  <style type="text/css">
 .header{
    color:white;font-size:30px; padding-top:27px;

 }
 label{
     display:inline-block;
     width:250px;
 }
 input[type=text]{
     color:black;
 }
  </style>

    @include('ADMIN.admincss')

  </head>
  <body>
  @include('ADMIN.sidebar')
      <!-- partial -->
      @include('ADMIN.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

        <div class="container" align="center">
        <h1 class="header" >UPDATE ORDERS</h1>

   @if (session()->has('message'))
   <div class="alert alert-primary">
   <button type="button" class="close" data-dismiss="alert">x</button>
   {{session()->get('message')}};
</div>
   @endif


   <form action="{{url('updateorders',$data->id)}}"  method="post" enctype="multipart/form-data" > 
   
   @csrf

   <div style="padding:15px;">
    <label>id</label>
    <input type="text"name="id"value="{{$data->id}}" required="">
    </div> 

    <div style="padding:15px;">
    <label> Name</label>
    <input type="text"name="name"value="{{$data->name}}" required="">
    </div>

    <div style="padding:15px;">
    <label>Phone</label>
    <input type="text"name="phone" value="{{$data->phone}}" required="">
    </div>

    <div style="padding:15px;">
    <label>Address</label>
    <input type="text"name="address" value="{{$data->address}}" required="">
    </div>

    <div style="padding:15px;">
    <label>Product name</label>
    <input type="text"name="products_proname"value="{{$data->products_proname}}" required="">
    </div>

    <div style="padding:15px;">
    <label>Quantity</label>
    <input type="text"name="quantity"value="{{$data->quantity}}" required="">
    </div>

    <div style="padding:15px;">
    <label>Status</label>
    <input type="text"name="status" value="{{$data->status}}" required="">
    </div>

    <div style="padding:15px;">
    <label>Price</label>
    <input type="text"name="price" value="{{$data->price}}" required="">
    </div>

    

    
     
   


    <div  style="margin-top:30px;"style="padding:15px;">
    <input  class="btn btn-danger" type="submit" >
    </div>
</form>

    </div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('ADMIN.jscript')
  </body>
</html>