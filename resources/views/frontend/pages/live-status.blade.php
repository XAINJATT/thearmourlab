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
                <input type="text" value="{{request("id")}}" placeholder="Enter Tracking ID" name="id">
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
                                <div class="p-4 text-center text-white text-lg bg-dark rounded-top"><span
                                        class="text-uppercase">Order </span><span class="text-medium">Status</span></div>
                                <div class="d-flex flex-wrap flex-sm-nowrap justify-content-between py-3 px-2 bg-secondary">
                                    @php
                                        $stages = ['General', 'Paint Protection Film', 'Ceramic Coating', 'Window Tint', 'Final'];
                                        $currentStatusIndex = array_search($workOrderStatus->status, $stages);
                                    @endphp

                                    @foreach ($stages as $stage)
                                        <div class="w-100 text-center py-1 px-2">
                                            <span class="text-medium">{{ $stage }} Stages</span>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="card-body">
                                    <div
                                        class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
                                        @foreach ($stages as $index => $stage)
                                            @php
                                                // Map stage names to corresponding icon classes
                                                $iconClasses = [
                                                    'General' => 'cart',
                                                    'Paint Protection Film' => 'config',
                                                    'Ceramic Coating' => 'medal',
                                                    'Window Tint' => 'car',
                                                    'Final' => 'home',
                                                ];

                                                // Get the icon class for the current stage
                                                $iconClass = $iconClasses[$stage] ?? 'default-icon'; // Provide a default if not found
                                            @endphp

                                            <div class="step {{ $index <= $currentStatusIndex ? 'completed' : '' }}">
                                                <div class="step-icon-wrap">
                                                    <div class="step-icon"><i class="pe-7s-{{ $iconClass }}"></i></div>
                                                </div>
                                                <h4 class="step-title">{{ $stage }}</h4>
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
                                                    @php
                                                        $statuses = ['General', 'Paint Protection Film', 'Ceramic Coating', 'Window Tint', 'Final'];
                                                        $currentStatusIndex = array_search($workOrderStatus->status, $statuses);
                                                    @endphp
                                                    @foreach ($statuses as $index => $status)
                                                        <tr>
                                                            <td class="p-0 text-center">
                                                                <div class="custom-checkbox custom-control">
                                                                    <input type="checkbox" data-checkboxes="mygroup"
                                                                        class="custom-control-input"
                                                                        id="checkbox-{{ $index + 1 }}"
                                                                        {{ $index <= $currentStatusIndex ? 'checked' : '' }}
                                                                        disabled>
                                                                    <label for="checkbox-{{ $index + 1 }}"
                                                                        class="custom-control-label">&nbsp;</label>
                                                                </div>
                                                            </td>
                                                            <td>{{ $status }}</td>
                                                            <td>
                                                                <ul class="list-unstyled ps-0 mb-0">
                                                                    @if ($status == 'General')
                                                                        <li>
                                                                            <p class="text-muted mb-1 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                                Vehicle has arrived and is logged into our
                                                                                system.
                                                                            </p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="text-muted mb-1 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                                Evaluating the vehicle's condition before
                                                                                any
                                                                                work
                                                                                begins.</p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="text-muted mb-0 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                                Ensuring the car's surface is clean and free
                                                                                of
                                                                                contaminants.</p>
                                                                        </li>
                                                                    @elseif($status == 'Paint Protection Film')
                                                                        <li>
                                                                            <p class="text-muted mb-1 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                                Cutting the PPF to the vehicle's specific
                                                                                measurements and aligning it for
                                                                                application.
                                                                            </p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="text-muted mb-1 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                                Polishing the vehicle's surface to ensure an
                                                                                immaculate finish beneath the PPF.</p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="text-muted mb-0 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                                Applying the PPF to the vehicle's body.</p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="text-muted mb-0 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                                Allowing time for the glue under the Ppf to
                                                                                solidify
                                                                                and dry enough to go home.</p>
                                                                        </li>
                                                                    @elseif($status == 'Ceramic Coating')
                                                                        <li>
                                                                            <p class="text-muted mb-1 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                                Preparing the vehicle's surface for ceramic
                                                                                coating.
                                                                            </p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="text-muted mb-1 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                                Correcting any imperfections in the paint
                                                                                before
                                                                                the
                                                                                ceramic coating application.</p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="text-muted mb-0 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                                Applying the ceramic coating to protect the
                                                                                vehicle's paint.</p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="text-muted mb-0 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                                Allowing time for the ceramic coating to
                                                                                bond
                                                                                with
                                                                                the vehicle's surface or PPF.</p>
                                                                        </li>
                                                                    @elseif($status == 'Window Tint')
                                                                        <li>
                                                                            <p class="text-muted mb-1 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                                Measuring windows and cutting tint film
                                                                                accordingly.
                                                                            </p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="text-muted mb-1 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                                Applying the tint to the vehicle's windows.
                                                                            </p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="text-muted mb-0 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                                5G and Gigabit LTE</p>
                                                                        </li>
                                                                    @elseif($status == 'Final')
                                                                        <li>
                                                                            <p class="text-muted mb-1 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                                Checking the quality of the work, ensuring
                                                                                no
                                                                                imperfections. </p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="text-muted mb-1 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                                Vehicle is ready and waiting for the
                                                                                customer.
                                                                            </p>
                                                                        </li>
                                                                    @endif
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    @endforeach
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
