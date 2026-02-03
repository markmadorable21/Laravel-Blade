<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body>
  <header>
    <!-- header tag --> 
     <img src="{{ asset('images/search_icon.png') }}" alt="" style="height:45px">
    @yield('header')
  </header>  
  <main>
    <!-- main content tag -->
    @yield('maincontent') 
</main>

<footer>  
  <!-- footer tag -->
    @yield('footer') 
</footer>
</body>
</html>