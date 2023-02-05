@extends('layouts.main')
@section('css')
    <link href="{{asset('assets/admin/assets/css/Requests.css')}}" rel="stylesheet" />
@endsection
@section('title')
    Requests
@endsection
@section('content')
    <section class="section dashboard my-4">
        <ul class="nav nav-pills mb-3 requestTab" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link active"
                    id="pills-home-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-home"
                    type="button"
                    role="tab"
                    aria-controls="pills-home"
                    aria-selected="true"
                >
                    Approval Requests
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link"
                    id="pills-profile-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-profile"
                    type="button"
                    role="tab"
                    aria-controls="pills-profile"
                    aria-selected="false"
                >
                    Raise a Ticket
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link"
                    id="pills-home-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-Raised"
                    type="button"
                    role="tab"
                    aria-controls="pills-home"
                    aria-selected="true"
                >
                    Raised Ticket
                </button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div
                class="tab-pane fade show active"
                id="pills-home"
                role="tabpanel"
                aria-labelledby="pills-home-tab"
            >
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Profile</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">PhoneNumber</th>
                                <th scope="col">Catogary</th>
                                <th scope="col">Exam</th>
                                <th scope="col">Approval</th>
                                <th scope="col">Rejection</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($requests as $request)
                                @php
                                $user = $request->user;
                                @endphp
                            <tr>
                                <td scope="row"><img src="{{$user->avatar == null ? asset('assets/blur_dashboard/img/photo-camera-interface-symbol-for-button 1.svg') : asset(Storage::url($user->avatar))}}" alt="" /></td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phonenumber}}</td>
                                <td>{{$user->category}}</td>
                                <td>{{$user->exam_ebility}}</td>
                                <td><a href="{{route('request.update',['approve',$user->id])}}" class="Approval">Approval</a></td>
                                <td><a href="{{route('request.update',['reject',$user->id])}}" class="reject">Reject</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- <div class="d-flex align-items-center justify-content-between request mb-3">
                      <img src="img/avtar.png" alt="">
                      <p>abhishek</p>
                      <p>ashu@gmail.com</p>
                      <p>6523656256</p>
                      <p>catogary</p>
                      <p>Exam Cleared</p>
                      <div>
                        <button class="Approval">Approval</button>
                        <button class="reject">Reject</button>
                      </div>
                    </div> -->
                    <!-- <div class="d-flex align-items-center justify-content-between request mb-3">
                      <img src="img/avtar.png" alt="">
                      <p>ashishbhai</p>
                      <p>ashish@gmail.com</p>
                      <p>6523656256</p>
                      <p>236566564556</p>
                      <p>4654jkcbaf</p>
                      <p>56</p>
                      <embed type="application/pdf" src="Group-9.pdf" width="100%" height="566">
                      <p>rk univercity</p>
                      <div>
                      <img class="approvebtn" src="img/correct.png" alt="">
                      <img class="rejectbtn" src="img/x-button.png" alt="">
                      </div>
                    </div> -->
                </div>
            </div>
            <div
                class="tab-pane fade"
                id="pills-profile"
                role="tabpanel"
                aria-labelledby="pills-profile-tab"
            >
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="Raisetocket">
                        <form action="#">
                            <label for="">subjects<span>*</span></label
                            ><br />
                            <input type="text" name="subject" required /><br /><br />

                            <label for="Description">Description<span>*</span></label>
                            <textarea
                                name="Description*"
                                id="Description"
                                cols="50"
                                rows="10"
                                required
                            ></textarea>
                            <div class="d-flex justify-content-between sendrequest">
                                <button type="submit">Send to Students</button>
                                <button type="submit">Send to Tutors</button>
                                <button type="submit">Send to Both</button>
                            </div>
                            <button class="Raiseticketbtn" type="submit">
                                Raise new Ticket
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- <div
              class="tab-pane fade"
              id="pills-Raised"
              role="tabpanel"
              aria-labelledby="pills-profile-tab"
            >
              Raise a Ticket
            </div> -->
        </div>
    </section>
@endsection
