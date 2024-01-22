@extends('admin.layouts.app')

@section('content')
    @if (auth()->user()->isAdmin())
        <script>
            window.location.href = "{{ url('admin/dashboard') }}"
        </script>
    @endif
    <style>
        .card hr {
            color: #adb35b !important;
            height: 2px !important;
            width: 100% !important;
        }
    </style>
    <div class="content container-fluid">
        <div class="row">
            <!-- Work Orders -->
            <div class="col-lg-6 col-xl-3 mb-4">
                <div class="card bg-danger text-white h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="me-3">
                                <div class="text-white-75 small">Work Orders</div>
                                <div class="text-lg fw-bold">
                                    {{ \App\Models\WorkOrder::where('user_id', auth()->user()->id)->count() }}
                                </div>
                            </div>
                            <i class="menu-icon tf-icons bx bx-receipt bx-xl text-white-50"></i>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between small">
                        <a class="text-white stretched-link" href="{{ route('user.invoice') }}">View Work Orders</a>
                        <div class="text-white">
                            <i class="bx bx-chevron-right"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Warranties -->
            <div class="col-lg-6 col-xl-3 mb-4">
                <div class="card bg-warning text-white h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="me-3">
                                <div class="text-white-75 small">Warranty</div>
                                <div class="text-lg fw-bold">
                                    {{ \App\Models\Warranty::where('user_id', auth()->user()->id)->count() }}
                                </div>
                            </div>
                            <i class="menu-icon tf-icons bx bx-shield-alt-2 bx-xl text-white-50"></i>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between small">
                        <a class="text-white stretched-link" href="{{ route('user.warranty') }}">View Warranties</a>
                        <div class="text-white">
                            <i class="bx bx-chevron-right"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Shop Orders -->
            <div class="col-lg-6 col-xl-3 mb-4">
                <div class="card bg-success text-white h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="me-3">
                                <div class="text-white-75 small">Shop Orders</div>
                                <div class="text-lg fw-bold">
                                    {{ \App\Models\UserOrder::where('email', auth()->user()->email)->count() }}
                                </div>
                            </div>
                            <i class="menu-icon tf-icons bx bx-shopping-bag bx-xl text-white-50"></i>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between small">
                        <a class="text-white stretched-link" href="{{ route('user.shopOrder') }}">View Shop Orders</a>
                        <div class="text-white">
                            <i class="bx bx-chevron-right"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profile -->
            <div class="col-lg-6 col-xl-3 mb-4">
                <div class="card bg-primary text-white h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="me-3">
                                <div class="text-white-75 small">Profile</div>
                                <div class="text-lg fw-bold">Manage</div>
                            </div>
                            <i class="menu-icon tf-icons bx bx-user-circle bx-xl text-white-50"></i>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between small">
                        <a class="text-white stretched-link" href="{{ route('profile') }}">View Profile</a>
                        <div class="text-white">
                            <i class="bx bx-chevron-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
