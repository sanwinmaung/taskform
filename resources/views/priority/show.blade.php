@extends ('layouts.master')
@section ('content')

<section class="sample-text-area">
  <div class="container">
    <h3 class="text-heading title_color" style="margin-top: 50px;"><strong class="cyan-color">{{ $priority->title }}</strong> Priority</h3>
    <hr>
      <div style="margin-left: 20px;">
        <div class="form-group row">
          <h5 class="col-sm-3 cyan-color-2">Title</h5>
          <div class="col-sm-8">
            <p class="custom-p1">-&nbsp;&nbsp;&nbsp;&nbsp; {{ $priority->title }}</p>
          </div>
        </div>

        <div class="form-group row">
          <h5 class="col-sm-3 cyan-color-2">Description</h5>
          <div class="col-sm-8">
            <p class="custom-p1">-&nbsp;&nbsp;&nbsp;&nbsp; {{ $priority->description }}</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-3">
          </div>
          <div class="col-sm-8">
            <a href="{{ route('priority.index') }}" role="button" class="btn btn-sub"><i class="fa fa-check"></i> Close</a>
          </div>
        </div>
      </div>
  </div>
</section>

@endsection