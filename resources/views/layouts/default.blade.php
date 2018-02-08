<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title','Sample')</title>
  </head>
  <body>
    <form action="{{ route('logout') }}" method="POST">
  {{ csrf_field() }}
  {{ method_field('DELETE') }}
  <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
</form>
    <div class="container">
      <div class="col-md-offset-1 col-md-10">
        @include('shared._messages')
        @yield('content')

      </div>
    </div>

  </body>
</html>
