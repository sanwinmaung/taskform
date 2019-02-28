@extends ('layouts.master')
@section ('content')

<div class="whole-wrap">
  <div class="container">
    <div class="section-top-border">
      <h3 class="mb-30 title_color" style="margin-top: 100px;">All Contacts List <a href="{{ route('contact.create') }}" class="btn btn-info" style="float: right;">Add contact</a></h3>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Description</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($contacts as $contact)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td><a href="{{ route('contact.show', $contact->id) }}" class="cyan-color">{{ $contact->name }}</a></td>
              <td><a href="{{ route('contact.show', $contact->id) }}" class="cyan-color">{{ $contact->description }}</a></td>
              <td>
                <a href="{{ route('contact.edit', $contact->id) }}" class="custom-btn cyan-color"><i class="fa fa-edit"></i></a>
                <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" style="display: inline;" id="delete-form">
                  @csrf
                  @method('delete')

                  <button type="submit" class="red-color" id="delete-btn" style="background-color: none;"><i class="fa fa-trash"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
            <div class="clearfix "></div>
            <div style="text-align: center;">
              {{ $contacts->links() }}
            </div>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

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