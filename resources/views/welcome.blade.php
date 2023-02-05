<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('landing/css/style.css')}}" />
    <title>Talk To Toppers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="{{asset('landing/logo.png')}}" alt="" /></a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div
            class="collapse navbar-collapse justify-content-end"
            id="navbarSupportedContent"
        >
            <div class="topRight"></div>
            <div class="header">
                <div class="socialIcon">
                    <ul>
                        <li>
                            <a href="#"><img src="{{asset('landing/img/linkdin.svg')}}" alt="" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{asset('landing/img/faceboook.svg')}}" alt="" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{asset('landing/img/instagram.svg')}}" alt="" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{asset('landing/img/twitter.svg')}}" alt="" /></a>
                        </li>
                    </ul>
                </div>
                <div class="btngroup">
                    <a href="{{route('register',['type'=>'toper'])}}" class="topperbutton">Register as a Topper</a>
                    <a href="{{route('register',['type'=>'student'])}}" class="studentButton">Register as a Student</a>
                    <a href="{{route('login')}}" class="loginButton">Log In</a>
                </div>
            </div>
        </div>
    </div>
</nav>
<section class="topSection">
    <div class="studytPart d-flex justify-content-between hero position-relative">
        <div class="boyImage">
            <img src="{{asset('landing/img/boy1.svg')}}" alt="boyImage" />
        </div>
        <div
            class="text-center justify-content-center d-flex flex-column position-relative herocontent"
        >
            <p class="futuretitle">We are your future</p>
            <h1 class="title">
                <span class="highlightText">Study</span> from <br />
                Home with <span class="highlightText">Expert</span>
            </h1>
            <img
                src="{{asset('landing/img/pin.svg')}}"
                alt=""
                class="pinImage position-absolute pe-lg-1"
            />
            <p class="subtitle">
                Get your desired classes, tutors and subject coaches easily for your
                exam preperations
            </p>
            <div class="search">
                <input
                    type="search"
                    placeholder="Search with Student’s Name/ Exam Name"
                    class="searchinput"
                />
                <div class="d-md-block d-lg-none">
                    <div  class="d-flex mt-lg-3 ms-lg-4 align-items-center justify-content-start  d-flex"
                    >
                        <div>
                            <p class="PopularCategories">Popular Categories :</p>
                        </div>
                        <div>
                            <ul class="CategoriesList d-flex align-items-center">
                                <li><a href="#">IIT Tutors</a></li>
                                <li><a href="#">Neet Classes</a></li>
                                <li><a href="#">Tutors</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <button class="searchbtn">Search</button>
            </div>
            <div class="d-none d-lg-block">
                <div  class="d-flex mt-3 ms-4 align-items-center justify-content-start"
                >
                    <div>
                        <p class="PopularCategories">Popular Categories :</p>
                    </div>
                    <div>
                        <ul class="CategoriesList d-flex align-items-center">
                            <li><a href="#">IIT Tutors</a></li>
                            <li><a href="#">Neet Classes</a></li>
                            <li><a href="#">Tutors</a></li>
                        </ul>
                    </div>
                </div>
                <button class="exambutton mt-5">View All Experts</button>
            </div>
        </div>
        <div class="girlsImage">
            <img src="{{asset('landing/img/girl.svg')}}" alt="boyImage" />
        </div>
        <img src="{{asset('landing/img/book.svg')}}" class="bookimg" alt="">
    </div>
</section>

<section>
    <div class="container">
        <p class="text-center examTitle">We help you prepare for these exams</p>
        <div class="exam">
            <div class="subject"><p >IIT</p></div>
            <div class="subject"><p >NEET</p></div>
            <div class="subject"><p >CUET</p></div>
            <div class="subject"><p >CAT</p></div>
            <div class="subject"><p >GATE</p></div>
            <div class="subject"><p >UPSC</p></div>
        </div>
    </div>
    </div>
</section>
<section class="PlatformSection">
    <div class="container text-center PlatformWrapper">
        <div>
            <p class="PlatformSubTitle">How it works</p>
            <h2 class="PlatformTitle">
                The Only Platform You Can <span class="highlightText">Trust</span>
            </h2>
        </div>
        <div class="cardWrapper">
            <div class="Platformcard position-relative">
                <div class="Platformimg">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="#000000" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.24 36.24C11.28 34.68 13.56 33.4496 16.08 32.5488C18.6 31.6496 21.24 31.2 24 31.2C26.76 31.2 29.4 31.6496 31.92 32.5488C34.44 33.4496 36.72 34.68 38.76 36.24C40.16 34.6 41.2504 32.74 42.0312 30.66C42.8104 28.58 43.2 26.36 43.2 24C43.2 18.68 41.3304 14.1496 37.5912 10.4088C33.8504 6.6696 29.32 4.8 24 4.8C18.68 4.8 14.1504 6.6696 10.4112 10.4088C6.6704 14.1496 4.8 18.68 4.8 24C4.8 26.36 5.1904 28.58 5.9712 30.66C6.7504 32.74 7.84 34.6 9.24 36.24ZM24 26.4C21.64 26.4 19.6496 25.5904 18.0288 23.9712C16.4096 22.3504 15.6 20.36 15.6 18C15.6 15.64 16.4096 13.6496 18.0288 12.0288C19.6496 10.4096 21.64 9.6 24 9.6C26.36 9.6 28.3504 10.4096 29.9712 12.0288C31.5904 13.6496 32.4 15.64 32.4 18C32.4 20.36 31.5904 22.3504 29.9712 23.9712C28.3504 25.5904 26.36 26.4 24 26.4ZM24 48C20.68 48 17.56 47.3696 14.64 46.1088C11.72 44.8496 9.18 43.14 7.02 40.98C4.86 38.82 3.1504 36.28 1.8912 33.36C0.6304 30.44 0 27.32 0 24C0 20.68 0.6304 17.56 1.8912 14.64C3.1504 11.72 4.86 9.18 7.02 7.02C9.18 4.86 11.72 3.1496 14.64 1.8888C17.56 0.6296 20.68 0 24 0C27.32 0 30.44 0.6296 33.36 1.8888C36.28 3.1496 38.82 4.86 40.98 7.02C43.14 9.18 44.8496 11.72 46.1088 14.64C47.3696 17.56 48 20.68 48 24C48 27.32 47.3696 30.44 46.1088 33.36C44.8496 36.28 43.14 38.82 40.98 40.98C38.82 43.14 36.28 44.8496 33.36 46.1088C30.44 47.3696 27.32 48 24 48Z" fill="black"/>
                    </svg>
                    <!-- <img src="img/createAccount.svg" alt="createAccount" /> -->
                </div>
                <div class="cardTitle">
                    <h5>Create your account</h5>
                </div>
                <div class="CardSubtitle">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem
                        ipsum dolor
                    </p>
                </div>
                <div class="label"><p>step 1</p></div>
                <div class="arrow"><img src="{{asset('landing/img/Arrow 4.svg')}}" alt="" /></div>
            </div>
            <div class="Platformcard position-relative">
                <div class="Platformimg">
                    <svg width="48" height="40" viewBox="0 0 48 40" fill="#000000" xmlns="http://www.w3.org/2000/svg">
                        <path d="M44.3077 0H3.69231C2.71305 0 1.77389 0.383116 1.08145 1.06507C0.38901 1.74702 0 2.67194 0 3.63636V36.3636C0 37.3281 0.38901 38.253 1.08145 38.9349C1.77389 39.6169 2.71305 40 3.69231 40H6.78462C7.13419 40.001 7.47668 39.9029 7.77127 39.7176C8.06586 39.5322 8.30013 39.2673 8.44615 38.9545C9.34945 37.0927 10.7693 35.5207 12.5417 34.4203C14.314 33.3198 16.3664 32.7358 18.4615 32.7358C20.5567 32.7358 22.6091 33.3198 24.3814 34.4203C26.1537 35.5207 27.5736 37.0927 28.4769 38.9545C28.6229 39.2673 28.8572 39.5322 29.1518 39.7176C29.4464 39.9029 29.7889 40.001 30.1385 40H44.3077C45.287 40 46.2261 39.6169 46.9185 38.9349C47.611 38.253 48 37.3281 48 36.3636V3.63636C48 2.67194 47.611 1.74702 46.9185 1.06507C46.2261 0.383116 45.287 0 44.3077 0ZM18.4615 29.0909C17.001 29.0909 15.5733 28.6644 14.3589 27.8652C13.1445 27.0661 12.198 25.9302 11.639 24.6013C11.0801 23.2724 10.9339 21.8101 11.2188 20.3993C11.5038 18.9886 12.2071 17.6927 13.2398 16.6756C14.2726 15.6585 15.5884 14.9658 17.0209 14.6852C18.4533 14.4046 19.9381 14.5486 21.2875 15.0991C22.6369 15.6495 23.7902 16.5817 24.6016 17.7777C25.4131 18.9737 25.8462 20.3798 25.8462 21.8182C25.8401 23.7452 25.0601 25.5915 23.6765 26.9542C22.293 28.3168 20.4182 29.0849 18.4615 29.0909ZM44.3077 36.3636H31.2462C30.4463 34.9974 29.4251 33.7691 28.2231 32.7273H38.7692C39.2589 32.7273 39.7284 32.5357 40.0747 32.1947C40.4209 31.8538 40.6154 31.3913 40.6154 30.9091V9.09091C40.6154 8.6087 40.4209 8.14623 40.0747 7.80526C39.7284 7.46428 39.2589 7.27273 38.7692 7.27273H9.23077C8.74114 7.27273 8.27156 7.46428 7.92534 7.80526C7.57912 8.14623 7.38462 8.6087 7.38462 9.09091V30.9091C7.38696 31.3104 7.52404 31.6996 7.77449 32.0162C8.02494 32.3327 8.3747 32.5588 8.76923 32.6591C7.53805 33.7175 6.49317 34.9693 5.67692 36.3636H3.69231V3.63636H44.3077V36.3636Z" fill="#white"/>
                    </svg>
                    <!-- <img src="img/tutor.svg" alt="createAccount" /> -->
                </div>
                <div class="cardTitle">
                    <h5>Search for tutors</h5>
                </div>
                <div class="CardSubtitle">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem
                        ipsum dolor
                    </p>
                </div>
                <div class="label1"><p>step 2</p></div>
                <div class="arrow1"><img src="{{asset('landing/img/Arrow 4.svg')}}" alt="" /></div>
            </div>
            <div class="Platformcard position-relative">
                <div class="Platformimg">
                    <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M39.1 4.6H34.5V2.3C34.5 1.69 34.2577 1.10499 33.8263 0.673654C33.395 0.242321 32.81 0 32.2 0C31.59 0 31.005 0.242321 30.5737 0.673654C30.1423 1.10499 29.9 1.69 29.9 2.3V4.6H16.1V2.3C16.1 1.69 15.8577 1.10499 15.4263 0.673654C14.995 0.242321 14.41 0 13.8 0C13.19 0 12.605 0.242321 12.1737 0.673654C11.7423 1.10499 11.5 1.69 11.5 2.3V4.6H6.9C5.07001 4.6 3.31496 5.32696 2.02096 6.62096C0.726962 7.91496 0 9.67001 0 11.5V39.1C0 40.93 0.726962 42.685 2.02096 43.979C3.31496 45.273 5.07001 46 6.9 46H39.1C40.93 46 42.685 45.273 43.979 43.979C45.273 42.685 46 40.93 46 39.1V11.5C46 9.67001 45.273 7.91496 43.979 6.62096C42.685 5.32696 40.93 4.6 39.1 4.6ZM41.4 39.1C41.4 39.71 41.1577 40.295 40.7263 40.7263C40.295 41.1577 39.71 41.4 39.1 41.4H6.9C6.29 41.4 5.70499 41.1577 5.27365 40.7263C4.84232 40.295 4.6 39.71 4.6 39.1V23H41.4V39.1ZM41.4 18.4H4.6V11.5C4.6 10.89 4.84232 10.305 5.27365 9.87365C5.70499 9.44232 6.29 9.2 6.9 9.2H11.5V11.5C11.5 12.11 11.7423 12.695 12.1737 13.1263C12.605 13.5577 13.19 13.8 13.8 13.8C14.41 13.8 14.995 13.5577 15.4263 13.1263C15.8577 12.695 16.1 12.11 16.1 11.5V9.2H29.9V11.5C29.9 12.11 30.1423 12.695 30.5737 13.1263C31.005 13.5577 31.59 13.8 32.2 13.8C32.81 13.8 33.395 13.5577 33.8263 13.1263C34.2577 12.695 34.5 12.11 34.5 11.5V9.2H39.1C39.71 9.2 40.295 9.44232 40.7263 9.87365C41.1577 10.305 41.4 10.89 41.4 11.5V18.4Z" fill="#303030"/>
                    </svg>
                    <!-- <img src="img/Book Appointment.svg" alt="createAccount" /> -->
                </div>
                <div class="cardTitle">
                    <h5>Book Appointment</h5>
                </div>
                <div class="CardSubtitle">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem
                        ipsum dolor
                    </p>
                </div>
                <div class="label2"><p>step 3</p></div>
                <div class="arrow2"><img src="{{asset('landing/img/Arrow 4.svg')}}" alt="" /></div>
            </div>
            <div class="Platformcard position-relative">
                <div class="Platformimg">
                    <svg width="55" height="47" viewBox="0 0 55 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 6.58613C0 4.83938 0.693305 3.16417 1.92739 1.92903C3.16148 0.693894 4.83527 0 6.58054 0H46.0638C47.809 0 49.4828 0.693894 50.7169 1.92903C51.951 3.16417 52.6443 4.83938 52.6443 6.58613V15.3984C52.3019 15.2232 51.949 15.0692 51.5877 14.9373L51.55 14.9223L51.1082 14.7755L49.7225 14.3578C49.4475 14.2744 49.1674 14.2091 48.884 14.1621V6.58613C48.884 5.83752 48.5869 5.11958 48.058 4.59023C47.5291 4.06088 46.8117 3.7635 46.0638 3.7635H6.58054C5.83257 3.7635 5.11523 4.06088 4.58633 4.59023C4.05744 5.11958 3.76031 5.83752 3.76031 6.58613V31.0489C3.76031 31.7975 4.05744 32.5154 4.58633 33.0448C5.11523 33.5741 5.83257 33.8715 6.58054 33.8715H15.0412V30.108C15.0412 29.1099 15.4374 28.1526 16.1426 27.4468C16.8478 26.741 17.8042 26.3445 18.8015 26.3445H33.8428C34.8401 26.3445 35.7965 26.741 36.5017 27.4468C37.2069 28.1526 37.6031 29.1099 37.6031 30.108V31.7621C36.8014 31.7607 36.0086 31.9303 35.2775 32.2597C34.5464 32.589 33.8939 33.0705 33.3633 33.6721L33.3182 33.7247L33.0606 34.0484L30.4735 37.635H6.58054C4.83527 37.635 3.16148 36.9411 1.92739 35.706C0.693305 34.4709 0 32.7956 0 31.0489V6.58613ZM33.8428 15.054C33.8428 17.0503 33.0504 18.9648 31.64 20.3764C30.2296 21.788 28.3167 22.581 26.3221 22.581C24.3276 22.581 22.4147 21.788 21.0043 20.3764C19.5939 18.9648 18.8015 17.0503 18.8015 15.054C18.8015 13.0577 19.5939 11.1432 21.0043 9.73161C22.4147 8.32003 24.3276 7.527 26.3221 7.527C28.3167 7.527 30.2296 8.32003 31.64 9.73161C33.0504 11.1432 33.8428 13.0577 33.8428 15.054ZM44.5333 18.8401C44.9496 18.0877 45.6108 17.5007 46.4068 17.1768C47.2029 16.8529 48.0857 16.8117 48.9084 17.06L50.2565 17.4664L50.6175 17.5868C51.7342 17.9957 52.7193 18.6998 53.4681 19.6242C54.217 20.5487 54.7016 21.6589 54.8704 22.8369C55.4288 26.7284 54.1804 31.2785 51.1703 36.4966C48.1677 41.7015 44.8623 45.0548 41.2242 46.5225C40.0553 46.9941 38.7757 47.1197 37.5375 46.8845C36.2992 46.6493 35.1546 46.0632 34.2395 45.1959L33.2204 44.2287L32.9911 43.9916C32.4243 43.3516 32.0923 42.5376 32.0496 41.6835C32.0068 40.8294 32.256 39.9863 32.756 39.2928L35.3074 35.7551L35.4785 35.5406C35.8368 35.1342 36.3045 34.8397 36.8256 34.6922C37.3467 34.5447 37.8993 34.5505 38.4172 34.7089L42.2734 35.8888L42.373 35.9076H42.4539C42.9145 35.8568 43.8508 34.9253 45.0015 32.9306C46.28 30.7139 46.5432 29.4174 46.1916 29.0825L44.2306 27.2534L43.9806 27.0031C43.3563 26.326 42.9447 25.4802 42.7969 24.5708C42.6492 23.6615 42.7718 22.7287 43.1495 21.8885L44.3942 19.1205L44.5333 18.8401Z" fill="black"/>
                    </svg>
                    <!-- <img src="img/call.svg" alt="createAccount" /> -->
                </div>
                <div class="cardTitle">
                    <h5>Study 1 on 1</h5>
                </div>
                <div class="CardSubtitle">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem
                        ipsum dolor
                    </p>
                </div>
                <div class="label3"><p>step 4</p></div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class = "container">
        <div class = "row chooseuscontent">
            <div class = "col-lg-6 col-md-6 col-sm-12">
                <p class = "whychooseus">Why choose us</p>
                <h2 class = "tagline">What You <span style="color: #8127B9;">Choose</span> also<br> Choose You</h2>
            </div>
            <div class = "col-lg-6 col-md-6 col-sm-12">
                <p class = "textchooseus">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit</p>
            </div>
        </div>
    </div>
    <div class = "container">
        <div class = "row chooseus">
            <div class = "col-lg-4 col-md-6 col-sm-12">
                <div class = "common">
                    <div class = "d-flex align-items-center justify-content-center"><img src="{{asset('landing/img/legit_toppers.svg')}}" alt="Legit Toppers"></div>
                    <div class="text-center mt-4"><h1 class = "title1">Legit Toppers</h1></div>
                    <div class="text-center mt-3"><p class = "des">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div>
                </div>
            </div>
            <div class = "col-lg-4 col-md-6 col-sm-12">
                <div class = "common">
                    <div class = "d-flex align-items-center justify-content-center"><img src="{{asset('landing/img/11_sessions.svg')}}" alt="Legit Toppers"></div>
                    <div class="text-center mt-4"><h1 class = "title1">1:1 Sessions</h1></div>
                    <div class="text-center mt-3"><p class = "des">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div>
                </div>
            </div>
            <div class = "col-lg-4 col-md-6 col-sm-12">
                <div class = "common">
                    <div class = "d-flex align-items-center justify-content-center"><img src="{{asset('landing/img/personal_study.svg')}}" alt="Legit Toppers"></div>
                    <div class="text-center mt-4"><h1 class = "title1">Personal Study</h1></div>
                    <div class="text-center mt-3"><p class = "des">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="carouselitem">
        <div class="container">
            <div class="row">
                <div class = "row chooseuscontent">
                    <div class = "col-lg-6 col-md-6 col-sm-12">
                        <p class = "whychooseus">Our Mentors</p>
                        <h2 class = "tagline">We Have The <span class="highlightText">Best Mentors</span> For Your Studies</h2>
                    </div>
                    <div class = "col-lg-6 col-md-6 col-sm-12">
                        <p class = "textchooseus">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider">
            <div class="">
                <div class="owl-carousel owl-theme sliderwrapper">
                    <div class="item">
                        <div class="sliderCard">
                            <div>
                                <img src="{{asset('landing/img/item1.png')}}" alt="">
                            </div>
                            <div class="cardcontent">
                                <h5>Sameer Ahuja</h5>
                                <div class="rating">
                                    <div class="starimg">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                    </div>
                                    <div>
                                        <p>(4000)</p>
                                    </div>
                                </div>
                                <p class="Specialties">Specialties in :</p>
                                <p class="textexam">GATE Exam, IIT Physics, Maths, Chemistry</p>
                                <div class="knowmore">
                                    <p>know more</p>
                                    <img src="{{asset('landing/img/green arrrow.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="sliderCard">
                            <div>
                                <img src="{{asset('landing/img/item1.png')}}" alt="">
                            </div>
                            <div class="cardcontent">
                                <h5>Sameer Ahuja</h5>
                                <div class="rating">
                                    <div class="starimg">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                    </div>
                                    <div>
                                        <p>(4000)</p>
                                    </div>
                                </div>
                                <p class="Specialties">Specialties in :</p>
                                <p class="textexam">GATE Exam, IIT Physics, Maths, Chemistry</p>
                                <div class="knowmore">
                                    <p>know more</p>
                                    <img src="{{asset('landing/img/green arrrow.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="sliderCard">
                            <div>
                                <img src="{{asset('landing/img/item1.png')}}" alt="">
                            </div>
                            <div class="cardcontent">
                                <h5>Sameer Ahuja</h5>
                                <div class="rating">
                                    <div class="starimg">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                    </div>
                                    <div>
                                        <p>(4000)</p>
                                    </div>
                                </div>
                                <p class="Specialties">Specialties in :</p>
                                <p class="textexam">GATE Exam, IIT Physics, Maths, Chemistry</p>
                                <div class="knowmore">
                                    <p>know more</p>
                                    <img src="{{asset('landing/img/green arrrow.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="sliderCard">
                            <div>
                                <img src="img/item1.png" alt="">
                            </div>
                            <div class="cardcontent">
                                <h5>Sameer Ahuja</h5>
                                <div class="rating">
                                    <div class="starimg">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                    </div>
                                    <div>
                                        <p>(4000)</p>
                                    </div>
                                </div>
                                <p class="Specialties">Specialties in :</p>
                                <p class="textexam">GATE Exam, IIT Physics, Maths, Chemistry</p>
                                <div class="knowmore">
                                    <p>know more</p>
                                    <img src="{{asset('landing/img/green arrrow.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="sliderCard">
                            <div>
                                <img src="{{asset('landing/img/item1.png')}}" alt="">
                            </div>
                            <div class="cardcontent">
                                <h5>Sameer Ahuja</h5>
                                <div class="rating">
                                    <div class="starimg">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                    </div>
                                    <div>
                                        <p>(4000)</p>
                                    </div>
                                </div>
                                <p class="Specialties">Specialties in :</p>
                                <p class="textexam">GATE Exam, IIT Physics, Maths, Chemistry</p>
                                <div class="knowmore">
                                    <p>know more</p>
                                    <img src="{{asset('landing/img/green arrrow.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="sliderCard">
                            <div>
                                <img src="{{asset('landing/img/item1.png')}}" alt="">
                            </div>
                            <div class="cardcontent">
                                <h5>Sameer Ahuja</h5>
                                <div class="rating">
                                    <div class="starimg">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                    </div>
                                    <div>
                                        <p>(4000)</p>
                                    </div>
                                </div>
                                <p class="Specialties">Specialties in :</p>
                                <p class="textexam">GATE Exam, IIT Physics, Maths, Chemistry</p>
                                <div class="knowmore">
                                    <p>know more</p>
                                    <img src="{{asset('landing/img/green arrrow.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="sliderCard">
                            <div>
                                <img src="{{asset('landing/img/item1.png')}}" alt="">
                            </div>
                            <div class="cardcontent">
                                <h5>Sameer Ahuja</h5>
                                <div class="rating">
                                    <div class="starimg">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                    </div>
                                    <div>
                                        <p>(4000)</p>
                                    </div>
                                </div>
                                <p class="Specialties">Specialties in :</p>
                                <p class="textexam">GATE Exam, IIT Physics, Maths, Chemistry</p>
                                <div class="knowmore">
                                    <p>know more</p>
                                    <img src="{{asset('landing/img/green arrrow.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="sliderCard">
                            <div>
                                <img src="{{asset('landing/img/item1.png')}}" alt="">
                            </div>
                            <div class="cardcontent">
                                <h5>Sameer Ahuja</h5>
                                <div class="rating">
                                    <div class="starimg">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                    </div>
                                    <div>
                                        <p>(4000)</p>
                                    </div>
                                </div>
                                <p class="Specialties">Specialties in :</p>
                                <p class="textexam">GATE Exam, IIT Physics, Maths, Chemistry</p>
                                <div class="knowmore">
                                    <p>know more</p>
                                    <img src="{{asset('landing/img/green arrrow.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="sliderCard">
                            <div>
                                <img src="{{asset('landing/img/item1.png')}}" alt="">
                            </div>
                            <div class="cardcontent">
                                <h5>Sameer Ahuja</h5>
                                <div class="rating">
                                    <div class="starimg">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                    </div>
                                    <div>
                                        <p>(4000)</p>
                                    </div>
                                </div>
                                <p class="Specialties">Specialties in :</p>
                                <p class="textexam">GATE Exam, IIT Physics, Maths, Chemistry</p>
                                <div class="knowmore">
                                    <p>know more</p>
                                    <img src="{{asset('landing/img/green arrrow.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="sliderCard">
                            <div>
                                <img src="{{asset('landing/img/item1.png')}}" alt="">
                            </div>
                            <div class="cardcontent">
                                <h5>Sameer Ahuja</h5>
                                <div class="rating">
                                    <div class="starimg">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                    </div>
                                    <div>
                                        <p>(4000)</p>
                                    </div>
                                </div>
                                <p class="Specialties">Specialties in :</p>
                                <p class="textexam">GATE Exam, IIT Physics, Maths, Chemistry</p>
                                <div class="knowmore">
                                    <p>know more</p>
                                    <img src="{{asset('landing/img/green arrrow.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="sliderCard">
                            <div>
                                <img src="{{asset('landing/img/item1.png')}}" alt="">
                            </div>
                            <div class="cardcontent">
                                <h5>Sameer Ahuja</h5>
                                <div class="rating">
                                    <div class="starimg">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                        <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                    </div>
                                    <div>
                                        <p>(4000)</p>
                                    </div>
                                </div>
                                <p class="Specialties">Specialties in :</p>
                                <p class="textexam">GATE Exam, IIT Physics, Maths, Chemistry</p>
                                <div class="knowmore">
                                    <p>know more</p>
                                    <img src="{{asset('landing/img/green arrrow.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sliderCard">
                        <div>
                            <img src="{{asset('landing/img/item1.png')}}" alt="">
                        </div>
                        <div class="cardcontent">
                            <h5>Sameer Ahuja</h5>
                            <div class="rating">
                                <div class="starimg">
                                    <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                    <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                    <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                    <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                    <img src="{{asset('landing/img/Star 1.svg')}}" alt="">
                                </div>
                                <div>
                                    <p>(4000)</p>
                                </div>
                            </div>
                            <p class="Specialties">Specialties in :</p>
                            <p class="textexam">GATE Exam, IIT Physics, Maths, Chemistry</p>
                            <div class="knowmore">
                                <p>know more</p>
                                <img src="{{asset('landing/img/green arrrow.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Topperbtnwrapperslider">
            <button class="Topperbtn">Explore More !</button>
        </div>
    </div>
    </div>
</section>
</section>
<section>
    <div class="container">
        <div class="BenefitsWrapper">
            <p class = "Benefits">How it Benefits Toppers</p>
            <h2 class = "Platform">A Platform Trusted By <br>100+<span style="color: #8127B9;">Toppers</span></h2>
        </div>
        <div class = "container">
            <div class = "row ToppersContent m-3">
                <div class = "col-lg-3 col-md-6 col-sm-12 ToppersContentcard">
                    <div class = "commonfisrt">
                        <div class = "d-flex align-items-center justify-content-center"><img src="{{asset('landing/img/1.svg')}}" alt="Legit Toppers"></div>
                        <div class="text-center mt-4"><h1 class ="Flexible">Flexible Classes</h1></div>
                        <div class="text-center mt-3"><p class = "des">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div>
                    </div>
                </div>
                <div class = "col-lg-3 col-md-6 col-sm-12 ToppersContentcard">
                    <div class = "common1">
                        <div class = "d-flex align-items-center justify-content-center"><img src="{{asset('landing/img/2.svg')}}" alt="Legit Toppers"></div>
                        <div class="text-center mt-4"><h1 class ="Monetizations">Monetizations</h1></div>
                        <div class="text-center mt-3"><p class = "des">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div>
                    </div>
                </div>
                <div class = "col-lg-3 col-md-6 col-sm-12 ToppersContentcard">
                    <div class = "common1">
                        <div class = "d-flex align-items-center justify-content-center"><img src="{{asset('landing/img/3.svg')}}" alt="Legit Toppers"></div>
                        <div class="text-center mt-4"><h1 class ="Easy">Easy User Interface</h1></div>
                        <div class="text-center mt-3"><p class = "des">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div>
                    </div>
                </div>
                <div class = "col-lg-3 col-md-6 col-sm-12 ToppersContentcard">
                    <div class = "common1">
                        <div class = "d-flex align-items-center justify-content-center"><img src="{{asset('landing/img/4.svg')}}" alt="Legit Toppers"></div>
                        <div class="text-center mt-4"><h1 class ="Security">100% Security</h1></div>
                        <div class="text-center mt-3"><p class = "des">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div>
                    </div>
                </div>
            </div>

            <div class="Topperbtnwrapper">
                <button class="Topperbtn">Sign Up as Topper</button>
            </div>
        </div>
    </div>
</section>
<section class="TestimonialsSection">
    <div class = "container containerWrapper">
        <div class="row">
            <div class="TestimonialsWrapper">
                <p class = "Testimonialstext">Testimonials</p>
                <h2 class = "Saying">See What Others Are Saying<br><span style="color: #8127B9;">About Us</span></h2>
            </div>
        </div>
        <div class="row testwrapper">
            <div class="col-xl-3  col-lg-6 col-md-6 col-sm-12 p-0 TestimonialsCard">
                <div class="Testimonials1">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{asset('landing/img/Prerna.png')}}" alt="Legit Toppers" />
                    </div>
                    <div class="text-center mt-4"><h1 class="title2">Prerna</h1></div>
                    <div class="line">
                        <p class="preparations">Gate Preparations</p>
                    </div>
                    <div class="text-center mt-3">
                        <p class="des2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem
                            ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 p-0 TestimonialsCard">
                <div class="Testimonials">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{asset('landing/img/Kuldeep.png')}}" alt="Legit Toppers" />
                    </div>
                    <div class="text-center mt-4">
                        <h1 class="title2">Kuldeep</h1>
                    </div>
                    <div class="line">
                        <p class="preparations">IIT Preparations</p>
                    </div>
                    <div class="text-center mt-3">
                        <p class="des2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem
                            ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 p-0 TestimonialsCard">
                <div class="Testimonials">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{asset('landing/img/Kuldeep.png')}}" alt="Legit Toppers" />
                    </div>
                    <div class="text-center mt-4">
                        <h1 class="title2">Kuldeep</h1>
                    </div>
                    <div class="line">
                        <p class="preparations">IIT Preparations</p>
                    </div>
                    <div class="text-center mt-3">
                        <p class="des2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem
                            ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 p-0 TestimonialsCard">
                <div class="Testimonials">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{asset('landing/img/Shweta.png')}}" alt="Legit Toppers" />
                    </div>
                    <div class="text-center mt-4"><h1 class="title2">Shweta</h1></div>
                    <div class="line">
                        <p class="preparations">Gate Preperations</p>
                    </div>
                    <div class="text-center mt-3">
                        <p class="des3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem
                            ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</section>
<section>
    <div class="container">  <div class="faqs">
            <p class = "faq">FAQ</p>
            <h2 class = "question">Have Any <span style="color: #8127B9;">Questions </span>In Mind? <br>Just Ask Us</h2>
        </div>
        <div class = "container faqsWrapper">
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button faqquestion" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            How does this work?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <p class = "faqanswer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed faqquestion" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            Is there any course prerecorded?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            <p class ="faqanswer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed faqquestion" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Are the tutors qualified? what is their qualification
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            <p class ="faqanswer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                        <button class="accordion-button collapsed faqquestion" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                            How can i apply for tutors?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                        <div class="accordion-body">
                            <p class ="faqanswer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                        <button class="accordion-button collapsed faqquestion" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                            Will there be any group session ?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                        <div class="accordion-body">
                            <p class ="faqanswer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div></div>
</section>
<section class="overflow-hidden">
    <div class="row">
        <div class = "col-lg-6 col-md-12 col-sm-12 herosignuptopper d-flex  flex-column justify-content-lg-around justify-content-between">
            <div class="TutorBenefits">
                <h2 class = "Titleherotopper">Get all the Tutor Benefits</h2>
                <p class="pherotopper">Love this platform! Does exactly what it is supposed to do and so far without any real issues. i am learning a lot from the tutors im taking class with. </p>
            </div>
            <div class="d-flex  justify-content-lg-end justify-content-center">
                <button class="buttonherotopper text-end">Sign up as a topper</button>
            </div>
        </div>
        <div class = "col-lg-6 col-md-12 col-sm-12 herosignupstudent d-flex  flex-column justify-content-lg-around justify-content-between">
            <div class="StudyBenefits">
                <h2 class = "Titleherostudent">Get all the Study Benefits</h2>
                <p class = "pherostudent">Love this platform! Does exactly what it is supposed to do and so far without any real issues. i am learning a lot from the tutors im taking class with. </p>
            </div>
            <div class="d-flex  justify-content-lg-start justify-content-center">
                <button class = "buttonherostudent">Sign up as a student</button>
            </div>
        </div>
    </div>
</section>
<section class="footersection">
    <div class="container">
        <div class="row footer">
            <div class="col-lg-5 col-md-4 col-sm-12 footerlogoSection">
                <img src="{{asset('landing/img/logo.png')}}" alt="footerlogo" />
                <p class="footertext">
                    Love this platform! Does exactly what it is supposed to do and so
                    far without any real issues. i am learning a lot from the tutors
                    im taking class with.
                </p>
                <div class="socialIcon">
                    <ul>
                        <li>
                            <a href="#"><img src="{{asset('landing/img/plinkldn.svg')}}" alt="" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{asset('landing/img/pfacebook.svg')}}" alt="" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{asset('landing/img/pinstagram.svg')}}" alt="" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{asset('landing/img/purpleTwitter.svg')}}" alt="" /></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12 footerlinks">
                <ul class="footerlist">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">How it works</a></li>
                    <li><a href="#">Mentors</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Faqs</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 Subscribetitle">
                <div class="SubscribeWrapper">
                    <p class="Subscribe">Subscribe us</p>
                    <input type="email" placeholder="Enter your mail id" />
                </div>
            </div>
        </div>
        <hr />
        <div
            class="d-flex align-items-center justify-content-between minifooterWrapper"
        >
            <ul class="minifooter">
                <li><a href="">Terms & conditions</a></li>
                <li><a href="">Privacy</a></li>
                <li><a href="">Accessibility </a></li>
                <li><a href="">Contact Us</a></li>
            </ul>
            <ul class="minifooter">
                <li><a href="">2022 Talk to topper . All rights reserved </a></li>
            </ul>
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
<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1.3
            },
            768:{
                items:2.5
            },
            1240:{
                items:4.2
            }
        }
    })
</script>
</body>
</html>
