<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('temp-website/dist/main.css') }}" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        body {
            background-color: #efefef;
        }
    </style>
</head>


<body>
    @if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: '{{session("error")}}',
            showConfirmButton: false,
            timer: 1500
        })
        setTimeout(function() {
            $('.swal2-popup').find('.nice-select').hide();
        }, 100);
    </script>
    @endif

    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '{{session("success")}}',
            showConfirmButton: false,
            timer: 1500
        })
        setTimeout(function() {
            $('.swal2-popup').find('.nice-select').hide();
        }, 100);
    </script>
    @endif
    <main class="account-sign">
        <!-- Account-Login -->
        <section style="position: relative; bottom: 0px;">
            <div class="container" style="max-width: 700px;">
                <div class="account-sign-in">
                    <h5 class="text-center">Sign up</h5>
                    <form action="{{ route('register_proses') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form__div">
                            <input type="text" class="form__input" name="name" placeholder=" " required>
                            <label for="" class="form__label">Full Name</label>
                        </div>
                        <div class="form__div">
                            <input type="number" name="no_hp" class="form__input" placeholder=" " required>
                            <label for="" class="form__label">No HP</label>
                        </div>
                        <div class="form__div">
                            <input type="email" class="form__input" placeholder=" " name="email" required>
                            <label for="" class="form__label">Email</label>
                        </div>
                        <div class="form__div">
                            <input type="text" class="form__input" name="username" placeholder=" " required>
                            <label for="" class="form__label">Username</label>
                        </div>

                        <div class="role form__div">
                            <select name="role" id="role" class="form__select" required>
                                <option value="pekerja" class="form__select" selected>Pekerja</option>
                                <option value="majikan" class="form__select">Pencari Kerja</option>
                            </select>
                        </div>


                        <div class="form-group mb-4" id="div_bukti_pembayaran">
                            <label for="bukti_pembayaran">------------- Upload Bukti Pembayaran (Rp 50.000) --------------</label>
                            <?php
                            $bank =  App\Models\PaymentMethod::orderBy('created_at', 'desc')->get();
                            ?>
                            <div class="rekening form__div">
                                <input type="hidden" name="biaya_pendaftaran" value="50000">
                                <select name="rekening" id="rekening" class="form__select" required>
                                    @foreach($bank as $bank)
                                    <option value="{{$bank->id}}" class="form__select" selected>{{$bank->bank}} - {{$bank->no_rek}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" id="bukti_pembayaran" name="bukti_pembayaran" style="height: 3.2rem; padding-top: 0.8rem;" class="form-control" placeholder="Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="fas fa-money-bill-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form__div ">
                            <input type="password" name="password" class="form__input" minlength="8" id="inputPassword" placeholder=" " required>
                            <label for="" class="form__label">Password</label>
                        </div>
                        <div class="password-info d-flex align-items-center justify-content-between flex-wrap">
                            <div class="password-info-left">
                                <input type="checkbox" id="showpass" onchange="toggle(this.id, 'inputPassword')" class="mb-0">
                                <label for="showpass" class="mb-0">Show Password</label>
                            </div>
                        </div>
                        <div class="form__div mb-0">
                            <input type="password" class="form__input" minlength="8" id="RetypePassword" name="password_confirmation" placeholder=" ">
                            <label for="" class="form__label">Confirm Password</label>
                        </div>
                        <div class="password-info d-flex align-items-center justify-content-between flex-wrap">
                            <div class="password-info-left">
                                <input type="checkbox" id="showpass1" onchange="toggle(this.id, 'RetypePassword')" class="mb-0">
                                <label for="showpass" class="mb-0">Show Confirm Password</label>
                            </div>
                        </div>

                        <button type="submit" class="btn bg-primary">Sign up</button>
                    </form>
                    <p class="mt-4 text-center text-gray-600">Sudah punya akun? klik <a href="{{ url('login') }}" class="fw-bold text-primary">Login</a></p>
                </div>
            </div>

        </section>
    </main>
    <script src="{{ asset('temp-website/src/js/jquery.min.js') }}"></script>
    <script src="{{ asset('temp-website/src/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('temp-website/src/scss/vendors/plugin/js/slick.min.js') }}"></script>
    <script src="{{ asset('temp-website/src/scss/vendors/plugin/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('temp-website/dist/main.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#div_bukti_pembayaran').hide();
            $('#role').on('change', function() {
                if ($(this).val() == 'pekerja') {
                    $('#bukti_pembayaran').removeAttr('required'); // Menghapus required
                    $('#div_bukti_pembayaran').hide();
                } else {
                    $('#bukti_pembayaran').attr('required', true);
                    $('#div_bukti_pembayaran').show();
                }
            })
        });

        function openNav() {
            document.getElementById("mySidenav").style.width = "350px";
            $('#overlayy').addClass("active");
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            $('#overlayy').removeClass("active");
        }


        function toggle(id, id_target) {
            if ($('#' + id).is(':checked')) {
                $('#' + id_target).attr("type", "text");
            } else {
                $('#' + id_target).attr("type", "password");
            }
        }

        function notif(icon, title) {
            Swal.fire({
                icon: icon,
                title: title,
                showConfirmButton: false,
                timer: 1500
            })
        }
    </script>
</body>
