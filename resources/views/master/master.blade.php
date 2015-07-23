<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <link rel="shortcut icon" href="{{ asset('/images/nav.logo.png') }}"/>
    {!! HTML::style(asset('/css/app_laravel.css')) !!}
    {!! HTML::style(asset('/css/app.css')) !!}
    {!! HTML::style(asset('/css/allLibries.css')) !!}
    
 </head>
<body> 
  <header class="page-header"> @include('master.header') </header>
  <nav class="navbar navbar-default"> @include('master.nav') </nav>
  <section class="container"> 
      
      @include('flash::message');
      
      @yield('content') 
      
  </section> 
  <footer> @include('master.footer') </footer>
</body>
</html>

