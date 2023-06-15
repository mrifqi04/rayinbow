@extends('home.layouts.master')

@section('style')
    <script src="https://js.stripe.com/v3/"></script>
@endsection

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url('images/background/34.jpg')">
        <div class="auto-container">
            <h1>Checkout</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">home</a></li>
                <li>Checkout</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--CheckOut Page-->
    <section class="checkout-page">
        <div class="auto-container">
            <!--Default Links-->
            <!--Checkout Details-->
            <form method="post" id="payment-form" action="{{ route('checkout') }}">
                @csrf
                <div class="checkout-form">
                    <div class="row clearfix">
                        <!--Column-->
                        <div class="column col-lg-6 col-md-12 col-sm-12">
                            @if (session()->has('msg'))
                                <div class="alert alert-success">
                                    {{ session()->get('msg') }}
                                </div>
                            @endif
                            <div class="inner-column">
                                <div class="sec-title">
                                    <h3>Detail Pengiriman</h3>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address">Alamat</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="1234 Main St">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="city">Kota</label>
                                        <input type="text" class="form-control" id="city" name="city"
                                            placeholder="City">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="province">Provinsi</label>
                                        <input type="text" class="form-control" id="province" name="province"
                                            placeholder="Province">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="postal">Kode pos</label>
                                        <input type="text" class="form-control" id="postal" name="postal"
                                            placeholder="Postal">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Telepon</label>
                                    <input type="text" class="form-control" id="phone" placeholder="Phone"
                                        name="phone">
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="sec-title">
                                    <h3>Informasi Tambahan</h3>
                                </div>

                                <!--Form Group-->
                                <div class="form-group ">
                                    <div class="field-label">Order notes (optional)</div>
                                    <textarea name="information" class="" placeholder="Notes about your order,e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Checkout Details-->

                <!--Order Box-->
                <div class="order-box">
                    <table>
                        <thead>
                            <tr>
                                <th class="product-name">Product</th>
                                <th class="product-total">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (Cart::instance('default')->content() as $item)
                                <tr class="cart-item">
                                    <td class="product-name">{{ $item->model->name }}&nbsp;
                                        <strong class="product-quantity">× {{ $item->qty }}</strong>
                                    </td>
                                    <td class="product-total">
                                        <span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">Rp.
                                            </span>{{ $item->total() }}</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="cart-subtotal">
                                <th>Subtotal</th>
                                <td><span class="amount">Rp. {{ Cart::subtotal() }}</span></td>
                            </tr>
                            <tr class="order-total">
                                <th>Total</th>
                                <td><strong class="amount">Rp. {{ Cart::total() }}</strong> </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!--End Order Box-->

                <!--Payment Box-->
                <div class="payment-box">
                    <div class="upper-box">
                        <!--Payment Options-->
                        <div class="payment-options">                            
                            <ul>
                                <li>
                                    <div class="radio-option">
                                        <input type="radio" name="payment_method" value="transfer" id="payment-1" checked>
                                        <label for="payment-1"><strong>Direct Bank Transfer</strong><span
                                                class="small-text">Lakukan Pembayaran dalam 1x24 jam ke Rekening BCA :
                                                6631161011 atas nama Rayinbow Salad</span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-option">
                                        <input type="radio" name="payment_method" value="gopay" id="payment-2">
                                        <label for="payment-2"><strong>Gopay</strong><span class="small-text">Lakukan
                                                Pembayaran dalam 1x24 jam ke Go Pay : 082111768038 atas nama Rayinbow
                                                Salad.</span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-option">
                                        <input type="radio" name="payment_method" value="spay" id="payment-3">
                                        <label for="payment-3"><strong>Shopee Pay</strong><span class="small-text">Lakukan
                                                Pembayaran dalam 1x24 jam ke Shopee Pay : 082111768038 atas nama Rayinbow
                                                Salad.</span></label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="lower-box">
                        <button type="submit" class="theme-btn"><span class="btn-title">Place Order</span></button>
                    </div>
                </div>
                <!--End Payment Box-->
            </form>
        </div>
    </section>
    <!--End CheckOut Page-->
@endsection

{{-- @section('content')

        <h2 class="mt-5"><i class="fa  fa-credit-card-alt"></i> Checkout</h2>
        <hr>

        <div class="row">

            <div class="col-md-7">

                @if (session()->has('msg'))
                    <div class="alert alert-success">
                        {{ session()->get('msg') }}
                    </div>
                @endif

                <h4>Detail Pembayaran</h4>

                <form method="post" id="payment-form" action="{{ route('checkout') }}">

                    @csrf

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="city">Kota</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="City">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="province">Provinsi</label>
                            <input type="text" class="form-control" id="province" name="province" placeholder="Province">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="postal">Kode pos</label>
                            <input type="text" class="form-control" id="postal" name="postal" placeholder="Postal">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Telepon</label>
                        <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone">
                    </div>

                    <button type="submit" class="btn btn-outline-info col-md-12">Pesan</button>
                </form>

            </div>

            <div class="col-md-5">

                <h4>Pesanan Anda</h4>

                <table class="table your-order-table">
                    <tr>
                        <th>Gambar</th>
                        <th>Detail</th>
                        <th>Qty</th>
                    </tr>

                    @foreach (Cart::instance('default')->content() as $item)
                    <tr>
                        <td><img src="{{ url('/uploads') . '/'. $item->model->image }}" alt="" style="width: 4em"></td>
                        <td>
                            <strong>{{ $item->model->name }}</strong><br>
                            {{ $item->model->description }} <br>
                            <span class="text-dark">Rp. {{ $item->total() }}</span>
                        </td>
                        <td>
                            <span class="badge badge-light">{{ $item->qty }}</span>
                        </td>
                    </tr>
                    @endforeach
                </table>

                <hr>
                <table class="table your-order-table table-bordered">
                    <tr>
                        <th colspan="2">Detail harga</th>
                    </tr>
                    <tr>
                        <td>Subtotal</td>
                        <td>Rp. {{ Cart::subtotal() }}</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>Rp. {{ Cart::tax() }}</td>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <th>Rp. {{ Cart::total() }}</th>
                    </tr>

                </table>

            </div>
        </div>

    <div class="mt-5"><hr></div>

@endsection --}}

@section('script')
    <script>
        // Create a Stripe client.
        var stripe = Stripe('pk_test_4paokl8kcBC4qZqwl6yYFty3');

        // Create an instance of Elements.
        var elements = stripe.elements();

        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

        // Create an instance of the card Element.
        var card = elements.create('card', {
            style: style,
            hidePostalCode: true
        });

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        // Handle real-time validation errors from the card Element.
        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            var options = {
                name: document.getElementById("name_on_card").value,
                address_line_1: document.getElementById("address").value,
                address_city: document.getElementById("city").value,
                address_state: document.getElementById("province").value,
                address_zip: document.getElementById("postal").value
            };

            stripe.createToken(card, options).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });

        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }
    </script>
@endsection
