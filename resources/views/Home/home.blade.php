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
        <a href="#" class="navbar-brand"><i>FASHION FANATIC</i></a>

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
          <li class="nav-item ">
              <a href="#home" class="nav-link">Home<i class="fa fa-home"></i></a>
            </li>
            <li class="nav-item">
              <a href="#services" class="nav-link">Services</a>
            </li>
            <li class="nav-item">
              <a href="#brands" class="nav-link">Brands</a>
            </li>
            <li class="nav-item">
              <a href="{{url('productpg')}}" class="nav-link">Products</a>
            </li>

           
            

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

    <!-- Showcase -->
    <section id="home"
      class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start"
    >
      <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
          <div>
            <p class="lead my-6">Welcome to <span class="text-primary "> Fashion Fanatic</span></p>
            <p class="lead my-2">
             <i>"Where style meets Comfort!"</i>
            </p>
            <p class="lead my-2">
              <i>"We aim to give you the best shopping experience ever"</i>
             </p>
            
            <a href="#products"class="btn btn-primary">Start Shopping<i class="fa fa-shopping-cart"></i></a>
          </div>
          <img
            class="img-fluid w-50 d-none d-sm-block"
            src="img/suit.jpg"
            alt=""
          />
        </div>
      </div>
    </section>

   

  
    

    <!-- Learn Sections -->
    <section id="about" class="p-5">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md">
            <img src="img/home.jpg" class="img-fluid" alt="" />
          </div>
          <div class="col-md p-5">
            <h2>ABOUT US</h2>
            <p class="lead">
   Founded in 1985 by my father,it started as a tailoring bussiness in a humble town of Kratos,greece.My dad had a dream for his business to become successful.
            </p>
            <p>
             My dad had a dream to tailor  quality clothing and sell it to people of every walks of life.
             He believed that Fashion and style had a way of bringing confidence to a person.
             He wanted everybody to experience that feeling as we came from humble beginnings and he wanted everybody to 
             experience a feeling of confidence through his clothing.We never forgot our grassroots and helped the less fortunate by 
             designing highly affordable and quality clothing.That is how our Fashion Fanatic came to life!
            </p>
            <a href="#" class="btn btn-primary mt-3">
              <i class="fa fa-angle-right"></i> Read More
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="brands" class="p-5 bg-dark text-light">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md p-5">
            <h2>Designer Brands</h2>
            <p class="lead">
              We have worked with many designer brands to give you the ultimate experience and enjoy some of th best brands
            </p>
            <p>
              We partnered with Gucci,Louis Vitton,Prada and many more other brands to sell directly to customers
              .They offer from bags to shoes to suits and even casual wear.
              We are very proud as how far we have come as a company to deliver quality service to all customers alike.
            </p>
            <a href="#" class="btn btn-light mt-3">
              <i class=" fa fa-angle-right"></i> Check it out
            </a>
          </div>
          <div class="col-md">
            <img src="img/designer.png" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
    </section>

   
     <!-- SERVICES -->
     <section id="services"class="p-5">
      <div class="container">
      <p class="lead text-center text-black mb-5">
         SERVICES AND PRICING
        </p>
        <div class="row text-center g-4">
          <div class="col-md">
            <div class="card bg-dark text-light">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="fa fa-scissors"></i>
                </div>
                <h3 class="card-title mb-3">TAILORING</h3>
                <p class="card-text">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Iure, quas quidem possimus dolorum esse eligendi?
                </p>
                <p class="card-text">$50/Clothing</p>
                <a href="#" class="btn btn-primary">Subscribe</a>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card bg-dark text-light">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="bi bi-person-square"></i>
                </div>
                <h3 class="card-title mb-3">GROOMING </h3>
                <p class="card-text">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Iure, quas quidem possimus dolorum esse eligendi?
                </p>
                <p class="card-text">$15/month</p>
                <a href="#" class="btn btn-primary">Subscribe</a>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card bg-dark text-light">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="bi bi-people"></i>
                </div>
                <h3 class="card-title mb-3">COACHING</h3>
                <p class="card-text">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Iure, quas quidem possimus dolorum esse eligendi?
                </p>
                <p class="card-text">$20/month</p>
                <a href="#" class="btn btn-primary">Subscribe</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


<!--Products Section-->

    <section id="products" class="p-5 bg-dark">
      <div class="container">
        <h2 class="text-center text-white">Product Section</h2>
        <p class="lead text-center text-white mb-5">
         Check out our Products
        </p>

 

<!--SEARCH
        <form class="form-inline" action="{{url('search')}}" style="padding:20px; "method="get">
          @csrf
          <input class="form-control" type="search" style="width:180px;"name="search" placeholder="Search Product">
          <input type="submit" value="Search "class="btn btn-success">
      </form>-->
      <a  style="align:center;"href="{{url('productpg')}}"class="btn btn-primary">Products Page</a>

      @if(method_exists($data,'links'))
        <div class="d-flex justify-content-center">
           {!! $data->links()!!}
</div>
@endif





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
              <input style="margin:20px;color:black;" type="submit" class="btn btn-primary" value="Add to Cart"  class="fa fa-shopping-cart"><i></i></input>
            </form>

            </div>
          </div>
          @endforeach

          

<!--<h3 class="card-title mb-3">John Doe</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                </p>-->
         
      </div>
    </section>

   

   
    

    <!-- Footer -->
    <footer class="p-5 bg-info text-white text-center position-relative">
      <div class="container">
        <p class="lead" style="font-weight:700;">Copyright &copy; 2021 Fashion Fanatic</p>
        <p class="lead-my-5" style="font-weight:700;">Follow us on:</p>
        <div>
       <i style="padding:12px " class="fa fa-instagram"></i>
      <i style="padding:12px" class="fa fa-facebook"></i>
      <i style="padding:12px"  class="fa fa-whatsapp"></i>
      <i style="padding:12px" class="fa fa-linkedin"></i>
      <i style="padding:12px" class="fa fa-pinterest"></i>
        </div>
        <a href="#" class="position-absolute bottom-0 end-0 p-5">
          <i class="bi bi-arrow-up-circle h1"></i>
        </a>
      </div>
    </footer>

   

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
    
    </script>
  </body>
</html>
