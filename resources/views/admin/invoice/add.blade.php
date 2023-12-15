@extends('admin.layouts.app')
@section('content')
    @if (!auth()->user()->isAdmin())
        @php(abort(403))
    @endif

    <style>
        .label-style {
            border: 1px solid grey;
            border-radius: 7px;
            padding: 42px 33px;
        }

        .input-style {
            border: 1px grey !important;
            padding: 35px 10px 29px 0;
            display: none;
        }

        form div {
            margin-bottom: 0;
        }

        #image-container {
            position: relative;
            display: inline-block;
        }

        .defect-input {
            position: absolute;
            z-index: 10;
        }

        #car-image {
            display: block;
            max-width: 100%;
            height: auto;
        }

        button {
            margin-top: 10px;
        }

        .input-wrapper {
            position: absolute;
            z-index: 10;
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
                                            <img src="{{ asset('storage/logo/logo.webp') }}">
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
                            <form id="work_order" method="post" action="{{ route('admin.invoice.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row py-sm-3">
                                    <div class="col-md-4 col-12">
                                        <label for="email" class="form-label me-5 fw-medium">Email: *</label>
                                        <select required class="form-control select2-class" id="email" name="email"
                                            required>
                                            <option value="">Select Email</option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->email }}"
                                                    data-first-name="{{ $user->first_name }}"
                                                    data-last-name="{{ $user->last_name }}" data-phone="{{ $user->phone }}"
                                                    data-id="{{ $user->id }}">{{ $user->email }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <input type="hidden" class="form-control" id="id" name="id" />
                                    <div class="col-md-4 col-12">
                                        <label for="first_name" class="form-label me-5 fw-medium">First Name: *</label>
                                        <input type="text" required class="form-control" id="first_name"
                                            name="first_name" placeholder="First Name" />
                                        @if ($errors->has('first_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('first_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <label for="last_name" class="form-label me-5 fw-medium">Last Name: *</label>
                                        <input type="text" class="form-control" required id="last_name" name="last_name"
                                            placeholder="Last Name" />
                                        @if ($errors->has('last_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('last_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-4 col-12 mt-2">
                                        <label for="phone" class="form-label me-5 fw-medium">Phone: *</label>
                                        <input type="tel" class="form-control" required id="phone" name="phone"
                                            placeholder="Phone" />
                                        @if ($errors->has('phone'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <label for="make" class="form-label me-5 fw-medium">Make: *</label>
                                        <input type="text" class="form-control" id="make" name="make"
                                            placeholder="Make" required />
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <label for="colour" class="form-label me-5 fw-medium">Colour: *</label>
                                        <input type="text" class="form-control" id="colour" name="colour"
                                            placeholder="Colour" required />
                                    </div>
                                    <div class="col-md-4 col-12 mt-2">
                                        <label for="model" class="form-label me-5 fw-medium">Model: *</label>
                                        <input type="text" class="form-control" id="model" name="model"
                                            placeholder="Model" required />
                                    </div>
                                    <div class="col-md-4 col-12 mt-2">
                                        <label for="year" class="form-label me-5 fw-medium">Year: *</label>
                                        <input type="text" class="form-control" id="year" name="year"
                                            placeholder="Year" required />
                                    </div>
                                    <div class="col-md-4 col-12 mt-2">
                                        <label for="v_i_n" class="form-label me-5 fw-medium">V.I.N#: *</label>
                                        <input type="text" class="form-control" id="v_i_n" name="v_i_n"
                                            placeholder="V.I.N#" required />
                                    </div>
                                    <div class="col-md-4 col-12 mt-2">
                                        <label for="plate" class="form-label me-5 fw-medium">Plate#:</label>
                                        <input type="text" class="form-control" id="plate" name="plate"
                                            placeholder="Plate#" required />
                                    </div>
                                </div>
                                <hr class="mx-n4" />
                                <!-- Check Box Start -->
                                <div class="row p-sm-3 p-0">
                                    <div class="col-lg-6 col-12 invoice-actions">
                                        <h6 class="pb-2">General Stages (applicable to all services)</h6>
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td class="col-4 col-lg-5">
                                                                <h5 class="mb-0">General Stages</h5>
                                                            </td>
                                                            <td class="col-lg-2 col-2">
                                                                <label class="switch switch-primary me-0">
                                                                    <input type="checkbox" class="switch-input"
                                                                        id="general_stages" name="general_stages">
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select" name="general_stages_status"
                                                                    id="general_stages_status">
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Completed">Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="additional-row-gs" style="display: none;">
                                                            <td class="col-4 col-lg-5"><label
                                                                    class="mb-0">Check-In</label></td>
                                                            <td class="col-lg-2 col-2">
                                                                <label class="switch switch-primary me-0">
                                                                    <input type="checkbox" class="switch-input"
                                                                        id="check_in" name="check_in">
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select" name="check_in_status"
                                                                    id="check_in_status">
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Completed">Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="additional-row-gs" style="display: none;">
                                                            <td class="col-4 col-lg-5"><label class="mb-0">Initial
                                                                    Inspection</label></td>
                                                            <td class="col-lg-2 col-2">
                                                                <label class="switch switch-primary me-0">
                                                                    <input type="checkbox" class="switch-input"
                                                                        id="initial_inspection" name="initial_inspection">
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select"
                                                                    name="initial_inspection_status"
                                                                    id="initial_inspection_status">
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Completed">Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="additional-row-gs" style="display: none;">
                                                            <td class="col-4 col-lg-5"><label class="mb-0">Wash and
                                                                    Decontamination</label></td>
                                                            <td class="col-lg-2 col-2">
                                                                <label class="switch switch-primary me-0">
                                                                    <input type="checkbox" class="switch-input"
                                                                        id="Wash_and_decontamination"
                                                                        name="Wash_and_decontamination">
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select"
                                                                    name="Wash_and_decontamination_status"
                                                                    id="Wash_and_decontamination_status">
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Completed">Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!-- <div class="">
                                                        <label for="price" class="mb-0">Price :</label>
                                                        <div class="">
                                                            <input type="number" class="form-control" name="ceramic_coating_price">
                                                        </div>
                                                    </div> -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-12 invoice-actions">
                                        <h6 class="pb-2">Paint Protection Film Stages</h6>
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td class="col-4 col-lg-5">
                                                                <h5 class="mb-0">Paint Protection Film Stages</h5>
                                                            </td>
                                                            <td class="col-lg-2 col-2">
                                                                <label class="switch switch-primary me-0">
                                                                    <input type="checkbox" class="switch-input"
                                                                        id="paint_protection_film_stages"
                                                                        name="paint_protection_film_stages">
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select"
                                                                    name="paint_protection_film_stages_status"
                                                                    id="paint_protection_film_stages_status">
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Completed">Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="additional-row-ppf" style="display: none;">
                                                            <td class="col-4 col-lg-5"><label class="mb-0">PPF Cutting &
                                                                    Alignment</label></td>
                                                            <td class="col-lg-2 col-2">
                                                                <label class="switch switch-primary me-0">
                                                                    <input type="checkbox" class="switch-input"
                                                                        id="PPF_cutting_alignment"
                                                                        name="PPF_cutting_alignment">
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select"
                                                                    name="PPF_cutting_alignment_status"
                                                                    id="PPF_cutting_alignment_status">
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Completed">Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="additional-row-ppf" style="display: none;">
                                                            <td class="col-4 col-lg-5"><label class="mb-0">Polish
                                                                    (PPF)</label></td>
                                                            <td class="col-lg-2 col-2">
                                                                <label class="switch switch-primary me-0">
                                                                    <input type="checkbox" class="switch-input"
                                                                        id="PPF_polish" name="PPF_polish">
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select" name="PPF_polish_status"
                                                                    id="PPF_polish_status">
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Completed">Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="additional-row-ppf" style="display: none;">
                                                            <td class="col-4 col-lg-5"><label class="mb-0">PPF
                                                                    Installation</label></td>
                                                            <td class="col-lg-2 col-2">
                                                                <label class="switch switch-primary me-0">
                                                                    <input type="checkbox" class="switch-input"
                                                                        id="PPF_installation" name="PPF_installation">
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select" name="PPF_installation_status"
                                                                    id="PPF_installation_status">
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Completed">Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="additional-row-ppf" style="display: none;">
                                                            <td class="col-4 col-lg-5"><label class="mb-0">Curing Phase
                                                                    (PPF)</label></td>
                                                            <td class="col-lg-2 col-2">
                                                                <label class="switch switch-primary me-0">
                                                                    <input type="checkbox" class="switch-input"
                                                                        id="PPF_curing_phase" name="PPF_curing_phase">
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select" name="PPF_curing_phase_status"
                                                                    id="PPF_curing_phase_status">
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Completed">Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!-- <div class="">
                                                        <label for="price" class="mb-0">Price :</label>
                                                        <div class="">
                                                            <input type="number" class="form-control" name="ceramic_coating_price">
                                                        </div>
                                                    </div> -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-12 invoice-actions">
                                        <h6 class="pb-2">Ceramic Coating Stages</h6>
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td class="col-4 col-lg-5">
                                                                <h5 class="mb-0">Ceramic Coating Stages</h5>
                                                            </td>
                                                            <td class="col-lg-2 col-2">
                                                                <label class="switch switch-primary me-0">
                                                                    <input type="checkbox" class="switch-input"
                                                                        id="ceramic_coating_stages"
                                                                        name="ceramic_coating_stages">
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select"
                                                                    name="ceramic_coating_stages_status"
                                                                    id="ceramic_coating_stages_status">
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Completed">Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="additional-row-ccs" style="display: none;">
                                                            <td class="col-4 col-lg-5"><label class="mb-0">Ceramic
                                                                    Coating Prep</label></td>
                                                            <td class="col-lg-2 col-2">
                                                                <label class="switch switch-primary me-0">
                                                                    <input type="checkbox" class="switch-input"
                                                                        id="cc_ceramic_coating_rep"
                                                                        name="cc_ceramic_coating_rep">
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select"
                                                                    name="cc_ceramic_coating_rep_status"
                                                                    id="cc_ceramic_coating_rep_status">
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Completed">Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="additional-row-ccs" style="display: none;">
                                                            <td class="col-4 col-lg-5"><label class="mb-0">Paint
                                                                    Correction</label></td>
                                                            <td class="col-lg-2 col-2">
                                                                <label class="switch switch-primary me-0">
                                                                    <input type="checkbox" class="switch-input"
                                                                        id="cc_paint_correction"
                                                                        name="cc_paint_correction">
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select"
                                                                    name="cc_paint_correction_status"
                                                                    id="cc_paint_correction_status">
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Completed">Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="additional-row-ccs" style="display: none;">
                                                            <td class="col-4 col-lg-5"><label class="mb-0">Ceramic
                                                                    Coating Application</label></td>
                                                            <td class="col-lg-2 col-2">
                                                                <label class="switch switch-primary me-0">
                                                                    <input type="checkbox" class="switch-input"
                                                                        id="cc_ceramic_coating_application"
                                                                        name="cc_ceramic_coating_application">
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select"
                                                                    name="cc_ceramic_coating_application_status"
                                                                    id="cc_ceramic_coating_application_status">
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Completed">Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="additional-row-ccs" style="display: none;">
                                                            <td class="col-4 col-lg-5"><label class="mb-0">Curing
                                                                    Phase</label></td>
                                                            <td class="col-lg-2 col-2">
                                                                <label class="switch switch-primary me-0">
                                                                    <input type="checkbox" class="switch-input"
                                                                        id="cc_curing_phase" name="cc_curing_phase">
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select" name="cc_curing_phase_status"
                                                                    id="cc_curing_phase_status">
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Completed">Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!-- <div class="">
                                                        <label for="price" class="mb-0">Price :</label>
                                                        <div class="">
                                                            <input type="number" class="form-control" name="ceramic_coating_price">
                                                        </div>
                                                    </div> -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-12 invoice-actions">
                                        <h6 class="pb-2">Window Tint Stages</h6>
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td class="col-4 col-lg-5">
                                                                <h5 class="mb-0">Window Tint Stages</h5>
                                                            </td>
                                                            <td class="col-lg-2 col-2">
                                                                <label class="switch switch-primary me-0">
                                                                    <input type="checkbox" class="switch-input"
                                                                        id="window_tint_stages" name="window_tint_stages">
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select"
                                                                    name="window_tint_stages_status"
                                                                    id="window_tint_stages_status">
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Completed">Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="additional-row-wts" style="display: none;">
                                                            <td class="col-4 col-lg-5"><label class="mb-0">Window Tint
                                                                    Measurement & Cut</label></td>
                                                            <td class="col-lg-2 col-2">
                                                                <label class="switch switch-primary me-0">
                                                                    <input type="checkbox" class="switch-input"
                                                                        id="window_tint_measurement_cut"
                                                                        name="window_tint_measurement_cut">
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select"
                                                                    name="window_tint_measurement_cut_status"
                                                                    id="window_tint_measurement_cut_status">
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Completed">Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="additional-row-wts" style="display: none;">
                                                            <td class="col-4 col-lg-5"><label class="mb-0">Window Tint
                                                                    Application</label></td>
                                                            <td class="col-lg-2 col-2">
                                                                <label class="switch switch-primary me-0">
                                                                    <input type="checkbox" class="switch-input"
                                                                        id="window_tint_application"
                                                                        name="window_tint_application">
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select"
                                                                    name="window_tint_application_status"
                                                                    id="window_tint_application_status">
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Completed">Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!-- <div class="">
                                                        <label for="price" class="mb-0">Price :</label>
                                                        <div class="">
                                                            <input type="number" class="form-control" name="ceramic_coating_price">
                                                        </div>
                                                    </div> -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-12 invoice-actions">
                                        <h6 class="pb-2">Final Stages (applicable to all services)</h6>
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td class="col-4 col-lg-5">
                                                                <h5 class="mb-0">Final Stages (applicable to all
                                                                    services)</h5>
                                                            </td>
                                                            <td class="col-lg-2 col-2">
                                                                <label class="switch switch-primary me-0">
                                                                    <input type="checkbox" class="switch-input"
                                                                        id="final_stages" name="final_stages">
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select" name="final_stages_status"
                                                                    id="final_stages_status">
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Completed">Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="additional-row-fs" style="display: none;">
                                                            <td class="col-4 col-lg-5"><label class="mb-0">Final
                                                                    Inspection</label></td>
                                                            <td class="col-lg-2 col-2">
                                                                <label class="switch switch-primary me-0">
                                                                    <input type="checkbox" class="switch-input"
                                                                        id="final_inspection" name="final_inspection">
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select" name="final_inspection_status"
                                                                    id="final_inspection_status">
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Completed">Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="additional-row-fs" style="display: none;">
                                                            <td class="col-4 col-lg-5"><label
                                                                    class="mb-0">Completion/Pickup</label></td>
                                                            <td class="col-lg-2 col-2">
                                                                <label class="switch switch-primary me-0">
                                                                    <input type="checkbox" class="switch-input"
                                                                        id="completion_pickup" name="completion_pickup">
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select"
                                                                    name="completion_pickup_status"
                                                                    id="completion_pickup_status">
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Completed">Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!-- <div class="">
                                                        <label for="price" class="mb-0">Price :</label>
                                                        <div class="">
                                                            <input type="number" class="form-control" name="ceramic_coating_price">
                                                        </div>
                                                    </div> -->
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
                                                placeholder="Additional Requests" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="total_price" class="mb-0">Total Price : *</label>
                                        <div class="">
                                            <input type="number" class="form-control" id="total_price"
                                                name="total_price" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 mt-2">
                                        <label for="drivers_license" class="font-weight-bold">Drivers License :<span
                                                class="text-danger">*</span></label>
                                        <img src="" alt="" class="picture-src"
                                            id="drivers_license_preview" onclick="$(this).next().trigger('click')"
                                            style="width: 60%; display: none;">
                                        <label class="form-control label-style" id="drivers_license_browse">
                                            <span class="d-flex justify-content-center align-items-center">
                                                <span><i class="fa fa-2x fa-camera"></i></span>
                                                <span>&nbsp;Browse</span>
                                            </span>
                                            <input type="file" class="input-style" name="drivers_license"
                                                onchange="ReadUrl(this, 'drivers_license_preview', 'drivers_license_browse');"
                                                required>
                                        </label>
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
                                        <input type="hidden" id="imgBase64" name="imgBase64">
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
                                                    <input type="number" required class="form-control"
                                                        id="mileage_in_price" name="mileage_in_price">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <img src="{{ asset('storage/images/images.png') }}"> -->
                                        <div id="image-container">
                                            <canvas id="image-canvas"></canvas>
                                        </div>
                                        <!-- <button id="submit-image">Submit Image</button> -->
                                        <!-- <img src="" id="image-preview" alt="Preview" /> -->
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <!-- Note Start -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="note" class="form-label fw-medium">Note:</label>
                                            <textarea class="form-control" rows="2" id="note" name="note" placeholder="Note"></textarea>
                                        </div>
                                    </div>
                                    {{-- <div class="col-6 mb-3">
                  <label for="int" class="mb-0">Int :</label>
                  <div class="">
                    <input type="number" class="form-control" id="int" name="int">
                  </div>
                </div> --}}
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
                                        <select class="form-select mb-4" name="payment_type">
                                            <option value="Cash">Cash</option>
                                            <option value="Credit">Credit</option>
                                            <option value="Debit">Debit</option>
                                            <option value="E-Transfer">E-Transfer</option>
                                        </select>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <div class="row">
                                    <div class="col-12">
                                        <div class="border p-3">
                                            <b>TERMS</b><br>
                                            @include('admin.partials.terms-and-conditions-work-order')
                                            <div class="row mt-3">
                                                <div class="col-7">
                                                    <label for="customer_signature" class="form-label mb-0">Customer
                                                        Signature:</label>
                                                    <div style="padding: 30px" class="row p-3">
                                                        <div style="width: 100%">
                                                            <canvas style="background: #dedede" id="signature-pad"
                                                                width="400" height="200"></canvas>
                                                        </div>

                                                        <input hidden="" name="signature" value=""
                                                            id="signature_value" />
                                                        <input hidden="" name="is_drawn" value="false"
                                                            id="is_drawn" />

                                                        <div class="row">
                                                            <div class="col-3">
                                                                <button type="button" class="btn btn-danger btn-sm"
                                                                    id="clear">
                                                                    Clear Signature
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <label for="date" class="mb-0">Date:</label>
                                                    <div class="">
                                                        <input type="date" class="form-control" id="date"
                                                            name="date">
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="" class="float-right"
                                                style="display: flex; justify-content:end;">
                                                <button type="submit" class="btn btn-primary" id="save"
                                                    data-action="save-jpg">Submit</button>
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
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#email').change(function() {
                var selectedEmail = $(this).val();
                var selectedOption = $('option:selected', this);

                $('#first_name').val(selectedOption.data('first-name'));
                $('#last_name').val(selectedOption.data('last-name'));
                $('#phone').val(selectedOption.data('phone'));
                $('#id').val(selectedOption.data('id'));
            });
        });

        document.getElementById('general_stages').addEventListener('change', function() {
            var additionalRowsgs = document.getElementsByClassName('additional-row-gs');
            for (var i = 0; i < additionalRowsgs.length; i++) {
                additionalRowsgs[i].style.display = this.checked ? 'table-row' : 'none';
            }
        });
        document.getElementById('paint_protection_film_stages').addEventListener('change', function() {
            var additionalRowsppf = document.getElementsByClassName('additional-row-ppf');
            for (var i = 0; i < additionalRowsppf.length; i++) {
                additionalRowsppf[i].style.display = this.checked ? 'table-row' : 'none';
            }
        });
        document.getElementById('ceramic_coating_stages').addEventListener('change', function() {
            var additionalRowsccs = document.getElementsByClassName('additional-row-ccs');
            for (var i = 0; i < additionalRowsccs.length; i++) {
                additionalRowsccs[i].style.display = this.checked ? 'table-row' : 'none';
            }
        });
        document.getElementById('window_tint_stages').addEventListener('change', function() {
            var additionalRowswts = document.getElementsByClassName('additional-row-wts');
            for (var i = 0; i < additionalRowswts.length; i++) {
                additionalRowswts[i].style.display = this.checked ? 'table-row' : 'none';
            }
        });
        document.getElementById('final_stages').addEventListener('change', function() {
            var additionalRowsfs = document.getElementsByClassName('additional-row-fs');
            for (var i = 0; i < additionalRowsfs.length; i++) {
                additionalRowsfs[i].style.display = this.checked ? 'table-row' : 'none';
            }
        });

        var clearBtn = "#clear";
        var saveBtn = "#save";
        var canvasArea = "#signature-pad";
        var returnUrlSave = "#signature_value";
        var ajaxUrl = "{{ route('admin.invoice.store') }}";

        $(document).ready(function() {
            initSignaturePad();
        });

        function initSignaturePad() {
            var canvas = document.getElementById(canvasArea.replace("#", ""));
            console.log(canvas)
            if (!canvas) {
                console.error("Canvas not found: signature-pad");
                return;
            }
            var context = canvas.getContext("2d");

            var drawing = false;
            var lastPos = null;

            // Remove existing event handlers to avoid duplicates
            $(document).off(
                "mousemove touchmove mousedown touchstart touchend touchmove",
                canvasArea
            );
            $(document).off("click", saveBtn);
            $(clearBtn).off("click");

            // Mouse and touch events for drawing
            $(document).on("mousedown", canvasArea, function(e) {
                if (e.which === 1) {
                    drawing = true;
                    lastPos = getMousePos(canvas, e);
                }
            });

            $(document).on("mouseup", canvasArea, function() {
                drawing = false;
            });

            canvas.addEventListener('touchstart', function(e) {
                e.preventDefault();
                drawing = true;
                lastPos = getTouchPos(canvas, e);
            }, false);

            canvas.addEventListener('touchmove', function(e) {
                e.preventDefault();
                if (drawing) {
                    var touchPos = getTouchPos(canvas, e);
                    if (touchPos) {
                        draw(canvas, context, lastPos, touchPos);
                        lastPos = touchPos;
                    }
                }
            }, false);

            canvas.addEventListener('touchend', function(e) {
                e.preventDefault();
                drawing = false;
            }, false);



            $(document).on("mousemove", canvasArea, function(e) {
                if (drawing) {
                    var mousePos = getMousePos(canvas, e);
                    if (lastPos && mousePos) {
                        draw(canvas, context, lastPos, mousePos);
                        lastPos = mousePos;
                    }
                }
            });



            // Save button event handler
            $(saveBtn).click(function() {
                var canvas = document.getElementById(canvasArea.replace("#", ""));
                var signatureData = canvas.toDataURL();

                // Set the signature value in a hidden input field
                $("#signature_value").val(signatureData);

                // Now submit the form
                $("form").submit();
            });

            // Clear canvas function and event handler
            function clearCanvas() {
                document.getElementById("is_drawn").value = false;
                context.clearRect(0, 0, canvas.width, canvas.height);
            }

            $(clearBtn).click(function() {
                clearCanvas();
            });
        }

        function getMousePos(canvas, evt) {
            var rect = canvas.getBoundingClientRect();
            return {
                x: evt.clientX - rect.left,
                y: evt.clientY - rect.top,
            };
        }

        function getTouchPos(canvas, evt) {
            var rect = canvas.getBoundingClientRect();

            // Check if evt.touches and evt.changedTouches are defined
            if (evt.touches && evt.touches.length > 0) {
                var touch = evt.touches[0];
                return {
                    x: touch.clientX - rect.left,
                    y: touch.clientY - rect.top,
                };
            } else if (evt.changedTouches && evt.changedTouches.length > 0) {
                var touch = evt.changedTouches[0];
                return {
                    x: touch.clientX - rect.left,
                    y: touch.clientY - rect.top,
                };
            }

            return null; // Return null if there are no touch points
        }


        function draw(canvas, context, startPos, endPos) {
            document.getElementById("is_drawn").value = true;
            context.beginPath();
            context.moveTo(startPos.x, startPos.y);
            context.lineTo(endPos.x, endPos.y);
            context.stroke();
        }


        $(document).ready(function() {
            var canvas = document.getElementById("image-canvas");
            var ctx = canvas.getContext("2d");
            var img = new Image();

            img.onload = function() {
                canvas.width = img.width;
                canvas.height = img.height;
                ctx.drawImage(img, 0, 0);
            };
            img.src = "{{ asset('/images/images.png') }}"; // Set source at the end

            $("#image-container").click(function(e) {
                var posX = $(this).offset().left,
                    posY = $(this).offset().top,
                    x = e.pageX - posX,
                    y = e.pageY - posY;

                var $inputWrapper = $("<div>", {
                    class: "input-wrapper",
                    css: {
                        left: x + "px",
                        top: y + "px",
                    },
                }).appendTo("#image-container");

                var $input = $("<input class='mb-2'>", {
                    type: "text",
                    class: "defect-input",
                }).appendTo($inputWrapper);

                var $addButton = $("<button>", {
                    text: "Add",
                    click: function(event) {
                        event.stopPropagation();
                        var defectDescription = $input.val();
                        if (defectDescription.trim() !== "") {
                            ctx.font = "16px Arial";
                            ctx.fillStyle = "red";
                            ctx.fillText(defectDescription, x, y);
                            var dataURL = canvas.toDataURL("image/png");
                            $('#imgBase64').attr("value", dataURL);
                        }
                        $inputWrapper.remove();
                    },
                }).appendTo($inputWrapper);

                var $removeButton = $("<button>", {
                    text: "Remove",
                    click: function(event) {
                        event.stopPropagation();
                        $inputWrapper.remove();
                    },
                }).appendTo($inputWrapper);

                $input.focus();
            });

            $("#save").click(function() {
                // Convert the canvas to a data URL
                var dataURL = canvas.toDataURL("image/png");
                $('#image-preview').attr('src', dataURL);

                // Append the canvas image data to the form data
                $('#imgBase64').attr("value", dataURL);

                // Rest of your AJAX code...
            });
        });
    </script>
@endsection
