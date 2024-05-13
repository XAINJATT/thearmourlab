@extends('frontend.layout.app')

@section('title')
    {{ __('THE ARMOUR LAB | Live Contest') }}
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

        .btn-success {
            background-color: #43491a;
            color: white;
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

        .mainbox {
            position: relative;
            width: 530px;
            height: 530px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .mainbox .spinBtn {
            position: absolute;
            width: 60px;
            height: 60px;
            background-color: #fff;
            border-radius: 50%;
            z-index: 10;
            display: flex;
            justify-content: center;
            align-items: center;
            text-transform: uppercase;
            font-weight: 600;
            color: #333;
            letter-spacing: 0.1rem;
            border: 4px solid rgba(0, 0, 0, 0.75);
            cursor: pointer;
            user-select: none;
        }

        .mainbox .spinBtn::before {
            content: '';
            position: absolute;
            top: -28px;
            width: 20px;
            height: 30px;
            background-color: #fff;
            clip-path: polygon(50% 0%, 15% 100%, 85% 100%);
        }


        .mainbox .wheel {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #333;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 0 0 5px #333,
                0 0 0 15px #fff,
                0 0 0 18px #111;
            transition: transform 5s ease-in-out;
        }

        .mainbox .wheel .number {
            position: absolute;
            width: 50%;
            height: 50%;
            background: var(--clr);
            transform-origin: bottom right;
            transform: rotate(calc(var(--angle) * var(--i)));
            clip-path: polygon(0 0, 59% 0, 100% 100%, 0 59%);
            display: flex;
            justify-content: center;
            align-items: center;
            user-select: none;
            cursor: pointer;
        }

        .mainbox .wheel .number span {
            position: relative;
            transform: rotate(45deg);
            font-size: 18px;
            font-weight: 400;
            color: #fff;
            text-shadow: 3px 5px 2px rgba(0, 0, 0, 0.15);
            bottom: -30px;
            left: 30px;
        }

        .mainbox .wheel .number span::before {
            position: absolute;
            font-size: 0.75em;
            font-weight: 400;
        }

        @media (max-width: 576px) {
            .mainbox {
                width: 100%;
                height: 50%;
            }
        }


        audio {
            display: none;
        }
    </style>

    <div class="wrapper">
        <h1>SPIN TO WIN</h1>
        @if ($no_of_contests > 0)
            {{-- @dd($contests) --}}


            <div class="col-lg-6 mb-50" id="userForm">
                <form id="addUserToContest" class="contact-form bg-white p-5" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="ajax-message"></div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group  mb-3">
                                <div class="input-group">
                                    <input name="full_name" type="text" required class="form-control valid-character"
                                        placeholder="Full Name">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <input name="phone" type="text" required class="form-control int-value"
                                        placeholder="Your Phone">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group  mb-3">
                                <div class="input-group">
                                    <input name="email" type="email" class="form-control" required
                                        placeholder="Your Email Address">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <button type="button" id="addUserToContestBtn" class="btn btn-success btn-lg">
                                I FEEL LUCKY!
                            </button>
                        </div>
                    </div>
                    <input type="hidden" id="win_prize" name="prize" value="">
                    <input type="hidden" id="contest_id" name="contest_id" value="1">
                </form>
            </div>

            <div class="mainbox d-none" id="spinner-wheel">
                <div class="spinBtn">spin</div>
                <div class="wheel">
                    @foreach ($contests as $key => $prize)
                        <div class="number"
                            style="--i: {{ $key + 1 }}; --clr: {{ randomColor() }}; --angle: {{ 360 / $no_of_contests }}deg;">
                            <span>{{ $prize->title }}</span>
                        </div>
                    @endforeach
                </div>
            </div>


            @php
                function divideRange($start, $end, $parts)
                {
                    $range = $end - $start;
                    $interval = $range / $parts;

                    $divisions = [];
                    $current = $start;

                    for ($i = 1; $i <= $parts; $i++) {
                        $divisions[] = $current + $interval;
                        $current += $interval;
                    }

                    return $divisions;
                }
                if ($contests) {
                    $prizes = [];
                    $angle = 0;
                    foreach ($contests as $key => $prize) {
                        $prizes[$key + 1] = [
                            'name' => $prize->title,
                            'angle' => $angle,
                        ];
                        $angle += 360 / $no_of_contests;
                    }
                }
            @endphp
        @endif

    </div>



    <audio controls="controls" id="applause" src="{{ asset('assets/audio/applause.mp3') }}" type="audio/mp3"></audio>
    <audio controls="controls" id="wheel" src="{{ asset('assets/audio/wheel.mp3') }}" type="audio/mp3"></audio>
@endsection

@section('scripts')
    <script src="{{ asset('backend/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>

    @if ($contests)
    @if($prizes)
        <script>
            // Audio elements
            let startSound = new Audio("{{ asset('assets/audio/wheel.mp3') }}");
            let applause = new Audio("{{ asset('assets/audio/applause.mp3') }}");
            let prizes = @json($prizes, JSON_FORCE_OBJECT); // Convert PHP array to JSON for use in JavaScript
            prizes = Object.values(prizes); // Convert the object to an array

            let start_angle = prizes[1]['angle']
            console.log(prizes, start_angle);

            $("#addUserToContestBtn").on("click", function() {
                $('#userForm').addClass('d-none');
                $('#spinner-wheel').removeClass('d-none');
            });
        </script>
        @endif
    @endif
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="{{ asset('assets/js/contest.js?v=1') }}"></script>
@endsection
