@extends('frontend.layout.app')

@section('title')
    {{ __('THE ARMOUR LAB') }}
@endsection

@section('css')
@endsection

@section('content')
    <style>
        h1 {
            position: relative;
            top: 30%;
            font-size: 60px;
            color: white;
        }

        .box {
            width: 500px;
            height: 50px;
            background-color: white;
            border-radius: 30px;
            display: flex;
            align-items: center;
            padding: 20px;
        }

        .wrapper {
            padding-top: 150px;
            min-height: 100vh;
            background: linear-gradient(25deg, #171a1e 50%, #43491a 50%);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column
        }

        .box>i {
            font-size: 20px;
            color: #777;
        }

        .box>input {
            flex: 1;
            height: 40px;
            border: none;
            outline: none;
            font-size: 18px;
            padding-left: 10px;
        }

        .box>button {
            background: gray;
            color: white;
            border-radius: 0 25px 25px 0;
            position: relative;
            right: -12px;
        }
    </style>


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

        .kbw-signature {
            width: 400px;
            height: 200px;
        }




        .steps .step {
            display: block;
            width: 100%;
            margin-bottom: 35px;
            text-align: center
        }

        .steps .step .step-icon-wrap {
            display: block;
            position: relative;
            width: 100%;
            height: 80px;
            text-align: center
        }

        .steps .step .step-icon-wrap::before,
        .steps .step .step-icon-wrap::after {
            display: block;
            position: absolute;
            top: 50%;
            width: 50%;
            height: 3px;
            margin-top: -1px;
            background-color: #e1e7ec;
            content: '';
            z-index: 1
        }

        .steps .step .step-icon-wrap::before {
            left: 0
        }

        .steps .step .step-icon-wrap::after {
            right: 0
        }

        .steps .step .step-icon {
            display: inline-block;
            position: relative;
            width: 80px;
            height: 80px;
            border: 1px solid #e1e7ec;
            border-radius: 50%;
            background-color: #f5f5f5;
            color: #374250;
            font-size: 38px;
            line-height: 81px;
            z-index: 5
        }

        .steps .step .step-title {
            margin-top: 16px;
            margin-bottom: 0;
            color: #606975;
            font-size: 14px;
            font-weight: 500
        }

        .steps .step:first-child .step-icon-wrap::before {
            display: none
        }

        .steps .step:last-child .step-icon-wrap::after {
            display: none
        }

        .steps .step.completed .step-icon-wrap::before,
        .steps .step.completed .step-icon-wrap::after {
            background-color: #0da9ef
        }

        .steps .step.completed .step-icon {
            border-color: #0da9ef;
            background-color: #0da9ef;
            color: #fff
        }

        @media (max-width: 576px) {

            .flex-sm-nowrap .step .step-icon-wrap::before,
            .flex-sm-nowrap .step .step-icon-wrap::after {
                display: none
            }
        }

        @media (max-width: 768px) {

            .flex-md-nowrap .step .step-icon-wrap::before,
            .flex-md-nowrap .step .step-icon-wrap::after {
                display: none
            }
        }

        @media (max-width: 991px) {

            .flex-lg-nowrap .step .step-icon-wrap::before,
            .flex-lg-nowrap .step .step-icon-wrap::after {
                display: none
            }
        }

        @media (max-width: 1200px) {

            .flex-xl-nowrap .step .step-icon-wrap::before,
            .flex-xl-nowrap .step .step-icon-wrap::after {
                display: none
            }
        }

        #text {
            resize: none;
            margin-botton: 10px;
        }

        .bg-faded,
        .bg-secondary {
            background-color: #f5f5f5 !important;
        }
    </style>

    <div class="wrapper">
        <h1>Track Order</h1>
        <form action="{{ route('frontend.live') }}">
            <div class="box">
                <i class="fa-brands fa-searching"></i>
                <input type="text" value="{{ request('id') }}" placeholder="Enter Tracking ID" name="id">
                <button type="submit" class="btn">Track</button>
            </div>
        </form>

        @if ($workOrderStatus)
            <div class="content container-fluid mt-5">
                {{-- Section 1 --}}
                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row invoice-add">
                        <link rel="stylesheet"
                            href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
                        <div class="container padding-bottom-3x mb-1">
                            <div class="card mb-3">
                                <div class="p-4 text-center text-white text-lg bg-dark rounded-top">
                                    <span class="text-uppercase">Order </span><span class="text-medium">Status</span>
                                </div>
                                <div class="d-flex flex-wrap flex-sm-nowrap justify-content-between py-3 px-2 bg-secondary">
                                    @php
                                        $stages = ['General', 'Paint Protection Film', 'Ceramic Coating', 'Window Tint', 'Final'];
                                    @endphp

                                    @if ($workOrderStatus->general_stages == 1)
                                        <div class="w-100 text-center py-1 px-2">
                                            <span class="text-medium">General Stages</span>
                                        </div>
                                    @endif
                                    @if ($workOrderStatus->paint_protection_film_stages == 1)
                                        <div class="w-100 text-center py-1 px-2">
                                            <span class="text-medium">Paint Protection Film Stages</span>
                                        </div>
                                    @endif
                                    @if ($workOrderStatus->ceramic_coating_stages == 1)
                                        <div class="w-100 text-center py-1 px-2">
                                            <span class="text-medium">Ceramic Coating Stages</span>
                                        </div>
                                    @endif
                                    @if ($workOrderStatus->window_tint_stages == 1)
                                        <div class="w-100 text-center py-1 px-2">
                                            <span class="text-medium">Window Tint Stages</span>
                                        </div>
                                    @endif
                                    @if ($workOrderStatus->final_stages == 1)
                                        <div class="w-100 text-center py-1 px-2">
                                            <span class="text-medium">Final Stages</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="card-body">
                                    <div
                                        class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">

                                        @if ($workOrderStatus->general_stages == 1)
                                            <div class="step completed">
                                                <div class="step-icon-wrap">
                                                    <div class="step-icon"><i class="pe-7s-cart"></i></div>
                                                </div>
                                                <h4 class="step-title">General Stages</h4>
                                            </div>
                                        @endif

                                        @if ($workOrderStatus->paint_protection_film_stages == 1)
                                            <div class="step completed">
                                                <div class="step-icon-wrap">
                                                    <div class="step-icon"><i class="pe-7s-config"></i></div>
                                                </div>
                                                <h4 class="step-title">Paint Protection Film</h4>
                                            </div>
                                        @endif

                                        @if ($workOrderStatus->ceramic_coating_stages == 1)
                                            <div class="step completed">
                                                <div class="step-icon-wrap">
                                                    <div class="step-icon"><i class="pe-7s-medal"></i></div>
                                                </div>
                                                <h4 class="step-title">Ceramic Coating</h4>
                                            </div>
                                        @endif

                                        @if ($workOrderStatus->window_tint_stages == 1)
                                            <div class="step completed">
                                                <div class="step-icon-wrap">
                                                    <div class="step-icon"><i class="pe-7s-car"></i></div>
                                                </div>
                                                <h4 class="step-title">Window Tint</h4>
                                            </div>
                                        @endif

                                        @if ($workOrderStatus->final_stages == 1)
                                            <div class="step completed">
                                                <div class="step-icon-wrap">
                                                    <div class="step-icon"><i class="pe-7s-home"></i></div>
                                                </div>
                                                <h4 class="step-title">Final</h4>
                                            </div>
                                        @endif

                                    </div>
                                   <div class="row">
                                    @if ($workOrderStatus->status_images)
                                    @php($images = json_decode($workOrderStatus->status_images, true))
                                @else
                                    @php($images = [])
                                @endif
                                
                                <label for="">Status Images:</label>


                                @foreach ($images as $key => $image)
                                    <div class="col-12 col-md-4">
                                        <a href="{{ asset('storage/images/' . $image) }}">
                                            <img src="{{ asset('storage/images/' . $image) }}" alt=""
                                            class="img-fluid">
                                        </a>

                                    </div>
                                @endforeach
                                   </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Task Details</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tbody>
                                                    <tr>
                                                        <th class="text-center">
                                                            Completed
                                                        </th>
                                                        <th>Stages</th>
                                                        <th>Stages Details</th>
                                                    </tr>

                                                    @if ($workOrderStatus->general_stages == 1)
                                                        <tr>
                                                            <td class="p-0 text-center">
                                                                <div class="custom-checkbox custom-control">
                                                                    <h6
                                                                        class="mt-3 badge {{ $workOrderStatus->general_stages_status == 'Completed' ? 'bg-success' : 'bg-primary' }}">
                                                                        {{ $workOrderStatus->general_stages_status == 'Completed' ? 'Completed' : 'Pending' }}
                                                                    </h6>
                                                                </div>

                                                            </td>
                                                            <td>General </td>
                                                            <td>
                                                                <ul class="list-unstyled ps-0 mb-0">
                                                                    <li>
                                                                        <p class="text-muted mb-1 text-truncate"><i
                                                                                class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                            <span
                                                                                class="mt-3 badge {{ $workOrderStatus->check_in_status == 'Completed' ? 'bg-success' : 'bg-primary' }}">
                                                                                {{ $workOrderStatus->check_in_status == 'Completed' ? 'Completed' : 'Pending' }}</span>
                                                                            Vehicle has arrived and is logged into our
                                                                            system.
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="text-muted mb-1 text-truncate"><i
                                                                                class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                            <span
                                                                                class="mt-3 badge {{ $workOrderStatus->initial_inspection_status == 'Completed' ? 'bg-success' : 'bg-primary' }}">{{ $workOrderStatus->initial_inspection_status == 'Completed' ? 'Completed' : 'Pending' }}</span>
                                                                            Evaluating the vehicle's condition before
                                                                            any
                                                                            work
                                                                            begins.
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="text-muted mb-0 text-truncate"><i
                                                                                class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                            <span
                                                                                class="mt-3 badge {{ $workOrderStatus->Wash_and_decontamination_status == 'Completed' ? 'bg-success' : 'bg-primary' }}">
                                                                                {{ $workOrderStatus->Wash_and_decontamination_status == 'Completed' ? 'Completed' : 'Pending' }}</span>
                                                                            Ensuring the car's surface is clean and free
                                                                            of
                                                                            contaminants.
                                                                        </p>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    @endif

                                                    @if ($workOrderStatus->paint_protection_film_stages == 1)
                                                        <tr>
                                                            <td class="p-0 text-center">
                                                                <div class="custom-checkbox custom-control">
                                                                    <h6
                                                                        class="mt-3 badge {{ $workOrderStatus->paint_protection_film_stages_status == 'Completed' ? 'bg-success' : 'bg-primary' }}">
                                                                        {{ $workOrderStatus->paint_protection_film_stages_status == 'Completed' ? 'Completed' : 'Pending' }}
                                                                    </h6>
                                                                </div>
                                                            </td>
                                                            <td>Paint Protection Film</td>
                                                            <td>
                                                                <ul class="list-unstyled ps-0 mb-0">
                                                                    <li>
                                                                        <p class="text-muted mb-1 text-truncate"><i
                                                                                class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                            <span
                                                                                class="mt-3 badge {{ $workOrderStatus->PPF_cutting_alignment_status == 'Completed' ? 'bg-success' : 'bg-primary' }}">{{ $workOrderStatus->PPF_cutting_alignment_status == 'Completed' ? 'Completed' : 'Pending' }}</span>
                                                                            Cutting the PPF to the vehicle's specific
                                                                            measurements and aligning it for
                                                                            application.
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="text-muted mb-1 text-truncate"><i
                                                                                class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                            <span
                                                                                class="mt-3 badge {{ $workOrderStatus->PPF_polish_status == 'Completed' ? 'bg-success' : 'bg-primary' }}">{{ $workOrderStatus->PPF_polish_status == 'Completed' ? 'Completed' : 'Pending' }}</span>
                                                                            Polishing the vehicle's surface to ensure an
                                                                            immaculate finish beneath the PPF.
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="text-muted mb-0 text-truncate"><i
                                                                                class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                            <span
                                                                                class="mt-3 badge {{ $workOrderStatus->PPF_installation_status == 'Completed' ? 'bg-success' : 'bg-primary' }}">{{ $workOrderStatus->PPF_installation_status == 'Completed' ? 'Completed' : 'Pending' }}</span>
                                                                            Applying the PPF to the vehicle's body.
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="text-muted mb-0 text-truncate"><i
                                                                                class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                            <span
                                                                                class="mt-3 badge {{ $workOrderStatus->PPF_curing_phase_status == 'Completed' ? 'bg-success' : 'bg-primary' }}">{{ $workOrderStatus->PPF_curing_phase_status == 'Completed' ? 'Completed' : 'Pending' }}</span>
                                                                            Allowing time for the glue under the Ppf to
                                                                            solidify
                                                                            and dry enough to go home.
                                                                        </p>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    @endif

                                                    @if ($workOrderStatus->ceramic_coating_stages == 1)
                                                        <tr>
                                                            <td class="p-0 text-center">
                                                                <div class="custom-checkbox custom-control">
                                                                    <h6
                                                                        class="mt-3 badge {{ $workOrderStatus->ceramic_coating_stages_status == 'Completed' ? 'bg-success' : 'bg-primary' }}">
                                                                        {{ $workOrderStatus->ceramic_coating_stages_status == 'Completed' ? 'Completed' : 'Pending' }}
                                                                    </h6>
                                                                </div>
                                                            </td>
                                                            <td>Ceramic Coating</td>
                                                            <td>
                                                                <ul class="list-unstyled ps-0 mb-0">
                                                                    <li>
                                                                        <p class="text-muted mb-1 text-truncate"><i
                                                                                class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                            <span
                                                                                class="mt-3 badge {{ $workOrderStatus->cc_ceramic_coating_rep_status == 'Completed' ? 'bg-success' : 'bg-primary' }}">{{ $workOrderStatus->cc_ceramic_coating_rep_status == 'Completed' ? 'Completed' : 'Pending' }}</span>
                                                                            Preparing the vehicle's surface for ceramic
                                                                            coating.
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="text-muted mb-1 text-truncate"><i
                                                                                class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                            <span
                                                                                class="mt-3 badge {{ $workOrderStatus->cc_paint_correction_status == 'Completed' ? 'bg-success' : 'bg-primary' }}">{{ $workOrderStatus->cc_paint_correction_status == 'Completed' ? 'Completed' : 'Pending' }}</span>
                                                                            Correcting any imperfections in the paint
                                                                            before
                                                                            the
                                                                            ceramic coating application.
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="text-muted mb-0 text-truncate"><i
                                                                                class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                            <span
                                                                                class="mt-3 badge {{ $workOrderStatus->cc_ceramic_coating_application_status == 'Completed' ? 'bg-success' : 'bg-primary' }}">{{ $workOrderStatus->cc_ceramic_coating_application_status == 'Completed' ? 'Completed' : 'Pending' }}</span>
                                                                            Applying the ceramic coating to protect the
                                                                            vehicle's paint.
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="text-muted mb-0 text-truncate"><i
                                                                                class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                            <span
                                                                                class="mt-3 badge {{ $workOrderStatus->cc_curing_phase_status == 'Completed' ? 'bg-success' : 'bg-primary' }}">{{ $workOrderStatus->cc_curing_phase_status == 'Completed' ? 'Completed' : 'Pending' }}</span>
                                                                            Allowing time for the ceramic coating to
                                                                            bond
                                                                            with
                                                                            the vehicle's surface or PPF.
                                                                        </p>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    @endif

                                                    @if ($workOrderStatus->window_tint_stages == 1)
                                                        <tr>
                                                            <td class="p-0 text-center">
                                                                <div class="custom-checkbox custom-control">
                                                                    <h6
                                                                        class="mt-3 badge {{ $workOrderStatus->window_tint_stages_status == 'Completed' ? 'bg-success' : 'bg-primary' }}">
                                                                        {{ $workOrderStatus->window_tint_stages_status == 'Completed' ? 'Completed' : 'Pending' }}
                                                                    </h6>
                                                                </div>
                                                            </td>
                                                            <td>Window Tint</td>
                                                            <td>
                                                                <ul class="list-unstyled ps-0 mb-0">
                                                                    <li>
                                                                        <p class="text-muted mb-1 text-truncate"><i
                                                                                class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                            <span
                                                                                class="mt-3 badge {{ $workOrderStatus->window_tint_measurement_cut_status == 'Completed' ? 'bg-success' : 'bg-primary' }}">{{ $workOrderStatus->window_tint_measurement_cut_status == 'Completed' ? 'Completed' : 'Pending' }}</span>
                                                                            Measuring windows and cutting tint film
                                                                            accordingly.
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="text-muted mb-1 text-truncate"><i
                                                                                class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                            <span
                                                                                class="mt-3 badge {{ $workOrderStatus->window_tint_application_status == 'Completed' ? 'bg-success' : 'bg-primary' }}">{{ $workOrderStatus->window_tint_application_status == 'Completed' ? 'Completed' : 'Pending' }}</span>
                                                                            Applying the tint to the vehicle's windows.
                                                                        </p>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    @endif

                                                    @if ($workOrderStatus->final_stages == 1)
                                                        <tr>
                                                            <td class="p-0 text-center">
                                                                <div class="custom-checkbox custom-control">
                                                                    <h6
                                                                        class="mt-3 badge {{ $workOrderStatus->final_stages_status == 'Completed' ? 'bg-success' : 'bg-primary' }}">
                                                                        {{ $workOrderStatus->final_stages_status == 'Completed' ? 'Completed' : 'Pending' }}
                                                                    </h6>
                                                                </div>
                                                            </td>
                                                            <td>Final </td>
                                                            <td>
                                                                <ul class="list-unstyled ps-0 mb-0">
                                                                    <li>
                                                                        <p class="text-muted mb-1 text-truncate"><i
                                                                                class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                            <span
                                                                                class="mt-3 badge {{ $workOrderStatus->final_inspection_status == 'Completed' ? 'bg-success' : 'bg-primary' }}">{{ $workOrderStatus->final_inspection_status == 'Completed' ? 'Completed' : 'Pending' }}</span>
                                                                            Checking the quality of the work, ensuring
                                                                            no
                                                                            imperfections.
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="text-muted mb-1 text-truncate"><i
                                                                                class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                            <span
                                                                                class="mt-3 badge {{ $workOrderStatus->completion_pickup_status == 'Completed' ? 'bg-success' : 'bg-primary' }}">{{ $workOrderStatus->completion_pickup_status == 'Completed' ? 'Completed' : 'Pending' }}</span>
                                                                            Vehicle is ready and waiting for the
                                                                            customer.
                                                                        </p>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->
                </div>
            </div>
        @endif
    </div>
@endsection

@section('scripts')
@endsection
