@extends('layouts.plantilla')

@section('title', 'Inicio')

@section('estilo')
  <style type="text/css">  
        .my-carousel-control-prev,
.my-carousel-control-next 
{
  opacity: 0.5;
}



#libroslider2 .MS-content, #libroslider .MS-content {
  overflow: hidden;
  white-space: nowrap;
}

#libroslider2 .MS-controls button, #libroslider .MS-controls button {
  border: none;
  background: transparent;
  outline: 0;
}
#imb{
    opacity: 0;
    transition: 0.5s;

}

.imc:hover #imb, #imb:hover {
    opacity: 1;
    transition: 0.5s;
}
</style>

@endsection

@section('content') 
  <div class="row mb-4 d-flex justify-content-center">
   	<div class="col-12 px-0">
    	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <!--
        <ol class="carousel-indicators" style="">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>-->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('pics/olimpia.jpg')}}" class="d-block w-100" alt="...">

          </div>
          <!--
          <div class="carousel-item">
            <img src="{{asset('pics/olimpia.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('pics/1000x500-3.jpg')}}" class="d-block w-100" alt="...">
          </div>-->
        </div>
        <!--
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>-->
      </div>
    </div>       	
  </div>
<div class="row mb-3 ">
  <div class="col d-flex justify-content-start " style="border-top:solid 5px #870000;">
    <h1 class="my-auto">LIBROS</h1>    
  </div>  
</div>
<div class="row" id="libroslider2" style="border-bottom: solid 5px #870000;">
  <div class="col-1 my-auto d-flex justify-content-center px-0">
    <div class="MS-controls mb-4">
        <button class="MS-left"><i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i></button>
    </div>
  </div>
  <div class="col-10">
  <div class="MS-content mb-4">

        <div class="item"> 
          <div class="card bg-dark text-white text-center d-flex imc">
  <img  src="{{asset('pics/libro1.jpg')}}" class="card-img" alt="...">
  <div class="card-img-overlay ">
    <div id="imb">            
      <div style="background-color: rgb(135, 0, 0,0.7); max-height: 190px" class="rounded overflow-hidden">
        <h5 class="card-title m-1" style="white-space: normal;"><strong>ALGEBRA DE BALDOR</strong></h5>
        <h5 class="card-text m-1" style="white-space: normal;">PRECIO: 0$</h5>
      </div>
      <div class="btn-group-vertical btn-lg mx-0" style=" min-width: 100%">
          <button  class="btn btn-info">VER MAS <i class="fas fa-angle-right"></i></button>
          <button class="btn btn-danger mb-3">AGREGAR<i class="fas fa-shopping-cart"></i></button> 
        </div> 
      </div>    
      
  </div>
</div>
</div>
<div class="item"> 
          <div class="card bg-dark text-white text-center d-flex imc">
  <img  src="{{asset('pics/libro2.jpg')}}" class="card-img" alt="...">
  <div class="card-img-overlay ">
    <div id="imb">            
      <div style="background-color: rgb(135, 0, 0,0.7); max-height: 190px" class="rounded overflow-hidden">
        <h5 class="card-title m-1" style="white-space: normal;"><strong>EL PRINCIPITO</strong></h5>
        <h5 class="card-text m-1" style="white-space: normal;">PRECIO: 0$</h5>
      </div>
      <div class="btn-group-vertical btn-lg mx-0" style=" min-width: 100%">
          <button  class="btn btn-info">VER MAS <i class="fas fa-angle-right"></i></button>
          <button class="btn btn-danger mb-3">AGREGAR<i class="fas fa-shopping-cart"></i></button> 
        </div> 
      </div>    
      
  </div>
</div>
</div>
<div class="item"> 
          <div class="card bg-dark text-white text-center d-flex imc">
  <img  src="{{asset('pics/libro3.jpg')}}" class="card-img" alt="...">
  <div class="card-img-overlay ">
    <div id="imb">            
      <div style="background-color: rgb(135, 0, 0,0.7); max-height: 190px" class="rounded overflow-hidden">
        <h5 class="card-title m-1" style="white-space: normal;"><strong>20000 LEGUAS DE VIAJE SUBMARINO</strong></h5>
        <h5 class="card-text m-1" style="white-space: normal;">PRECIO: 0$</h5>
      </div>
      <div class="btn-group-vertical btn-lg mx-0" style=" min-width: 100%">
          <button  class="btn btn-info">VER MAS <i class="fas fa-angle-right"></i></button>
          <button class="btn btn-danger mb-3">AGREGAR<i class="fas fa-shopping-cart"></i></button> 
        </div> 
      </div>    
      
  </div>
</div>
</div>
<div class="item"> 
          <div class="card bg-dark text-white text-center d-flex imc">
  <img  src="{{asset('pics/libro4.jpg')}}" class="card-img" alt="...">
  <div class="card-img-overlay ">
    <div id="imb">            
      <div style="background-color: rgb(135, 0, 0,0.7); max-height: 190px" class="rounded overflow-hidden">
        <h5 class="card-title m-1" style="white-space: normal;"><strong>"LA BIBLIA"</strong></h5>
        <h5 class="card-text m-1" style="white-space: normal;">PRECIO: 0$</h5>
      </div>
      <div class="btn-group-vertical btn-lg mx-0" style=" min-width: 100%">
          <button  class="btn btn-info">VER MAS <i class="fas fa-angle-right"></i></button>
          <button class="btn btn-danger mb-3">AGREGAR<i class="fas fa-shopping-cart"></i></button> 
        </div> 
      </div>    
      
  </div>
</div>
</div>
<div class="item"> 
          <div class="card bg-dark text-white text-center d-flex imc">
  <img  src="{{asset('pics/libro5.jpg')}}" class="card-img" alt="...">
  <div class="card-img-overlay ">
    <div id="imb">            
      <div style="background-color: rgb(135, 0, 0,0.7); max-height: 190px" class="rounded overflow-hidden">
        <h5 class="card-title m-1" style="white-space: normal;"><strong>LA CULPA ES DE LA VACA</strong></h5>
        <h5 class="card-text m-1" style="white-space: normal;">PRECIO: 0$</h5>
      </div>
      <div class="btn-group-vertical btn-lg mxmy-0" style=" min-width: 100%">
          <button  class="btn btn-info">VER MAS <i class="fas fa-angle-right"></i></button>
          <button class="btn btn-danger mb-3">AGREGAR<i class="fas fa-shopping-cart"></i></button> 
        </div> 
      </div>    
      
  </div>
</div>
</div>
<div class="item"> 
          <div class="card bg-dark text-white text-center d-flex imc">
  <img  src="{{asset('pics/libro6.jpg')}}" class="card-img" alt="...">
  <div class="card-img-overlay ">
    <div id="imb">            
      <div style="background-color: rgb(135, 0, 0,0.7); max-height: 190px" class="rounded overflow-hidden">
        <h5 class="card-title m-1" style="white-space: normal;"><strong>LA TORRE OSCURA</strong></h5>
        <h5 class="card-text m-1" style="white-space: normal;">PRECIO: 0$</h5>
      </div>
      <div class="btn-group-vertical btn-lg mx-0" style=" min-width: 100%">
          <button  class="btn btn-info">VER MAS <i class="fas fa-angle-right"></i></button>
          <button class="btn btn-danger mb-3">AGREGAR<i class="fas fa-shopping-cart"></i></button> 
        </div> 
      </div>    
      
  </div>
</div>
</div>


    </div>

  </div>
  <div class="col-1 my-auto d-flex justify-content-center px-0">
    <div class="MS-controls mb-4">
        <button class="MS-right"><i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i></button>
    </div>
  </div>
</div>

<div class="row mb-3 ">
  <div class="col d-flex justify-content-start ">
    <h1 class="my-auto">NUESTROS PRODUCTOS</h1>    
  </div>  
</div>
<div class="row mb-5" id="libroslider" style="border-bottom: solid 5px #870000;">
  <div class="col-1 my-auto d-flex justify-content-center px-0">
    <div class="MS-controls mb-4">
        <button class="MS-left"><i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i></button>
    </div>
  </div>
  <div class="col-10">
  <div class="MS-content mb-4">

        <div class="item"> <div class="card text-center border-dark imc" style="box-shadow: 0 10px 6px -6px #777;">
    
    <div class="container d-flex justify-content-center px-0">
  <img class="card-img-top" src="{{asset('pics/prod1.jpg')}}" alt="Card image cap">
  <div id="imb" class="btn-group-vertical btn-lg position-absolute align-self-center ">
   <button  class="btn btn-info mb-1">VER MAS <i class="fas fa-angle-right"></i></button>
    <button class="btn btn-danger">AGREGAR <i class="fas fa-shopping-cart"></i></button>
</div>
</div>
    <div class="card-body d-none d-lg-block">
      <h5 class="card-title" style="white-space: normal">Card title 1</h5>
      <h5 class="card-title" style="white-space: normal">PRECIO 0$</h5>
    </div>
  </div>
</div>
<div class="item"> <div class="card text-center border-dark imc" style="box-shadow: 0 10px 6px -6px #777;">
    
    <div class="container d-flex justify-content-center px-0">
  <img class="card-img-top" src="{{asset('pics/prod2.jpg')}}" alt="Card image cap">
  <div id="imb" class="btn-group-vertical btn-lg position-absolute align-self-center ">
   <button  class="btn btn-info mb-1">VER MAS <i class="fas fa-angle-right"></i></button>
    <button class="btn btn-danger">AGREGAR <i class="fas fa-shopping-cart"></i></button>
</div>
</div>
    <div class="card-body">
      <h5 class="card-title" style="white-space: normal">Card title 2</h5>
      <h5 class="card-title" style="white-space: normal">PRECIO 0$</h5>
    </div>
  </div>
</div>
<div class="item"> <div class="card text-center border-dark imc " style="box-shadow: 0 10px 6px -6px #777;">
    
    <div class="container d-flex justify-content-center px-0">
  <img class="card-img-top" src="{{asset('pics/prod3.jpg')}}" alt="Card image cap">
  <div id="imb" class="btn-group-vertical btn-lg position-absolute align-self-center ">
   <button  class="btn btn-info mb-1">VER MAS <i class="fas fa-angle-right"></i></button>
    <button class="btn btn-danger">AGREGAR <i class="fas fa-shopping-cart"></i></button>
</div>
</div>
    <div class="card-body d-none d-lg-block">
      <h5 class="card-title" style="white-space: normal">Card title 3</h5>
      <h5 class="card-title" style="white-space: normal">PRECIO 0$</h5>
    </div>
  </div>
</div>
<div class="item"> <div class="card text-center border-dark imc" style="box-shadow: 0 10px 6px -6px #777;">
    
    <div class="container d-flex justify-content-center px-0">
  <img class="card-img-top" src="{{asset('pics/prod4.png')}}" alt="Card image cap">
  <div id="imb" class="btn-group-vertical btn-lg position-absolute align-self-center ">
   <button  class="btn btn-info mb-1">VER MAS <i class="fas fa-angle-right"></i></button>
    <button class="btn btn-danger">AGREGAR <i class="fas fa-shopping-cart"></i></button>
</div>
</div>
    <div class="card-body d-none d-lg-block">
      <h5 class="card-title" style="white-space: normal">Card title 4</h5>
      <h5 class="card-title" style="white-space: normal">PRECIO 0$</h5>
    </div>
  </div>
</div>
<div class="item"> <div class="card text-center border-dark imc" style="box-shadow: 0 10px 6px -6px #777;">
    
    <div class="container d-flex justify-content-center px-0">
  <img class="card-img-top" src="{{asset('pics/prod5.jpg')}}" alt="Card image cap">
  <div id="imb" class="btn-group-vertical btn-lg position-absolute align-self-center ">
   <button  class="btn btn-info mb-1">VER MAS <i class="fas fa-angle-right"></i></button>
    <button class="btn btn-danger">AGREGAR <i class="fas fa-shopping-cart"></i></button>
</div>
</div>
    <div class="card-body d-none d-lg-block">
      <h5 class="card-title" style="white-space: normal">Card title 5</h5>
      <h5 class="card-title" style="white-space: normal">PRECIO 0$</h5>
    </div>
  </div>
</div>
<div class="item"> <div class="card text-center border-dark imc" style="box-shadow: 0 10px 6px -6px #777;">
    
    <div class="container d-flex justify-content-center px-0">
  <img class="card-img-top" src="{{asset('pics/prod6.jpg')}}" alt="Card image cap">
  <div id="imb" class="btn-group-vertical btn-lg position-absolute align-self-center ">
   <button  class="btn btn-info mb-1">VER MAS <i class="fas fa-angle-right"></i></button>
    <button class="btn btn-danger">AGREGAR <i class="fas fa-shopping-cart"></i></button>
</div>
</div>
    <div class="card-body d-none d-lg-block">
      <h5 class="card-title" style="white-space: normal">Card title 6</h5>
      <h5 class="card-title" style="white-space: normal">PRECIO 0$</h5>
    </div>
  </div>
</div>
<div class="item"> <div class="card text-center border-dark imc" style="box-shadow: 0 10px 6px -6px #777;">
    
    <div class="container d-flex justify-content-center px-0">
  <img class="card-img-top" src="{{asset('pics/prod7.jpg')}}" alt="Card image cap">
  <div id="imb" class="btn-group-vertical btn-lg position-absolute align-self-center ">
   <button  class="btn btn-info mb-1">VER MAS <i class="fas fa-angle-right"></i></button>
    <button class="btn btn-danger">AGREGAR <i class="fas fa-shopping-cart"></i></button>
</div>
</div>
    <div class="card-body d-none d-lg-block">
      <h5 class="card-title" style="white-space: normal">Card title 7</h5>
      <h5 class="card-title" style="white-space: normal">PRECIO 0$</h5>
    </div>
  </div>
</div>
    </div>

  </div>
  <div class="col-1 my-auto d-flex justify-content-center px-0">
    <div class="MS-controls mb-4">
        <button class="MS-right"><i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i></button>
    </div>
  </div>
</div>

@endsection

@section('mis_scripts')
<script type="text/javascript">
  $('.carousel').carousel({
  data-touch="true",
})
</script>
<script src="{{asset('js/multislider/js/multislider.min.js')}}"></script>
<script type="text/javascript">
$('#libroslider').multislider({
    interval:5000,
    slideAll:true,
});
$('#libroslider2').multislider({
    interval:5000,
    slideAll:true
});
</script>
@endsection