<!DOCTYPE html>
<html lang="en">

<head>
  @include('partials._head')
</head>

  <body>
    @include('partials._nav')

       <div class="container">

          @include('partials._messages')
        
          <div class="col-md-12 mt-5">

             @yield('content')
             
          </div>
          
         
           @include('partials._footer')
        
        </div> <!-- /container -->

        @include('partials._javascript')
       
        @yield('scripts')
  </body>

<!-- Mirrored from getbootstrap.com/docs/3.3/examples/navbar-static-top/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 May 2018 11:34:09 GMT -->
</html>
