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


                        <div class="card">
                            <div class="card-header row">
                                <h6 class="text-uppercase mb-0 col-9">HERE ARE ALL Winners</h6>
                                <a onclick="DeleteAllUser()" class="cursor-pointer btn btn-darnger">Delete All</a>
                                {{-- <a style="min-width:250px" href="{{ route('admin.contest.create') }}"
                                    class="btn btn-primary col-3 float-right">Add
                                    New Prize</a> --}}
                            </div>
                            <div class="card-body" style="overflow: scroll">
                                <table id="data_table" class="table table-striped table-hover card-text">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Prize</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contests as $contest)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $contest->full_name }}</td>
                                                <td>{{ $contest->email }}</td>
                                                <td>{{ $contest->phone }}</td>
                                                <td>{{ $contest->prize }}</td>
                                                <td>{{ $contest->created_at }}</td>
                                                <td><a onclick="DeleteUser({{ $contest->id }})" class="cursor-pointer"><i
                                                            class="fa fa-trash" aria-hidden="true"></i></a></td>

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
        function DeleteAllUser() {
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
                        url: "{{ url('admin/contest-user/all/delete') }}" + '/' +
                            // id, // Pass the product parameter
                            data: {
                                _token: "{{ csrf_token() }}"
                            },
                        success: function(response) {
                            if (response.success) {
                                Swal.fire(
                                    'Deleted!',
                                    'All contest users deleted!.',
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

        function DeleteUser(id) {
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
                        url: "{{ url('admin/contest-user/delete') }}" + '/' +
                        id, // Pass the product parameter
                        data: {
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            if (response.success) {
                                Swal.fire(
                                    'Deleted!',
                                    'Your blog has been deleted.',
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

        // function DeleteContest(id) {
        //     Swal.fire({
        //         title: 'Are you sure?',
        //         text: "You won't be able to revert this!",
        //         icon: 'warning',
        //         showCancelButton: true,
        //         confirmButtonColor: '#ef3737',
        //         cancelButtonColor: '#6c757d',
        //         confirmButtonText: 'Yes, delete it!'
        //     }).then((result) => {
        //         if (result.isConfirmed) {
        //             $.ajax({
        //                 type: "POST",
        //                 url: "{{ url('admin/contests/delete') }}" + '/' + id, // Pass the product parameter
        //                 data: {
        //                     _token: "{{ csrf_token() }}"
        //                 },
        //                 success: function(response) {
        //                     if (response.success) {
        //                         Swal.fire(
        //                             'Deleted!',
        //                             'Your Prize has been deleted.',
        //                             'success'
        //                         ).then(() => {
        //                             // Reload the page after a short delay (e.g., 0 seconds)
        //                             setTimeout(() => {
        //                                 location.reload();
        //                             }, 0);
        //                         });
        //                     } else {
        //                         Swal.fire(
        //                             'Error!',
        //                             'An error occurred while deleting the item.',
        //                             'error'
        //                         );
        //                     }
        //                 },
        //                 error: function() {
        //                     Swal.fire(
        //                         'Error!',
        //                         'An error occurred while deleting the item.',
        //                         'error'
        //                     );
        //                 }
        //             });
        //         }
        //     });
        // }

        // $(document).on("click", ".on_off_giveaway", function() {

        //     Swal.fire({
        //         title: 'Confirmation',
        //         text: 'Are you sure?',
        //         icon: "warning",
        //         showCancelButton: true,
        //         confirmButtonColor: "#3085d6",
        //         cancelButtonColor: "#d33",
        //         confirmButtonText: 'Yes',
        //         cancelButtonText: 'Cancel',
        //     }).then((result) => {
        //         if (result.value) {
        //             $.ajax({
        //                 method: "GET",
        //                 url: "{{ route('admin.on_off_giveaway') }}",
        //                 success: function(data) {
        //                     $("#preloader").css("display", "none");
        //                     location.reload();
        //                 },
        //                 error: function(request, status, error) {
        //                     console.log(request.responseText);
        //                 },
        //             });
        //         }
        //     });

        //     return false;
        // });
    </script>
@endsection
