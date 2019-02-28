@extends ('layouts.master')
@section ('content')

<section class="sample-text-area">
  <div class="container">
    <h3 class="text-heading title_color" style="margin-top: 50px;">Edit Contact</h3>
    <hr>
    <form class="form-horizontal" role="form" action="{{ route('contact.update', $contact->id) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="form-group row">
        <label for="name" class="col-sm-3 col-form-label">name</label>
        <div class="col-sm-8">
          <input type="name" class="form-control border-left-red {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name', $contact->name) }}" required>

          @if ($errors->has('name'))
          <span class="invalid-feedback" role="alert">
            <strong>* {{ $errors->first('name') }}</strong>
          </span>
          @endif
        </div>
      </div>

      <div class="form-group row">
        <label for="description" class="col-sm-3 col-form-label">Description</label>
        <div class="col-sm-8">
          <textarea class="form-control border-left-red {{ $errors->has('description') ? ' is-invalid' : '' }}" id="description" rows="5" name="description">{!! old('description', $contact->description) !!}</textarea>

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
          <a href="{{ route('contact.index') }}" role="button" class="btn btn-info">Cancel</a>
          <button type="submit" class="btn btn-default btn-sub">Update</button>
        </div></div>
      </form>
    </div>
  </section>

  @endsection