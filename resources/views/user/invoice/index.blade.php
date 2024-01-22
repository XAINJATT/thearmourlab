@extends('admin.layouts.app')
@section('content')
    {{-- @dd(auth()->user()->isAdmin()) --}}
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
                    <!-- Alerts -->
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

                    <!-- Work Orders Title -->
                    <div class="col-lg-12 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="text-uppercase mb-0">HERE ARE ALL WORK ORDERS</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Work Orders Cards -->
                    @forelse ($orders as $order)
                        <div onclick="window.location.href = '{{ route('user.invoice.view', $order->id) }}'" class="col-md-4 mb-4 cursor-pointer">
                            <div class="card h-100">
                                <div class="card-header">
                                    Work Order #{{ $loop->iteration }}
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $order->first_name }} {{ $order->last_name }}</h5>
                                    <p class="card-text">
                                    <p class="card-title">Created At: {{ $order->created_at->format('M d, Y') }}</p>
                                    Total Price: <strong>$ {{ $order->total_price }}</strong>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <div class="btn-group">
                                        <a href="{{ route('user.invoice.view', $order->id) }}" class="btn btn-dark"
                                            data-toggle="tooltip" title="View">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        {{-- <a href="{{ route('frontend.live', ['id' => $order->id]) }}" class="btn btn-danger"
                                            data-toggle="tooltip" title="Status">
                                            <i class="fas fa-check"></i>
                                        </a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col">
                            <div class="alert alert-warning" role="alert">
                                No work orders available.
                            </div>
                        </div>
                    @endforelse
                </div>
            </section>
        </div>
    </div>
    <!-- Contact End -->
@endsection
