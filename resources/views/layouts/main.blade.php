<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Блог</title>
    <link rel="stylesheet" href="{{asset("assets/vendors/flag-icon-css/css/flag-icon.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/vendors/font-awesome/css/all.min.css")}}">
    <link href="{{asset("assets/vendors/aos/aos.css")}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">
    <script src="{{asset("assets/vendors/jquery/jquery.min.js")}}"></script>
    <script src="{{asset("assets/js/loader.js")}}"></script>
</head>
<body>
    <div class="edica-loader"></div>
    <header class="edica-header edica-landing-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{route('main.index')}}">БЛОГ</a>
                <div class="collapse navbar-collapse" id="edicaMainNav">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('main.index')}}">Блог</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('category.index')}}">Категории</a>
                        </li>
                        @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('personal.main.index')}}">Личный кабинет</a> 
                        </li>
                        
                        @endauth
                        
                      
                       
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Войти</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Регистрация</a>
                                </li>
                            @endif
                        @else
                        
                            <li class="nav-item dropdown">
                                      <form action="{{route('logout')}}" method="post">
                                    @csrf
                                    <input type="submit" class="btn btn-outline-primary" value="Выйти">
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </nav>
            
        </div>
    </header>
    
    @yield('content')
 
    <footer class="edica-footer"  >
        <strong>Блог</strong>
    </footer>
    <script src="{{asset("assets/vendors/popper.js/popper.min.js")}}"></script>
    <script src="{{asset("assets/vendors/bootstrap/dist/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("assets/vendors/aos/aos.js")}}"></script>
    <script src="{{asset("assets/js/main.js")}}"></script>
    <script>
        AOS.init({
            duration: 2000
        });
      </script>
</body>
</html>