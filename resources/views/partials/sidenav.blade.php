@if(\Auth::user()->type == 'admin')
<aside id="sidebar" class="sidebar">
    <div class="d-flex align-items-center justify-content-between logo">
        <a href="index.html" class="d-flex align-items-center">
            <img src="{{asset('assets/admin/img/tutor.png')}}" alt="">
        </a>
    </div>
    <div class="d-flex justify-content-between flex-column sidebartabs">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link " href="{{route('dashboard')}}">
                    <img src="{{asset('assets/admin/img/dashboard.svg')}}" alt="">
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <img src="{{asset('assets/admin/img/trans.svg')}}" alt="">
                    <span>Transactions</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <img src="{{asset('assets/admin/img/allstudent.svg')}}" alt="">
                    <span>All Students</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <img src="{{asset('assets/admin/img//alltutor.svg')}}" alt="">
                    <span>All Tutors</span>
                </a>
            </li>
            @if(\Auth::user()->type == 'admin')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('admin.requests')}}">
                    <img src="{{asset('assets/admin/img/request.svg')}}" alt="">
                    <span>Requests</span>
                </a>
            </li>
            @endif
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <img src="{{asset('assets/admin/img/coupons.svg')}}" alt="">
                    <span>Coupons</span>
                </a>
            </li>

        </ul>
        <ul class="logout">
            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}"  onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    @csrf
                <a class="nav-link " href="index.html">
                    <img src="{{asset('assets/admin/img/signout.svg')}}" alt="">
                    <span>Sign Out</span>
                </a>
                </form>
            </li>
        </ul>
    </div>
</aside>
@endif

@if(\Auth::user()->type == 'toper')
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <div class="d-flex align-items-center justify-content-between logo">
            <a href="index.html" class="d-flex align-items-center">
                <img src="{{asset('assets/admin/img/tutor.png')}}" alt="">
            </a>
        </div>
        <div class="d-flex justify-content-between flex-column sidebartabs">
            <ul class="sidebar-nav" id="sidebar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="index.html">
                        <img src="{{asset('assets/admin/img/dashboard.svg')}}" alt="">
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="session.html">
                        <img src="{{asset('assets/admin/img/Sessions.svg')}}" alt="">
                        <span>Sessions</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="profile.html">
                        <img src="{{asset('assets/admin/img/profile.svg')}}" alt="">
                        <span>My Profile</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#">
                        <img src="{{asset('assets/admin/img/calander.svg')}}" alt="">
                        <span>Calendar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="bankdetail.html">
                        <img src="{{asset('assets/admin/img/bankdetail.svg')}}" alt="">
                        <span>Bank Details</span>
                    </a>
                </li>

            </ul>
            <ul class="logout">
                <li class="nav-item">
                    <a class="nav-link " href="index.html">
                        <img src="{{asset('assets/admin/img/whatsapp 1.png')}}" alt="">
                        <span>Contact Support</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="index.html">
                        <img src="{{asset('assets/admin/img/signout.svg')}}" alt="">
                        <span>Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <!-- End Sidebar-->
@endif
