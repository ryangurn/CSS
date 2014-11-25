@section('content')
<div class="col-sm-4">
  <div class="chart-wrapper">
    <div class="chart-title">
      Add Admin
    </div>
    <div class="chart-stage">

      <form action="" method="POST">
        <div class="form-group">
          <input type="text" name="firstname" placeholder="First Name" class="form-control" />
        </div>
        <div class="form-group">
          <input type="text" name="lastname" placeholder="Last Name" class="form-control" />
        </div>
        <div class="form-group">
          <input type="email" name="email" placeholder="Email" class="form-control" />
        </div>
        <div class="form-group">
          <input type="password" name="password" placeholder="Password" class="form-control" />
        </div>
        <div class="form-group">
          <input type="password" name="confirm" placeholder="Confirm" class="form-control" />
        </div>
        <div class="form-group">
          <input type="submit" value="Submit" class="btn btn-default form-control" />
        </div>
      </form>
    </div>

    <div class="chart-notes">
      This is where you can create another user that will be allowed to login to this same panel and act as an administrator
    </div>
  </div>
</div>
<div class="col-sm-4">
  <div class="chart-wrapper">
    <div class="chart-title">
      Add Category
    </div>
    <div class="chart-stage">

      <form action="" method="POST">
        <div class="form-group">
          <input type="text" name="name" placeholder="Name" class="form-control" />
        </div>
        <div class="form-group">
          <select name="grade" class="form-control">
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>
        </div>
        <div class="form-group">
          <input type="submit" value="Submit" class="btn btn-default form-control" />
        </div>
      </form>
    </div>

    <div class="chart-notes">
      This is where you can add a category that will be displayed to the students.
    </div>
  </div>
</div>
<div class="col-sm-4">
  <div class="chart-wrapper">
    <div class="chart-title">
      Add Section
    </div>
    <div class="chart-stage">

      <form action="" method="POST">
        <div class="form-group">
          <select name="category" class="form-control">
            @foreach($categories as $c)
            <option value="{{ $c->id }}">{{ $c->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <input type="text" name="name" placeholder="Name" class="form-control" />
        </div>
        <div class="form-group">
          <input type="submit" value="Submit" class="btn btn-default form-control" />
        </div>
      </form>
    </div>

    <div class="chart-notes">
      This is where you add a section to your category.
    </div>
  </div>
</div>
</div>
<div class="row">

  <div class="col-sm-4">
    <div class="chart-wrapper">
      <div class="chart-title">
        Remove Admin
      </div>
      <div class="chart-stage">
        <form action="" method="POST">
          <div class="form-group">
            <select name="user" class="form-control">
              @foreach($users as $u)
              <option value="{{ $u->id }}">{{ $u->email }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-default form-control" />
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="chart-wrapper">
      <div class="chart-title">
        Remove Category
      </div>
      <div class="chart-stage">
        <form action="" method="POST">
          <div class="form-group">
            <select name="category" class="form-control">
              @foreach($categories as $c)
              <option value="{{ $c->id }}">{{ $c->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-default form-control" />
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="chart-wrapper">
      <div class="chart-title">
        Remove Section
      </div>
      <div class="chart-stage">
        <form action="" method="POST">
          <div class="form-group">
            <select name="section" class="form-control">
              @foreach($sections as $s)
              <option value="{{ $s->id }}">{{ $s->name }} - {{ Category::find($s->category_id)->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-default form-control" />
          </div>
        </form>
      </div>
    </div>
  </div>
  @stop
