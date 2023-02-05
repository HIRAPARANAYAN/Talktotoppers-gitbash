<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>admin Dashboard</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets/admin/assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/admin/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    />
    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="{{asset('assets/admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">
    @yield('css')
    <!-- Template Main CSS File -->
{{--    <link href="{{asset('assets/admin/assets/css/style.css')}}" rel="stylesheet">--}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>

<body>
<!-- ======= Sidebar ======= -->
@include('partials.sidenav')

<!-- End Sidebar-->

<main id="main" class="main">
    <div class="pagetitle d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center justify-content-between gap-3">
            <h1 class="DashboardTitle">@yield('title')</h1>
            <img class="snallscreenlogo" src="{{asset('assets/admin/img/tutor.png')}}" alt="">
        </div>
        <div class="d-flex align-items-center ">
            <div class="d-flex align-items-center searchBar">
                <img src="{{asset('assets/admin/img/search.png')}}" alt="searchicon">
                <input type="search" name="search">
            </div>
            <div class="notification" >
                <img src="{{asset('assets/admin/img/bell.svg')}}" class="notificationIcon" alt="notification">
                <img src="{{asset('assets/admin/img/calandersm.svg')}}" class="calandersm" alt="calander">
                <i class="bi bi-list toggle-sidebar-btn fs-3 text-dark"></i>
            </div>
        </div>
    </div><!-- End Page Title -->
    @yield('content')


</main><!-- End #main -->
<div class="modal fade" id="commonModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

        </div>
    </div>
</div>
<!-- Vendor JS Files -->
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
    integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
></script>
<script src="{{asset('assets/admin/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="{{asset('assets/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/admin/assets/js/main.js')}}"></script>
<script src="{{ asset('js/custom.js')}}"></script>
<script src="{{ asset('custom/libs/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
@if(Session::has('success'))
    <script>
        toastrs('{{__('Success')}}', '{!! session('success') !!}', 'success');
    </script>
    {{ Session::forget('success') }}
@endif
@if(Session::has('error'))
    <script>
        toastrs('{{__('Error')}}', '{!! session('error') !!}', 'error');
    </script>
    {{ Session::forget('error') }}
@endif
<!-- <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script> -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("#flatpickr-input", {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        inline:true,
    });
</script>
<!-- Revenue Graph -->
<script>
    var xValues = ["J", "F", "M", "A","M","J", "J", "A", "S", "O", "N", "D"];
    var yValues = [45, 49, 44, 24, 15,44,45, 49, 44, 24, 15,15,44];
    var barColors = ["purple"];

    new Chart("myChart", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: "#D289FF",
                data: yValues
            }]
        },
        options: {
            legend: {display: false},
            title: {
                display: true,
                text: ""
            }
        }
    });
</script>
<!-- Followers Graph -->
<script>
    var xValues = ["J", "F", "M", "A","M","J", "J", "A", "S", "O", "N", "D"];
    var yValues = [45, 49, 44, 24, 15,44,45, 49, 44, 24, 15,15,44];
    var barColors = ["purple"];

    new Chart("myChart2", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: "#86E0A3",
                data: yValues
            }]
        },
        options: {
            legend: {display: false},
            title: {
                display: true,
                text: ""
            }
        }
    });
</script>0
<!-- Total Tutors Graph -->
<script>
    var xValues = ["J", "F", "M", "A","M","J", "J", "A", "S", "O", "N", "D"];
    var yValues = [45, 49, 44, 24, 15,44,45, 49, 44, 24, 15,15,44];
    var barColors = ["#90E4FF"];

    new Chart("myChart3", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: "#90E4FF",
                data: yValues
            }]
        },
        options: {
            legend: {display: false},
            title: {
                display: true,
                text: ""
            }
        }
    });
</script>
<!-- Total Students Graph -->
<script>
    var xValues = ["J", "F", "M", "A","M","J", "J", "A", "S", "O", "N", "D"];
    var yValues = [45, 49, 44, 24, 15,44,45, 49, 44, 24, 15,15,44];
    var barColors = ["#FFC988"];

    new Chart("myChart4", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: "#FFC988",
                data: yValues
            }]
        },
        options: {
            legend: {display: false},
            title: {
                display: true,
                text: ""
            }
        }
    });
</script>

@stack('script')


</body>

</html>
