@extends('auth.layouts.app')

@section('title')
    {{ __('THE ARMOUR LAB') }}
@endsection

@section('css')
@endsection

@section('content')
    <style>
        .wrapper {
            min-height: 100vh;
            background: linear-gradient(25deg, #171a1e 50%, #43491a 50%) !important;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column
        }

        .my-account {
            width: 100% !important;
        }
    </style>
    <div class="page-wraper wrapper account-wraper bg-gray py-70 px-20">
        <div class="my-account">
            <div class="logo">
                <img src="images/logo.webp" alt="">
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="formLogin" role="tabpanel" aria-labelledby="formLogin">
                    <form id="formAuthentication" action="{{ route('login') }}" method="POST">
                        @if (session('success-message'))
                            <div class="alert alert-success">
                                {{ session('success-message') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session('error-message'))
                            <div class="alert alert-danger">
                                {{ session('error-message') }}
                            </div>
                        @endif
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" name="email"
                                value="{{ old('email') }}" placeholder="Enter your email or username" required autofocus />
                        </div>
                        <div class="form-group">
                            <input type="password" id="password" class="form-control" name="password"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                aria-describedby="password" required />
                        </div>
                        <div class="form-group">
                            <button class="btn mb-10 btn-lg btn-primary w-100" type="submit">login</button>
                            <a href="{{ route('auth.forget_password') }}" data-toggle="tab">Forgot Password</a>
                        </div>
                        <div class="text-center mt-40">
                            <p class="mt-0">Dont have any account?</p>
                            <a class="btn btn-lg btn-secondary w-100" data-toggle="tab"
                                href="{{ url('/register') }}">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
