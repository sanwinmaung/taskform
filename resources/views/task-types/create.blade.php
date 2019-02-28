@extends ('layouts.master')
@section ('content')

<section class="sample-text-area">
  <div class="container">
    <h3 class="text-heading title_color" style="margin-top: 50px;">Add Task Type</h3>
    <hr>
    <form class="form-horizontal" role="form" action="{{ route('task-types.store') }}" method="POST">
      @csrf

      <div class="form-group row">
        <label for="title" class="col-sm-3 col-form-label">Title</label>
        <div class="col-sm-8">
          <input type="title" class="form-control border-left-red {{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" name="title" value="{{ old('title') }}" required>

          @if ($errors->has('title'))
          <span class="invalid-feedback" role="alert">
            <strong>* {{ $errors->first('title') }}</strong>
          </span>
          @endif
        </div>
      </div>

      <div class="form-group row">
        <label for="description" class="col-sm-3 col-form-label">Description</label>
        <div class="col-sm-8">
          <textarea class="form-control border-left-red {{ $errors->has('description') ? ' is-invalid' : '' }}" id="description" rows="5" name="description">{!! old('description') !!}</textarea>

          @if ($errors->has('description'))
          <span class="invalid-feedback" role="alert">
            <strong>* {{ $errors->first('description') }}</strong>
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