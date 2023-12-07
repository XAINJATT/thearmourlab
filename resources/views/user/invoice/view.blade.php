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
    <div class="content container-fluid">
        {{-- Section 1 --}}
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">

            <div class="row invoice-add">
                <!-- Invoice Add-->
                <div class="col-lg-12 col-12 mb-lg-0 mb-4">
                    <div class="card invoice-preview-card">
                        <div class="card-body">
                            <div class="row p-sm-3 p-0">
                                <div class="col-md-4 mb-md-0 mb-4">
                                    <div class="d-flex svg-illustration mb-4 gap-2">
                                        <span class="app-brand-logo demo">
                                          <img src="{{ asset('logo.webp') }}">
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4" style="text-align: center;">
                                    <h2 class="mb-1" style=" color: #040404 !important;">THE ARMOUR LAB</h2>
                                    <p class="mb-1">701 MILLWAY AVENUE, UNIT 6, VAUGHAN, ON L4K 3S7</p>
                                    <p class="mb-1">T: 416-675-6853</p>
                                    <p class="mb-1">E: INFO@THEARMOURLAB.COM</p>
                                    <p class="mb-1">WWW.THEARMOURLAB.COM</p>
                                </div>
                                <div class="col-md-4" style="text-align: end;">
                                    <h1 style=" color: #040404 !important;">WORK</h1>
                                    <h1 style=" color: #040404 !important;">ORDER</h1>
                                </div>
                            </div>
                            <hr class="my-4 mx-n4" />
                            <!-- Form Start -->
                            <form method="post" action="{{ route('admin.invoice.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row py-sm-3">
                                    <div class="col-md-4 col-12">
                                        <label for="email" class="form-label me-5 fw-medium">Email:</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            value="{{ @$order->user->email }}" disabled />
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <label for="first_name" class="form-label me-5 fw-medium">First Name:</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name"
                                            value="{{ @$order->user->first_name }}" disabled />
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <label for="last_name" class="form-label me-5 fw-medium">Last Name:</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name"
                                            value="{{ @$order->user->last_name }}" disabled />
                                    </div>
                                    <div class="col-md-4 col-12 mt-2">
                                        <label for="phone" class="form-label me-5 fw-medium">Phone:</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            value="{{ @$order->user->phone }}" disabled />
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <label for="make" class="form-label me-5 fw-medium">Make:</label>
                                        <input type="text" class="form-control" id="make" name="make"
                                            value="{{ @$order->make }}" disabled />
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <label for="colour" class="form-label me-5 fw-medium">Colour:</label>
                                        <input type="text" class="form-control" id="colour" name="colour"
                                            value="{{ @$order->colour }}" disabled />
                                    </div>
                                    <div class="col-md-4 col-12 mt-2">
                                        <label for="model" class="form-label me-5 fw-medium">Model:</label>
                                        <input type="text" class="form-control" id="model" name="model"
                                            value="{{ @$order->model }}" disabled />
                                    </div>
                                    <div class="col-md-4 col-12 mt-2">
                                        <label for="year" class="form-label me-5 fw-medium">Year:</label>
                                        <input type="text" class="form-control" id="year" name="year"
                                            value="{{ @$order->year }}" disabled />
                                    </div>
                                    <div class="col-md-4 col-12 mt-2">
                                        <label for="v_i_n" class="form-label me-5 fw-medium">V.I.N#:</label>
                                        <input type="text" class="form-control" id="v_i_n" name="v_i_n"
                                            value="{{ @$order->v_i_n }}" disabled />
                                    </div>
                                    <div class="col-md-4 col-12 mt-2">
                                        <label for="plate" class="form-label me-5 fw-medium">Plate#:</label>
                                        <input type="text" class="form-control" id="plate" name="plate"
                                            value="{{ @$order->plate }}" disabled />
                                    </div>
                                    <div class="col-md-4 col-12 mt-2">
                                        <label for="status" class="form-label me-5 fw-medium">Status:</label>
                                        <input type="text" class="form-control" id="status" name="status"
                                            value="{{ @$order->status }}" disabled />
                                    </div>
                                </div>
                                <hr class="mx-n4" />
                                <!-- Check Box Start -->
                                <div class="row p-sm-3 p-0">
                                    <div class="col-lg-4 col-12 invoice-actions">
                                        <h6 class="pb-2">Ceramic Coating</h6>
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="kenzo_coating" class="mb-0">Kenzo Coating</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" id="kenzo_coating"
                                                            name="ceramic_coating_kenzo_coating" value="1"
                                                            {{ @$order->ceramic_coating_kenzo_coating ? 'checked' : '' }}
                                                            disabled>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="quartz_plus_coating" class="mb-0">Quartz Plus
                                                        Coating</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input"
                                                            id="quartz_plus_coating"
                                                            name="ceramic_coating_quartz_plus_coating" value="1"
                                                            {{ @$order->ceramic_coating_quartz_plus_coating ? 'checked' : '' }}
                                                            disabled>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="quartz_coating" class="mb-0">Quartz Coating</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" id="quartz_coating"
                                                            name="ceramic_coating_quartz_coating" value="1"
                                                            {{ @$order->ceramic_coating_quartz_coating ? 'checked' : '' }}
                                                            disabled>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="premier_coating" class="mb-0">Premier Coating</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" id="premier_coating"
                                                            name="ceramic_coating_premier_coating" value="1"
                                                            {{ @$order->ceramic_coating_premier_coating ? 'checked' : '' }}
                                                            disabled>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="interior_pkg" class="mb-0">Interior PKG</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" id="interior_pkg"
                                                            name="ceramic_coating_interior_pkg" value="1"
                                                            {{ @$order->ceramic_coating_interior_pkg ? 'checked' : '' }}
                                                            disabled>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <label for="wheels_of_pkg" class="mb-0">Wheels of PKG</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" id="wheels_of_pkg"
                                                            name="ceramic_coating_wheels_of_pkg" value="1"
                                                            {{ @$order->ceramic_coating_wheels_of_pkg ? 'checked' : '' }}
                                                            disabled>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <label for="price" class="mb-0">Price :</label>
                                            <div class="">
                                                <input type="number" class="form-control" name="ceramic_coating_price"
                                                    value="{{ @$order->ceramic_coating_price }}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12 invoice-actions">
                                        <h6 class="pb-2">PPF</h6>
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="full_car" class="mb-0">Full Car</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" id="full_car"
                                                            name="ppf_full_car" value="1"
                                                            {{ @$order->ppf_full_car ? 'checked' : '' }} disabled>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="client-notes" class="mb-0">Client Notes</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" id="client-notes"
                                                            name="ppf_client_notes" value="1"
                                                            {{ @$order->ppf_client_notes ? 'checked' : '' }} disabled>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="payment-stub" class="mb-0">Payment Stub</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" id="payment-stub"
                                                            name="ppf_payment_stub" value="1"
                                                            {{ @$order->ppf_payment_stub ? 'checked' : '' }} disabled>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="payment-terms" class="mb-0">Payment Terms</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" id="payment-terms"
                                                            name="ppf_payment_terms" value="1"
                                                            {{ @$order->ppf_payment_terms ? 'checked' : '' }} disabled>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <label for="price" class="mb-0">Price :</label>
                                            <div class="">
                                                <input type="number" class="form-control" name="ppf_price"
                                                    value="{{ @$order->ppf_price }}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12 invoice-actions">
                                        <h6 class="pb-2">Ceramic Coating</h6>
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="payment-terms" class="mb-0">Payment Terms</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input"
                                                            name="cc_payment_terms"
                                                            {{ @$order->cc_payment_terms ? 'checked' : '' }} disabled>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="client-notes" class="mb-0">Client Notes</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input"
                                                            name="cc_client_notes"
                                                            {{ @$order->cc_client_notes ? 'checked' : '' }} disabled>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <label for="payment-stub" class="mb-0">Payment Stub</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input"
                                                            name="cc_payment_stub"
                                                            {{ @$order->cc_payment_stub ? 'checked' : '' }} disabled>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <label for="price" class="mb-0">Price :</label>
                                            <div class="">
                                                <input type="number" class="form-control" name="cc_price"
                                                    value="{{ @$order->cc_price }}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Check Box End -->
                                <!-- Form End -->
                                <hr class="my-4 mx-n4" />
                                <!-- Additional Requests Start -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="additional_requests" class="form-label fw-medium">Additional
                                                Requests:</label>
                                            <textarea class="form-control" rows="2" id="additional_requests" name="additional_requests"
                                                placeholder="Additional Requests" disabled>{{ @$order->additional_requests }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="total_price" class="mb-0">Total Price :</label>
                                        <div class="">
                                            <input type="number" class="form-control" id="total_price"
                                                name="total_price" value="{{ @$order->total_price }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-6 mb-3">
                                        <label for="drivers_license" class="font-weight-bold">Drivers License <span
                                                class="text-danger">*</span>&nbsp;&nbsp;
                                            <a href="{{ $order->drivers_license }}"
                                                download="{{ $order->drivers_license }}">
                                                <i class="fas fa-download"></i>
                                            </a>
                                        </label>
                                        <img src="{{ $order->drivers_license }}" alt="drivers_license"
                                            class="picture-src" id="drivers_license_preview" width="80%"
                                            height="60%">
                                    </div>
                                </div>
                                <!-- Additional Requests End -->
                                <hr class="my-4 mx-n4" />
                                <div class="row p-sm-3 p-0">
                                    <div class="col-md-4 col-sm-5 col-12 mb-sm-0 mb-4">
                                        <h2 class="mb-1"
                                            style=" color: #040404 !important; margin-bottom: 17px !important; font-size:x-large; font-weight: bolder;">
                                            INSPECTION REPORT</h2>
                                        <h6 class="pb-2">Defects:</h6>
                                        @include('admin.partials.defect-table')
                                    </div>
                                    <div class="col-md-8 col-sm-7">
                                        <div class="row">
                                            <div class="col-7">
                                                <h4 class="mb-1"
                                                    style=" color: #040404 !important; margin-bottom: 17px !important; font-size:x-large; font-weight: 500; display: inline;">
                                                    PART A:</h4>
                                                <span> Upon Acceptance</span>
                                            </div>
                                            <div class="col-5">
                                                <label for="price" class="mb-0">Mileage In :</label>
                                                <div class="">
                                                    <input type="number" class="form-control" id="mileage_in_price"
                                                        value="{{ @$order->mileage_in_price }}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="{{ @$order->defects }}" id="defects" alt="Preview" width="80%"
                                            height="60%" />
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <!-- Note Start -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="note" class="form-label fw-medium">Note:</label>
                                            <textarea class="form-control" rows="2" id="note" name="note" placeholder="Note" disabled>{{ @$order->note }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="int" class="mb-0">Int :</label>
                                        <div class="">
                                            <input type="number" class="form-control" id="int" name="int"
                                                value="{{ @$order->int }}" disabled>
                                        </div>
                                    </div>
                                </div>
                                <!-- Note End -->
                                <hr class="my-4 mx-n4" />
                                <div class="row">
                                    <div class="col-6 mt-4">
                                        <h4 class="mb-1"
                                            style=" color: #040404 !important; margin-bottom: 17px !important; font-size:x-large; font-weight: 500; display: inline;">
                                            PART B:</h4>
                                        <span> Upon Delivery</span>
                                    </div>
                                    <div class="col-6">
                                        <p class="mb-2">Payment</p>
                                        <input type="text" class="form-control" id="payment_type" name="payment_type"
                                            value="{{ @$order->payment_type }}" disabled>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <div class="row">
                                    <div class="col-12">
                                        <div class="border p-3">

                                            @include('admin.partials.terms-and-conditions-work-order')

                                            <div class="row mt-3">
                                                @if (auth()->user()->isAdmin() || !empty($order->customer_signature))
                                                    <div class="col-7">
                                                        <label for="customer_signature" class="form-label mb-0">Customer
                                                            Signature:</label>
                                                        <img src="{{ @$order->customer_signature }}"
                                                            alt="Customer Signature">
                                                    </div>
                                                    <div class="col-5">
                                                        <label for="date" class="mb-0">Date:</label>
                                                        <div class="">
                                                            <input type="date" class="form-control" id="date"
                                                                name="date" value="{{ @$order->date }}" disabled>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Invoice Add-->

                <!-- /Invoice Actions -->
            </div>
            <!-- /Send Invoice Sidebar -->
            <div class="offcanvas offcanvas-end" id="sendInvoiceOffcanvas" aria-hidden="true">
                <div class="offcanvas-header mb-3">
                    <h5 class="offcanvas-title">Send Invoice</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <label for="payment-terms" class="mb-0">Payment Terms</label>
                    <label class="switch switch-primary me-0">
                        <input type="checkbox" class="switch-input" id="payment-terms">
                        <span class="switch-toggle-slider">
                            <span class="switch-on">
                                <i class="bx bx-check"></i>
                            </span>
                            <span class="switch-off">
                                <i class="bx bx-x"></i>
                            </span>
                        </span>
                        <span class="switch-label"></span>
                    </label>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <label for="client-notes" class="mb-0">Client Notes</label>
                    <label class="switch switch-primary me-0">
                        <input type="checkbox" class="switch-input" id="client-notes">
                        <span class="switch-toggle-slider">
                            <span class="switch-on">
                                <i class="bx bx-check"></i>
                            </span>
                            <span class="switch-off">
                                <i class="bx bx-x"></i>
                            </span>
                        </span>
                        <span class="switch-label"></span>
                    </label>
                </div>
                <div class="d-flex justify-content-between">
                    <label for="payment-stub" class="mb-0">Payment Stub</label>
                    <label class="switch switch-primary me-0">
                        <input type="checkbox" class="switch-input" id="payment-stub">
                        <span class="switch-toggle-slider">
                            <span class="switch-on">
                                <i class="bx bx-check"></i>
                            </span>
                            <span class="switch-off">
                                <i class="bx bx-x"></i>
                            </span>
                        </span>
                        <span class="switch-label"></span>
                    </label>
                </div>
            </div>
            <!-- /Offcanvas -->

        </div>
        <!-- / Content -->

    </div>
@endsection

@section('scripts')
    <script></script>
@endsection
