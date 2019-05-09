<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel='shortcut icon' type='image/x-icon' href="{{ URL::asset('./img/logo/favicon.png') }}" />
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>@yield('title') | Breezcode</title>
      <meta name="description" content="@yield('description')">
      <!-- Styles -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>  
      <!-- Custon CSS -->
      <link href="{{ asset('css/style.css') }}" rel="stylesheet">
      <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
      <link href="{{ asset('css/styleNav.css') }}" rel="stylesheet"> 
      <!-- Scripts -->
      <script>
          window.Laravel = {!! json_encode([
          'csrfToken' => csrf_token(),
          ]) !!};
      </script>

      <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
      <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
      <script>
        window.addEventListener("load", function(){
        window.cookieconsent.initialise({
          "palette": {
            "popup": {
              "background": "#024059"
            },
            "button": {
              "background": "#f1d600"
            }
          },
          "content": {
            "message": "Utilizamos cookies propias y de terceros para ofrecer nuestros servicios y recoger información estadística. Si continua navegando acepta su instalación y uso. Puede cambiar la configuración u obtener más información en nuestra  ",
            "dismiss": "OK!",
            "link": "política de cookies",
            "href": "http://localhost:8000/politica-de-cookies"
          }
        })});
      </script>
  </head>
  <body>
  <nav class="navbar navbar-default navbar-doublerow navbar-trans navbar-fixed-top">
  <!-- top nav -->
  <nav class="navbar navbar-top hidden-xs">
    <div class="container">
      <!-- left nav top -->
      <ul class="nav navbar-nav pull-left">
        <li><a href="https://twitter.com/breezcode/" target="_blank"><span class="fa fa-twitter text-white"></span><span class="sr-only">Síguenos en Twitter</span></a></li>
        <li><a href="https://www.facebook.com/breezcode/" target="_blank"><span class="fa fa-facebook text-white"></span><span class="sr-only">Síguenos en Facebook</span></a></li>
        <li><a href="https://www.instagram.com/breezcode/" target="_blank"><span class="fa fa-instagram text-white"></span><span class="sr-only">Síguenos en Instagram</span></a></li>
      </ul>
      <!-- right nav top -->
      <ul class="nav navbar-nav pull-right">
        <li><a href="{{ URL::asset('empresa') }}" class="text-white">Empresa</a></li>
        <li><a href="{{ URL::asset('contacto') }}" class="text-white">Contacto</a></li> 
      </ul>
    </div>
    <div class="dividline light-grey"></div>
  </nav>
  <!-- down nav -->
  <nav class="navbar navbar-down">
    <div class="container">
      <div class="flex-container">  
        <div class="navbar-header flex-item">
          <div class="navbar-brand" style="padding: 0px !important;"><a href="{{ URL::asset('/') }}"><img src="{{ URL::asset('img/logo/logowhite.png') }}" alt="Logo Breezcode" style="height: 50px;"></a></div>
        </div>
        <ul class="nav navbar-nav flex-item hidden-xs">
          <li><a {!! (Route::is('accessibility') || Route::is('servicios') || Route::is('servicios') || Route::is('servicios') ? 'class="active-item"' : '') !!} href="{{ URL::asset('articulos') }}">Artículos</a></li>
          <li><a {!! (Route::is('accessibility') || Route::is('servicios') || Route::is('servicios') || Route::is('servicios') ? 'class="active-item"' : '') !!} href="{{ URL::asset('servicios') }}">Servicios</a></li>
          <!-- <li><a {!! (Route::is('empresa') ? 'class="active-item"' : '') !!} href="{{ URL::asset('clientes') }}">Clientes</a></li>           -->
        </ul>
        <ul class="nav navbar-nav flex-item hidden-xs pull-right">
          <!-- <li><a href="{{ URL::asset('planes') }}" class="">Nuestros Planes</a></li>  -->
        </ul>
        <!-- dropdown only moblie -->
          <div class="dropdown visible-xs pull-right">
            <button class="btn btn-default dropdown-toggle " type="button" id="dropdownmenu" data-toggle="dropdown">
              <span class="glyphicon glyphicon-align-justify"></span> 
            </button>
            <ul class="dropdown-menu">
              <li><a {!! (Route::is('accessibility') || Route::is('servicios') || Route::is('servicios') || Route::is('servicios') ? 'class="active-item"' : '') !!} href="{{ URL::asset('articulos') }}">Artículos</a></li>
              <li><a {!! (Route::is('accessibility') || Route::is('adaptability') || Route::is('consultancy') || Route::is('seo') ? 'class="active-item"' : '') !!} href="{{ URL::asset('servicios') }}">Servicios</a></li>
              <!-- <li><a {!! (Route::is('empresa') ? 'class="active-item"' : '') !!} href="{{ URL::asset('clientes') }}">Clientes</a></li> -->
              <li role="separator" class="divider"></li>
              <li><a href="{{ URL::asset('empresa') }}">Empresa</a></li>
              <li><a href="{{ URL::asset('contacto') }}">Contacto</a></li>
              <li role="separator" class="divider"></li>
              <!-- <li><a href="{{ URL::asset('planes') }}">Nuestros Planes</a></li>  -->
            </ul>
          </div>
        </div>  
      </div>
    </nav>
  </nav> 

  <main class="cd-main-content">  
      @yield('content')
  </main>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 footer-col">
        <div class="logofooter"><img src="{{ URL::asset('img/logo/iconwhite.png') }}" alt="Logo Breezcode" style="height: 50px;"></div>
          <p>Somos una empresa que brinda soluciones de desarrollo web, servicios de consultoría en SEO y accesibilidad web.</p>
          <p>Dedicada a satisfacer las necesidades de sus clientes en el ámbito tecnológico brindando un excelente servicio y atención.</p>
          <p><span class="fa fa-map-pin"></span> Florida, USA</p>
          <p><span class="fa fa-envelope"></span> E-mail: info@breezcode.com</p>
        </div>
        <div class="col-md-3 col-sm-6 footer-col visible-md visible-lg">
          <span class="heading7">ENLACES</span>
          <ul class="footer-ul">
            <li><a href="{{ URL::asset('servicios') }}" class="color-footer-text"> Servicios</a></li>
            <!-- <li><a href="{{ URL::asset('clientes') }}" class="color-footer-text"> Clientes</a></li> -->
            <!-- <li><a href="{{ URL::asset('planes') }}" class="color-footer-text"> Nuestros Planes</a></li> -->
            <li><a href="{{ URL::asset('empresa') }}" class="color-footer-text"> Empresa</a></li>
            <li><a href="{{ URL::asset('contacto') }}" class="color-footer-text"> Contacto</a></li>
            <li><a href="{{ URL::asset('politica-de-cookies') }}" class="color-footer-text"> Política de cookies</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6 footer-col visible-md visible-lg">
          <span class="heading7">SERVICIOS</span>
          <ul class="footer-ul">
            <li><a href="{{ URL::asset('servicios') }}" class="color-footer-text"> Desarrollo de Aplicaciones Web</a></li>
            <li><a href="{{ URL::asset('servicios') }}" class="color-footer-text"> Desarrollo de Sistemas CMS</a></li>
            <li><a href="{{ URL::asset('servicios') }}#consultorias" class="color-footer-text"> Adaptabilidad Web (Web Responsive)</a></li>
            <li><a href="{{ URL::asset('servicios') }}#consultorias" class="color-footer-text"> Accesibilidad Web</a></li>
            <li><a href="{{ URL::asset('servicios') }}#consultorias" class="color-footer-text"> Consultoría en SEO</a></li>
            <li><a href="{{ URL::asset('servicios') }}" class="color-footer-text"> Hosting</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6 footer-col">
          <span class="heading7">REDES SOCIALES</span>
          <ul class="margin-top-15 footer-social">
            <li class="margin-right-20"><a href="https://twitter.com/breezcode/" target="_blank"><span class="fa fa-twitter text-white"></span><span class="sr-only">Síguenos en Twitter</span></a></li>
            <li class="margin-right-20"><a href="https://www.facebook.com/breezcode/" target="_blank"><span class="fa fa-facebook text-white"></span><span class="sr-only">Síguenos en Facebook</span></a></li>
            <li class="margin-right-20"><a href="https://www.instagram.com/breezcode/" target="_blank"><span class="fa fa-instagram text-white"></span><span class="sr-only">Síguenos en Instagram</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
<!--footer start from here-->

<div class="copyright">
  <div class="container col-md-12">
      <p class="text-center">© 2018 - Todos los derechos reservados Breezcode</p>
  </div>
</div>

<!-- Scripts --> 
  <script src="{{ asset('js/jquery3-2-1.js') }}"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="{{ asset('js/js.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  <script src="{{ asset('js/modernizr.js') }}"></script>    

</body>
   
</html>
 