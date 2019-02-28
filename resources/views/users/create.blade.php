@extends ('layouts.master')
@section ('content')

<section class="sample-text-area">
  <div class="container">
    <h3 class="text-heading title_color" style="margin-top: 50px;">Add Assignee Person</h3>
    <hr>
    <form class="form-horizontal" role="form" action="{{ route('users.store') }}" method="POST">
      @csrf

      <div class="form-group row">
        <label for="name" class="col-sm-3 col-form-label">name</label>
        <div class="col-sm-8">
          <input type="name" class="form-control border-left-red {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name') }}" required>

          @if ($errors->has('name'))
          <span class="invalid-feedback" role="alert">
            <strong>* {{ $errors->first('name') }}</strong>
          </span>
          @endif
        </div>
      </div>
      
      <div class="form-group row">
        <label for="name" class="col-sm-3 col-form-label">Email</label>
        <div class="col-sm-8">
          <input type="email" class="form-control border-left-red {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{ old('email') }}" required>

          @if ($errors->has('email'))
          <span class="invalid-feedback" role="alert">
            <strong>* {{ $errors->first('email') }}</strong>
          </span>
          @endif
        </div>
      </div>

      <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-8">
          <button type="submit" class="btn btn-default btn-sub"><i class="fa fa-plus"></i> Submit</button>
        </div></div>
      </form>
    </div>
  </section>

  @endsection