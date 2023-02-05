<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('assets/blur_dashboard/css/LoginProfile.css')}}" />
    <title>Talk To Toppers</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css"
        integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js"
        integrity="sha512-sH8JPhKJUeA9PWk3eOcOl8U+lfZTgtBXD41q6cO/slwxGHCxKcW45K4oPCUhHG7NMB4mbKEddVmPuTXtpbCbFA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    ></script>
</head>
<body>
<section>
    <div class="profile">
        <div class="background">
            <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                @csrf
                <!-- <div class="profileAvtar">
                  <input type="file" >

                </div> -->
                <div class="fileupload1">
                    <input type="file" name="avatar" />
                    <img
                        class="photo"
                        src="{{$user->avatar == null ? asset('assets/blur_dashboard/img/photo-camera-interface-symbol-for-button 1.svg') : asset(Storage::url($user->avatar))}}"
                        alt=""
                    />
                </div>
        </div>
        <div class="picture">
            <h3>Upload your picture</h3>

            <div class="feild">
                <label>Name</label><br />
                <input type="text" name="name" value="{{$user->name}}" />
                    @error('name')
                        <span class="errorColor text-danger text-center">{{$message}}</span>
                    @enderror
                <br /><br />
                <label>Email ID</label><br />
                <input type="email" name="email" value="{{$user->email}}" disabled/><br /><br />

                <label>Phone Number</label><br />

                <input type="tel" name="phonenumber" value="{{$user->phonenumber}}" disabled/><br /><br />
                <label>PAN Card Number</label><br />
                <input type="text" name="pan" value="{{$user->pan_card}}" />
                @error('pan')
                <span class="errorColor text-danger text-center">{{$message}}</span>
                @enderror
                <br /><br />
                <label>Aadhar Card Number</label><br />
                <input type="text" value="{{$user->aadhar}}" name="aadhar" />
                    @error('aadhar')
                    <span class="errorColor text-danger text-center">{{$message}}</span>
                    @enderror
                <br /><br />
            </div>
            <div class="Category">
                <p>Category</p>
                <div class="radio">
                    <div>
                        <input
                            type="radio"
                            id="html"
                            name="category"
                            value="Gen"
                        {{$user->category == 'Gen' ? 'checked' : ''}} />
                        <label for="html">Gen</label>
                    </div>
                    <div>
                        <input
                            type="radio"
                            id="css"
                            name="category"
                            value="OBC"
                            {{$user->category == 'OBC' ? 'checked' : ''}}
                        />
                        <label for="css">OBC</label>
                    </div>
                    <div>
                        <input
                            type="radio"
                            id="javascript"
                            name="category"
                            value="ST/SC"
                            {{$user->category == 'ST/SC' ? 'checked' : ''}}
                        />
                        <label for="javascript">ST/SC</label>
                    </div>

                </div>
                @error('category')
                <span class="errorColor text-danger text-center">{{$message}}</span>
                @enderror
            </div>
            @php
                $exam_ebility = [];
                if($user->exam_ebility!=null){
                    $exam_ebility = explode(',',$user->exam_ebility);
                }
            @endphp
            <div class="Exam">
                <p>Exam Eligibility</p>
                <input
                    type="checkbox"
                    id="html"
                    name="exam_ebility[]"
                    value="IIT - JEE" {{in_array('IIT - JEE',$exam_ebility) ? 'checked':''}}
                />
                <label for="html">IIT - JEE</label><br /><br />
                <input type="checkbox" id="css" name="exam_ebility[]" value="CAT" {{in_array('CAT',$exam_ebility) ? 'checked':''}} />
                <label for="css">CAT</label><br /><br />
                <input
                    type="checkbox"
                    id="javascript"
                    name="exam_ebility[]"
                    value="NEET" {{in_array('NEET',$exam_ebility) ? 'checked':''}}
                />
                <label for="javascript">NEET</label><br /><br />
                <input
                    type="checkbox"
                    id="html"
                    name="exam_ebility[]"
                    value="CUET" {{in_array('CUET',$exam_ebility) ? 'checked':''}}
                />
                <label for="html">CUET</label><br /><br />
                <input type="checkbox" id="css" name="exam_ebility[]" {{in_array('OTHERS',$exam_ebility) ? 'checked':''}} value="OTHERS" />
                <label for="css">OTHERS</label>
            </div>
            @error('exam_ebility')
            <span class="errorColor text-danger text-center">{{$message}}</span>
            @enderror
            <div class="upload">
                <div class="fileupload">
                    <img src="{{asset('assets/blur_dashboard/img/file.svg')}}" alt="file" />
                    <p>Aadhar Card</p>
                </div>
                <div class="fileupload">
                    <!-- <img src="img/Vector (1).svg" alt="file" /> -->
                    <input type="file" name="adhar_file" placeholder="Aadhar Card">
                </div>

            </div>
            @error('adhar_file')
            <span class="errorColor text-danger text-center">{{$message}}</span>
            @enderror
            <div class="upload">
                <div class="fileupload">
                    <img src="{{asset('assets/blur_dashboard/img/file.svg')}}" alt="file" />
                    <p>PAN Card</p>
                </div>
                <div class="fileupload">
                    <!-- <img src="img/Vector (1).svg" alt="file" /> -->
                    <input type="file" name="pan_card_file" placeholder="Pan Card">
                </div>

            </div>
            @error('pan_card_file')
            <span class="errorColor text-danger text-center">{{$message}}</span>
            @enderror
            <div class="upload">
                <div class="fileupload">
                    <img src="{{asset('assets/blur_dashboard/img/file.svg')}}" alt="file" />
                    <p>Rank (Original Marksheet)</p>
                </div>
                <div class="fileupload">
                    <!-- <img src="img/Vector (1).svg" alt="file" /> -->
                    <input type="file" name="rank_file" placeholder="Marksheet">
                </div>

            </div>
            @error('rank_file')
            <span class="errorColor text-danger text-center">{{$message}}</span>
            @enderror
            <div class="upload">
                <div class="fileupload">
                    <img src="{{asset('assets/blur_dashboard/img/file.svg')}}" alt="file" />
                    <p>College Name (with proof)</p>
                </div>
                <div class="fileupload">
                    <!-- <img src="img/Vector (1).svg" alt="file" /> -->
                    <input type="file" name="college_name_file" placeholder="College proof">
                </div>

            </div>
            @error('college_name_file')
            <span class="errorColor text-danger text-center">{{$message}}</span>
            @enderror
            <button type="submit" class="submitbtn">Submit</button>
            </form>
        </div>
    </div>
</section>

<script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
    integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
></script>
</body>
</html>
