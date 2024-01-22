@extends('admin.layouts.app')
@section('content')
    @if (!auth()->user()->isAdmin())
        @php(abort(403))
    @endif
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
                        @if (get_giveaway_status())
                            <div class="card-header row">
                                <a style="min-width:100%" class="btn btn-danger col-3 text-white on_off_giveaway">Stop Giveaways</a>
                            </div>
                        @else
                            <div class="card-header row">
                                <a style="min-width:100%" class="btn btn-success col-3 text-white on_off_giveaway">Start Giveaways</a>
                            </div>
                        @endif

                        <div class="card">
                            <div class="card-header row">
                                <h6 class="text-uppercase mb-0 col-9">HERE ARE ALL Prizes</h6>
                                <a style="min-width:250px" href="{{ route('admin.contest.create') }}"
                                    class="btn btn-primary col-3 float-right">Add
                                    New Prize</a>
                            </div>
                            <div class="card-body" style="overflow: scroll">
                                <table id="data_table" class="table table-striped table-hover card-text">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            {{-- <th>Start Date</th> --}}
                                            {{-- <th>End Date</th> --}}
                                            <th>Is Active</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contests as $contest)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>
                                                    @if ($contest->image)
                                                        <img src="{{ asset('storage/contest_image/' . $contest->image) }}"
                                                            alt="" width="100" height="50">
                                                    @endif
                                                </td>
                                                <td>{{ $contest->title }}</td>
                                                <td>{{ $contest->description }}</td>
                                                {{-- <td>{{ $contest->start_date }}</td> --}}
                                                {{-- <td>{{ $contest->end_date }}</td> --}}
                                                <td>{{ $contest->is_active == 1 ? 'Yes' : 'No' }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ route('admin.contest.edit', $contest->id) }}"
                                                            class="fs-6 mr-1 btn btn-warning" data-toggle="tooltip"
                                                            title="Edit">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="Delete"
                                                            onclick="DeleteContest({{ $contest->id }})"
                                                            class="cursor-pointer text-white btn btn-danger"><i
                                                                class="fa fa-trash" aria-hidden="true"></i></a>
                                                    </div>
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
                                    'Your Prize has been deleted.',
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

        $(document).on("click", ".on_off_giveaway", function() {

            Swal.fire({
                title: 'Confirmation',
                text: 'Are you sure?',
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: 'Yes',
                cancelButtonText: 'Cancel',
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        method: "GET",
                        url: "{{ route('admin.on_off_giveaway') }}",
                        success: function(data) {
                            $("#preloader").css("display", "none");
                            location.reload();
                        },
                        error: function(request, status, error) {
                            console.log(request.responseText);
                        },
                    });
                }
            });

            return false;
        });
    </script>
@endsection