@extends('layouts.plantilla')

@section('title', 'Contacto')

@section('estilo')
  <style type="text/css">
    .jumbotron 
    {
      background-image: url("{{asset("pics/contacto.jpg")}}");
      background-size: cover;
    }
  </style>
@endsection

@section('content')

      <div class="row">
        <div class="col d-none d-md-block">
          <div class="jumbotron jumbotron-fluid">
        <div class="container" >
          <h1 class="display-4">Contacto</h1>
          <p class="lead">Texto de contacto</p>
        </div>
      </div>
        </div>
      </div>
  <div class="row mb-4 ">
    <div class="col-sm-12 col-md-6 col-lg-8 col-xl-8">    
        <div class="embed-responsive embed-responsive-1by1 direcciones-size">
          <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d61202.86535216731!2d-68.14426564707448!3d-16.517054198752643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1slibreria%20olimpia!5e0!3m2!1ses-419!2sbo!4v1584465894414!5m2!1ses-419!2sbo" allowfullscreen>            
          </iframe>
        </div>            
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-xl-4 d-none d-md-block pl-0">
        <div class="list-group direcciones-size overflow-auto">
          <a href="#" class="list-group-item list-group-item-action">
            <p><h4>La Paz - Casa Matriz</h4></p>
            <p>
              <h5 style=" line-height:2;">
                <i class="fas fa-map-marker-alt"></i> Calle Ballivián N° 1232, entre Colón y Plaza Murillo. 
                <br><i class="fas fa-phone-square-alt"></i> (+591 -2) 2204106 - 2204091
                <br><i class="fas fa-envelope"></i> "CORRERO ELECTRONICO"
              </h5>
            </p>
          </a>
          <a href="#" class="list-group-item list-group-item-action">       
            <p><h4>La Paz - Sucursal Handal</h4></p>
            <p>
              <h5 style=" line-height:2;">
                <i class="fas fa-map-marker-alt"></i> Calle Socabaya Esq. Mcal. Sta. Cruz Handal Center Local 14.
                <br><i class="fas fa-phone-square-alt"></i> (+591 -2) 2204106 - 2204091
                <br><i class="fas fa-envelope"></i> "CORRERO ELECTRONICO"
              </h5>
            </p>
          </a>
          <a href="#" class="list-group-item list-group-item-action">
              <p><h4>La Paz - Sucursal Mariscal</h4></p>
            <p>
              <h5 style=" line-height:2;">
                <i class="fas fa-map-marker-alt"></i> Av. Mcal. Sta. Cruz entre Colón y Loayza Edif. Litoral PB Local 9.
                <br><i class="fas fa-phone-square-alt"></i> (+591-2) 2358234 - 2317828
                <br><i class="fas fa-envelope"></i> "CORRERO ELECTRONICO"
              </h5>
            </p>
          </a>
          <a href="#" class="list-group-item list-group-item-action">
            <p><h4>La Paz - Sucursal Calacoto</h4></p>
            <p>
              <h5 style=" line-height:2;">
                <i class="fas fa-map-marker-alt"></i> Calle 15 Calacoto Torre Ketal Locales 21 a 24.
                <br><i class="fas fa-phone-square-alt"></i> (+591-2) 2770782 - 2775442
                <br><i class="fas fa-envelope"></i> "CORRERO ELECTRONICO"
              </h5>
            </p>
          </a>
          <a href="https://www.google.com/maps/dir//libreria+olimpia/@-16.4907162,-68.1355811,15z/data=!4m8!4m7!1m0!1m5!1m1!1s0x915f20724eae25d7:0x54eb3c3edb72d1e7!2m2!1d-68.1340142!2d-16.4948403" class="list-group-item list-group-item-action">
            <p><h4>La Paz - Sucursal Ingavi</h4></p>
            <p>
              <h5 style=" line-height:2;">
                <i class="fas fa-map-marker-alt"></i> Calle Ingavi N°1051 - Zona Central entre Yanacocha y Plaza Murillo.
                <br><i class="fas fa-phone-square-alt"></i> (+591-2) 2145262
                <br><i class="fas fa-envelope"></i> "CORRERO ELECTRONICO"
              </h5>
            </p>
          </a>
          <a href="#" class="list-group-item list-group-item-action">
            <p><h4>Sucursal Santa Cruz</h4></p>
            <p>
              <h5 style=" line-height:2;">
                <i class="fas fa-map-marker-alt"></i> Av Beni entre 4to y 5to Anillo entrando 2 cuadras por Condominio Gardenia.
                <br><i class="fas fa-phone-square-alt"></i> (+591-3) 3467924
                <br><i class="fas fa-mobile-alt"></i> (+591-3) 76753244
                <br><i class="fas fa-envelope"></i> "CORRERO ELECTRONICO"
              </h5>
            </p>
          </a>
        </div>            
    </div>
  </div>  
  <div class="row d-flex justify-content-between">
    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-xs-12">     
      <h1>Contacta con nosotros</h1>
      <h5 class="text-justify">Si quieres mas información sobre nuetros productos, rellena nuestro formulario y nos pondremos en contacto contigo</h5>
      
      <div class="container border rounded my-4" style="max-width: 80%; box-shadow: 0px 0px 14px 1px rgba(0,0,0,0.75);"> 
        <form class="mt-4">    
        <div class="form-group">
          <label for="exampleInputPassword1">Nombres y Apellidos</label>
          <input type="text" class="form-control" id="nombre" placeholder="Nombres y Apellidos">
        </div>
        <div class="form-group">
          <label for="email">Correo Electronico</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingrese su correo electronico">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Escriba su mensaje</label>
          <textarea class="form-control" id="mensaje" rows="5"></textarea>
        </div>       
        <div class="form-group d-flex justify-content-end mb-4">
                  <button type="submit" class="btn btn-dark">
          Enviar
        </button>
        </div>
      </form> 
      </div>
    </div>
  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12">
    <div class="border rounded">
      
     
  <div class="mx-4">
    <h3 class="pt-3">Siguenos En:</h3>
    <div class="embed-responsive embed-responsive-21by9">
<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Folimpialibreria%2F&tabs&width=340&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId"></iframe>
</div>
<div class="embed-responsive embed-responsive-1by1 mt-3" style="min-height: 530px">
<iframe src="https://www.instagram.com/p/B9mZu0OHb9t/embed"></iframe>
</div>
  </div>
    </div>
    </div>
    
</div>       

@endsection

@section('mis_scripts')

@endsection