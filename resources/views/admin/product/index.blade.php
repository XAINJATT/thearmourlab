@extends('admin.layouts.app')
@section('content')
    @if (!auth()->user()->isAdmin())
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
                                <h6 class="text-uppercase mb-0 col-10">HERE ARE ALL PRODUCTS </h6>
                                <a href="{{ route('admin.product.create') }}" class="btn btn-primary col-2 float-right">Add
                                    New Product</a>
                            </div>
                            <div class="card-body" style="overflow: scroll">
                                <table id="product_table" class="table table-striped table-hover card-text">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Discounted Price</th>
                                            <th>soh</th>
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $value)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td><img src="{{ $value->product_image }}" alt="" width="100"
                                                        height="50"></td>
                                                <td>{{ $value->name }}</td>
                                                <td>{{ $value->price }}</td>
                                                <td>{{ $value->discounted_price }}</td>
                                                <td>{{ $value->soh }}</td>
                                                <td>
                                                    @if ($value->status == 1)
                                                        <a onclick="productStatus({{ $value->id }})">
                                                            <span class="badge bg-success cursor-pointer">Active</span>
                                                        </a>
                                                    @elseif($value->status == 0)
                                                        <bu onclick="productStatus({{ $value->id }})">
                                                            <span class="badge bg-danger cursor-pointer">Inactive</span>
                                                            </a>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.product.edit', $value->id) }}"
                                                        class="text-primary fs-6 mr-1" data-toggle="tooltip" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a onclick="DeleteProduct({{ $value->id }})"
                                                        class="cursor-pointer"><i class="fa fa-trash"
                                                            aria-hidden="true"></i></a>
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
        function DeleteProduct(id) {
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
                        url: "{{ url('admin/product/delete') }}" + '/' + id, // Pass the product parameter
                        data: {
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            if (response.success) {
                                Swal.fire(
                                    'Deleted!',
                                    'Your product has been deleted.',
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

        function productStatus(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ef3737',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Yes, update product status!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('admin.product.statusUpdate', ['id' => ':id']) }}".replace(':id',
                            id),
                        data: {
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            if (response.success) {
                                Swal.fire(
                                    'Status Updated!',
                                    'Product status has been updated.',
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
                                    response.message ||
                                    'An error occurred while updating the status.',
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
