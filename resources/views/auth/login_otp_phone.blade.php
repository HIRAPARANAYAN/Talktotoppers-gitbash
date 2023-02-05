<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('otp/css/phoneotp.css')}}" />
    <title>Talk To Toppers</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
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
<section class="w-100 h-100">
    <div class="otpverify">
        <div class="otpinboxicon">
            <img src="{{asset('otp/img/Group 82.svg')}}" alt="otpinbox" />
        </div>

        <div class="otpContent">
            <h5>Enter the OTP sent on your number</h5>
            <p>
                Enter the OTP that has been sent on your mobile number {{$tempuser->phonenumber}}
            </p>
            <form  action = "{{route('login.otp.phone.verify')}}" id="otp_verify_form"  method="POST">
                @csrf
                <div class="inputfield">
                    <input type="text" maxlength="1" class="input" disabled />
                    <input type="text" maxlength="1" class="input" disabled />
                    <input type="text" maxlength="1" class="input" disabled />
                    <input type="text" maxlength="1" class="input" disabled />
                    <input type="text" maxlength="1" class="input" disabled />
                    <input type="text" maxlength="1" class="input" disabled />
                </div>
                <div class="text-center">
                    @if(Session::has('error'))
                        <span class="errorColor text-danger text-center">{!! session('error') !!}</span>
                    @endif
                </div>
                <div class="text-center">
                    <a href="{{route('resend.otp',['username' => $tempuser->phonenumber,'type' => 'phone','user_type'=>'user','user_id' => $tempuser->id])}}" class="text-primary text-center">Resend OTP</a>
                </div>
                <input type="hidden" name="otpnumber" class="otpnumber"/>
                <input type="hidden" name="temp_user_id" value="{{$tempuser->id}}"/>
                <button class="hide otpbutton" id="submit" onclick="validateOTP()">
                    Submit
                </button>
            </form>
        </div>
    </div>
</section>
<script type="text/javascript">
    const input = document.querySelectorAll(".input");
    const inputField = document.querySelector(".inputfield");
    const submitButton = document.getElementById("submit");
    let inputCount = 0,
        finalInput = "";
    //Update input
    const updateInputConfig = (element, disabledStatus) => {
        element.disabled = disabledStatus;
        if (!disabledStatus) {
            element.focus();
        } else {
            element.blur();
        }
    };
    input.forEach((element) => {
        element.addEventListener("keyup", (e) => {
            e.target.value = e.target.value.replace(/[^0-9]/g, "");
            let { value } = e.target;
            if (value.length == 1) {
                updateInputConfig(e.target, true);
                if (inputCount <= 5 && e.key != "Backspace") {
                    finalInput += value;
                    if (inputCount < 5) {
                        updateInputConfig(e.target.nextElementSibling, false);
                    }
                }
                inputCount += 1;
            } else if (value.length == 0 && e.key == "Backspace") {
                finalInput = finalInput.substring(0, finalInput.length - 1);
                if (inputCount == 0) {
                    updateInputConfig(e.target, false);
                    return false;
                }
                updateInputConfig(e.target, true);
                e.target.previousElementSibling.value = "";
                updateInputConfig(e.target.previousElementSibling, false);
                inputCount -= 1;
            } else if (value.length > 1) {
                e.target.value = value.split("")[0];
            }
            submitButton.classList.add("hide");
        });
    });
    window.addEventListener("keyup", (e) => {
        if (inputCount > 6) {
            submitButton.classList.remove("hide");
            submitButton.classList.add("show");
            if (e.key == "Backspace") {
                finalInput = finalInput.substring(0, finalInput.length - 1);
                updateInputConfig(inputField.lastElementChild, false);
                inputField.lastElementChild.value = "";
                inputCount -= 1;
                submitButton.classList.add("hide");
            }
        }
    });
    const validateOTP = () => {
        $('.otpnumber').val(finalInput);
        $("#otp_verify_form").submit();
    };
    //Start
    const startInput = () => {
        inputCount = 0;
        finalInput = "";
        input.forEach((element) => {
            element.value = "";
        });
        updateInputConfig(inputField.firstElementChild, false);
    };
    window.onload = startInput();
</script>

<script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
    integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
></script>
</body>
</html>
