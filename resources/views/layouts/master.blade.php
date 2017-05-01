<html>
   
   <head>
      <title>@yield('title')</title>
      <description> @yield('description')</description>
   </head>
   
   <body>
      @section('sidebar')
     <p> This is the master sidebar.</p>
      @show
      
      <div class = "container">
         @yield('content')
      </div>
   
   @section('footer')
   This is  master footer
   @show

   </body>
</html>