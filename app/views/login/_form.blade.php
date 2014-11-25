@section('content')
<div class="col-sm-12">
  <div class="chart-wrapper">
    <div class="chart-title">
      Login
    </div>
    <div class="chart-stage">

      <form action="" method="POST">
        <div class="form-group">
          <div class="row">
            <div class="col-sm-2">
              <input type="text" name="firstname" placeholder="First" class="form-control" />
            </div>
            <div class="col-sm-2">
              <input type="text" name="lastname" placeholder="Last" class="form-control" />
            </div>
            <div class="col-sm-3">
              <input type="text" name="birthday" placeholder="Birthday (MM/DD/YYYY)" class="form-control" />
            </div>
            <div class="col-sm-3">
              <input type="text" name="grade" placeholder="Grade" class="form-control "/>
            </div>
            <div class="col-sm-2">
              <input type="submit" value="Submit" class="btn btn-default form-control" />
            </div>
          </div>
        </div>
      </form>

    </div>
    <div class="chart-notes">
      Please enter your first, last name and birthday.
    </div>
  </div>
</div>
@stop
