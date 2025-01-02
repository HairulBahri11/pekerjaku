<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Olog - Account</title>
    <link rel="stylesheet" href="{{ asset('temp-website/dist/main.css') }}" />
</head>

<body>
    <main>
        <!-- Account-Login -->
        <section class="account-sign">
            <div class="container" style="max-width: 700px;">
                <div class="account-sign-up">
                    <h5 class="text-center">Sign up</h5>
                    <form action="#">
                        <div class="form__div">
                            <input type="text" class="form__input" placeholder=" ">
                            <label for="" class="form__label">Full Name</label>
                        </div>
                        <div class="form__div">
                            <input type="email" class="form__input" placeholder=" ">
                            <label for="" class="form__label">Email</label>
                        </div>
                        <div class="form__div">
                            <input type="password" class="form__input" placeholder=" ">
                            <label for="" class="form__label">Password</label>
                        </div>
                        <div class="form__div mb-4">
                            <input type="password" class="form__input" placeholder=" ">
                            <label for="" class="form__label">Repeat Password</label>
                        </div>
                        {{-- <div class="password-info-show mb-0">
                            <input type="checkbox" id="showpassagain" class="mb-0">
                            <label for="showpassagain" class="mb-0">Show Password</label>
                        </div> --}}
                        <div class="role form__div mb-0">
                            <select name="role" id="role" class="form-control">
                                <option value="" style="color: #cdcdcd">---Daftar Sebagai---</option>
                                <option value="pekerja" class="form__select">Pekerja</option>
                                <option value="majikan" class="form__select">Pencari Kerja</option>
                            </select>
                        </div>
                        <div class="bukti-pembayaran mb-3" id="bukti-pembayaran">
                            <label for="bukti-pembayaran" class="form-label text-secondary">Upload Bukti
                                Pembayaran</label>
                            <input type="file" name="bukti-pembayaran" id="bukti-pembayaran" class="form-control">
                        </div>

                        <a href="verify.html" class="btn bg-primary">Sign Up</a>
                    </form>
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
        function openNav() {

            document.getElementById("mySidenav").style.width = "350px";
            $('#overlayy').addClass("active");
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            $('#overlayy').removeClass("active");
        }
    </script>
</body>
