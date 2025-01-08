<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Icon Website -->
    <link rel="shortcut icon" href="{{ url('assets/logo/logo.png') }}">

    <!-- Title -->
    <title>{{ $title }}</title>

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


    <!-- Bootstrap Datepicker CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Poppins&display=swap" rel="stylesheet">

    <!-- datatables -->
    <link rel="stylesheet" href="{{url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

    <!-- sweetalert -->
    <link rel="stylesheet" href="{{ url('assets/plugins/summernote/summernote-bs4.min.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.1/chart.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Custom CSS for Datepicker Popup -->
    <style>
        label {
            margin-left: 20px;
        }

        #datepicker {
            width: 180px;
            margin: 0 20px 20px 20px;
        }

        #datepicker>span:hover {
            cursor: pointer;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- modal -->
        <div class="modal fade" id="detail_modal" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
            <div class="modal-dialog {{($title == 'Data Kuisoner' ) ? 'modal-lg' : ''}}">
                <div class="modal-content">
                    <div id="page">

                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="detail_produk" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div id="page_produk">

                    </div>
                </div>
            </div>
        </div>

        @yield('container')

        <form action="" id="delete-form" method="POST">
            @method('delete')
            @csrf
        </form>

        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{url('assets/plugins/jquery/jquery.min.js')}}">
    </script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{url('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- bs-custom-file-input -->
    <script src="{{url('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{url('assets/plugins/chart.js/Chart.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{url('assets/plugins/sparklines/sparkline.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{url('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{url('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{url('assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{url('assets/plugins/moment/moment.min.js')}}"></script>
    <script src="{{url('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{url('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{url('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{url('assets/dist/js/adminlte.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{url('assets/dist/js/pages/dashboard.js')}}"></script>
    <!-- Summernote -->
    <script src="{{ url('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ url('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{url('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{url('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{url('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{url('assets/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{url('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{url('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{url('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{url('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{url('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

    <script>
        function notif(icon, title) {
            Swal.fire({
                icon: icon,
                title: title,
                showConfirmButton: false,
                timer: 1500
            })
        }



        function notificationforDelete(event, el) {
            event.preventDefault();
            swal.fire({
                title: "Apakah Anda Yakin Menghapus Data Ini?",
                icon: "warning",
                closeOnClickOutside: false,
                showCancelButton: true,
                confirmButtonText: 'Iya',
                confirmButtonColor: '#6777ef',
                cancelButtonText: 'Batal',
                cancelButtonColor: '#d33',
            }).then((result) => {
                if (result.value) {
                    $("#delete-form").attr('action', $(el).attr('href'));
                    $("#delete-form").submit();
                }
            });
        }


        $(function() {
            // Summernote
            $('.summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })

        function prosesData(event, el, pesan, status) {
            event.preventDefault();
            swal.fire({
                title: pesan,
                icon: "warning",
                closeOnClickOutside: false,
                showCancelButton: true,
                confirmButtonText: 'Iya',
                confirmButtonColor: '#6777ef',
                cancelButtonText: 'Batal',
                cancelButtonColor: '#d33',
            }).then((result) => {
                if (result.value) {
                    $("#proses-form").attr('action', $(el).attr('href'));
                    $('#status').val(status);
                    $("#proses-form").submit();
                }
            });
        }

        $(document).ready(function() {
            $('#myTable').DataTable({
                "aoColumnDefs": [{
                    'bSortable': false,
                    'aTargets': [0]
                }]
            });
        });


        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "aoColumnDefs": [{
                    'bSortable': false,
                    'aTargets': [0]
                }]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "aoColumnDefs": [{
                    'bSortable': false,
                    'aTargets': [0]
                }]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example3').DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "aoColumnDefs": [{
                    'bSortable': false,
                    'aTargets': [0]
                }]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });

        function show(url) {
            $.get(url, function(data) {
                $("#page").html(data);
                $('#detail_modal').modal('show');
            });
        }



        function show_lg(url) {
            $.get(url, function(data) {
                $("#page_produk").html(data);
                $('#detail_produk').modal('show');
            });
        }

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
    </script>
    @include('sweetalert::alert')

</body>

</html>
