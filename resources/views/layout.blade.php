<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="stylesheet" href="resources/css/app.css">
    <link rel="stylesheet" href="resources/css/style.css">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('css/app.css') }}" rel="stylesheet"></script>
    <script src="{{ asset('css/style.css') }}" rel="stylesheet"></script>
    <script src="{{asset('js/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <link rel="stylesheet" href="resources/sass/app.css">
     {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css', 'resources/css/appstyle.css']) --}}
     @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/app.css', 'resources/css/style.css'])

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body class="bodys">
<div class="d-flex flex-column my-auto">
    <nav class="navbar p-1 mb-5 unorder">
    <a class="navbar-brand buttons" href="{{ route('index') }}">
    <img src="img/hydro2.png" width="90" height="75" >
    </a>
        <ul class="nav navbar">
            <li class="nav-item"><a class="nav-link buttons"  href="{{ route('index') }}">Inicio</a>
            </li>
            @guest  
            <li class="nav-item"> <a class="nav-link buttons" href="{{ route('contact') }}">Contacto</a>
            </li>
            <li class="nav-item"> 
                <a class="nav-link buttons" href="{{ route('about') }}">Nosotros</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link  butt" href="{{ route('login') }}">Login</a>
            </li> --}}
            @else

            
            {{-- <li class="nav-item"> 
                <a class="nav-link butt" href="{{ route('profile') }}">Mi Perfil</a>
            </li>
            <li class="nav-item">
                 <a  class="nav-link butt" href="{{ route('portfolios') }}">Consumos</a>
            </li>
            <li class="nav-item">
                <a  class="nav-link butt" href="#"onclick="event.preventDefault();document.getElementById('logout-form').submit();"> Logout</a>    
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form> --}}
            @endguest
         </ul>
    </nav>
    {{-- @include('sesion') --}}
    <main>
        @yield('contenido')
    </main>
        <footer class="hydro-footer" >
            <div class="container">
              <div class="row row-30">
                <div class="col-md-4 col-xl-5">
                  <div class="pr-xl-4 p-md-5">
                    <p class="texto"><span>© Hydro </span><span class="copyright-year">2020</span><span> todos los derechos reservados.</span></p>
                  </div>
                </div>
                <div class="col-md-4 texto p-md-3">
                  <h5>Contacto</h5>
                  <dl class="contact-list">
                    <dt>Direccion:</dt>
                    <dd>Av. Luro 9850, Mar del Plata, Argentina</dd>
                  </dl>
                  <dl class="contact-list">
                    <dt>Email:</dt>
                    <dd><span>questions@hydro.com</span></dd>
                  </dl>
                  <dl class="contact-list">
                    <dt>Telefonos:</dt>
                    <dd><span>0800-666-4001</span><span> o </span><span>0800-666-4002</span>
                    </dd>
                  </dl>
                </div>
                <div class="col-md-4 col-xl-3 p-md-3">
                  <h5>Links</h5>
                  <ul class="nav-list">
                    <li><a class="link" href="{{ route('about') }}">Nosotros</a></li>
                    <li><a class="link" href="{{ route('contact') }}">Contacto</a></li>
                    <li><a class="link" href="{{ route('index') }}">Inicio</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </footer>
    </div>
</body>
</html>