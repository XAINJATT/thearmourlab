@extends('frontend.layout.app')

@section('title')
{{ __('THE ARMOUR LAB') }}
@endsection

@section('css')
@endsection

@section('content')
<div class="page-content bg-white">
    <div class="page-banner ovbl-dark" style="background-image:url(images/banner/bnr1.jpg);">
        <div class="container">
            <div class="page-banner-entry text-center">
                <h1><span>CART</span></h1>
                <!-- Breadcrumb row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/"><i class="las la-home"></i>Home > </a></li>
                        <li class="breadcrumb-item active" aria-current="page">CART</li>
                    </ul>
                </nav>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
            </div>

            <div class="row">
                @if ($message = Session::get('success'))
                <div class="p-4 mb-3 bg-green-400 rounded">
                    <p class="text-green-800">{{ $message }}</p>
                </div>
                @endif
                <div class="col-8">
                    @foreach ($cartItems as $item)
                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <img src="{{ $item->attributes->image }}" class="img-fluid rounded-3" alt="Cotton T-shirt">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <span>{{ $item->name }}</span>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex" style="width: 18.66667%;">
                                    <form id="updateCartForm" action="{{ route('cart.update') }}" method="POST" class="d-flex align-items-center">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $item->id }}">

                                        <button class="btn btn-link px-2 updateQuantity" data-action="decrement">
                                            <i class="fas fa-minus"></i>
                                        </button>

                                        <input id="form1" min="0" name="quantity" value="{{ $item->quantity }}" type="number" class="form-control form-control-sm m-0 p-0 mx-2" />
                                        <button class="btn btn-link px-2 updateQuantity" data-action="increment">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </form>
                                </div>
                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                    <h5 class="mb-0">${{ $item->price }}</h5>
                                </div>
                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $item->id }}" name="id">
                                        <button class="text-danger" style="border: none;"><i class="fas fa-trash fa-lg"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-4">
                    <form action="{{ route('frontend.order.store') }}" id="addDriverForm" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="cart_item_ids" value="{{ implode(',', $cartItems->pluck('id')->toArray()) }}">
                        <div class="right-bar">
                            <p><span>Subtotal</span> <span></span></p>
                            <hr>
                            <p><span>Tax (5%)</span> <span></span></p>
                            <hr>
                            <p><span>Total</span> <span></span></p>
                            <hr>
                            <input type="hidden" name="subtotal" id="subtotal" value="">
                            <input type="hidden" name="tax" id="tax" value="">
                            <input type="hidden" name="total" id="total" value="">
                            <!-- Inside the form tag -->
                            <button type="submit">    
                                <a style="background-color: #43491A;"><i class="fa fa-shopping-cart"></i>
                                    Checkout
                                </a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        // Call updatePrices on page load
        updatePrices();

        $('.updateQuantity').on('click', function(e) {
            e.preventDefault();

            var form = $(this).closest('form');
            var action = $(this).data('action');

            // Increment or decrement the quantity
            var input = form.find('input[name="quantity"]');
            if (action === 'increment') {
                input.val(parseInt(input.val()) + 1);
            } else if (action === 'decrement') {
                input.val(Math.max(parseInt(input.val()) - 1, 0));
            }

            // Send the AJAX request
            $.ajax({
                type: form.attr('method'),
                url: form.attr('action'),
                data: form.serialize(),
                success: function(response) {
                    // Handle success if needed
                    console.log(response);

                    // Update prices on the client side
                    updatePrices();
                },
                error: function(error) {
                    // Handle error if needed
                    console.log(error);
                }
            });
        });

        // Function to update prices on the client side
        function updatePrices() {
            var cartItemIds = "{{ $cartItems->pluck('id')->implode(',') }}".split(','); // Convert string to array
            var subtotal = 0;
            var taxRate = 0.05; // 5% tax rate

            // Loop through each cart item ID
            $.each(cartItemIds, function(index, itemId) {
                // You can perform actions with the item ID if needed
            });

            // Loop through each cart item
            $('.card').each(function() {
                var quantity = parseInt($(this).find('input[name="quantity"]').val());
                var price = parseFloat($(this).find('.col-md-3.col-lg-2.col-xl-2.offset-lg-1 h5').text().replace('$', ''));

                subtotal += quantity * price;
            });

            // Calculate total, including tax and shipping
            var tax = subtotal * taxRate;
            var total = subtotal + tax;

            // Update prices in the right bar
            $('.right-bar p:nth-child(1) span:nth-child(2)').text('$' + subtotal.toFixed(2));
            $('.right-bar p:nth-child(3) span:nth-child(2)').text('$' + tax.toFixed(2));
            $('.right-bar p:nth-child(5) span:nth-child(2)').text('$' + total.toFixed(2));

            // Update hidden input fields
            $('#subtotal').val(subtotal.toFixed(2));
            $('#tax').val(tax.toFixed(2));
            $('#total').val(total.toFixed(2));
        }
    });
</script>
@endsection