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
    <div class="content">
        {{-- Section 1 --}}
        <!-- Content -->

        <div class="flex-grow-1">

            <div class="row invoice-add">
                <!-- Invoice Add-->
                <div class="col-lg-12 col-12 mb-lg-0 mb-4">
                    <div class="card invoice-preview-card">
                        <div class="card-body">
                            @include("admin.invoice.partials.header")
                            <hr class="my-4 mx-n4" />
                            <!-- Form Start -->
                            <form method="post" action="{{ route('admin.invoice.update') }}" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="old_drivers_license" value="{{ @$order->drivers_license }}" />
                                <div class="row py-sm-3">
                                    <div class="col-md-4 col-12">
                                        <label for="email" class="form-label me-5 fw-medium">Email:</label>
                                        <select class="form-control" id="email" name="email" required>
                                            <option value="">Select Email</option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->email }}"
                                                    data-first-name="{{ $user->first_name }}"
                                                    data-last-name="{{ $user->last_name }}" data-phone="{{ $user->phone }}"
                                                    data-id="{{ $user->id }}"
                                                    {{ @$order->user->email == $user->email ? 'selected' : '' }}>
                                                    {{ $user->email }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <input type="hidden" class="form-control" id="id" name="id" />
                                    <input type="hidden" class="form-control" id="id" value="{{ $id }}"
                                        name="work_order_id" />
                                    <div class="col-md-4 col-12">
                                        <label for="first_name" class="form-label me-5 fw-medium">First Name:</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name"
                                            placeholder="First Name" />
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <label for="last_name" class="form-label me-5 fw-medium">Last Name:</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name"
                                            placeholder="Last Name" />
                                    </div>
                                    <div class="col-md-4 col-12 mt-2">
                                        <label for="phone" class="form-label me-5 fw-medium">Phone:</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            placeholder="Phone" />
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <label for="make" class="form-label me-5 fw-medium">Make:</label>
                                        <input type="text" class="form-control" id="make" name="make"
                                            value="{{ @$order->make }}" required />
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <label for="colour" class="form-label me-5 fw-medium">Colour:</label>
                                        <input type="text" class="form-control" id="colour" name="colour"
                                            value="{{ @$order->colour }}" required />
                                    </div>
                                    <div class="col-md-4 col-12 mt-2">
                                        <label for="model" class="form-label me-5 fw-medium">Model:</label>
                                        <input type="text" class="form-control" id="model" name="model"
                                            value="{{ @$order->model }}" required />
                                    </div>
                                    <div class="col-md-4 col-12 mt-2">
                                        <label for="year" class="form-label me-5 fw-medium">Year:</label>
                                        <input type="text" class="form-control" id="year" name="year"
                                            value="{{ @$order->year }}" required />
                                    </div>
                                    <div class="col-md-4 col-12 mt-2">
                                        <label for="v_i_n" class="form-label me-5 fw-medium">V.I.N#:</label>
                                        <input type="text" class="form-control" id="v_i_n" name="v_i_n"
                                            value="{{ @$order->v_i_n }}" required />
                                    </div>
                                    <div class="col-md-4 col-12 mt-2">
                                        <label for="plate" class="form-label me-5 fw-medium">Plate#:</label>
                                        <input type="text" class="form-control" id="plate" name="plate"
                                            value="{{ @$order->plate }}" required />
                                    </div>
                                    <div class="col-md-4 col-12 mt-2">
                                        <label for="status" class="font-weight-bold">Status <span
                                                class="text-danger">*</span></label>
                                        <select class="form-control" id="status" name="status">
                                            <option value="General" {{ $order->status == 'General' ? 'selected' : '' }}>
                                                General</option>
                                            <option value="Paint Protection Film"
                                                {{ $order->status == 'Paint Protection Film' ? 'selected' : '' }}>Paint
                                                Protection Film</option>
                                            <option value="Ceramic Coating"
                                                {{ $order->status == 'Ceramic Coating' ? 'selected' : '' }}>Ceramic Coating
                                            </option>
                                            <option value="Window Tint"
                                                {{ $order->status == 'Window Tint' ? 'selected' : '' }}>Window Tint
                                            </option>
                                            <option value="Final" {{ $order->status == 'Final' ? 'selected' : '' }}>Final
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <hr class="mx-n4" />
                                <!-- Check Box Start -->
                                <!-- <div class="row p-sm-3 p-0">
                                            <div class="col-lg-4 col-12 invoice-actions">
                                                <h6 class="pb-2">Ceramic Coating</h6>
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <div class="d-flex justify-content-between mb-2">
                                                            <label for="kenzo_coating" class="mb-0">Kenzo Coating</label>
                                                            <label class="switch switch-primary me-0">
                                                                <input type="checkbox" class="switch-input" id="kenzo_coating"
                                                                    name="ceramic_coating_kenzo_coating"
                                                                    {{ @$order->ceramic_coating_kenzo_coating ? 'checked' : '' }}
                                                                    required>
                                                            </label>
                                                        </div>
                                                        <div class="d-flex justify-content-between mb-2">
                                                            <label for="quartz_plus_coating" class="mb-0">Quartz Plus
                                                                Coating</label>
                                                            <label class="switch switch-primary me-0">
                                                                <input type="checkbox" class="switch-input"
                                                                    id="quartz_plus_coating"
                                                                    name="ceramic_coating_quartz_plus_coating"
                                                                    {{ @$order->ceramic_coating_quartz_plus_coating ? 'checked' : '' }}
                                                                    required>
                                                            </label>
                                                        </div>
                                                        <div class="d-flex justify-content-between mb-2">
                                                            <label for="quartz_coating" class="mb-0">Quartz Coating</label>
                                                            <label class="switch switch-primary me-0">
                                                                <input type="checkbox" class="switch-input" id="quartz_coating"
                                                                    name="ceramic_coating_quartz_coating"
                                                                    {{ @$order->ceramic_coating_quartz_coating ? 'checked' : '' }}
                                                                    required>
                                                            </label>
                                                        </div>
                                                        <div class="d-flex justify-content-between mb-2">
                                                            <label for="premier_coating" class="mb-0">Premier Coating</label>
                                                            <label class="switch switch-primary me-0">
                                                                <input type="checkbox" class="switch-input" id="premier_coating"
                                                                    name="ceramic_coating_premier_coating"
                                                                    {{ @$order->ceramic_coating_premier_coating ? 'checked' : '' }}
                                                                    required>
                                                            </label>
                                                        </div>
                                                        <div class="d-flex justify-content-between mb-2">
                                                            <label for="interior_pkg" class="mb-0">Interior PKG</label>
                                                            <label class="switch switch-primary me-0">
                                                                <input type="checkbox" class="switch-input" id="interior_pkg"
                                                                    name="ceramic_coating_interior_pkg"
                                                                    {{ @$order->ceramic_coating_interior_pkg ? 'checked' : '' }}
                                                                    required>
                                                            </label>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <label for="wheels_of_pkg" class="mb-0">Wheels of PKG</label>
                                                            <label class="switch switch-primary me-0">
                                                                <input type="checkbox" class="switch-input" id="wheels_of_pkg"
                                                                    name="ceramic_coating_wheels_of_pkg"
                                                                    {{ @$order->ceramic_coating_wheels_of_pkg ? 'checked' : '' }}
                                                                    required>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <label for="price" class="mb-0">Price :</label>
                                                    <div class="">
                                                        <input type="number" class="form-control" name="ceramic_coating_price"
                                                            value="{{ @$order->ceramic_coating_price }}" required>
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
                                                                    name="ppf_full_car"
                                                                    {{ @$order->ppf_full_car ? 'checked' : '' }} required>
                                                            </label>
                                                        </div>
                                                        <div class="d-flex justify-content-between mb-2">
                                                            <label for="client-notes" class="mb-0">Client Notes</label>
                                                            <label class="switch switch-primary me-0">
                                                                <input type="checkbox" class="switch-input" id="client-notes"
                                                                    name="ppf_client_notes"
                                                                    {{ @$order->ppf_client_notes ? 'checked' : '' }} required>
                                                            </label>
                                                        </div>
                                                        <div class="d-flex justify-content-between mb-2">
                                                            <label for="payment-stub" class="mb-0">Payment Stub</label>
                                                            <label class="switch switch-primary me-0">
                                                                <input type="checkbox" class="switch-input" id="payment-stub"
                                                                    name="ppf_payment_stub"
                                                                    {{ @$order->ppf_payment_stub ? 'checked' : '' }} required>
                                                            </label>
                                                        </div>
                                                        <div class="d-flex justify-content-between mb-2">
                                                            <label for="payment-terms" class="mb-0">Payment Terms</label>
                                                            <label class="switch switch-primary me-0">
                                                                <input type="checkbox" class="switch-input" id="payment-terms"
                                                                    name="ppf_payment_terms"
                                                                    {{ @$order->ppf_payment_terms ? 'checked' : '' }} required>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <label for="price" class="mb-0">Price :</label>
                                                    <div class="">
                                                        <input type="number" class="form-control" name="ppf_price"
                                                            value="{{ @$order->ppf_price }}" required>
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
                                                                    {{ @$order->cc_payment_terms ? 'checked' : '' }} required>
                                                            </label>
                                                        </div>
                                                        <div class="d-flex justify-content-between mb-2">
                                                            <label for="client-notes" class="mb-0">Client Notes</label>
                                                            <label class="switch switch-primary me-0">
                                                                <input type="checkbox" class="switch-input"
                                                                    name="cc_client_notes"
                                                                    {{ @$order->cc_client_notes ? 'checked' : '' }} required>
                                                            </label>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <label for="payment-stub" class="mb-0">Payment Stub</label>
                                                            <label class="switch switch-primary me-0">
                                                                <input type="checkbox" class="switch-input"
                                                                    name="cc_payment_stub"
                                                                    {{ @$order->cc_payment_stub ? 'checked' : '' }} required>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <label for="price" class="mb-0">Price :</label>
                                                    <div class="">
                                                        <input type="number" class="form-control" name="cc_price"
                                                            value="{{ @$order->cc_price }}" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->

                                <div class="row p-sm-3 p-0">
                                    <div class="col-lg-6 col-12 invoice-actions">
                                        <h6 class="pb-2">General Stages (applicable to all services)</h6>
                                        <div class="card mb-4">
                                            <div class="card-body table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td class="col-4 col-lg-5">
                                                                <h5 class="mb-0">General Stages</h5>
                                                            </td>
                                                            <td class="col-lg-2 col-2">
                                                                <label class="switch switch-primary me-0">
                                                                    <input type="checkbox" class="switch-input"
                                                                        id="general_stages" name="general_stages"
                                                                        {{ @$order->general_stages ? 'checked' : '' }}>
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select" name="general_stages_status"
                                                                    id="general_stages_status">
                                                                    <option value="Pending"
                                                                        {{ $order->general_stages_status == 'Pending' ? 'selected' : '' }}>
                                                                        Pending</option>
                                                                    <option value="Completed"
                                                                        {{ $order->general_stages_status == 'Completed' ? 'selected' : '' }}>
                                                                        Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr class="additional-row-gs" style="display: none;">
                                                            <td class="col-4 col-lg-5"><label
                                                                    class="mb-0">Check-In</label></td>
                                                            <td class="col-lg-2 col-2">
                                                                <label class="switch switch-primary me-0">
                                                                    <input type="checkbox" class="switch-input"
                                                                        id="check_in" name="check_in"
                                                                        {{ @$order->check_in ? 'checked' : '' }}>
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select" name="check_in_status"
                                                                    id="check_in_status">
                                                                    <option value="Pending"
                                                                        {{ $order->check_in_status == 'Pending' ? 'selected' : '' }}>
                                                                        Pending</option>
                                                                    <option value="Completed"
                                                                        {{ $order->check_in_status == 'Completed' ? 'selected' : '' }}>
                                                                        Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr class="additional-row-gs" style="display: none;">
                                                            <td class="col-4 col-lg-5"><label class="mb-0">Initial
                                                                    Inspection</label></td>
                                                            <td class="col-lg-2 col-2">
                                                                <label class="switch switch-primary me-0">
                                                                    <input type="checkbox" class="switch-input"
                                                                        id="initial_inspection" name="initial_inspection"
                                                                        {{ @$order->initial_inspection ? 'checked' : '' }}>
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select"
                                                                    name="initial_inspection_status"
                                                                    id="initial_inspection_status">
                                                                    <option value="Pending"
                                                                        {{ $order->initial_inspection_status == 'Pending' ? 'selected' : '' }}>
                                                                        Pending</option>
                                                                    <option value="Completed"
                                                                        {{ $order->initial_inspection_status == 'Completed' ? 'selected' : '' }}>
                                                                        Complete</option>
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
                                                                        name="Wash_and_decontamination"
                                                                        {{ @$order->Wash_and_decontamination ? 'checked' : '' }}>
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select"
                                                                    name="Wash_and_decontamination_status"
                                                                    id="Wash_and_decontamination_status">
                                                                    <option value="Pending"
                                                                        {{ $order->Wash_and_decontamination_status == 'Pending' ? 'selected' : '' }}>
                                                                        Pending</option>
                                                                    <option value="Completed"
                                                                        {{ $order->Wash_and_decontamination_status == 'Completed' ? 'selected' : '' }}>
                                                                        Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-12 invoice-actions">
                                        <h6 class="pb-2">Paint Protection Film Stages</h6>
                                        <div class="card mb-4">
                                            <div class="card-body table-responsive">
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
                                                                        name="paint_protection_film_stages"
                                                                        {{ @$order->paint_protection_film_stages ? 'checked' : '' }}>
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select"
                                                                    name="paint_protection_film_stages_status"
                                                                    id="paint_protection_film_stages_status">
                                                                    <option value="Pending"
                                                                        {{ $order->paint_protection_film_stages_status == 'Pending' ? 'selected' : '' }}>
                                                                        Pending</option>
                                                                    <option value="Completed"
                                                                        {{ $order->paint_protection_film_stages_status == 'Completed' ? 'selected' : '' }}>
                                                                        Complete</option>
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
                                                                        name="PPF_cutting_alignment"
                                                                        {{ @$order->PPF_cutting_alignment ? 'checked' : '' }}>
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select"
                                                                    name="PPF_cutting_alignment_status"
                                                                    id="PPF_cutting_alignment_status">
                                                                    <option value="Pending"
                                                                        {{ $order->PPF_cutting_alignment_status == 'Pending' ? 'selected' : '' }}>
                                                                        Pending</option>
                                                                    <option value="Completed"
                                                                        {{ $order->PPF_cutting_alignment_status == 'Completed' ? 'selected' : '' }}>
                                                                        Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="additional-row-ppf" style="display: none;">
                                                            <td class="col-4 col-lg-5"><label class="mb-0">Polish
                                                                    (PPF)</label></td>
                                                            <td class="col-lg-2 col-2">
                                                                <label class="switch switch-primary me-0">
                                                                    <input type="checkbox" class="switch-input"
                                                                        id="PPF_polish" name="PPF_polish"
                                                                        {{ @$order->PPF_polish ? 'checked' : '' }}>
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select" name="PPF_polish_status"
                                                                    id="PPF_polish_status">
                                                                    <option value="Pending"
                                                                        {{ $order->PPF_polish_status == 'Pending' ? 'selected' : '' }}>
                                                                        Pending</option>
                                                                    <option value="Completed"
                                                                        {{ $order->PPF_polish_status == 'Completed' ? 'selected' : '' }}>
                                                                        Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="additional-row-ppf" style="display: none;">
                                                            <td class="col-4 col-lg-5"><label class="mb-0">PPF
                                                                    Installation</label></td>
                                                            <td class="col-lg-2 col-2">
                                                                <label class="switch switch-primary me-0">
                                                                    <input type="checkbox" class="switch-input"
                                                                        id="PPF_installation" name="PPF_installation"
                                                                        {{ @$order->PPF_installation ? 'checked' : '' }}>
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select" name="PPF_installation_status"
                                                                    id="PPF_installation_status">
                                                                    <option value="Pending"
                                                                        {{ $order->PPF_installation_status == 'Pending' ? 'selected' : '' }}>
                                                                        Pending</option>
                                                                    <option value="Completed"
                                                                        {{ $order->PPF_installation_status == 'Completed' ? 'selected' : '' }}>
                                                                        Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="additional-row-ppf" style="display: none;">
                                                            <td class="col-4 col-lg-5"><label class="mb-0">Curing Phase
                                                                    (PPF)</label></td>
                                                            <td class="col-lg-2 col-2">
                                                                <label class="switch switch-primary me-0">
                                                                    <input type="checkbox" class="switch-input"
                                                                        id="PPF_curing_phase" name="PPF_curing_phase"
                                                                        {{ @$order->PPF_curing_phase ? 'checked' : '' }}>
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select" name="PPF_curing_phase_status"
                                                                    id="PPF_curing_phase_status">
                                                                    <option value="Pending"
                                                                        {{ $order->PPF_curing_phase_status == 'Pending' ? 'selected' : '' }}>
                                                                        Pending</option>
                                                                    <option value="Completed"
                                                                        {{ $order->PPF_curing_phase_status == 'Completed' ? 'selected' : '' }}>
                                                                        Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-12 invoice-actions">
                                        <h6 class="pb-2">Ceramic Coating Stages</h6>
                                        <div class="card mb-4">
                                            <div class="card-body table-responsive">
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
                                                                        name="ceramic_coating_stages"
                                                                        {{ @$order->ceramic_coating_stages ? 'checked' : '' }}>
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select"
                                                                    name="ceramic_coating_stages_status"
                                                                    id="ceramic_coating_stages_status">
                                                                    <option value="Pending"
                                                                        {{ $order->ceramic_coating_stages_status == 'Pending' ? 'selected' : '' }}>
                                                                        Pending</option>
                                                                    <option value="Completed"
                                                                        {{ $order->ceramic_coating_stages_status == 'Completed' ? 'selected' : '' }}>
                                                                        Complete</option>
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
                                                                        name="cc_ceramic_coating_rep"
                                                                        {{ @$order->cc_ceramic_coating_rep ? 'checked' : '' }}>
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select"
                                                                    name="cc_ceramic_coating_rep_status"
                                                                    id="cc_ceramic_coating_rep_status">
                                                                    <option value="Pending"
                                                                        {{ $order->cc_ceramic_coating_rep_status == 'Pending' ? 'selected' : '' }}>
                                                                        Pending</option>
                                                                    <option value="Completed"
                                                                        {{ $order->cc_ceramic_coating_rep_status == 'Completed' ? 'selected' : '' }}>
                                                                        Complete</option>
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
                                                                        name="cc_paint_correction"
                                                                        {{ @$order->cc_paint_correction ? 'checked' : '' }}>
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select"
                                                                    name="cc_paint_correction_status"
                                                                    id="cc_paint_correction_status">
                                                                    <option value="Pending"
                                                                        {{ $order->cc_paint_correction_status == 'Pending' ? 'selected' : '' }}>
                                                                        Pending</option>
                                                                    <option value="Completed"
                                                                        {{ $order->cc_paint_correction_status == 'Completed' ? 'selected' : '' }}>
                                                                        Complete</option>
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
                                                                        name="cc_ceramic_coating_application"
                                                                        {{ @$order->cc_ceramic_coating_application ? 'checked' : '' }}>
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select"
                                                                    name="cc_ceramic_coating_application_status"
                                                                    id="cc_ceramic_coating_application_status">
                                                                    <option value="Pending"
                                                                        {{ $order->cc_ceramic_coating_application_status == 'Pending' ? 'selected' : '' }}>
                                                                        Pending</option>
                                                                    <option value="Completed"
                                                                        {{ $order->cc_ceramic_coating_application_status == 'Completed' ? 'selected' : '' }}>
                                                                        Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="additional-row-ccs" style="display: none;">
                                                            <td class="col-4 col-lg-5"><label class="mb-0">Curing
                                                                    Phase</label></td>
                                                            <td class="col-lg-2 col-2">
                                                                <label class="switch switch-primary me-0">
                                                                    <input type="checkbox" class="switch-input"
                                                                        id="cc_curing_phase" name="cc_curing_phase"
                                                                        {{ @$order->cc_curing_phase ? 'checked' : '' }}>
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select" name="cc_curing_phase_status"
                                                                    id="cc_curing_phase_status">
                                                                    <option value="Pending"
                                                                        {{ $order->cc_curing_phase_status == 'Pending' ? 'selected' : '' }}>
                                                                        Pending</option>
                                                                    <option value="Completed"
                                                                        {{ $order->cc_curing_phase_status == 'Completed' ? 'selected' : '' }}>
                                                                        Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-12 invoice-actions">
                                        <h6 class="pb-2">Window Tint Stages</h6>
                                        <div class="card mb-4">
                                            <div class="card-body table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td class="col-4 col-lg-5">
                                                                <h5 class="mb-0">Window Tint Stages</h5>
                                                            </td>
                                                            <td class="col-lg-2 col-2">
                                                                <label class="switch switch-primary me-0">
                                                                    <input type="checkbox" class="switch-input"
                                                                        id="window_tint_stages" name="window_tint_stages"
                                                                        {{ @$order->window_tint_stages ? 'checked' : '' }}>
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select"
                                                                    name="window_tint_stages_status"
                                                                    id="window_tint_stages_status">
                                                                    <option value="Pending"
                                                                        {{ $order->window_tint_stages_status == 'Pending' ? 'selected' : '' }}>
                                                                        Pending</option>
                                                                    <option value="Completed"
                                                                        {{ $order->window_tint_stages_status == 'Completed' ? 'selected' : '' }}>
                                                                        Complete</option>
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
                                                                        name="window_tint_measurement_cut"
                                                                        {{ @$order->window_tint_measurement_cut ? 'checked' : '' }}>
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select"
                                                                    name="window_tint_measurement_cut_status"
                                                                    id="window_tint_measurement_cut_status">
                                                                    <option value="Pending"
                                                                        {{ $order->window_tint_measurement_cut_status == 'Pending' ? 'selected' : '' }}>
                                                                        Pending</option>
                                                                    <option value="Completed"
                                                                        {{ $order->window_tint_measurement_cut_status == 'Completed' ? 'selected' : '' }}>
                                                                        Complete</option>
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
                                                                        name="window_tint_application"
                                                                        {{ @$order->window_tint_application ? 'checked' : '' }}>
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select"
                                                                    name="window_tint_application_status"
                                                                    id="window_tint_application_status">
                                                                    <option value="Pending"
                                                                        {{ $order->window_tint_application_status == 'Pending' ? 'selected' : '' }}>
                                                                        Pending</option>
                                                                    <option value="Completed"
                                                                        {{ $order->window_tint_application_status == 'Completed' ? 'selected' : '' }}>
                                                                        Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-12 invoice-actions">
                                        <h6 class="pb-2">Final Stages (applicable to all services)</h6>
                                        <div class="card mb-4">
                                            <div class="card-body table-responsive">
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
                                                                        id="final_stages" name="final_stages"
                                                                        {{ @$order->final_stages ? 'checked' : '' }}>
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select" name="final_stages_status"
                                                                    id="final_stages_status">
                                                                    <option value="Pending"
                                                                        {{ $order->final_stages_status == 'Pending' ? 'selected' : '' }}>
                                                                        Pending</option>
                                                                    <option value="Completed"
                                                                        {{ $order->final_stages_status == 'Completed' ? 'selected' : '' }}>
                                                                        Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="additional-row-fs" style="display: none;">
                                                            <td class="col-4 col-lg-5"><label class="mb-0">Final
                                                                    Inspection</label></td>
                                                            <td class="col-lg-2 col-2">
                                                                <label class="switch switch-primary me-0">
                                                                    <input type="checkbox" class="switch-input"
                                                                        id="final_inspection" name="final_inspection"
                                                                        {{ @$order->final_inspection ? 'checked' : '' }}>
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select" name="final_inspection_status"
                                                                    id="final_inspection_status">
                                                                    <option value="Pending"
                                                                        {{ $order->final_inspection_status == 'Pending' ? 'selected' : '' }}>
                                                                        Pending</option>
                                                                    <option value="Completed"
                                                                        {{ $order->final_inspection_status == 'Completed' ? 'selected' : '' }}>
                                                                        Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="additional-row-fs" style="display: none;">
                                                            <td class="col-4 col-lg-5"><label
                                                                    class="mb-0">Completion/Pickup</label></td>
                                                            <td class="col-lg-2 col-2">
                                                                <label class="switch switch-primary me-0">
                                                                    <input type="checkbox" class="switch-input"
                                                                        id="completion_pickup" name="completion_pickup"
                                                                        {{ @$order->completion_pickup ? 'checked' : '' }}>
                                                                    <span class="switch-slider"></span>
                                                                </label>
                                                            </td>
                                                            <td class="col-lg-5 col-5">
                                                                <select class="form-select"
                                                                    name="completion_pickup_status"
                                                                    id="completion_pickup_status">
                                                                    <option value="Pending"
                                                                        {{ $order->completion_pickup_status == 'Pending' ? 'selected' : '' }}>
                                                                        Pending</option>
                                                                    <option value="Completed"
                                                                        {{ $order->completion_pickup_status == 'Completed' ? 'selected' : '' }}>
                                                                        Complete</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr class="mx-n4" />
                                <div class="row p-sm-3 p-0">
                                    <div class="col-lg-4 col-12 invoice-actions">
                                        <h6 class="pb-2">Ceramic Coating</h6>
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="kenzo_coating" class="mb-0">Kenzo Coating</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" id="kenzo_coating"
                                                            name="ceramic_coating_kenzo_coating"
                                                            {{ @$order->ceramic_coating_kenzo_coating ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="quartz_plus_coating" class="mb-0">Quartz Plus
                                                        Coating</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input"
                                                            id="quartz_plus_coating"
                                                            name="ceramic_coating_quartz_plus_coating"
                                                            {{ @$order->ceramic_coating_quartz_plus_coating ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="quartz_coating" class="mb-0">Quartz Coating</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" id="quartz_coating"
                                                            name="ceramic_coating_quartz_coating"
                                                            {{ @$order->ceramic_coating_quartz_coating ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="premier_coating" class="mb-0">Premier Coating</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" id="premier_coating"
                                                            name="ceramic_coating_premier_coating"
                                                            {{ @$order->ceramic_coating_premier_coating ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="interior_pkg" class="mb-0">Interior PKG</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" id="interior_pkg"
                                                            name="ceramic_coating_interior_pkg"
                                                            {{ @$order->ceramic_coating_interior_pkg ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <label for="wheels_of_pkg" class="mb-0">Wheels of PKG</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" id="wheels_of_pkg"
                                                            name="ceramic_coating_wheels_of_pkg"
                                                            {{ @$order->ceramic_coating_wheels_of_pkg ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <label for="price" class="mb-0">Price :</label>
                                            <div class="">
                                                <input type="number" class="form-control" name="ceramic_coating_price"
                                                    value="{{ @$order->ceramic_coating_price }}">
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
                                                            name="ppf_full_car"
                                                            {{ @$order->ppf_full_car ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="full_front_end" class="mb-0">Full Front End</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" id="full_front_end"
                                                            name="ppf_full_front_end"
                                                            {{ @$order->ppf_full_front_end ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="partial_front_end" class="mb-0">Partial Front
                                                        End</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input"
                                                            id="partial_front_end" name="ppf_partial_front_end"
                                                            {{ @$order->ppf_partial_front_end ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="partial_kit" class="mb-0">18" Partial Kit</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" id="partial_kit"
                                                            name="ppf_partial_kit"
                                                            {{ @$order->ppf_partial_kit ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="rockers" class="mb-0">Rockers</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" id="rockers"
                                                            name="ppf_rockers"
                                                            {{ @$order->ppf_rockers ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="headlights" class="mb-0">Headlights</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" id="headlights"
                                                            name="ppf_headlights"
                                                            {{ @$order->ppf_headlights ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="luggage_strip" class="mb-0">Luggage Strip</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" id="luggage_strip"
                                                            name="ppf_luggage_strip"
                                                            {{ @$order->ppf_luggage_strip ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <label for="price" class="mb-0">Price :</label>
                                            <div class="">
                                                <input type="number" class="form-control" name="ppf_price"
                                                    value="{{ @$order->ppf_price }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12 invoice-actions">
                                        <h6 class="pb-2">Window Tinting</h6>
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="front_windows" class="mb-0">2 Front windows</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input"
                                                            name="wt_front_windows"
                                                            {{ @$order->wt_front_windows ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="full_vehicle" class="mb-0">Full Vehicle</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input"
                                                            name="wt_full_vehicle"
                                                            {{ @$order->wt_full_vehicle ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="windshield" class="mb-0">Windshield</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" name="wt_windshield"
                                                            {{ @$order->wt_windshield ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="5" class="mb-0">5%</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" name="wt_5"
                                                            {{ @$order->wt_5 ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="20" class="mb-0">20%</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" name="wt_20"
                                                            {{ @$order->wt_20 ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="35" class="mb-0">35%</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" name="wt_35"
                                                            {{ @$order->wt_35 ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="50" class="mb-0">50%</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" name="wt_50"
                                                            {{ @$order->wt_50 ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="70" class="mb-0">70%</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" name="wt_70"
                                                            {{ @$order->wt_70 ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <label for="price" class="mb-0">Price :</label>
                                            <div class="">
                                                <input type="number" class="form-control" name="wt_price"
                                                    value="{{ @$order->wt_price }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12 invoice-actions">
                                        <h6 class="pb-2">Paint Correction</h6>
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="one_stage" class="mb-0">One Stage</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" name="pc_one_stage"
                                                            {{ @$order->pc_one_stage ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="two_stage" class="mb-0">Two Stage</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" name="pc_two_stage"
                                                            {{ @$order->pc_two_stage ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="three_stage" class="mb-0">Three Stage</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" name="pc_three_stage"
                                                            {{ @$order->pc_three_stage ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="wet_sand" class="mb-0">Wet Sand</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" name="pc_wet_sand"
                                                            {{ @$order->pc_wet_sand ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <label for="price" class="mb-0">Price :</label>
                                            <div class="">
                                                <input type="number" class="form-control" name="pc_price"
                                                    value="{{ @$order->pc_price }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12 invoice-actions">
                                        <h6 class="pb-2">Other Services</h6>
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="interior_detailing" class="mb-0">Interior
                                                        Detailing</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input"
                                                            name="os_interior_detailing"
                                                            {{ @$order->os_interior_detailing ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="car_wrap" class="mb-0">Car Wrap</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" name="os_car_wrap"
                                                            {{ @$order->os_car_wrap ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="rim_powder_coating" class="mb-0">Rim Powder
                                                        Coating</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input"
                                                            name="os_rim_powder_coating"
                                                            {{ @$order->os_rim_powder_coating ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="rim_repair" class="mb-0">Rim Repair</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" name="os_rim_repair"
                                                            {{ @$order->os_rim_repair ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="dent_repair" class="mb-0">Dent Repair</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input" name="os_dent_repair"
                                                            {{ @$order->os_dent_repair ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label for="caliper_painting" class="mb-0">Caliper Painting</label>
                                                    <label class="switch switch-primary me-0">
                                                        <input type="checkbox" class="switch-input"
                                                            name="os_caliper_painting"
                                                            {{ @$order->os_caliper_painting ? 'checked' : '' }}>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <label for="price" class="mb-0">Price :</label>
                                            <div class="">
                                                <input type="number" class="form-control" name="os_price"
                                                    value="{{ @$order->os_price }}" required>
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
                                                placeholder="Additional Requests" required>{{ @$order->additional_requests }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="total_price" class="mb-0">Total Price :</label>
                                        <div class="">
                                            <input type="number" class="form-control" id="total_price"
                                                name="total_price" value="{{ @$order->total_price }}" required>
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
                                        <img src="" alt="" class="picture-src"
                                            id="drivers_license_preview" onclick="$(this).next().trigger('click')"
                                            style="width: 60%; display: none;">
                                        <label class="form-control label-style" id="drivers_license_browse">
                                            <span class="d-flex justify-content-center align-items-center">
                                                <span><i class="fa fa-2x fa-camera"></i></span>
                                                <span>&nbsp;Browse</span>
                                            </span>
                                            <input type="file" class="input-style" name="drivers_license"
                                                onchange="ReadUrl(this, 'drivers_license_preview', 'drivers_license_browse');">
                                        </label>
                                        <img src="{{ @$order->drivers_license }}" id="drivers_license"
                                            alt="drivers_license" width="50%" height="30%" />
                                    </div>
                                </div>
                                <!-- Additional Requests End -->
                                <hr class="my-4 mx-n4" />
                                <div class="row p-sm-3 p-0">
                                  
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
                                                        name="mileage_in_price" value="{{ @$order->mileage_in_price }}"
                                                        required>
                                                </div>
                                            </div>
                                        </div>

                                        
                                    </div>
                                </div>
                                @include('admin.invoice.partials.defects', ['order' => $order])
                                <hr class="my-4" />
                                <!-- Note Start -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="note" class="form-label fw-medium">Note:</label>
                                            <textarea class="form-control" rows="2" id="note" name="note" placeholder="Note" required>{{ @$order->note }}</textarea>
                                        </div>
                                    </div>
                                    {{-- <div class="col-6 mb-3">
                  <label for="int" class="mb-0">Int :</label>
                  <div class="">
                    <input type="number" class="form-control" id="int" name="int" value="{{ @$order->int }}" required>
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
                                        <!-- <input type="number" class="form-control" id="payment_type" name="payment_type" value="{{ @$order->payment_type }}" required> -->
                                        <select class="form-select mb-4" name="payment_type">
                                            <option value="Cash"
                                                {{ $order->payment_type == 'Cash' ? 'selected' : '' }}>
                                                Cash</option>
                                            <option value="Credit"
                                                {{ $order->payment_type == 'Credit' ? 'selected' : '' }}>Credit</option>
                                            <option value="Debit"
                                                {{ $order->payment_type == 'Debit' ? 'selected' : '' }}>Debit</option>
                                            <option value="E-Transfer"
                                                {{ $order->payment_type == 'E-Transfer' ? 'selected' : '' }}>E-Transfer
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <div class="row">
                                    <div class="col-12">
                                        <div class="border p-3">

                                            @include('admin.partials.terms-and-conditions-work-order')

                                            @include('admin.invoice.partials.signature', [
                                                'order' => $order,
                                            ])
                                            @if (
                                                !empty(@$order->customer_signature) ||
                                                    @$order->drivers_license === '' ||
                                                    auth()->user()->isAdmin())
                                                <div id="" class="float-right"
                                                    style="display: flex; justify-content:end;">
                                                    <button type="submit" class="btn btn-primary" id="save"
                                                        data-action="save-jpg">Submit</button>
                                                </div>
                                            @endif
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
    @include('admin.invoice.partials.script')
@endsection
