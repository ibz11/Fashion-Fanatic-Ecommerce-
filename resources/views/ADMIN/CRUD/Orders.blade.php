<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Users</title>
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
        <h1 class="header" >SHOW ORDERS</h1>

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
    <td style="padding:17px;">Phone</td>
    <td style="padding:17px;">Address</td>
    <td style="padding:17px;">Products name</td>
    <td style="padding:17px;">Quantity</td>
    <td style="padding:17px;">Status</td>
    <td style="padding:17px;">Price</td>
    <td style="padding:17px;">Update</td>
    <td style="padding:17px;">Delete</td>
    
   
</tr>

@foreach($data as $orders)
<tr style="background-color:gray;color:black;align-items:center;">
<td style="padding:17px;">{{$orders->id}}</td>
<td style="padding:17px;">{{$orders->name}}</td>
<td style="padding:17px;">{{$orders->phone}}</td>
<td style="padding:17px;">{{$orders->address}}</td>
<td style="padding:17px;">{{$orders->products_proname}}</td>
<td style="padding:17px;">{{$orders->quantity}}</td>
<td style="padding:17px;">{{$orders->status}}</td>
<td style="padding:17px;">{{$orders->price}}</td>



<td>
    <a href="{{url('updatevieworder',$orders->id)}}"class="btn btn-success">Update</a>
    </td>
    <td>
    <a href="{{url('deleteorder',$orders->id)}}"class="btn btn-danger">Delete</a>  
    </td>-->


</tr>
@endforeach 

</table>





        @include('ADMIN.jscript')
    
</body>
</html>