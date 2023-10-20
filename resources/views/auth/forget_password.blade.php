@extends('auth.layouts.app')

@section('title')
{{ __('THE ARMOUR LAB') }}
@endsection

@section('css')
@endsection

@section('content')
<div class="page-wraper account-wraper bg-gray py-100 px-20">
    <div class="my-account">
        <div class="logo">
            <img src="images/logo.webp" alt="">
        </div>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="formForget" role="tabpanel" aria-labelledby="formForget">
                <div class="tab-pane fade show active" id="login-home" role="tabpanel" aria-labelledby="login-home">
                    <form action="#">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary w-100 radius-xl">Submit</button>
                        </div>
                        <div class="text-center mt-40">
                            <p class="mt-0">Already have an account?</p>
                            <a class="btn btn-lg btn-secondary w-100" data-toggle="tab" href="{{url('/login')}}">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection