<div class="sidebar-overlay" data-reff=""></div>
    <script src="{{ asset('admin_assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('admin_assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('admin_assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('admin_assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{ asset('admin_assets/js/Chart.bundle.js')}}"></script>
    <script src="{{ asset('admin_assets/js/chart.js')}}"></script>
    <script src="{{ asset('admin_assets/js/app.js')}}"></script>
     <!-- Include Flatpickr JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!-- Nepali Date Picker -->
    <script src="https://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/js/nepali.datepicker.v4.0.1.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    @stack('scripts')
    <script>
        @if (Session::has('message'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('message') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.warning("{{ session('warning') }}");
        @endif

        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });

        $(document).ready(function() {

            $('#mark-all-read').on('click', function(e) {
                e.preventDefault();

                $.ajax({
                    url: '/Healwave/doctor/mark-all-as-read',
                    method: 'GET',
                    success: function(response) {
                        console.log('Doctor' + response.success);
                        $('.notification-list').empty();
                        notificationCount();
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });

            $('.notification-checkbox').change(function() {
                var notificationId = $(this).data('notification-id');
                console.log('Doctor' + notificationId);
                var listItem = $(this).closest('.notification-message');

                $.ajax({
                    url: '/Healwave/doctor/notifications/mark-as-read/' + notificationId,
                    method: 'GET',
                    success: function(response) {
                        console.log(response.message);
                        listItem.remove();
                        notificationCount();
                    },
                    error: function(xhr, status, error) {
                        console.error('There was a problem with the request:', error);
                    }
                });
            });

            function notificationCount() {
                $.ajax({
                    url: '/Healwave/doctor/notifications/unreadNotificationsCount',
                    method: 'GET',
                    success: function(response) {
                        console.log(response);
                        $('#unreadNotificationsCount').text(response.unreadNotificationsCount);
                    },
                    error: function(error) {
                        console.log(error);
                    }
                })
            }
            notificationCount();
        });
    </script>
</body>
</html>