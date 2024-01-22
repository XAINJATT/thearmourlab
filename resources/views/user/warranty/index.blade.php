@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid px-xl-5">
        <section class="py-5">
            <!-- Alerts -->
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
            </div>

            <!-- User Profile Card -->
            @if ($warranties->isNotEmpty())
                @php($user = $warranties->first()->user)
                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="text-uppercase mb-0">User Profile</h6>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $user->first_name }} {{ $user->last_name }}</h5>
                                <p class="card-text">
                                    Email: {{ $user->email }}<br>
                                    Tel: {{ $user->tel }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Warranties -->
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="text-uppercase mb-0">Active Warranties</h6>
                        </div>
                    </div>
                </div>
                @forelse ($warranties as $warranty)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header">
                                Warranty #{{ $loop->iteration }} <br>
                                 Created At: {{ $warranty->created_at->format('M d, Y') }}
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Make: {{ $warranty->make }}<br>
                                    Model: {{ $warranty->model }}<br>
                                    Year: {{ $warranty->year }}
                                    <!-- Add more short details as necessary -->
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('user.warranty.view', $warranty->id) }}" class="btn btn-dark"
                                    data-toggle="tooltip" title="View">
                                    <i class="fas fa-eye"></i> View Details
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col">
                        <div class="alert alert-warning" role="alert">
                            No active warranties found.
                        </div>
                    </div>
                @endforelse
            </div>
        </section>
    </div>
@endsection
