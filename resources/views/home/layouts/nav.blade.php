    <!-- Main Header-->
    <header class="main-header">
        <!-- Menu Wave -->
        <div class="menu_wave"></div>

        <!-- Main box -->
        <div class="main-box">
            <div class="menu-box">
                <div class="logo"><a href="{{ url('/') }}"><img
                            src="{{ asset('vendor/bellaria') }}/images/logo2.png" width="250"></a></div>

                <!--Nav Box-->
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation menu-left clearfix">
                                <li class="dropdown {{ Request::is('/') ? 'current' : '' }}"><a href="/">Home</a>
                                </li>
                                <li class="dropdown {{ Request::is('faq') ? 'current' : '' }}"><a href="/faq">FAQ</a>
                                </li>
                                <li class="dropdown {{ Request::is('howto') ? 'current' : '' }}"><a href="/howto">How
                                        to Order</a>
                                </li>
                            </ul>

                            <ul class="navigation menu-right clearfix">
                                <li class="dropdown {{ Request::is('suggestion') ? 'current' : '' }}"><a
                                        href="/suggestion">Kirik & Saran</a>
                                </li>
                                <li class="dropdown"><a href="#">Shop</a>
                                    <ul>
                                        {{-- <li><a href="/">Shop</a></li> --}}
                                        <li><a href="/cart">Cart</a></li>
                                        <li><a href="/checkout">Checkout</a></li>
                                        <li><a href="/user/profile">My Account</a></li>
                                    </ul>
                                </li>
                                {{-- <li><a href="#">Contacts</a></li> --}}
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <div class="outer-box clearfix">
                        <!-- Shoppping Car -->
                        <div class="cart-btn">
                            @if (Cart::instance('default')->count() >= 0)
                                <a href="{{ url('/') }}"><i class="icon flaticon-commerce"></i> <span
                                        class="count">{{ Cart::instance('default')->count() }}</span></a>
                            @endif
                            <div class="shopping-cart">
                                <ul class="shopping-cart-items">
                                    @foreach (Cart::instance('default')->content() as $item)
                                        <li class="cart-item">
                                            <img src="{{ url('/uploads') . '/' . $item->model->image }}" alt="#"
                                                class="thumb" />
                                            <span class="item-name">{{ $item->model->name }}</span>
                                            @php
                                                $total = 'Rp ' . $item->total();
                                            @endphp
                                            <span class="item-quantity">{{ $item->qty }} x <span
                                                    class="item-amount">{{ $total }}</span></span>
                                            <a href="shop-single.html" class="product-detail"></a>

                                            <form action="{{ route('cart.destroy', $item->rowId) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="remove-item"><span
                                                        class="fa fa-times"></span></button>
                                            </form>
                                        </li>
                                    @endforeach
                                </ul>

                                <div class="cart-footer">
                                    @php
                                        $subtotal = Cart::subtotal();
                                        $tax = Cart::tax();
                                        $total = Cart::total();
                                    @endphp
                                    <div class="shopping-cart-total"><strong>Subtotal:</strong>Rp. {{ $subtotal }}
                                    </div>
                                    <a href="{{ url('/cart') }}" class="theme-btn">View Cart</a>
                                    <a href="{{ url('/checkout') }}" class="theme-btn">Checkout</a>
                                </div>
                            </div>
                            <!--end shopping-cart -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo">
                    <a href="{{ url('/') }}#" title="Sticky Logo"><img
                            src="{{ asset('vendor/bellaria') }}/images/logo-small.png" alt="Sticky Logo"></a>
                </div>

                <!--Nav Outer-->
                <div class="nav-outer">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Header -->
        <div class="mobile-header">
            <div class="logo"><a href="{{ url('/') }}"><img
                        src="{{ asset('vendor/bellaria') }}/images/logo-small.png" alt="" title=""></a>
            </div>

            <!--Nav Box-->
            <div class="nav-outer clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
            </div>
        </div>

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <nav class="menu-box">
                <div class="nav-logo"><a href="{{ url('/') }}"><img
                            src="{{ asset('vendor/bellaria') }}/images/logo-small.png" alt=""
                            title=""></a></div>
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </nav>
        </div><!-- End Mobile Menu -->
        <!-- End Header Search -->

    </header>
    <!--End Main Header -->
