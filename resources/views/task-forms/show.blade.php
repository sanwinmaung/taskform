@extends ('layouts.master')
@section ('content')

<section class="sample-text-area">
  <div class="container">
    <h3 class="text-heading title_color" style="margin-top: 50px;">Task for <strong class="cyan-color">{{ $task->user->name }}</strong></h3>
    <hr>
    {{-- <form class="form-horizontal"> --}}
      <div style="margin-left: 20px;">
        <div class="form-group row">
          <h5 class="col-sm-3 cyan-color-2">Task Type</h5>
          <div class="col-sm-8">
            <p class="custom-p1">-&nbsp;&nbsp;&nbsp;&nbsp; {{ $task->taskType->title }}</p>
          </div>
        </div>

        <div class="form-group row">
          <h5 class="col-sm-3 cyan-color-2">Company</h5>
          <div class="col-sm-8">
            <p class="custom-p1">-&nbsp;&nbsp;&nbsp;&nbsp; {{ $task->company }}</p>
          </div>
        </div>

        <div class="form-group row">
          <h5 class="col-sm-3 cyan-color-2">Contact</h5>
          <div class="col-sm-8">
            <p class="custom-p1">-&nbsp;&nbsp;&nbsp;&nbsp; {{ $task->contact->name }}</p>
          </div>
        </div>

        <div class="form-group row">
          <h5 class="col-sm-3 cyan-color-2">Subject / Objective</h5>
          <div class="col-sm-8">
            <p class="custom-p1">-&nbsp;&nbsp;&nbsp;&nbsp; {{ $task->objective }}</p>
          </div>
        </div>

        <div class="form-group row">
          <h5 class="col-sm-3 cyan-color-2">Assigned To</h5>
          <div class="col-sm-8">
            <p class="custom-p1">-&nbsp;&nbsp;&nbsp;&nbsp; {{ $task->user->name }}</p>
          </div>
        </div>

        <div class="form-group row">
          <h5 class="col-sm-3 cyan-color-2">Due Date</h5>
          <div class="col-sm-8">
            <p class="custom-p1">-&nbsp;&nbsp;&nbsp;&nbsp; {{ $task->due_date }} - {{ $task->due_time }}</p>
          </div>
        </div>

        <div class="form-group row">
          <h5 class="col-sm-3 cyan-color-2">Reminder Date</h5>
          <div class="col-sm-8">
            <p class="custom-p1">-&nbsp;&nbsp;&nbsp;&nbsp; {{ $task->remind_date }} - {{ $task->remind_time }}</p>
          </div>
        </div>

        <div class="form-group row">
          <h5 class="col-sm-3 cyan-color-2">Priority</h5>
          <div class="col-sm-8">
            <p class="custom-p1">-&nbsp;&nbsp;&nbsp;&nbsp; {{ $task->priority->title }}</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-3">
          </div>
          <div class="col-sm-8">
            <a href="{{ route('task-forms.index') }}" role="button" class="btn btn-sub"><i class="fa fa-check"></i> Close</a>

            {{-- <form action="{{ route('task-forms.destroy', $task->id) }}" method="POST" style="display: inline;" id="delete-form">
              @csrf
              @method('delete')

              <button type="submit" class="btn btn-default btn-sub" id="delete-btn"><i class="fa fa-trash"></i> Delete</button>
            </form> --}}
          </div>
        </div>
      </div>
    {{-- </form> --}}
  </div>
</section>

@endsection
@push ('script')
<script>

  $(document).on('click', '#delete-btn', function (e) {
    e.preventDefault();
    var self = $(this);

    swal({
      title: "Are you sure?",
      // text: "You will not be able to recover this record!",
      type: 'warning',
      // allowOutsideClick: true,
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Delete",
      cancelButtonText: "Cancel",
      focusOnCancel: true,
      closeOnConfirm: false,
    },
    function(isConfirm){
      if (isConfirm) {
        // swal("Deleted!", "Incredible Place has been deleted.", "success");
        setTimeout(function () {
          self.parents('#delete-form').submit();
        }, 200);
      }
    });
  })
</script>
@endpush