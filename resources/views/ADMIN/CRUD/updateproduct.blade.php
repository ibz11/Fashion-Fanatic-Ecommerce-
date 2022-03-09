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
        <h1 class="header" >UPDATED PRODUCTS</h1>

   @if (session()->has('message'))
   <div class="alert alert-primary">
   <button type="button" class="close" data-dismiss="alert">x</button>
   {{session()->get('message')}};
</div>
   @endif
   <form action="{{url('updateproduct',$data->id)}}"  method="post" enctype="multipart/form-data" > 
   
   @csrf

    <div style="padding:15px;">
    <label>Product Name</label>
    <input type="text"name="proname"value="{{$data->proname}}" required="">
    </div>

    <div style="padding:15px;">
    <label>Price</label>
    <input type="text"name="price" value="{{$data->price}}" required="">
    </div>

    <div style="padding:15px;">
    <label>Category</label>
    <input type="text"name="category"value="{{$data->category}}" required="">
    </div>

    <div style="padding:15px;">
    <label>Subcategory</label>
    <input type="text"name="subcategory" value="{{$data->subcategory}}" required="">
    </div>

    <div style="padding:15px;">
    <label>Description</label>
    <input type="text"name="description" value="{{$data->description}}" required="">
    </div>
     
    <div style="padding:15px;">
    <label>Quantity</label>
    <input type="text"name="quantity" value="{{$data->quantity}}" required="">
    </div>

    <div style="margin-top:30px;"height="60" width="60" style="padding:15px;"><label>Old Image</label>
  <img src="/image/{{$data->image}}">
 
    </div>

    <div style="margin-top:30px;" style="padding:15px;">
  <label>Change the Image</label>
  <input type="file"name="file" >
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