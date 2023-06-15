@extends('home.layouts.master')

@section('content')
<div class="container" style="margin-top: 10%">
    <h1 class="heading my-5 text-center">How to Order</h1>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 margin-bottom-50">
            <div class="default-tabs tabs-box">
                <!--Tabs Box-->
                <ul class="tab-buttons clearfix">
                    <li class="tab-btn active-btn" data-tab="#tab1">How to Order</li>                    
                </ul>

                <div class="tabs-content">
                    <!--Tab-->
                    <div class="tab active-tab" id="tab1">
                        <p>Berikut Cara Melakukan Order</p>
                        <ul class="list-style-one">
                            <p>
                                1) Buka website Rayinbow Salad and Cookies (http://fathiyacake.code-breeder.com)<br>
 
                                2) *Login* atau membuat *akun baru*
                                    Jika sudah memiliki akun, cukup menuliskan email dan password lalu klik *LOGIN* .
                                    Jika belum memiliki akun, maka kamu harus membuat akun dengan mengklik *Don't have an account?* <br>
                                
                                3) Klik menu Home untuk melihat produk-produk yang tersedia.<br>

                                4) Pilih produk yang akan dipesan dan klik Tambahkan ke Keranjang.<br>
                                
                                5) Jika pesanan sudah sesuai klik *Check Out*.<br>
                                
                                6) Isilah informasi mengenai detail pengiriman pada form yang tersedia dan pilih metode pembayaran yang diinginkan lalu klik Place Order.<br>
                                
                                7) Cek secara berkala status pesanan kamu.<br>
                                
                                8) Jika status sudah terkonfirmasi, segera lakukan pembayaran dan unggah bukti pembayaran pada kolom yang tersedia serta pilih jenis pengiriman yang diinginkan.<br>
                                
                                9) Invoice akan tersedia jika status pesanan berubah menjadi Process.<br>
                                
                                10) Jika status pesanan berubah menjadi Finished, berarti pesanan sudah siap di kirim.<br>

                                Note:
                                Jika memesan lebih dari satu produk dan salah satu produk harus pre order, maka semua produk akan dikirim bersamaan dengan produk pre order.<br>

                            </p>
                        </ul>
                    </div>                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection