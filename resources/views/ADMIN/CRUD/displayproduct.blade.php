<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Products</title>
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

</head>
<body>



    @include('ADMIN.admincss')

  </head>
  <body>
  @include('ADMIN.sidebar')
      <!-- partial -->
      @include('ADMIN.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

        <div class="container" align="center">
        <h1 class="header" >DISPLAY PRODUCTS</h1>
       
        @if (session()->has('message'))
   <div class="alert alert-warning">
   {{session()->get('message')}}
   <button type="button" class="close" data-dismiss="alert">x</button>
</div>
@endif
<table>
    <tr style="background-color:whitesmoke;color:black;align-items:center;">
    <td style="padding:17px;">id</td>
    <td style="padding:17px;">Name</td>
    <td style="padding:17px;">Category</td>
    <td style="padding:17px;">Subcategory</td>
    <td style="padding:17px;">Description</td>
    <td style="padding:17px;">Price</td>
    <td style="padding:17px;">Quantity</td>
    <td style="padding:17px;">Image</td>
    <td style="padding:17px;">Update</td>
    <td style="padding:17px;">Delete</td>
</tr>

@foreach($data as $products)
<tr style="background-color:#2F4F4F;color:white;align-items:center;">
    <td style="padding:17px;">{{$products->id}}</td>
    <td style="padding:17px;">{{$products->proname}}</td>
    <td style="padding:17px;">{{$products->category}}</td>
    <td style="padding:17px;">{{$products->subcategory}}</td>
    <td style="padding:17px;">{{$products->description}}</td>
    <td style="padding:17px;">{{$products->price}}</td>
    <td style="padding:17px;">{{$products->quantity}}</td>
    <td style="padding:17px;"><img src="/image/{{$products->image}}" height="150" width="150"></td>
   
   
    <td>
    <a href="{{url('updateview',$products->id)}}"class="btn btn-success">Update</a>
    </td>
    <td>
    <a href="{{url('deleteproduct',$products->id)}}"class="btn btn-danger">Delete</a>  
    </td>  
</tr>
@endforeach
</table>





        @include('ADMIN.jscript')
    
</body>
</html>