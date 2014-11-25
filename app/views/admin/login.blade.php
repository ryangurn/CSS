@section('content')
<div class="col-sm-12">
  <div class="chart-wrapper">
    <div class="chart-title">
      Login
    </div>
    <div class="chart-stage">

      <form action="" method="POST">
        <div class="form-group">
          <form action="" method="POST">
            {{ Form::token() }}
            <div class="form-group">
              <input type="text" name="email" placeholder="Email" class="form-control" />
            </div>
            <div class="form-group">
              <input type="password" name="password" placeholder="Password" class="form-control" />
            </div>
            <div class="form-group">
              <input type="submit" value="Submit" class="form-control btn btn-default" />
            </div>
          </form>
        </div>
      </form>

    </div>
    <div class="chart-notes">
      Please enter your first, last name and birthday.
    </div>
  </div>
</div>
@stop
