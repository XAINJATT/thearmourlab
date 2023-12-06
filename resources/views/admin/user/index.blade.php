@extends('admin.layouts.app')
@section('content')
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
              <h6 class="text-uppercase mb-0 col-10">HERE ARE ALL USERS </h6>
              <a href="{{ route('admin.user.create') }}" class="btn btn-primary col-2 float-right">Add New User</a>
            </div>
            <div class="card-body" style="overflow: scroll">
              <table id="user_table" class="table table-striped table-hover card-text">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Profile Image</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td><img src="{{ $user->profile_image }}" alt="" width="100" height="50"></td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>
                      @if($user->status == 1)
                      <a onclick="userStatus({{ $user->id }})">
                        <span class="badge bg-success cursor-pointer">Active</span>
                      </a>
                      @elseif($user->status == 0)
                      <bu onclick="userStatus({{ $user->id }})">
                        <span class="badge bg-danger cursor-pointer">Ban</span>
                        </a>
                        @endif
                    </td>
                    <td>
                      <a href="{{ route('admin.user.edit', $user->id) }}" class="text-primary fs-6 mr-1" data-toggle="tooltip" title="Edit">
                          <i class="fas fa-edit"></i>
                      </a>
                      <a onclick="DeleteUser({{ $user->id }})" class="cursor-pointer"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
@endsection

@section('scripts')

<script>
  function DeleteUser(userId) {
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
          url: "{{ url('admin/user/delete') }}" + '/' + userId, // Pass the product parameter
          data: {
            _token: "{{ csrf_token() }}"
          },
          success: function(response) {
            if (response.success) {
              Swal.fire(
                'Deleted!',
                'Your user has been deleted.',
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

  function userStatus(userId) {
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#ef3737',
      cancelButtonColor: '#6c757d',
      confirmButtonText: 'Yes, update user status!'
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          type: "POST",
          url: "{{ route('admin.user.statusUpdate', ['id' => ':id']) }}".replace(':id', userId),
          data: {
            _token: "{{ csrf_token() }}"
          },
          success: function(response) {
            if (response.success) {
              Swal.fire(
                'Status Updated!',
                'User status has been updated.',
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
                response.message || 'An error occurred while updating the status.',
                'error'
              );
            }
          },
          error: function() {
            Swal.fire(
              'Error!',
              'An error occurred while updating the status.',
              'error'
            );
          }
        });
      }
    });
  }
</script>

@endsection