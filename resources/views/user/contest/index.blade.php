@extends('admin.layouts.app')
@section('content')
    @if (auth()->user()->isAdmin())
        @php(abort(403))
    @endif


    <!-- Contact Start -->
    <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
            <section class="py-5">
                <div class="row">
                    <div class="col-md-12">
                        @if (session()->has('success-message'))
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
                                <h6 class="text-uppercase mb-0 col-9">HERE ARE ALL CONTEST</h6>
                                <a style="min-width:250px" href="{{ route('admin.contest.create') }}"
                                    class="btn btn-primary col-3 float-right">Add
                                    New Contest</a>
                            </div>
                            <div class="card-body" style="overflow: scroll">
                                <table id="data_table" class="table table-striped table-hover card-text">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contests as $contest) 
                                        {{-- @dd($contest ,$contest->registeredUser, $contest->has('registeredUser'), count($contests[1]->registeredUser) ) --}}
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td> 
                                                    @if($contest->image)
                                                        <img src="{{ asset('storage/contest_image/'.$contest->image) }}" alt="" width="100" height="50">
                                                    @endif
                                                </td>
                                                <td>{{ $contest->title }}</td>
                                                <td>{{ $contest->description }}</td>
                                                <td>{{ $contest->start_date }}</td>
                                                <td>{{ $contest->end_date }}</td>
                                                <td>
                                                    @if($contest->is_active == 1)
                                                        <span style="cursor: default;" class="fs-6 mr-1 btn btn-sm btn-success text-white" disabled>
                                                            Upcoming
                                                        </span>
                                                    @else
                                                        <span style="cursor: default;" class="fs-6 mr-1 btn btn-sm btn-danger text-white" disabled>
                                                            Finished
                                                        </span>
                                                    
                                                    @endif
                                                
                                                </td>
                                                <td>
                                                    @if(count($contest->registeredUser) == 0 && $contest->is_active == 1)
                                                        <div class="btn-group">
                                                            <a href="{{ route('user.contest.register', $contest->id) }}"
                                                                class="fs-6 mr-1 btn btn-warning" data-toggle="tooltip"
                                                                title="Register Yourself">
                                                                Enroll
                                                            </a>
                                                        </div>
                                                    @elseif(count($contest->registeredUser) > 0 && $contest->is_active == 1)
                                                        <div class="btn-group">
                                                            <button style="cursor: not-allowed; pointer-events: all !important;" class="fs-6 mr-1 btn btn-success" data-toggle="tooltip" title="Already Registered" disabled>
                                                                Enrolled
                                                            </button>
                                                        </div>
                                                    
                                                    @elseif($contest->is_active == 0)
                                                        
                                                    @endif 
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
        function DeleteContest(id) {
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
                        url: "{{ url('admin/contests/delete') }}" + '/' + id, // Pass the product parameter
                        data: {
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            if (response.success) {
                                Swal.fire(
                                    'Deleted!',
                                    'Your Contest has been deleted.',
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
