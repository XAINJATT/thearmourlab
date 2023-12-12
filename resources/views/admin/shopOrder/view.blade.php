@extends('admin.layouts.app')
@section('content')
    @if (!auth()->user()->isAdmin())
        @php(abort(403))
    @endif
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
    <div class="content container-fluid">
        {{-- Section 1 --}}
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card mb-3">
                <div class="card-header" style="padding: 0.5rem 1.5rem">
                    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                        <div>
                            <h4 class="mb-3 mb-md-0">Shop Orders > <span class="text-secondary">
                                    Order Details</span>
                            </h4>
                        </div>
                        <button type="button" class="btn btn-secondary ml-auto"
                            onclick="window.location.replace('{{ route('admin.shopOrder') }}');">Back
                        </button>
                    </div>
                </div>
                <hr>
                <div class="card m-5">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                            <div>
                                <h4 class="mb-3 mb-md-0">Order Details > <span class="text-secondary">
                                        General Detail</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-2">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="font-weight-bold text-black">Order Id </label>
                                <input type="text" class="form-control" name="order_id" placeholder="Enter Order Id"
                                    value="{{ $order->id }}" disabled>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="font-weight-bold text-black">Sub Total </label>
                                <input type="text" class="form-control" name="subtotal" placeholder="Enter Sub Total"
                                    value="{{ $order->subtotal }}" disabled>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="-tax-" class="font-weight-bold">Tax </label>
                                <input type="tax" class="form-control" name="tax" id="-tax-"
                                    placeholder="Enter Tax" value="{{ $order->tax }}" disabled>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="font-weight-bold">Total </label>
                                <input type="number" class="form-control" name="total" placeholder="Enter Total"
                                    value="{{ $order->total }}" disabled>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card m-5">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                            <div>
                                <h4 class="mb-3 mb-md-0">Order Details > <span class="text-secondary">
                                        User Detail</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-2">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="font-weight-bold text-black">First Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="first_name" placeholder="Enter First Name"
                                    value="{{ $userOrder->first_name }}" disabled>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="font-weight-bold text-black">Last Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name"
                                    value="{{ $userOrder->last_name }}" disabled>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="-email-" class="font-weight-bold">Email Address <span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" id="-email-"
                                    placeholder="Enter Email" value="{{ $userOrder->email }}" disabled>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="font-weight-bold">Phone Number <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number"
                                    value="{{ $userOrder->phone }}" disabled>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="-address-" class="font-weight-bold">Home Address <span
                                        class="text-danger">*</span></label>
                                <input class="form-control addressField" name="address" id="-address-"
                                    value="{{ $userOrder->address }}" disabled>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="font-weight-bold">Country <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="country" placeholder="Enter Country"
                                    value="{{ $userOrder->country }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="font-weight-bold">City <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="city" placeholder="Enter City"
                                    value="{{ $userOrder->city }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="font-weight-bold">State <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="state" placeholder="Enter State"
                                    value="{{ $userOrder->state }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="font-weight-bold">Zip Code <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="zip_code" placeholder="Enter Zip Code"
                                    value="{{ $userOrder->zip_code }}" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-5">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                            <div>
                                <h4 class="mb-3 mb-md-0">Order Details > <span class="text-secondary">
                                        Products Detail</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    @foreach ($ProductsOrder as $orderItem)
                        <div class="card m-3">
                            <div class="card-body pb-2">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="font-weight-bold text-black">Product Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="product_name"
                                            placeholder="Product Name" value="{{ $orderItem->product->name }}" readonly>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="font-weight-bold text-black">Discounted Price <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="price" placeholder="Price"
                                            value="{{ $orderItem->product->discounted_price }}" readonly>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="font-weight-bold text-black">Price <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="price" placeholder="Price"
                                            value="{{ $orderItem->product->price }}" readonly>
                                    </div>

                                    <div class="col-6 mb-3">
                                        <label class="font-weight-bold">Product Image</label>
                                        <img src="{{ $orderItem->product->product_image }}" alt="Product Image"
                                            class="img-fluid" width="100" height="50">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <hr>
            </div>
        </div>
        <!-- / Content -->

    </div>
@endsection

@section('scripts')
@endsection
