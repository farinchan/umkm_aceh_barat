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

                        <form action="{{ route('register.process') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form_container">
                                <h3 class="new_client mb-4">Register</h3> <small class="float-right pt-2">* Isian
                                    wajib</small>
                                <div style="position: center; text-align: center;" class="mb-3">
                                    <img src="{{ asset('front/img/image_placeholder.jpg') }}"
                                        style="width: 150px; height: 150px; cursor: pointer;" class="img-thumbnail"
                                        id="image_placeholder">
                                    <input type="file" name="foto" id="image" style="display: none;"
                                        accept="image/*">
                                    <p style="margin: 0; padding: 0">
                                        <small style="margin: 0; padding: 0">*Klik gambar untuk Menambah foto, Ratio 1:1,
                                            Max 2MB
                                        </small>
                                    </p>
                                </div>
                                <div class="form-group ">
                                    <input type="text" class="form-control py-4 mb-3 " name="name"
                                        placeholder="Nama Lengkap*">
                                </div>
                                <div class="form-group">
                                    <label class="my-2" for="">Jenis Kelamin*</label>
                                    <br>
                                    <label class="container_radio" style="display: inline-block; margin-right: 15px;">Laki -
                                        Laki
                                        <input type="radio" name="jenis_kelamin" checked value="L">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio" style="display: inline-block;">Perempuan
                                        <input type="radio" name="jenis_kelamin" value="P">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control py-4 mb-3" name="email" id="email_2"
                                        placeholder="Email*">
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control py-4 mb-3" name="no_telp"
                                        placeholder="Nomor Telepon*">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control py-4 mb-3" name="password"
                                        id="password_in_2" value="" placeholder="Password*">
                                </div>
                                <hr>
                                <div class="form-group mb-3">
                                    <label class="container_check">Saya menerima <a href="#0">Syarat dan ketentuan</a>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="text-center"><input type="submit" value="Register" class="btn_1 full-width">
                                </div>
                                <p style="position: center; text-align: center; margin-top: 10px;">
                                    Sudah punya akun? <a href="{{ route('login') }}">Login Disini</a>
                                </p>
                            </div>
                        </form>
                        <!-- /form_container -->
                    </div>
                    <!-- /box_account -->
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
    <script>
        $(document).ready(function() {
            $('#image_placeholder').click(function() {
                $('#image').click();
            });

            $('#image').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#image_placeholder').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>
@endsection
