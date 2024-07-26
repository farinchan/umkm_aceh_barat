@extends('front.app')

@section('styles')
    <!-- SPECIFIC CSS -->
    <link href="{{ asset('front/css/account.css') }} " rel="stylesheet">
@endsection

@section('content')
    <main class="bg_gray">

        <div class="container margin_30">
            {{-- <div class="page_header">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Category</a></li>
                    <li>Page active</li>
                </ul>
            </div>
            <h1>Sign In or Create an Account</h1>
        </div> --}}
            <!-- /page_header -->
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="box_account">
                        <div class="form_container">
                            <h3 class="client mb-4">Login</h3>
                            <form action="{{ route('login.process') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control py-4 mb-3" name="email" id="email"
                                        placeholder="Email*">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control py-4 mb-3" name="password" id="password_in"
                                        value="" placeholder="Password*">
                                </div>
                                <div class="clearfix add_bottom_15 my-4">
                                    <div class="checkboxes float-start">
                                        <label class="container_check">Ingat saya
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="float-end"><a id="forgot" href="javascript:void(0);">Lupa Password?</a>
                                    </div>
                                </div>
                                <div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width">
                                </div>
                                <p style="position: center; text-align: center; margin-top: 10px;">
                                    Belum punya akun? <a href="{{ route('register') }}">Daftar disini</a>
                                </p>
                            </form>
                            <form action="{{ route('forgot-password.process') }}" method="POST">
                                @csrf
                                <div id="forgot_pw">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email_forgot"
                                            placeholder="Masukkan email Anda">
                                    </div>
                                    <p>
                                        Kami akan mengirimkan link untuk reset password anda melalui email.
                                    </p>
                                    <div class="text-center"><input type="submit" value="Reset Password" class="btn_1">
                                    </div>
                                    
                                </div>
                            </form>

                        </div>
                        <!-- /form_container -->
                    </div>
                    <!-- /box_account -->

                    <!-- /row -->
                </div>
            </div>
            <!-- /row -->
        </div>
    </main>
@endsection

@section('scripts')
    <script>
        // Client type Panel
        $('input[name="client_type"]').on("click", function() {
            var inputValue = $(this).attr("value");
            var targetBox = $("." + inputValue);
            $(".box").not(targetBox).hide();
            $(targetBox).show();
        });
    </script>
@endsection
