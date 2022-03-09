<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
   
    <link rel="stylesheet" href="css/fashion.css" />
    <title >Show Cart</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg text-light bg-dark navbar-light py-3 fixed-top">
      <div class="container">
        <a href="#" class="navbar-brand"style="color:white;"><i>FASHION FANATIC</i></a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navmenu"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse  " id="navmenu">
          <ul class="navbar-nav ms-auto">
          
          <li class="nav-item">
              <a href="{{url('redirect')}}" class="nav-link" style="color:white;"><i class="fa fa-home"></i>Home</a>
            </li>

            <li class="nav-item">
              <a href="{{url('productpg')}}" class="nav-link" style="color:white;"><i class="fa fa-tshirt"></i>Products</a>
            </li>
           

            <li class="nav-item">
              @if (Route::has('login'))
                    @auth

                    

                    <li class="nav-item">
              <a href="{{url('showcart')}}" class="nav-link" style="color:white;"><i class="fa fa-shopping-cart"></i>Cart[{{$count}}]</a>
            </li>
                     
                       <x-app-layout></x-app-layout>
                      
                    @else
                        <li><a href="{{ route('login') }}" class="nav-link" class="btn btn-success ">Login<i class="fa fa-external-link-square"></i></a>
            </li>

                        @if (Route::has('register'))
                          <li><a href="{{ route('register') }}" class="nav-link" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
            @endif
</li>

          </ul>
        </div>
      </div>
    </nav>

    @if (session()->has('message'))
   <div class="alert alert-success">
   <button type="button" class="btn-close" style="margin-top:90px;" data-dismiss="alert">X</button>
   {{session()->get('message')}}
</div>
   @endif

<section>
    <h1 align="center" style="font-size:50px;font-weight:800; margin-top:20px;">Products Cart</h1>

<section id="about" class="p-5">


   
   <table>
    <tr style="background-color:#ADD8E6;color:black;align-items:center;">
   
    <td style="padding:17px;">Product name</td>
    <td style="padding:17px;">Quantity</td>
    <td style="padding:17px;">Price</td> 
    <td style="padding:17px;">Delete</td> 
</tr>
<form action="{{url('order')}}" method="POST">
  @csrf
@foreach($data as $cart)
<tr style="background-color:#2F4F4F;color:white;align-items:center;">

<td style="padding:17px;">
<input type="text"style="color:black;" name="products_proname[]" value="{{$cart->products_proname}}" hidden="">
{{$cart->products_proname}}</td>

<td style="padding:17px;">
<input type="text"style="color:black;" name="quantity[]" value="{{$cart->quantity}}" hidden="">
{{$cart->quantity}}</td>

<td style="padding:17px;">
<input type="text"style="color:black;" name="price[]" value="{{$cart->price}}" hidden="">
{{$cart->price}}</td>
<form>
 

<td>
<a href="{{url('deletecart',$cart->id)}}"class="btn btn-danger">Delete</a>
</td>

    @endforeach

 </table>

   <form>
     <button class="btn btn-success">Confirm Order</button>
   </form>
</section>

   
    

 

   

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
    
    </script>
  </body>
</html>
