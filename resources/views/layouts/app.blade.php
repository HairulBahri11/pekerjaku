<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('assets/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{url('assets/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('assets/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{url('assets/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{url('assets/plugins/summernote/summernote-bs4.min.css')}}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Poppins&display=swap" rel="stylesheet">

    <!-- datatables -->
    <link rel="stylesheet" href="{{url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

    <!-- sweetalert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.1/chart.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="hold-transition">
    @yield('content')
    <script>
        var state = false;

        function toggle(id) {
            if (state) {
                document.getElementById(id).setAttribute("type", "password");
                document.getElementById("lock").setAttribute("class", "fas fa-lock");
                state = false;
            } else {
                document.getElementById(id).setAttribute("type", "text");
                document.getElementById("lock").setAttribute("class", "fas fa-unlock");
                state = true;
            }
        }

        function toggle1(id) {
            if (state) {
                document.getElementById(id).setAttribute("type", "password");
                document.getElementById("lock1").setAttribute("class", "fas fa-lock");
                state = false;
            } else {
                document.getElementById(id).setAttribute("type", "text");
                document.getElementById("lock1").setAttribute("class", "fas fa-unlock");
                state = true;
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
    <!-- jQuery -->
    <script src="{{url('assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{url('assets/dist/js/adminlte.min.js')}}"></script>
</body>

</html>