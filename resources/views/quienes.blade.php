@extends('layouts.plantilla')

@section('title', '¿Quienes Somos?')

@section ('estilo')
<style type="text/css">
    .letter {
  background: #fff;
  box-shadow: 0 0 10px rgba(0,0,0,0.3);
  margin: 26px auto 0;
  max-width: 550px;
  min-height: 210px;
  padding: 24px;
  position: relative;
  width: 80%;
}
.letter:before, .letter:after {
  content: "";
  height: 98%;
  position: absolute;
  width: 100%;
  z-index: -1;
}
.letter:before {
  background: #fafafa;
  box-shadow: 0 0 8px rgba(0,0,0,0.2);
  left: -5px;
  top: 4px;
  transform: rotate(-2.5deg);
}
.letter:after {
  background: #f6f6f6;
  box-shadow: 0 0 3px rgba(0,0,0,0.2);
  right: -3px;
  top: 1px;
  transform: rotate(1.4deg);
}
  </style>
@endsection

@section('content')
  <div class="row">
  	<div class="col-12 d-flex justify-content-center">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="{{asset('pics/logo60.png')}}" class="d-block" alt="...">
    </div>
  </div>
</div>
    </div>
  </div>    
  <div class="row text-justify h5">
    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-xs-12">
      <div class="letter" >
        <h3 style="color:  #870000">Misión</h3>
      <p style="color: #003d7a">Brindar soluciones a las necesidades de nuestros clientes a través de la comercialización, fabricación y distribución de productos y servicios de calidad, manteniendo el liderazgo en el mercado.</p>
      </div>
    </div>
    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-xs-12">
      <div class="letter">
        <h3 style="color: #870000" >Vision</h3>
      <p style="color:#003d7a ">Ser la primera opción de nuestros clientes y referentes de mejora continua en nuestras lineas de negocio.</p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12 text-justify h5" style="margin-top: 30px; box-shadow: 0px 0px 14px 1px rgba(0,0,0,0.75);">
      <h1 style="color: #870000" class="mt-4 ml-3">Nosotros</h1>
      <div style="color: #003d7a" class="mx-3">
        <p >A finales del mes de julio de 1959 el señor Alfred Weingberg B. y su esposa Flora Jáuregui de Weinberg inician actividades, produciendo y comercializando insumos para oficinas las cuales pone a la vente un pequeño local con N° 1024 de la calle Ingavi, lugar que dio nacimiento a LIBRERIA Y PAPELERIA OLIMPIA SRL.</p>
      <p>Después de 5 años se trasladan en la misma calle Ingavi al N°1051 un lugar mas amplio, logrando expandir y surtir al público con más productos. A mediados de los 60's se realizan las primeras importaciones de paises limitrofes y en los 70´s se importa de otros continentes.</p>
      <p>Para septiembre de 1985 logran su primera sucursal en la calle Ballivián y paulatinamente en noviembre de 1987 apertura la 2° sucursal dedicada al abastecimiento de comerciantes mayoristas y minoristas en la calle Isaac Tamayo.</p>
      <p> Finalizando el siglo XX, y con las tendencias de tiendas tipo supermercado para octubre de 1990 la 3° sucursal comienza atender al publico exhibiendo y comercializando los productos mediante mostradores o góndolas en la Galería Handal en la calle Socabaya esquina Mariscal Santa Cruz. El 12 de Abril del 2000 la 4° sucursal abre sus puertas en la zona de Calacoto calle 15 en el edificio Torre Ketal, con la misma característica que la anterior.</p>
      <p>A mediados de la gestión de 1995 la empresa consolida sus operaciones con una razón social de tipo sociedad de responsabilidad limitada.</p>
      <p>La calidez en la atención y la cobertura en toda la ciudad de La Paz permiten a LIBRERÍA Y PAPELERIA OLIMPIA SRL., consagrarse como la cadena de librerías y papelerías más completa en la ciudad de La Paz.</p>  
      </div>
      
      
      
    </div>
    <div class="col"> 

    </div>
  </div>        
@endsection
      
