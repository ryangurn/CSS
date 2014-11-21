<!DOCTYPE html>
<html>
<head>
  <title>Dashboard Starter UI, by Keen IO</title>
  <link rel="stylesheet" href="{{ asset('assets/lib/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/keen-dashboards.css')}}">
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
        <a class="navbar-brand" href="../">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="navbar-brand" href="./">Dashboard Starter UI</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left">
          <li><a href="https://keen.io">Home</a></li>
          <li><a href="https://keen.io/team">Team</a></li>
          <li><a href="https://github.com/keenlabs/dashboards/tree/gh-pages/examples/starter-kit">Source</a></li>
          <li><a href="https://groups.google.com/forum/#!forum/keen-io-devs">Community</a></li><li><a href="http://stackoverflow.com/questions/tagged/keen-io?sort=newest&pageSize=15">Technical Support</a></li>
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

  <script src="{{ asset('assets/lib/keen-js/dist/keen.min.js') }}"></script>
  <script src="{{ asset('assets/js/meta.js') }}"></script>
  <script src="{{ asset('assets/js/keen.dashboard.js') }}"></script>

</body>
</html>
