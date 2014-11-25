@section('content')
<div class="col-sm-12">
  <div class="chart-wrapper">
    <div class="chart-title">
      Selection
    </div>
    <div class="chart-stage">
      <form action="" method="POST">
        @foreach($array as $k => $v)
        <div class="col-sm-12">
          <h6>{{ $k }}</h6>
          <ol>
            @foreach($v as $value)
            <li><input type="checkbox" /> {{ $value }}</li>
            @endforeach
          </ol>
        </div>
        @endforeach
        <input type="submit" value="Save" class="btn btn-default" />
      </form>
    </div>
    <div class="chart-notes">
      Please select 2 from each of the categories, no exception. :)
    </div>
  </div>
</div>
@stop
