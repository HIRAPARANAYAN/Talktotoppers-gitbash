<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('auth/css/style.css')}}" />
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
<?php //require 'formvalidation.php'; ?>
<section class="signup">
    <div class="navbar">
        <img src="{{asset('auth/img/logo.png')}}" alt="sign-up logo" />
    </div>
    <div class="container-fluid">
        <div class="row signuppage">
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="signupForm">
                    <form  action = "{{route('register')}}"  method="POST">
                        @csrf
                        <div class="form">
                            <h2>Sign Up</h2>
                            <input
                                type="text"
                                name="name"
                                id="firstname"
                                value="{{old('name')}}"
                                placeholder="Enter Your Full Name"
                            />
                            @error('name')
                            <span class="errorColor">{{$message}}</span>
                            @enderror
                            <input
                                type="email"
                                name="email"
                                id="email"
                                value="{{old('email')}}"
                                placeholder="Enter Your Email"
                            />
                            @error('email')
                            <span class="errorColor">{{$message}}</span>
                            @enderror
                            <input
                                type="phone"
                                name="phonenumber"
                                id="phonenumber"
                                value="{{old('phonenumber')}}"
                                placeholder="Enter Your Phone Number"
                            />
                            <input type="hidden" name="type" value="{{$type}}"/>
                            @error('phonenumber')
                            <span class="errorColor">{{$message}}</span>
                            @enderror
                            <button type="submit" class="signupbtn" name = "submit">Signup</button>
                            <p class="text-center alredy Account">
                                Already have an account? <span><a href="#">Login</a></span>
                            </p>
                            <p class="diveder">or</p>
                            <a href="#"> <div class="googleloginbtn">
                                    <img src="{{asset('auth/img/google logo.png')}}" alt="google logo">
                                    <p>Login with Google</p>
                                </div></a>
                            <!-- <button class="googleloginbtn">Login with Google</button> -->
                        </div>
                    </form>
                    <div class="camaraimg">
                        <img src="{{asset('auth/img/camara.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="signupimage">
                    <img src="{{asset('auth/img/Frame (1).png')}}" alt="" class="img-fluid">
                </div>
                <div class="arrorimg">
                    <img src="{{asset('auth/img/arrowplan (2).png')}}" alt="" class="img-fluid">
                </div>
                <div class="laptopperson">
                    <img src="{{asset('auth/img/laptopboy.png')}}" alt="" class="img-fluid">
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
<!--
    <script>
      function verify()
      {
        var email = jQuery('#email').val();
        var phonenumber = jQuery('#phonenumber').val();
        var username = jQuery('#firstname').val();
        jQuery.ajax
        ({
          url:'verify.php',
          type:'post',
          data:{username:username,email:email,phonenumber:phonenumber},
          success:function(result)
          {
            console.log(result);
            jsonvariable = result;
            if(jsonvariable == 'Both_exist')
            {
              jQuery('#email_error').html('This Email is Already Exist');
              jQuery('#phonenumber_error').html('This Mobile Number is Already Exist');
            }
            else if(jsonvariable == 'Email_exist')
            {
              jQuery('#email_error').html('This Email is Already Exist');
            }
            else if(jsonvariable == 'Mobile_exist')
            {
              jQuery('#phonenumber_error').html('This Mobile Number is Already Exist');
            }
            else if(jsonvariable == 'No')
            {
              window.location.href = 'http://localhost/sign-in/signin.html';
            }
          },
          error: function(result)
          {
          alert("Data was Not succesfully captured");
          }
        });
      }
    </script>
    -->
</body>
</html>
