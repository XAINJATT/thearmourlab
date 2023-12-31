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

<div class="content container-fluid">

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="row invoice-add">
            <!-- Invoice Add-->
            <div class="col-lg-12 col-12 mb-lg-0 mb-4">
                <div class="card invoice-preview-card">
                    <div class="card-body">
                        <div class="row p-sm-3 p-0">
                            <div class="col-md-3 mb-md-0 mb-4">
                                <div class="d-flex svg-illustration mb-4 gap-2">
                                    <span class="app-brand-logo demo">
                                        <img src="{{ asset('storage/logo/logo.webp') }}">
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-9" style="text-align: center;">
                                <h1 class="mb-1" style=" color: #040404 !important;">THE ARMOUR LAB WARRANTY</h1>
                                <hr class="my-4 mx-n4" />
                            </div>
                        </div>
                        <hr class="my-4 mx-n4" style="margin-left: 4px !important;" />
                        <!-- Form Start -->
                        <form method="post" action="{{ route('admin.warranty.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row py-sm-3">
                                <h3 class="mb-1 warranty-heading">Customer Info:</h3>
                                <div class="col-md-6 col-12 mt-2">
                                    <div class="">
                                        <label for="first_name" class="form-label me-2 fw-medium mt-2">First Name:</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mt-2">
                                    <div class="">
                                        <label for="last_name" class="form-label me-2 fw-medium mt-2">Last Name:</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mt-2">
                                    <div class="">
                                        <label for="email" class="form-label me-2 fw-medium mt-2">Email:</label>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mt-2">
                                    <div class="">
                                        <label for="tel" class="form-label me-2 fw-medium mt-2">Tel:</label>
                                        <input type="text" class="form-control" id="tel" name="tel" placeholder="Tel" />
                                    </div>
                                </div>
                                <h3 class="mb-1 warranty-heading">Vehicle Info:</h3>
                                <div class="col-md-6 col-12 mt-2">
                                    <div class="">
                                        <label for="make" class="form-label me-2 fw-medium mt-2">Make:</label>
                                        <input type="text" class="form-control" id="make" name="make" placeholder="Make" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mt-2">
                                    <div class="">
                                        <label for="model" class="form-label me-2 fw-Medium mt-2">Model</label>
                                        <input type="text" class="form-control" id="model" name="model" placeholder="Model" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mt-2">
                                    <div class="">
                                        <label for="year" class="form-label me-2 fw-medium mt-2">Year:</label>
                                        <input type="text" class="form-control" id="year" name="year" placeholder="Year" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mt-2">
                                    <div class="">
                                        <label for="colour" class="form-label me-2 fw-medium mt-2">Colour:</label>
                                        <input type="text" class="form-control" id="colour" name="colour" placeholder="Colour" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mt-2">
                                    <div class="">
                                        <label for="vin" class="form-label me-2 fw-medium mt-2">Vin:</label>
                                        <input type="text" class="form-control" id="vin" name="vin" placeholder="Vin" />
                                    </div>
                                </div>
                                <h3 class="mb-1 warranty-heading">Ceramic Coating Warranty Info:</h3>
                                <div class="col-md-6 col-12 mt-2">
                                    <div class="">
                                        <label for="exterior_package" class="form-label me-2 fw-medium mt-2">Exterior Package:</label>
                                        <input type="text" class="form-control" id="exterior_package" name="exterior_package" placeholder="Exterior Package" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mt-2">
                                    <div class="">
                                        <label for="interior" class="form-label me-2 fw-medium mt-2">Interior:</label>
                                        <input type="text" class="form-control" id="interior" name="interior" placeholder="Interior" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mt-2">
                                    <div class="">
                                        <label for="windows" class="form-label me-2 fw-medium mt-2">Windows:</label>
                                        <input type="text" class="form-control" id="windows" name="windows" placeholder="Windows" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mt-2">
                                    <div class="">
                                        <label for="wheels" class="form-label me-2 fw-medium mt-2">Wheels:</label>
                                        <input type="text" class="form-control" id="wheels" name="wheels" placeholder="Wheels" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mt-2">
                                    <div class="">
                                        <label for="trim" class="form-label me-2 fw-medium mt-2">Trim:</label>
                                        <input type="text" class="form-control" id="trim" name="trim" placeholder="Trim" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mt-2">
                                    <div class="">
                                        <label for="paint_correction" class="form-label me-2 fw-medium mt-2">Pant Correction:</label>
                                        <input type="text" class="form-control" id="paint_correction" name="paint_correction" placeholder="Paint Correction" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mt-2">
                                    <div class="">
                                        <label for="body" class="form-label me-2 fw-medium mt-2">Body:</label>
                                        <input type="text" class="form-control" id="body" name="body" placeholder="Body" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mt-2">
                                    <div class="">
                                        <label for="coating_duration" class="form-label me-2 fw-medium mt-2">Coating Duration:</label>
                                        <input type="text" class="form-control" id="coating_duration" name="coating_duration" placeholder="Coating Duration" />
                                    </div>
                                </div>
                                <h3 class="mb-1 warranty-heading">Paint Protection Film Warranty:</h3>
                                <div class="row mt-3 mb-3">
                                    <div class="col-4">
                                        <label for="full_front_end" class="mb-0">Full Front End</label>
                                        <label class="switch switch-primary me-0" style="margin-left: 30px;">
                                            <input type="checkbox" class="switch-input" id="full_front_end" name="full_front_end">
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <label for="partial_front_end" class="mb-0">Partial Front End</label>
                                        <label class="switch switch primary me-0" style="margin-left: 30px;">
                                            <input type="checkbox" class="switch-input" id="partial_front_end" name="partial_front_end">
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <label for="full_body" class="mb-0">Full Body</label>
                                        <label class="switch switch-primary me-0" style="margin-left: 30px;">
                                            <input type="checkbox" class="switch-input" id="full_body" name="full_body">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mt-2">
                                    <div class="">
                                        <label for="attitionl_panels" class="form-label me-2 fw-medium mt-2">Attitionl Panels:</label>
                                        <input type="text" class="form-control" id="attitionl_panels" name="attitionl_panels" placeholder="Attitionl Panels" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mt-2">
                                    <div class="">
                                        <label for="ppf_brand" class="form-label me-2 fw-Medium mt-2">Ppf Brand</label>
                                        <input type="text" class="form-control" id="ppf_brand" name="ppf_brand" placeholder="Ppf Brand" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mt-2">
                                    <div class="">
                                        <label for="roll_serial_number" class="form-label me-2 fw-medium mt-2">Roll Serial Number:</label>
                                        <input type="text" class="form-control" id="roll_serial_number" name="roll_serial_number" placeholder="Roll Serial Number" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mt-2">
                                    <div class="">
                                        <label for="warranty_duration" class="form-label me-2 fw-medium mt-2">Warranty Duration:</label>
                                        <input type="text" class="form-control" id="warranty_duration" name="warranty_duration" placeholder="Warranty Duration" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mt-2">
                                    <div class="">
                                        <label for="installer" class="form-label me-2 fw-medium mt-2">Installer:</label>
                                        <input type="text" class="form-control" id="installer" name="installer" placeholder="Installer" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mt-2">
                                    <div class="">
                                        <label for="date-of_installaction" class="form-label me-2 fw-medium mt-2">Date Of Installaction:</label>
                                        <input type="date" class="form-control" id="date_of_installaction" name="date_of_installation" placeholder="Date Of Installaction" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mt-2">
                                    <label for="authorized_signature" class="form-label fw-medium" style="color: #040404 !important; font-weight: bolder;">Installer Signature:</label>
                                    <div id="sign"></div>
                                    <p style="clear: both;">
                                        <a id="sign_disable" class="btn btn-primary" style="color: #fff !important;">Disable</a>
                                        <a id="sign_clear" class="btn btn-primary" style="color: #fff !important;">Clear</a>
                                    </p>
                                </div>
                                <div id="" class="float-right" style="display: flex; justify-content:end;">
                                    <button type="submit" name="submit_form" id="submit_form" class="submit_form btn btn-primary">Submit</button>
                                </div>
                                <hr class="my-4 mx-n4" style="margin-left: 4px !important;" />
                            </div>
                        </form>
                        <!-- Form End -->
                    </div>
                </div>
                <!-- /Invoice Add-->
            </div>
            <!-- /Send Invoice Sidebar -->
            <div class="offcanvas offcanvas-end" id="sendInvoiceOffcanvas" aria-hidden="true">
                <div class="offcanvas-header mb-3">
                    <h5 class="offcanvas-title">Send Invoice</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <label for="payment-terms" class="mb-0">Payment Terms</label>
                    <label class="switch switch-primary me-0">
                        <input type="checkbox" class="switch-input" id="payment-terms">
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

</div>
    

<script>
    $(function() {
        var sig = $('#sign').signature();
        $('#sign_disable').click(function() {
            var disable = $(this).text() === 'Disable';
            $(this).text(disable ? 'Enable' : 'Disable');
            sig.signature(disable ? 'disable' : 'enable');
        });
        $('#sign_clear').click(function() {
            sig.signature('clear');
        });
        $('#submit_form').click(function() {
            // Convert the signature to an image
            var signatureImage = sig.signature('toDataURL');

            // Create a hidden input field and set the value to the image data
            $('form').append('<input type="hidden" name="installer_signature" value="' + signatureImage + '">');

            // Submit the form
            $('form').submit();
        });
    });
</script>
@endsection