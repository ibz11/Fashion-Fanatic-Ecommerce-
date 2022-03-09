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
        <h1 class="header" >ADD PRODUCTS</h1>

   @if (session()->has('message'))
   <div class="alert alert-primary">
   <button type="button" class="close" data-dismiss="alert">x</button>
   {{session()->get('message')}}
</div>
   @endif
   <form action="{{url('addproduct')}}"  method="post" enctype="multipart/form-data" > 
   
   @csrf

    <div style="padding:15px;">
    <label>Product Name</label>
    <input type="text"name="proname"placeholder="Product Name" required="">
    </div>

    <div style="padding:15px;">
    <label>Price</label>
    <input type="text"name="price"placeholder="Price" required="">
    </div>

    <div style="padding:15px;">
    <label>Category</label>
    <input type="text"name="category"placeholder="Category" required="">
    </div>

    <div style="padding:15px;">
    <label>Subcategory</label>
    <input type="text"name="subcategory"placeholder="Sub-Category" required="">
    </div>

    <div style="padding:15px;">
    <label>Description</label>
    <input type="text"name="description"placeholder="Description" required="">
    </div>
     
    <div style="padding:15px;">
    <label>Quantity</label>
    <input type="text"name="quantity"placeholder="Quantity" required="">
    </div>

    <div style="padding:15px;">
    <input type="file"name="file" >
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