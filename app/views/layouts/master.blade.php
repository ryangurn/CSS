<!DOCTYPE html>
<html>
<head>
  <title>Class Selection System</title>
  <link rel="stylesheet" href="{{ asset('assets/lib/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/keen-dashboards.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/jquery.jgrowl.css') }}" />
</head>
<body class="application">

  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ URL::route('get-home') }}">Class Selection System</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left">
          <li><a href="{{ URL::route('get-home') }}">Home</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">

      @yield('content')

    </div>

    <hr>

    <p class="small text-muted">Built with &#9829; by Ryan Gurnick</p>

  </div>

  <script src="{{ asset('assets/lib/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/lib/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.jgrowl.js') }}"></script>
  <script src="{{ asset('assets/lib/keen-js/dist/keen.min.js') }}"></script>
  <script src="{{ asset('assets/js/meta.js') }}"></script>
  <script src="{{ asset('assets/js/keen.dashboard.js') }}"></script>

  <script type="text/javascript">
  @if(Session::has('global'))
  $.jGrowl("{{ Session::get('global') }}", { sticky: true, header:'Notification',position:'bottom-left' });
  @endif
  @if(Session::has('errors'))
  @foreach(json_decode(Session::get('errors'), true) as $error)
  $.jGrowl("{{ $error }}", { sticky: true, header:"Error",position:'bottom-left' });
  @endforeach
  @endif
  </script>

</body>
</html>
