<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title','Sample')</title>
  </head>
  <body>
    <div class="container">
      <div class="col-md-offset-1 col-md-10">
        @include('shared._messages')
        @yield('content')
        
      </div>
    </div>

  </body>
</html>
