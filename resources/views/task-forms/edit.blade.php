@extends ('layouts.master')
@section ('style')
<link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
@endsection
@section ('content')

<section class="sample-text-area">
  <div class="container">
    <h3 class="text-heading title_color" style="margin-top: 50px;">Edit Task</h3>
    <hr>
    <form class="form-horizontal" role="form" action="{{ route('task-forms.update', $task->id) }}" method="POST">
      @csrf
      @method('PUT')
      
      <div class="form-group row {{ $errors->has('task_type_id') ? ' has-error' : '' }}">
        <label for="task_type_id" class="col-sm-3 col-form-label">Task Type</label>
        <div class="col-sm-8">
          <select class="custom-select border-left-red" name="task_type_id" id="task_type_id">
            <option selected disabled>Select a Task Type</option>
            @foreach ($task_types as $task_type)
            <option value="{{ $task_type->id }}" {{ (collect(old('task_type_id', $task->task_type_id))->contains($task_type->id)) ? 'selected':'' }}>{{ $task_type->title }}</option>
            @endforeach
          </select>

          @if ($errors->has('task_type_id'))
          <span class="invalid-feedback" role="alert">
            <strong>* {{ $errors->first('task_type_id') }}</strong>
          </span>
          @endif
        </div>
      </div>

      <div class="form-group row {{ $errors->has('company') ? ' is-invalid' : '' }}">
        <label for="company" class="col-sm-3 col-form-label">Company</label>
        <div class="col-sm-8">
          <input type="company" class="form-control border-left-red" id="company" name="company" value="{{ old('company', $task->company) }}">

          @if ($errors->has('company'))
          <span class="invalid-feedback" role="alert">
            <strong>* {{ $errors->first('company') }}</strong>
          </span>
          @endif
        </div>
      </div>

      <div class="form-group row {{ $errors->has('contact_id') ? ' has-error' : '' }}">
        <label for="contact_id" class="col-sm-3 col-form-label">Contact</label>
        <div class="col-sm-8">
          <select class="custom-select border-left-red" name="contact_id" id="contact_id">
            <option selected disabled>Select a Contact</option>
            @foreach ($contacts as $contact)
            <option value="{{ $contact->id }}" {{ (collect(old('contact_id', $task->contact_id))->contains($contact->id)) ? 'selected':'' }}>{{ $contact->name }}</option>
            @endforeach
          </select>

          @if ($errors->has('contact_id'))
          <span class="invalid-feedback" role="alert">
            <strong>* {{ $errors->first('contact_id') }}</strong>
          </span>
          @endif
        </div>
      </div>

      <div class="form-group row">
        <label for="objective" class="col-sm-3 col-form-label">Subject / Objective</label>
        <div class="col-sm-8">
          <input type="objective" class="form-control border-left-red {{ $errors->has('objective') ? ' is-invalid' : '' }}" id="objective" name="objective" value="{{ old('objective', $task->objective) }}">

          @if ($errors->has('objective'))
          <span class="invalid-feedback" role="alert">
            <strong>* {{ $errors->first('objective') }}</strong>
          </span>
          @endif
        </div>
      </div>

      <div class="form-group row {{ $errors->has('user_id') ? ' has-error' : '' }}">
        <label for="user_id" class="col-sm-3 col-form-label">Assigned To</label>
        <div class="col-sm-8">
          <select class="custom-select border-left-red" name="user_id" id="user_id">
            <option selected disabled>Select an Assignee</option>
            @foreach ($users as $user)
            <option value="{{ $user->id }}" {{ (collect(old('user_id', $task->user_id))->contains($user->id)) ? 'selected':'' }}>{{ $user->name }}</option>
            @endforeach
          </select>

          @if ($errors->has('user_id'))
          <span class="invalid-feedback" role="alert">
            <strong>* {{ $errors->first('user_id') }}</strong>
          </span>
          @endif
        </div>
      </div>

      <div class="form-group row">
        <label for="datepicker" class="col-sm-3 col-form-label">Due Date</label>
        <div class="col-sm-4">
          <input id="datepicker" class="border-left-red {{ $errors->has('due_date') ? ' has-error' : '' }}" name="due_date" value="{{ old('due_date', $task->due_date) }}" />
          @if ($errors->has('due_date'))
          <span class="invalid-feedback" role="alert">
            <strong>* {{ $errors->first('due_date') }}</strong>
          </span>
          @endif
        </div>

        <div class="col-sm-4 time-picker-margin">
          <input id="timepicker" type="text" placeholder="HH:MM" class="{{ $errors->has('due_time') ? ' has-error' : '' }}" name="due_time" value="{{ old('due_time', $task->due_time) }}" style="border: 1px solid #ced4da !important;" />
          @if ($errors->has('due_time'))
          <span class="invalid-feedback" role="alert">
            <strong>* {{ $errors->first('due_time') }}</strong>
          </span>
          @endif
        </div>

      </div>

      <div class="form-group row">
        <label for="datepicker2" class="col-sm-3 col-form-label">Set Reminder</label>
        <div class="col-sm-4">
          <input id="datepicker2" class="border-left-red-responsive {{ $errors->has('remind_date') ? ' has-error' : '' }}" name="remind_date" value="{{ old('remind_date', $task->remind_date) }}"  />
          @if ($errors->has('remind_date'))
          <span class="invalid-feedback" role="alert">
            <strong>* {{ $errors->first('remind_date') }}</strong>
          </span>
          @endif
        </div>

        <div class="col-sm-4 time-picker-margin">
          <input id="timepicker2" type="text" placeholder="HH:MM" class="{{ $errors->has('remind_time') ? ' has-error' : '' }}" name="remind_time" value="{{ old('remind_time', $task->remind_time) }}"  style="border: 1px solid #ced4da !important;" />
          @if ($errors->has('remind_time'))
          <span class="invalid-feedback" role="alert">
            <strong>* {{ $errors->first('remind_time') }}</strong>
          </span>
          @endif
        </div>
      </div>

      <div class="form-group row {{ $errors->has('priority_id') ? ' has-error' : '' }}">
        <label for="priority_id" class="col-sm-3 col-form-label">Priority</label>
        <div class="col-sm-8">
          <select class="custom-select border-left-red" name="priority_id" id="priority_id" value="{{ old('priority_id') }}">
            <option selected disabled>Select a Priority</option>
            @foreach ($priorities as $priority)
            <option value="{{ $priority->id }}" {{ (collect(old('priority_id', $task->priority_id))->contains($priority->id)) ? 'selected':'' }}>{{ $priority->title }}</option>
            @endforeach
          </select>

          @if ($errors->has('priority_id'))
          <span class="invalid-feedback" role="alert">
            <strong>* {{ $errors->first('priority_id') }}</strong>
          </span>
          @endif
        </div>
      </div>

      <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-8">
          <a href="{{ route('task-forms.index') }}" role="button" class="btn btn-info">Cancel</a>
          <button type="submit" class="btn btn-default btn-sub">Update</button>
        </div></div>
      </form>
    </div>
  </section>

  @endsection
  @push ('script')
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
  <script>
    $('#datepicker').datepicker({
      uiLibrary: 'bootstrap4'
    });
    $('#timepicker').timepicker({
      uiLibrary: 'bootstrap4'
    });
    $('#datepicker2').datepicker({
      uiLibrary: 'bootstrap4'
    });
    $('#timepicker2').timepicker({
      uiLibrary: 'bootstrap4'
    });
  </script>
  @endpush