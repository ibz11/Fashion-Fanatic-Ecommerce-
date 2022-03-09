<!DOCTYPE html>
<html lang="en">
  <head>
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
 input[type=email]{
     color:black;
 }
 input[type=password]{
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
        <h1 class="header" >CREATE NEW USER</h1>

   @if (session()->has('message'))
   <div class="alert alert-success">
   <button type="button" class="close" data-dismiss="alert">x</button>
   {{session()->get('message')}}
</div>
   @endif
   <form action="{{url('createuser')}}"  method="post" enctype="multipart/form-data" > 
   
   @csrf

    <div style="padding:15px;">
    <label> Name</label>
    <input type="text"name="name" placeholder="name" required="">
    </div>

    <div style="padding:15px;">
    <label>Email</label>
    <input style: type="email"name="email" placeholder="email" required="">
    </div>

    <div style="padding:15px;">
    <label>User Type</label>
    <input type="text"name="type" placeholder="type" required="">
    </div>

    <div style="padding:15px;">
    <label>Phone</label>
    <input type="text"name="phone" placeholder="phone" required="">
    </div>

    <div style="padding:15px;">
    <label>Address</label>
    <input type="text"name="address"placeholder="address" required="">
    </div>
     
    <div style="padding:15px;">
    <label>Gender</label>
    <input type="text"name="gender" placeholder="gender" required="">
    </div>
    <div style="padding:15px;">
    <label>Password</label>
    <input type="password"name="password" placeholder="password" required="">
    </div>

    

    <div style="padding:15px;">
    <input class="btn btn-danger" type="submit" >
    </div>
</form>

    </div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('ADMIN.jscript')
  </body>
</html>