@extends('layouts.main')
@section('css')
    <link href="{{asset('assets/admin/assets/css/style.css')}}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.0/index.global.min.js'></script>
    <script>


        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                // themeSystem: 'standard',
                initialView: 'dayGridMonth',
                height: 500,
                width:300,
                themeSystem: 'bootstrap',
                selectable: true,
                selectMirror: true,
                editable: true,
                dayMaxEvents: true,
                handleWindowResize: true,
                events: <?php echo json_encode($arrayJson) ?>,
                dateClick: function(info) {
                    // console.log('clicked on ' + info.dateStr);

                    var date = info.dateStr;
                    var url = "{{route('avaiblity.add',':date')}}";
                    url = url.replace(':date',date);
                    $.get(url, function(data, status){
                        //$('#commonModal .modal-title').html('Mark Avaibility');
                        $('#commonModal .modal-content').html(data);
                        $('#commonModal').modal('show');
                       // alert("Data: " + data + "\nStatus: " + status);
                    });
                },
                eventClick: function (e) {
                    e.jsEvent.preventDefault();

                    var url = e.el.href;
                    console.log(url);
                    if (typeof url != 'undefined') {
                        $.get(url, function(data, status){
                            //$('#commonModal .modal-title').html('Mark Avaibility');
                            $('#commonModal .modal-content').html(data);
                            $('#commonModal').modal('show');
                            // alert("Data: " + data + "\nStatus: " + status);
                        });
                    }
                }

            });
            calendar.render();
        });


    </script>
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
                                            <img src="{{asset('assets/admin/img//No. of Sessions.svg')}}" alt="Sessions">
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
                                        <h6>Followers</h6>
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
                                        <h6>No. of Students</h6>
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
                <div class="col-lg-12">
                    <div class="row" >
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <p class="titledown"> Upcoming Appointments</p>
                                <div class="  Appointments">
{{--                                    <div class="">--}}
{{--                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">--}}
                                    <div class="Appointmentscard">
                                        <div class="toppart">
                                            <img src="{{asset('assets/admin/img/avtar.png')}}" alt="profile">
                                            <div class="topcontent">
                                                <h4>Rahul Jain</h4>
                                                <p>BBA Graduate</p>
                                            </div>
                                            <hr>
                                        </div>
                                        <hr>
                                        <div class="downpart">
                                            <h6>Session at</h6>
                                            <div class="downpartcontent">
                                                <h6>02 pm</h6>
                                                <p>Today, 26-12-2022</p>
                                            </div>
                                            <button class="chatbtn">Tap to Chat</button>
                                        </div>
                                    </div>
{{--                                    </div>--}}
{{--                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">--}}
                                    <div class="Appointmentscard">
                                        <div class="toppart">
                                            <img src="{{asset('assets/admin/img/avtar.png')}}" alt="profile">
                                            <div class="topcontent">
                                                <h4>Rahul Jain</h4>
                                                <p>BBA Graduate</p>
                                            </div>
                                            <hr>
                                        </div>
                                        <hr>
                                        <div class="downpart">
                                            <h6>Session at</h6>
                                            <div class="downpartcontent">
                                                <h6>02 pm</h6>
                                                <p>Today, 26-12-2022</p>
                                            </div>
                                            <button class="chatbtn">Tap to Chat</button>
                                        </div>
                                    </div>
{{--                                    </div>--}}
{{--                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">--}}
                                    <div class="Appointmentscard">
                                        <div class="toppart">
                                            <img src="{{asset('assets/admin/img/avtar.png')}}" alt="profile">
                                            <div class="topcontent">
                                                <h4>Rahul Jain</h4>
                                                <p>BBA Graduate</p>
                                            </div>
                                            <hr>
                                        </div>
                                        <hr>
                                        <div class="downpart">
                                            <h6>Session at</h6>
                                            <div class="downpartcontent">
                                                <h6>02 pm</h6>
                                                <p>Today, 26-12-2022</p>
                                            </div>
                                            <button class="chatbtn">Tap to Chat</button>
                                        </div>
                                    </div>
{{--                                    </div>--}}
                                    </div>
{{--                                </div>--}}
                            </div>

                        </div>
                        <div class="col-xl-6 ">
                            <div id='calendar'></div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <div class="modal fade" id="event-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    <form name="save-event" method="post">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Event start</label>
                            <input type="text" name="evtStart" class="form-control col-xs-3" />
                        </div>
                        <div class="form-group">
                            <label>Event end</label>
                            <input type="text" name="evtEnd" class="form-control col-xs-3" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endsection
