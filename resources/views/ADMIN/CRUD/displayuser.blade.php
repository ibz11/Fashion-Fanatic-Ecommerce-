<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Users</title>
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
        <h1 class="header" >DISPLAY USERS</h1>

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
    <td style="padding:17px;">Type</td>
    <td style="padding:17px;">Email</td>
    <td style="padding:17px;">Gender</td>
    <td style="padding:17px;">Address</td>
    <td style="padding:17px;">Phone</td>
    <td style="padding:17px;">Update</td>
    <td style="padding:17px;">Delete</td>
    
   
</tr>

@foreach($data as $users)
<tr style="background-color:blue;color:white;align-items:center;">
<td style="padding:17px;">{{$users->id}}</td>
<td style="padding:17px;">{{$users->name}}</td>
<td style="padding:17px;">{{$users->type}}</td>
<td style="padding:17px;">{{$users->email}}</td>
<td style="padding:17px;">{{$users->gender}}</td>
<td style="padding:17px;">{{$users->address}}</td>
<td style="padding:17px;">{{$users->phone}}</td>
  
<td>
    <a href="{{url('updateviewuser',$users->id)}}"class="btn btn-success">Update</a>
    </td>
    <td>
    <a href="{{url('deleteuser',$users->id)}}"class="btn btn-danger">Delete</a>  
    </td>
</tr>
@endforeach
</table>





        @include('ADMIN.jscript')
    
</body>
</html>