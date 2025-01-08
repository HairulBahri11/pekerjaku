<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('temp-website/dist/main.css') }}" />
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
            showConfirmButton: true,
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
                    <h5 class="text-center">Sign in</h5>
                    <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form__div">
                            <input type="email" name="email" class="form__input" placeholder=" " required>
                            <label for="" class="form__label">Email</label>
                        </div>
                        <div class="form__div mb-0">
                            <input type="password" name="password" class="form__input" id="inputPassword" placeholder=" " required>
                            <label for="" class="form__label">Password</label>
                        </div>
                        <div class="password-info d-flex align-items-center justify-content-between flex-wrap">
                            <div class="password-info-left">
                                <input type="checkbox" id="showpass" minlength="8" onchange="toggle(this.id, 'inputPassword')" class="mb-0">
                                <label for="showpass" class="mb-0">Show Password</label>
                            </div>
                        </div>
                        <button type="submit" class="btn bg-primary">Sign in</button>
                    </form>
                    <p class="mt-4 text-center text-gray-600">Belum Punya Akun? <a href="{{ url('register') }}" class="text-primary">Register</a></p>
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