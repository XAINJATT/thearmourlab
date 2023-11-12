@extends('admin.layouts.app')
@section('content')
<style>
    .card hr {
    color: #adb35b !important;
    height: 2px !important;
    width: 100% !important;
    }
</style>
    <div class="content container-fluid">
        {{--Section 1--}}
        <div class="row mb-3">
            <div class="col-12">
                <div class="card rounded-2" style="background: #000000">
                    <div class="card-body text-white">
                        <div class="d-flex justify-content-end">
                            <span>{{ \Carbon\Carbon::now()->format("d-m-Y H:i:s A") }}</span>
                        </div>
                        <div class="text-center">
                            <span class="text-white fs-2 mb-0">Total Running WOs</span>
                           <p class="text-warning fs-2 mb-0 mt-0"><a href="">2000</a></p>
                            <span class="fs-6 fw-bold">
                                MASSIVE - <span class="text-danger">100</span> 
                                | ASSURANCE - <span class="text-success">100</span> 
                                | NETCOOL - <span class="text-success">100</span>
                                | INSTALLATION - <span class="text-success">100</span> 
                                | OTHER-<span class="text-success">100</span>
                                <br>FIBER - <span class="text-success">100</span>
                                | COOPER - <span class="text-success">100</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
