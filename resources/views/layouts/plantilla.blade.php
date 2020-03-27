<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Libreria Olimpia - @yield('title')</title>
    <link rel="icon" type="image/png" href="{{asset('icons/48.png')}}" />
    <link rel="manifest" href="{{asset('manifest.json?v=5')}}">
      <script>
            if ('serviceWorker' in navigator  ) {
              window.addEventListener('load', function() {
                  navigator.serviceWorker.register('./service-worker.js').then(function(registration) {
                      // Registration was successful
                      console.log('ServiceWorker registration successful with scope: ', registration.scope);
                  }, function(err) {
                      // registration failed :(
                      console.log('ServiceWorker registration failed: ', err);
                  });
              });
          }
    </script> 
      <link href="{{asset('css/app.css')}}" rel="stylesheet">
      <link href="{{asset('css/assets/fontawesome/css/all.css')}}" rel="stylesheet">
      <style type="text/css">        
        .navbar-light .navbar-nav .show > .nav-link,
        .navbar-light .navbar-nav .active > .nav-link,
        .navbar-light .navbar-nav .nav-link.show,
        .navbar-light .navbar-nav .nav-link.active
        { 
          color: #fff;
          text-shadow: 0px 0px 6px rgba(204,0,0,0.7);          
        }        
        .margen0
        {
          margin-bottom: 0px;
          font-family: "Century Gothic", 'Lato', sans-serif;
          font-size: 1.3em;          
        }        
        body
        {
          background-color: #fff;
        }
        .watermark
        {
          opacity: 0.5;
          filter: grayscale(100%);
        }
        .watermark:hover
        {
          opacity:0.8;
          filter: none ;
        }

      </style>
             <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v6.0"></script>  
      @yield('estilo')
  </head>

  <body>    
    <header>
      @include('layouts.navbar')
    </header>
    <main role="main">
      <div class="container-fluid col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10" style="margin-top: 30px">
        @yield('content')
      </div>
    </main>       
    <footer>
      @include('layouts.footer')
    </footer>

<!--Scripts-->    
    <script src="{{asset('js/app.js')}}"></script>    
    <script type="text/javascript">
      $("#heart-trigger").click(
      function () 
      {
        $("li").toggleClass("visible");
      });
    </script>  
    @yield('mis_scripts')
  </body>   
</html>