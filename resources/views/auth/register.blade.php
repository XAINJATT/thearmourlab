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
</style>
<div class="page-wraper wrapper account-wraper bg-gray">
    <div class="my-account">
        <div class="logo">
            <img src="images/logo.webp" alt="">
        </div>
        <div class="tab-pane fade show active" id="formRegister" role="tabpanel" aria-labelledby="formRegister">
            <div class="tab-pane fade show active" id="register-home" role="tabpanel" aria-labelledby="register-home">
                <form id="formAuthentication" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{old('first_name')}}" placeholder="Enter your First Name" required autofocus/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{old('last_name')}}" placeholder="Enter your Last Name" required autofocus/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Enter your email" required/>
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" required/>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary w-100 radius-xl" type="submit">Register Now</button>
                    </div>
                    <div class="text-center mt-40">
                        <p class="mt-0">Already have an account?</p>
                        <a class="btn btn-lg btn-secondary w-100" data-toggle="tab" href="{{ url('/login') }}">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection