<div class="container-fluid d-none d-lg-block bg-mifondo">
  <div class="row align-items-center">
    <div class="col-6">
      <a href="">
        <img src="{{asset('pics/logo60.png')}}" width="150" height="100" alt="">        
      </a>
      <span class="badge"><h4 style="color: #003d7a; text-shadow: 1px 1.5px #ccc;"><strong>LIBRERIA Y PAPELERIA OLIMPIA SRL.</strong></h4></span>
      
    </div>
    <div class="col-6  ml-auto ">
      <div class="d-flex justify-content-end px-4">
        <a href="https://www.pegafan.com/" class="px-4" target="_blank">
          <img src="{{asset('logos/pegafansf.png')}}" class="img-fluid watermark" alt="">
        </a>
        <a href="" class="px-4">
          <img src="{{asset('logos/abc+.png')}}" class="img-fluid watermark" alt="">
        </a>
        <a href="http://www.pentel.com.mx/" class="px-4" target="_blank">
           <img src="{{asset('logos/prentel.png')}}" class="img-fluid watermark" alt="">
        </a>
        <a href="https://www.pelikan.com/pulse/Pulsar/es_MX.CMS.displayCMS.227348./bolivia" class="px-4" target="_blank">
          <img src="{{asset('logos/pelikan-logo.png')}}" class="img-fluid watermark" alt="">
        </a>       
      </div>      
    </div> 
  </div>         
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-micolor" style=" box-shadow: 0 0 20px rgba(0, 0, 0, 0.9); padding: 0px; margin-top: 1px;"> 
  <a class="navbar-toggler brandtsize " href="#" style="border: 0px;">
    <img src="{{asset('pics/logo60.png')}}" width="100" height="60">
    <span class="badge" href="#" style="color: #003d7a;text-shadow: 1px 1.5px #ccc; " ><strong>LIBRERIA Y PAPELERIA OLIMPIA SRL.</strong></span>
  </a>  
               
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon "></span>
  </button>

  
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

    <ul class="navbar-nav mr-auto ml-auto">
        <li class="nav-item @if($in=='ini') active @endif d-flex flex-row-reverse">
        <a class="nav-link margen0 px-4" href="{{route('inicio')}}">
          Inicio
          @if($in=='ini')
            <span class="sr-only">()current</span>
          @endif
        </a>
      </li>
      <li class="nav-item @if($in=='qui') active @endif d-flex flex-row-reverse">
        <a class="nav-link margen0 px-4" href="{{route('quienes')}}">
          Nosotros
          @if($in=='qui')
            <span class="sr-only">(current)</span>
          @endif
        </a>
      </li>
      <li class="nav-item @if($in=='marc') active @endif d-flex flex-row-reverse">
        <a class="nav-link margen0 px-4" href="{{route('marcas')}}">
          Nuestras Marcas
          @if($in=='marc')
            <span class="sr-only">(current)</span>
           @endif
        </a>
      </li>                        
      <li class="nav-item @if($in=='pro') active @endif d-flex flex-row-reverse">
        <a class="nav-link margen0 px-4" href="{{route('productos')}}">
          Productos
          @if($in=='pro')
            <span class="sr-only">(current)</span>
          @endif
        </a>
      </li>
      <li class="nav-item @if($in=='contac') active @endif d-flex flex-row-reverse">
        <a class="nav-link margen0 px-4" href="{{route('contacto')}}">
          Contacto
          @if($in=='contac')
            <span class="sr-only">(current)</span>
          @endif
        </a>
      </li>
      
    </ul>
  </div>
</nav>            
