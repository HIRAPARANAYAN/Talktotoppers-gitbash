@extends('layouts.main')
@section('css')
    <link href="{{asset('assets/admin/assets/css/style.css')}}" rel="stylesheet">
@endsection
@section('title')
    Dashboard
@endsection
@section('content')
<section class="section dashboard">

    <div class="row">
        <div class="col-lg-12">
            <div class="row" >
                <!-- Sales Card -->
                <div class="col-xxl-3 col-md-6">
                    <div class="card1 info-card1 sales-card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="boxwrapper">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="{{asset('assets/admin/img/Total Revenue.svg')}}" alt="TotalRevenue">
                                    </div>
                                </div>
                                <div class="ps-3">
                                    <h6>Total Revenue</h6>
                                    <span>$ 45</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Sales Card -->
                <!-- Sales Card -->
                <div class="col-xxl-3 col-md-6">
                    <div class="card1 info-card2 sales-card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="boxwrapper">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="{{asset('assets/admin/img/No. of Sessions.svg')}}" alt="Sessions">
                                    </div>
                                </div>
                                <div class="ps-3">
                                    <h6>No. of Sessions</h6>
                                    <span>450</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Sales Card -->
                <!-- Revenue Card -->
                <div class="col-xxl-3 col-md-6">
                    <div class="card1 info-card3 sales-card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="boxwrapper">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="{{asset('assets/admin/img/Followers.svg')}}" alt="TotalRevenue">
                                    </div>
                                </div>
                                <div class="ps-3">
                                    <h6>Total Tutors</h6>
                                    <span>3095</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Revenue Card -->
                <!-- Customers Card -->
                <div class="col-xxl-3 col-md-6 ">
                    <div class="card1 info-card4 sales-card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="boxwrapper">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="{{asset('assets/admin/img/No. of Students.svg')}}" alt="TotalRevenue">
                                    </div>
                                </div>
                                <div class="ps-3">
                                    <h6> Total Students</h6>
                                    <span>200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Customers Card -->
            </div>
            <div class="col-lg-12 ">
                <div class="row " >
                    <div class="col-lg-6 mb-5">
                        <div class="card">
                            <div class="card-body pb-0">
                                <h5 class="card-title">Revenue Graph</h5>
                                <div id="trafficChart" style="" class="echart">
                                    <canvas id="myChart" style="width:100%;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-5">
                        <div class="card">
                            <div class="card-body pb-0">
                                <h5 class="card-title">Followers Graph</h5>
                                <div id="trafficChart" style="  " class="echart">
                                    <canvas id="myChart2" style="width:100%;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 ">
                <div class="row " >
                    <div class="col-lg-6 mb-5">
                        <div class="card">
                            <div class="card-body pb-0">
                                <h5 class="card-title">Total Tutors</h5>
                                <div id="trafficChart" style="" class="echart">
                                    <canvas id="myChart3" style="width:100%;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-5">
                        <div class="card">
                            <div class="card-body pb-0">
                                <h5 class="card-title">Total Students</h5>
                                <div id="trafficChart" style="  " class="echart">
                                    <canvas id="myChart4" style="width:100%;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
