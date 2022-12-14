<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Skydash Admin</title>
        
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{asset('assets/vendors/feather/feather.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendors/ti-icons/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
        <!-- endinject -->

        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="{{asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendors/ti-icons/css/themify-icons.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('backend/js/select.dataTables.min.css')}}">
        <!-- End plugin css for this page -->

        <!-- inject:css -->
        <link rel="stylesheet" href="{{asset('backend/css/vertical-layout-light/style.css')}}">
        <!-- endinject -->

        <link rel="shortcut icon" href="{{asset('backend/images/favicon.png')}}" />

        <!-- Vendors Style-->
        <link rel="stylesheet" href="{{asset('backend/css/vendors_css.css')}}">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <!-- Style-->  
        <!-- <link rel="stylesheet" href="{{asset('backend/css/style.css')}}"> -->
        <!-- <link rel="stylesheet" href="{{asset('backend/css/skin_color.css')}}"> -->

    </head>

    <body>
        <div class="container-scroller">
            <!-- partial:partials/_header -->
            @include('admin.body.header')
            <!-- /partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_sidebar control -->
                @include('admin.body.sidebar_control')
                <!-- /partial -->
                <!-- partial:partials/_sidebar -->
                @include('admin.body.sidebar')
                <!-- /partial -->
                <div class="main-panel">
                    @yield('admin')
                    <!-- partial:partials/_footer -->
                    @include('admin.body.footer')
                    <!-- /partial -->
                </div> <!-- main-panel ends -->
            </div> <!-- page-body-wrapper ends -->
        </div> <!-- container-scroller -->

        <!-- plugins:js -->
        <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
        <!-- endinject -->

        <!-- Plugin js for this page -->
        <script src="{{asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
        <script src="{{asset('assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
        <script src="{{asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
        <script src="{{asset('backend/js/dataTables.select.min.js')}}"></script>
        <!-- End plugin js for this page -->

        <!-- inject:js -->
        <script src="{{asset('backend/js/off-canvas.js')}}"></script>
        <script src="{{asset('backend/js/hoverable-collapse.js')}}"></script>
        <script src="{{asset('backend/js/template.js')}}"></script>
        <script src="{{asset('backend/js/settings.js')}}"></script>
        <script src="{{asset('backend/js/todolist.js')}}"></script>
        <!-- endinject -->

        <!-- Custom js for this page-->
        <script src="{{asset('backend/js/dashboard.js')}}"></script>
        <script src="{{asset('backend/js/Chart.roundedBarCharts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <!-- End custom js for this page-->

        <!-- laravel toastr untuk notifikasi -->
        <script>
            @if(Session::has('message'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.success("{{ session('message') }}");
            @endif

            @if(Session::has('error'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.error("{{ session('error') }}");
            @endif

            @if(Session::has('info'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.info("{{ session('info') }}");
            @endif

            @if(Session::has('warning'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.warning("{{ session('warning') }}");
            @endif
        </script>

        <!-- js sweat alert -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- sweat alert -->
        <script type="text/javascript">
            $(function(){
                $(document).on('click', '#delete', function(e){
                    e.preventDefault();
                    var link=$(this).attr("href");

                    Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href=link
                        Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                        )
                    }
                    })
                });
            });
        </script>

        <!-- Vendor JS -->
        <!-- <script src="{{asset('backend/js/vendors.min.js')}}"></script>
        <script src="{{asset('../assets/icons/feather-icons/feather.min.js')}}"></script>
        <script src="{{asset('backend/js/pages/timeline.js')}}"></script> -->
        
        <!-- Sunny Admin App -->
        <!-- <script src="{{asset('backend/js/template.js')}}"></script> -->
	
    </body>
</html>