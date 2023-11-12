@extends('admin.layouts.app')
@section('content')
<style>
  .card hr {
    color: #adb35b !important;
    height: 2px !important;
    width: 100% !important;
  }

  .signature-line {
    border-bottom: 1px solid #000;
    /* Adjust the border properties as needed */
    margin-top: 30px;
    /* You can adjust the spacing above the signature line */
  }

  .warranty-heading {
    color: #43491a !important;
    text-align: center;
    margin-top: 30px;
    margin-bottom: 30px;
  }

  .card hr {
    color: #adb35b !important;
    height: 2px !important;
    width: 100% !important;
  }

  .signature-line {
    border-bottom: 1px solid #000;
    /* Adjust the border properties as needed */
    margin-top: 30px;
    /* You can adjust the spacing above the signature line */
  }

  .kbw-signature {
    width: 400px;
    height: 200px;
  }
</style>
<script>
  $(function() {
    var sig = $('#sig').signature();
    $('#disable').click(function() {
      var disable = $(this).text() === 'Disable';
      $(this).text(disable ? 'Enable' : 'Disable');
      sig.signature(disable ? 'disable' : 'enable');
    });
    $('#clear').click(function() {
      sig.signature('clear');
    });
    $('#json').click(function() {
      alert(sig.signature('toJSON'));
    });
    $('#svg').click(function() {
      alert(sig.signature('toSVG'));
    });
  });
</script>

<!-- Contact Start -->
<div class="page-holder w-100 d-flex flex-wrap">
  <div class="container-fluid px-xl-5">
    <section class="py-5">
      <div class="row">
        <div class="col-md-12">
          @if(session()->has('success-message'))
          <div class="alert alert-success">
            {{ session('success-message') }}
          </div>
          @elseif(session()->has('error-message'))
          <div class="alert alert-danger">
            {{ session('error-message') }}
          </div>
          @endif
        </div>
        <div class="col-lg-12 mb-12">
          <div class="card">
            <div class="card-header row">
              <h6 class="text-uppercase mb-0 col-10">HERE ARE ALL ACTIVE WARRANTY </h6>
              <a href="{{ route('admin.warranty.create') }}" class="btn btn-primary col-2 float-right">Add New Warranty</a>
            </div>
            <div class="card-body" style="overflow: scroll">
              <table id="example" class="table table-striped table-hover card-text">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>email</th>
                    <th>tel</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($warranties as $warranty)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $warranty->first_name }}</td>
                    <td>{{ $warranty->last_name }}</td>
                    <td>{{ $warranty->email }}</td>
                    <td>{{ $warranty->tel }}</td>
                    <td>
                      <a href=""><i class="fa fa-pencil" aria-hidden="true"></i></a>
                      <a onclick="DeleteWarranty({{ $warranty->id }})" class="cursor-pointer"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<!-- Contact End -->

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- SweetAlert JS -->
<script src="{{asset('backend/plugins/sweetalert2/sweetalert2.all.min.js')}}"></script>
<script>
  function DeleteWarranty(userId) {
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#ef3737',
      cancelButtonColor: '#6c757d',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          type: "POST",
          url: "{{ url('admin/warranty/delete') }}" + '/' + userId, // Pass the product parameter
          data: {
            _token: "{{ csrf_token() }}"
          },
          success: function(response) {
            if (response.success) {
              Swal.fire(
                'Deleted!',
                'Your Warranty has been deleted.',
                'success'
              ).then(() => {
                // Reload the page after a short delay (e.g., 0 seconds)
                setTimeout(() => {
                  location.reload();
                }, 0);
              });
            } else {
              Swal.fire(
                'Error!',
                'An error occurred while deleting the item.',
                'error'
              );
            }
          },
          error: function() {
            Swal.fire(
              'Error!',
              'An error occurred while deleting the item.',
              'error'
            );
          }
        });
      }
    });
  }
</script>
@endsection