<div class="row mt-3">
    @if (!empty($order->customer_signature))
        @php
            if (str_contains(url()->current(), 'warranty')) {
                $path = asset('storage/signatures/' . $order->customer_signature);
            } else {
                $path = asset($order->customer_signature);
            }
        @endphp

        <div class="col-md-7">
            <label for="customer_signature" class="form-label mb-0">Customer
                Signature:</label>
            <img src="{{ $path }}" alt="Customer Signature">
        </div>
        <div class="col-md-5">
            <label for="date" class="mb-0">Date:</label>
            <div class="">
                <input type="datetime-local" class="form-control" id="date" name="date"
                    value="{{ @$order->date }}" disabled>
            </div>
        </div>
    @endif
    @if (auth()->user()->isAdmin() || empty($order->customer_signature))
        <div class="row mt-3">
            <div class="col-md-7">
                <label for="customer_signature" class="form-label mb-0">Customer Signature:</label>
                <div style="padding: 30px" class="row p-3">
                    <div style="width: 100%">
                        <canvas style="background: #dedede" id="signature-pad" width="270" height="300"></canvas>
                    </div>

                    <input hidden="" name="signature" value="" id="signature_value" />
                    <input hidden="" name="is_drawn" value="" id="is_drawn" />

                    <input type="hidden" id="old_signature" name="old_signature"
                        value="{{ @$order->customer_signature }}">

                    <div class="row">
                        <div class="col-md-3">
                            <button type="button" class="btn btn-danger btn-sm" id="clear">
                                Clear Signature
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <label for="date" class="mb-0">Date:</label>
                <div class="">
                    <input type="datetime-local" class="form-control" id="date" name="date"
                        value="{{ @$order->date }}" >
                </div>
            </div>
        </div>
    @endif


</div>
