    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('adminpage/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('adminpage/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('adminpage/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('adminpage/vendor/toastr/toastr.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('adminpage/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('sbadmin/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('adminpage/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminpage/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminpage/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        // Call the dataTables jQuery plugin
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>

    @yield('scriptjs')
    @section('js')
    @show