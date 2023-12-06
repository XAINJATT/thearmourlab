@extends('admin.layouts.app')
@section('content')
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
</style>
<div class="page-content">

    <section class="contact-area pb-5">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-12 col-md-8 mt-3">
                    <form action="{{route('admin.WorkOrderStatus.store')}}" id="addProductForm" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card mb-3">
                            <div class="card-header" style="padding: 0.5rem 1.5rem">
                                <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                                    <div>
                                        <h4 class="mb-3 mb-md-0">WorkOrders > <span class="text-secondary">
                                                Create Work Order Status</span>
                                        </h4>
                                    </div>
                                    <button type="button" class="btn btn-secondary ml-auto" onclick="window.location.replace('{{ route('admin.WorkOrderStatus')  }}');">Back
                                    </button>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body pb-2">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="font-weight-bold text-black">Name <span class="text-danger">*</span></label>
                                        <select class="form-control" name="car_name" placeholder="Enter Name" required>
                                            <option value="Car">Car</option>
                                            <option value="SUV">SUV</option>
                                            <option value="Truck">Truck</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="work_order_id" class="font-weight-bold">Work Order Number <span class="text-danger">*</span></label>
                                        <select class="form-control" id="work_order_id" name="work_order_id" required>
                                            <option value="">Select Order Number</option>
                                            @foreach($workOrders as $workOrder)
                                            <option value="{{ $workOrder->id }}">{{ $workOrder->id }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="status" class="font-weight-bold">Status <span class="text-danger">*</span></label>
                                        <select class="form-control" id="status" name="status" required>
                                            <option value="General">General</option>
                                            <option value="Paint Protection Film">Paint Protection Film</option>
                                            <option value="Ceramic Coating">Ceramic Coating</option>
                                            <option value="Window Tint">Window Tint</option>
                                            <option value="Final">Final</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-header" style="padding: 0.5rem 1.5rem">
                                <div class="row">
                                    <div class="col-12 text-end">
                                        <button type="button" class="btn btn-light px-4 py-2" onclick="window.location.href='{{route('admin.WorkOrderStatus')}}'">
                                            Cancel
                                        </button>
                                        <button type="submit" name="submit" class="btn btn-primary submitBtn">
                                            <i class="fa-solid fa-floppy-disk"></i> Save Work Order Status
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection