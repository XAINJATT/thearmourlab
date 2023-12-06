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
              <h6 class="text-uppercase mb-0 col-9">HERE ARE ALL WORK ORDER STATUS </h6>
              <a href="{{ route('admin.WorkOrderStatus.create') }}" class="btn btn-primary col-3 float-right">Add New Work Order Status</a>
            </div>
            <div class="card-body" style="overflow: scroll">
              <table id="work_order_status_table" class="table table-striped table-hover card-text">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Work Order Id</th>
                    <th>Car Name</th>
                    <th>status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($workOrderStatus as $value)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $value->work_order_id }}</td>
                    <td>{{ $value->car_name }}</td>
                    <td>
                      @if($value->status == 'General')
                      <a onclick="workOrderStatus({{ $value->id }})">
                        <span class="badge bg-primary cursor-pointer">General</span>
                      </a>
                      @elseif($value->status == 'Paint Protection Film')
                        <a onclick="workOrderStatus({{ $value->id }})">
                          <span class="badge bg-secondary cursor-pointer">Paint Protection Film</span>
                        </a>
                      @elseif($value->status == 'Ceramic Coating')
                        <a onclick="workOrderStatus({{ $value->id }})">
                          <span class="badge bg-info cursor-pointer">Ceramic Coating</span>
                        </a>
                      @elseif($value->status == 'Window Tint')
                        <a onclick="workOrderStatus({{ $value->id }})">
                          <span class="badge bg-dark cursor-pointer">Window Tint</span>
                        </a>
                      @elseif($value->status == 'Final')
                        <a>
                          <span class="badge bg-success cursor-pointer">Final</span>
                        </a>
                      @endif
                    </td>
                    <td>
                      <a href="{{ route('admin.WorkOrderStatus.edit', $value->id) }}" class="text-primary fs-6 mr-1" data-toggle="tooltip" title="Edit">
                          <i class="fas fa-edit"></i>
                      </a>
                      <a onclick="DeleteWorkOrderStatus({{ $value->id }})" class="cursor-pointer"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
  function DeleteWorkOrderStatus(id) {
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
          url: "{{ url('admin/WorkOrderStatus/delete') }}" + '/' + id, // Pass the WorkOrderStatus parameter
          data: {
            _token: "{{ csrf_token() }}"
          },
          success: function(response) {
            if (response.success) {
              Swal.fire(
                'Deleted!',
                'Your Work Order Status has been deleted.',
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

  function workOrderStatus(id) {
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#ef3737',
      cancelButtonColor: '#6c757d',
      confirmButtonText: 'Yes, update Work Order status!'
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          type: "POST",
          url: "{{ route('admin.WorkOrderStatus.statusUpdate', ['id' => ':id']) }}".replace(':id', id),
          data: {
            _token: "{{ csrf_token() }}"
          },
          success: function(response) {
            if (response.success) {
              Swal.fire(
                'Status Updated!',
                'Work Order status has been updated.',
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