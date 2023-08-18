@extends('home.layouts.master')

@section('content')
<div class="container">
    <section class="login-section">
        <div class="auto-container">
            <!-- Login Form -->
            <div class="login-form text-dark">
                <h2 class="text-dark">Login</h2>
                <!--Login Form-->
                <form method="post" action="{{ url('/user/login') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="text-dark">Email address *</label>
                        <input type="text" name="email" placeholder="" required>
                    </div>
                    
                    <div class="form-group">
                        <label class="text-dark">Password *</label>
                        <input type="password" name="password" placeholder="" required>
                    </div>
                    
                    <div class="form-group">
                        <button class="theme-btn" type="submit">Login</button>
                    </div>

                    {{-- <div class="form-group">
                        <input type="checkbox" name="shipping-option" id="account-option-1">&nbsp; <label for="account-option-1">Remember me</label>
                    </div> --}}

                    <div class="row">
                        {{-- <div class="form-group pass">
                            <a href="login.html#" class="psw">Lost your password?</a>                        
                        </div> --}}
                        <div class="form-group pass ml-4">
                            <a href="/user/register" class="psw text-dark">Don't have an account?</a>
                        </div>
                    </div>
                </form>
            </div>
            <!--End Login Form -->  
        </div>
    </section>
</div>
@endsection