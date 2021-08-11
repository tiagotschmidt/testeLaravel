<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Instituo de Física - Teste</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body class="bg-gray-300">
    <nav class="p-6 bg-white flex justify-between mb-6">
      <ul class="flex items-center">
        <li>
          <a href="# class=p-3">Home</a>
        </li>
        <li>
          <a href="#" class=p-3>Dashboard</a>
        </li>
        <li>
          <a href="#" class=p-3>Post</a>
        </li>
      </ul>

      <ul class="flex items-center">
        <li>
          <a href="# class=p-3">Instituto de Física</a>
        </li>
        @auth
          <li>
            <a href="#" class=p-3></a>
          </li>
          <li>
            <a href="{{ route('logout') }}" class=p-3>Logout</a>
          </li>
        @endauth

        @guest
          <li>
            <a href="{{ route('login') }}" class=p-3>Login</a>
          </li>
          <li>
            <a href="{{ route('register') }}" class=p-3>Register</a>
          </li>
        @endguest

      </ul>
    </nav>
    @yield('content')
  </body>
</html>
