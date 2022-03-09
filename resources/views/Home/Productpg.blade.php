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
    <title >Fashion Fanatic</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 fixed-top">
      <div class="container">
        <a href="{{url('productpg')}}" class="navbar-brand"><i>FASHION FANATIC</i></a>

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
              @if (Route::has('login'))
                    @auth

                    <li class="nav-item">
              <a href="{{url('showcart')}}" class="nav-link"><i class="fa fa-shopping-cart"></i>Cart[{{$count}}]</a>
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
   <div style="margin-top:40px;"class="alert alert-success">
   <button type="button" class="btn-close" data-dismiss="alert">x</button>
   {{session()->get('message')}}
</div>
   @endif
   <section id="products" class="p-5 bg-dark">
      <div class="container">
        <h2 class="text-center text-white">Welcome to the Product Section</h2>
        <p class="lead text-center text-white mb-5">
         Check out our Products
        </p>

 
        @if(method_exists($data,'links'))
        <div class="d-flex justify-content-center">
           {!! $data->links()!!}
</div>
@endif

<!--SEARCH-->
        <form class="form-inline" action="{{url('search')}}" style="padding:20px; "method="get">
          @csrf
          <input class="form-control" type="search" style="width:180px;"name="search" placeholder="Search Product">
          <input type="submit" value="Search "class="btn btn-success">
      </form>

  





        <div class="row g-4">
        @foreach ($data as $products)
          <div class="col-md-6 col-lg-3">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img
                  src="/image/{{$products->image}}"
                  style="height:20vh;width:100%;"class="square mb-8"
                  alt=""
                />
                
                <h1>{{$products->proname}}</h1>
        <h2 class="title">{{$products->category}}</h2>
        <p class="title">{{$products->subcategory}}</p>
        <p>{{$products->description}}.</p>
        <p class="title">{{$products->price}}</p>
                <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span>
   
</div>

              <form  action="{{url('addcart',$products->id)}}" method="POST">
          @csrf
          <input style="width:108px;margin:20px;" type="number"  name="quantity"value="1" min="1"class="bg-info form-control">
              <input style="margin:20px;color:black;" type="submit" class="btn btn-dark" value="Add to Cart"  class="fa fa-shopping-cart"><i></i></input>
            </form>

            </div>
          </div>
          @endforeach

          
          @if(method_exists($data,'links'))
        <div class="d-flex justify-content-center">
           {!! $data->links()!!}
</div>
@endif

         
      </div>
    </section>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
    
    </script>
</body>
</html>
