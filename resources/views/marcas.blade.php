@extends('layouts.plantilla')

@section('title', 'Inicio')

@section('estilo')
 <style type="text/css">  
  
.fuente {
  font-family: 'Lora';

}


p {
  line-height: 1.75;
}

.text-faded {
  color: rgba(255, 255, 255, 0.3);
}

.site-heading {
  margin-top: 5rem;
  margin-bottom: 5rem;
  text-transform: uppercase;
  line-height: 1;
  font-family: 'Raleway';
}

.site-heading .site-heading-upper {
  display: block;
  font-size: 2rem;
  font-weight: 800;
}

.site-heading .site-heading-lower {
  font-size: 5rem;
  font-weight: 100;
  line-height: 4rem;
}

.page-section {
  margin-top: 5rem;
  margin-bottom: 5rem;
}

.section-heading {
  text-transform: uppercase;
}

.section-heading .section-heading-upper {
  display: block;
  font-size: 3rem;
  font-weight: 800;
}

.section-heading .section-heading-lower {
  display: block;
  font-size: 3rem;
  font-weight: 100;
}

.bg-faded {
  background-color: rgba(255, 255, 255, 0.85);
}






@media (min-width: 992px) {
  .about-heading .about-heading-img {
    position: relative;
    z-index: 0;
  }
  .about-heading .about-heading-content {
    margin-top: -5rem;
    position: relative;
    z-index: 1;
  }
}

@media (min-width: 992px) {
  .product-item .product-item-title {
    position: relative;
    z-index: 1;
    margin-bottom: -3rem;
  }
  .product-item .product-item-img {
    position: relative;
    z-index: 0;
    max-width: 60vw;
  }
  .product-item .product-item-description {
    position: relative;
    z-index: 1;
    margin-top: -3rem;
    max-width: 50vw;
  }
}

.list-hours {
  font-size: 0.9rem;
}

.list-hours .list-hours-item {
  border-bottom: 1px solid rgba(230, 167, 86, 0.5);
  padding-bottom: .25rem;
  margin-bottom: 1rem;
  font-style: italic;
}

.list-hours .list-hours-item.today {
  font-weight: bold;
  color: #e6a756;
}


.address strong {
  font-size: 1.2rem;
}

.footer {
  background-color: rgba(47, 23, 15, 0.9);
}

.text-primary {
  color: #e6a756 !important;
}



.font-weight-light {
  font-weight: 100 !important;
}
.mititulo
{
  font-size: 2em;
  color:#870000
}
.mifuente
{
  font-size: 1.2em;
  color:#003d7a
}
</style>


@endsection

@section('content')
	 <div class="row">
     <div class="col-12">
       <div class="card mb-3" style="max-width: 100%; box-shadow: 0px 0px 14px 1px rgba(0,0,0,0.75);">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{asset('pics/ABC_presentacion.jpg')}}" class="card-img">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title mititulo">ABC</h5>
        <p class="card-text mifuente">Principalmente enfocado al área papelera en el cual se caracteriza principalmente por la producción de hojas de carpeta, cuadernos, libretas hojas trapper libretas con distintas características y personalizables.</p>
      </div>
    </div>
  </div>
</div>
     </div>
   </div>
   <div class="row">
     <div class="col-12">
       <div class="card mb-3" style="max-width: 100%; box-shadow: 0px 0px 14px 1px rgba(0,0,0,0.75);">
  <div class="row no-gutters">
    
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title mititulo">Pelikan</h5>
        <p class="card-text mifuente">Actualmente el foco principal de Pelikan es una gama de productos para la escritura, la oficina y el hogar como por ejemplo cartuchos de tinta para impresoras, cintas para máquinas de escribir, papel de calco, bolígrafos, rotuladores, plumas estilográficas, adhesivo, gomas, marcadores, lápices, acuarelas, crayones, pintura digital (para pintar con las manos), tinta china, manualidades y tijeras.</p>
      </div>
    </div>
    <div class="col-md-4">
      <img src="{{asset('pics/Pelikan_presentacion.jpg')}}" class="card-img">
    </div>
  </div>
</div>
     </div>
   </div>

<div class="row">
     <div class="col-12">
       <div class="card mb-3" style="max-width: 100%; box-shadow: 0px 0px 14px 1px rgba(0,0,0,0.75);">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{asset('pics/Pentel_presentacion.jpg')}}" class="card-img">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title mititulo">Pentel</h5>
        <p class="card-text mifuente">Produce artículos de escritorio. Algunos de sus productos incluyen los portaminas, los borradores, los marcadores, las plumas, el líquido de corrección, rotuladores retráctiles y las minas del lápiz.</p>
      </div>
    </div>
  </div>
</div>
     </div>
   </div>
<!--
    <div class="fuente">
     	<section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex ml-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">ABC</span>
              <span class="section-heading-lower"></span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{asset('pics/ABC_presentacion.jpg')}}"  alt="" width="900" height="700" >
        <div class="product-item-description d-flex mr-auto">
          <div class="bg-faded p-5 rounded">
            <p class="mb-0">Principalmente enfocado al área papelera en el cual se caracteriza principalmente por la producción de hojas de carpeta, cuadernos, libretas hojas trapper libretas con distintas características y personalizables.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex mr-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">Pelikan</span>
              <span class="section-heading-lower"></span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{asset('pics/Pelikan_presentacion.jpg')}}" alt="" width="900" height="700"  >
        <div class="product-item-description d-flex ml-auto">
          <div class="bg-faded p-5 rounded">
            <p class="mb-0">Actualmente el foco principal de Pelikan es una gama de productos para la escritura, la oficina y el hogar como por ejemplo cartuchos de tinta para impresoras, cintas para máquinas de escribir, papel de calco, bolígrafos, rotuladores, plumas estilográficas, adhesivo, gomas, marcadores, lápices, acuarelas, crayones, pintura digital (para pintar con las manos), tinta china, manualidades y tijeras.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex ml-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">Pentel</span>
              <span class="section-heading-lower"></span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="pics/Pentel_presentacion.jpg" alt="" width="900" height="700"  >
        <div class="product-item-description d-flex mr-auto">
          <div class="bg-faded p-5 rounded">
            <p class="mb-0">Produce artículos de escritorio. Algunos de sus productos incluyen los portaminas, los borradores, los marcadores, las plumas, el líquido de corrección, rotuladores retráctiles y las minas del lápiz. </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
-->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <div class="col"> 
	</div>
@endsection