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
        <h1 class="header" >UPDATE USERS</h1>

   @if (session()->has('message'))
   <div class="alert alert-primary">
   <button type="button" class="close" data-dismiss="alert">x</button>
   {{session()->get('message')}};
</div>
   @endif
   <form action="{{url('updateuser',$data->id)}}"  method="post" enctype="multipart/form-data" > 
   
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
    <label>Email</label>
    <input type="text"name="email"value="{{$data->email}}" required="">
    </div>

    <div style="padding:15px;">
    <label>Type</label>
    <input type="text"name="type" value="{{$data->type}}" required="">
    </div>

    <div style="padding:15px;">
    <label>Phone</label>
    <input type="text"name="phone"value="{{$data->phone}}" required="">
    </div>

    <div style="padding:15px;">
    <label>Address</label>
    <input type="text"name="address" value="{{$data->address}}" required="">
    </div>

    <div style="padding:15px;">
    <label>Gender</label>
    <input type="text"name="gender" value="{{$data->gender}}" required="">
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