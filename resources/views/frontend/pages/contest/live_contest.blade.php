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
            width: 400px;
            height: 400px;
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
            transform: rotate(calc(45deg * var(--i)));
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
            font-size: 2em;
            font-weight: 700;
            color: #fff;
            text-shadow: 3px 5px 2px rgba(0, 0, 0, 0.15);
        }

        .mainbox .wheel .number span::before {
            position: absolute;
            font-size: 0.75em;
            font-weight: 500;
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
        <h1>Live Contest</h1>

        {{-- @dd($contests) --}}
        <div class="mainbox">
            <div class="spinBtn">spin</div>
            <div class="wheel">
                <div class="number" style="--i: 1; --clr: #db7093">
                    <span>Prize 1</span>
                </div>
                <div class="number" style="--i: 2; --clr: #ae919b">
                    <span>Prize 2</span>
                </div>
                <div class="number" style="--i: 3; --clr: #70db84">
                    <span>Prize 3</span>
                </div>
                <div class="number" style="--i: 4; --clr: #231b1e">
                    <span>Prize 4</span>
                </div>
                <div class="number" style="--i: 5; --clr: #8470db">
                    <span>Prize 5</span>
                </div>
                <div class="number" style="--i: 6; --clr: #db9b70">
                    <span>Prize 6</span>
                </div>
                <div class="number" style="--i: 7; --clr: #d2db70">
                    <span>Prize 7</span>
                </div>
                <div class="number" style="--i: 8; --clr: #70dbd9">
                    <span>Prize 8</span>
                </div>
            </div>
        </div>



    </div>




    <audio controls="controls" id="applause" src="{{ asset('assets/audio/applause.mp3') }}" type="audio/mp3"></audio>
    <audio controls="controls" id="wheel" src="{{ asset('assets/audio/wheel.mp3') }}" type="audio/mp3"></audio>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('assets/js/contest.js') }}"></script>
    <script>
        // Audio elements
        let startSound = new Audio("{{ asset('assets/audio/wheel.mp3') }}");
        let applause = new Audio("{{ asset('assets/audio/applause.mp3') }}");
    </script>

@endsection
