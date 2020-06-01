<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<style type="text/css">


	body{
        background-image:url('{{ Voyager::image( Voyager::setting("site.bg_image"), voyager_asset("images/bg.jpg") ) }}');

       background-size: cover; /* px % auto cover contain */
       background-position: center;
       background-attachment: fixed; /* 圖不跟著移動 */
        font-family: "小苹果", "思源黑體", sans-serif;
        /* text-align: center;*/
        font-size:20px;

	}


.ad{
	width: 100%;
 	 height: 220px;
    text-align: left;
    position: absolute;
    top: 40%;
    left: 50%;
	margin-left: -250px;
	opacity: 0.9;
  font-size:20px;
}

.top-nav ul {padding:0;}
.top-nav ul ul {
  position:absolute;
  background:#152732;
}
.top-nav li {
  float:left;
  list-style:none outside none;
  cursor:pointer;
}
.top-nav li a {
  color:#fff;
  display:block;
  font-size:1rem;
  padding:1.25rem;
}
.top-nav li ul li a {
  background:none repeat scroll 0 0 #152732;
  min-width:100%;
  padding:0.625rem;
}
.top-nav li a:hover, .aside-nav li a:hover {background:#2b4c61;}
.top-nav li ul {display:none;}
.top-nav li ul li,.top-nav li ul li ul li {
  float:none;
  list-style:none outside none;
  min-width:100%;
  padding:0;
}
.rr{
    color:#FED189;

}
</style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">

              <span class="h1 mx-1 rr">   {{ config('app.name', 'Laravel') }}  </span>



                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                         {{-- /*   @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif*/ --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
