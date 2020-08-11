<!DOCTYPE html>
<html class='no-js' lang='es'>
   <head>
      <head>
         @include('theme.header')
         <title>@yield('titulo')</title>
         @yield('extra-css')    
   </head>
   <body class='main page'>
      <!-- Navbar -->
      @include('theme.navbar')
      <div id='wrapper'>
         <!-- Sidebar -->
         @include('theme.sidebar')      
         <!-- Content -->
         <div id='content'>
            @yield('content')    
         </div>
      </div>
      <!-- Footer -->
      @include('theme.footer')
      <!-- Javascripts -->
      @include('theme.scripts')    
      @yield('extra-scripts')
   </body>
</html>