<!DOCTYPE html>
<html lang="en">
  <head>
  
    @include('ADMIN.admincss')
  </head>
  <body>
  @include('ADMIN.sidebar')
      <!-- partial -->
      @include('ADMIN.navbar')
        <!-- partial -->
        @include('ADMIN.body')
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('ADMIN.jscript')
  </body>
</html>