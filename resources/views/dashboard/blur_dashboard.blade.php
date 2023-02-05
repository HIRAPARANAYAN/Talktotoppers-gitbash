<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>tutor Dashboard</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{asset('assets/blur_dashboard/assets/img/favicon.png')}}" rel="icon" />
    <link href="{{asset('assets/blur_dashboard/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"
    />
    <link
        href="{{asset('assets/blur_dashboard/assets/vendor/bootstrap/css/bootstrap.min.css')}}"
        rel="stylesheet"
    />
    <link
        href="{{asset('assets/blur_dashboard/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}"
        rel="stylesheet"
    />
    <link href="{{asset('assets/blur_dashboard/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/blur_dashboard/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/blur_dashboard/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/blur_dashboard/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/blur_dashboard/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/blur_dashboard/css/style.css')}}" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"
    />
</head>

<body>
<div class="blursection">
    <aside id="sidebar" class="sidebar">
        <div class="d-flex align-items-center justify-content-between logo">
            <a href="index.html" class="d-flex align-items-center">
                <img src="{{asset('assets/blur_dashboard/img/tutor.png')}}" alt="" />
            </a>
        </div>
        <div class="d-flex justify-content-between flex-column sidebartabs">
            <ul class="sidebar-nav" id="sidebar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <img src="{{asset('assets/blur_dashboard/img/dashboard.svg')}}" alt="" />
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#">
                        <img src="{{asset('assets/blur_dashboard/img/Sessions.svg')}}" alt="" />
                        <span>Sessions</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#">
                        <img src="{{asset('assets/blur_dashboard/img/profile.svg')}}" alt="" />
                        <span>My Profile</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#">
                        <img src="{{asset('assets/blur_dashboard/img/calander.svg')}}" alt="" />
                        <span>Calendar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#">
                        <img src="{{asset('assets/blur_dashboard/img/bankdetail.svg')}}" alt="" />
                        <span>Bank Details</span>
                    </a>
                </li>
            </ul>
            <ul class="logout">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <img src="{{asset('assets/blur_dashboard/img/whatsapp 1.png')}}" alt="" />
                        <span>Contact Support</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <img src="{{asset('assets/blur_dashboard/img/signout.svg')}}" alt="" />
                        <span>Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <main id="main" class="main">
        <div
            class="pagetitle d-flex align-items-center justify-content-between"
        >
            <h1>Dashboard</h1>
            <div class="d-flex align-items-center">
                <div class="d-flex align-items-center searchBar">
                    <img src="{{asset('assets/blur_dashboard/img/search.png')}}" alt="searchicon" />
                    <input type="search" name="search" />
                </div>
                <div class="notification">
                    <img src="{{asset('assets/blur_dashboard/img/bell.svg')}}" alt="notification" />
                </div>
            </div>
        </div>
        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row mb-5">
                        <div class="col-xxl-3 col-md-6">
                            <div class="card info-card1 sales-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="boxwrapper"></div>
                                        <div class="ps-3">
                                            <h6>Total Revenue</h6>
                                            <span>$ 45</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <div class="card info-card2 sales-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="boxwrapper"></div>
                                        <div class="ps-3">
                                            <h6>No. of Sessions</h6>
                                            <span>450</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <div class="card info-card3 sales-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="boxwrapper"></div>
                                        <div class="ps-3">
                                            <h6>Followers</h6>
                                            <span>3095</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <div class="card info-card4 sales-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="boxwrapper"></div>
                                        <div class="ps-3">
                                            <h6>No. of Students</h6>
                                            <span>200</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 my-5">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card card3">
                                    <div class="card-body pb-0">
                                        <h5 class="card-title">Revenue Graph</h5>
                                        <div id="trafficChart" style="" class="echart">
                                            <p class="empty"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card card3">
                                    <div class="card-body pb-0">
                                        <h5 class="card-title">Followers Graph</h5>
                                        <p class="empty"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 my-5">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card3">
                                    <div class="card-body pb-0">
                                        <h5 class="card-title h-100">Upcoming Appointments</h5>
                                        <div class="w-100 h-100">
                                            <p class="empty2"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </section>
    </main>
</div>
<div class="popup">
    <div class="profileWrapper">
        <div class="d-flex justify-content-between profile">
            <p>Complete your profile</p>
            <img src="{{asset('assets/blur_dashboard/img/plus-circle.svg')}}" alt="closeicon" />
        </div>
        <a href="#">Read instructions</a>
    </div>
    <div class="avtar">
        <div class="photo">
            <img src="{{asset('assets/blur_dashboard/img/profile 1.png')}}" alt="">
        </div>
        <div class="content">
            <p>Complete your profile</p>
            <a href = "{{route('profile')}}"><button>{{__('Register')}}</button></a>
        </div>
    </div>
</div>
<a aria-label="Chat on WhatsApp" href="https://wa.me/+919176892863"> <img class="whatsapp" alt="Chat on WhatsApp" src="{{asset('assets/blur_dashboard/img/whatsapp.png')}}" />


    <script src="{{asset('assets/blur_dashboard/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{asset('assets/blur_dashboard/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/blur_dashboard/assets/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script></script>
</body>
</html>
