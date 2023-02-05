<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('otp/signin/style.css')}}" />
    <title>Talk To Toppers</title>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
        rel="stylesheet"
    />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Poppins:wght@400;500;600&display=swap"
        rel="stylesheet"
    />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Poppins:wght@400;500;600&family=Roboto:wght@400;500;700&display=swap"
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
<section class="signup">
    <div class="navbar">
        <img src="{{asset('otp/signin/img/logo.png')}}" alt="sign-up logo" />
    </div>
    <div class="container-fluid">
        <div class="row signuppage">
            <div class="col-lg-5 col-md-12 col-sm-12 position-relative">
                <div class="signupForm">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form">
                            <h2>Sign In</h2>
                            <input
                                type="phone"
                                name="phonenumber"
                                id = "phonenumber"
                                placeholder="Enter Your Phone Number"
                                required = "required"
                            />
                            @error('phonenumber')
                            <span id = "phonenumber_error">{{$message}}</span>
                            @enderror
                            <div id="recaptcha-container"></div>
                            <button type="submit" class="signupbtn" onclick="phoneAuth()">Send OTP</button>
                            <!-- <button class="googleloginbtn">Login with Google</button> -->
                        </div>
                    </form>
                </div>
                <div class="camaraimg">
                    <img src="{{asset('otp/signin/img/camara.png')}}" alt="">
                </div>
                <div class="uparrowimage">
                    <img src="{{asset('otp/signin/img/New Project (2).png')}}" alt="">
                </div>
                <div class="downarrowimage">
                    <img src="{{asset('otp/signin/img/New Project (3).png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="signupimage">
                    <img src="{{asset('otp/signin/img/Frame (1).png')}}" alt="" class="img-fluid">
                </div>
                <div class="arrorimg2">
                    <img src="{{asset('otp/signin/img/Group 284.png')}}" alt="" class="img-fluid">
                </div>
                <div class="upadatedicon">
                    <img src="{{asset('otp/signin/img/Group (3).png')}}" alt="" class="img-fluid">
                </div>
                <div class="arrorimg">
                    <img src="{{asset('otp/signin/img/arrowplan (2).png')}}" alt="" class="img-fluid">
                </div>
                <div class="laptopperson">
                    <img src="{{asset('otp/signin/img/laptopboy.png')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
    integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
></script>
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
</body>
</html>

