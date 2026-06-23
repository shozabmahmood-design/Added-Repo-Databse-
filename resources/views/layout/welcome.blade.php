<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords"
        content="auto, car, car dealer, car dealership, car listing, cars, classified, dealership, directory, listing, modern, motors, responsive">
    <meta name="description" content="CAREX GROUP">
    <meta name="CAREX" content="CAREX">
    {{-- css files --}}
    <link rel="stylesheet" href='{{ asset('css/bootstrap.min.css') }}'>
    <link rel="stylesheet" href='{{ asset('css/style.css') }}'>
    <link rel="stylesheet" href='{{ asset('css/responsive.css') }}'>
    <!-- Title -->
    <title> @yield('title') | Car EX LLC</title>
    <!-- Favicon -->
    <link href="{{ asset('images/favicon.png') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="{{ asset('images/favicon.png') }}" sizes="128x128" rel="shortcut icon" />


    <!-- Fonts -->

    <!-- Styles -->



</head>

<body class="antialiased">
    <div class="wrapper ovh">
        <!--<div class="preloader"></div>-->
        <!-- Sidebar Panel Start -->
        <div class="listing_sidebar">
            <div class="siderbar_left_home pt20">
                <a class="sidebar_switch sidebar_close_btn float-end" href="#">X</a>
                <div class="footer_contact_widget mt100">
                    <h3 class="title">CAR EX LLC</h3>
                    <p>CAR EX LLC is a specialist in regional and international automotive reexport and supply chain solutions.
                    </p>
                </div>
                <div class="footer_contact_widget">
                    <h5 class="title">CONTACT</h5>
                    <div class="footer_phone" style="font-weight:15px"><span class="flaticon-phone-call"></span>  +971 4 3339433</div>
                    <br>
                    <div class="footer_phone" style="font-weight:15px"><img src = "{{ asset('images/icon/whatsapp2.png') }}" style = "width:35px">  +971 4 3339433</div>
                    <p>carex@eim.ae</p>
                </div>
                <div class="footer_about_widget">
                    <h5 class="title">OFFICE</h5>
                    <p>P.O. Box 36139, SHOW ROOM NO 77 MUNICIPALITY, USED CAR COMPLEX RAS AL KHOR AWIR, DUBAI, United Arab Emirates.
                    </p>
                </div>
               <div class="footer_contact_widget">
                    <h5 class="title">OPENING HOURS</h5>
                    <p>Monday – Thursday: 09:00AM – 07:00PM<br>Friday: 09:00AM – 06:00PM</br><br>Saturday: 09:00AM – 04:00PM<br>Sunday: Closed</p>
                </div> 
            </div>
        </div>
        <!-- Sidebar Panel End -->

        <!-- header top -->
        <div class="header_top dn-992 home3_style" style="background-color:white;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-7">
                        <div class="header_top_contact_opening_widget text-center text-md-start">
                            <ul class="mb0">
                                <li class="list-inline-item"><a href="#"><span class="flaticon-phone-call"></span>+971 4 3339433</a></li>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-map"></span>SHOW ROOM NO. 77 MUNICIPALITY, USED CAR COMPLEX RAS AL KHOR AWIR, DUBAI, UAE test</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-5">
                        <div class="header_top_social_widgets text-center text-md-end">
                            <ul class="m0">
                                <li class="list-inline-item"><a href="#"><span class="fab fa-facebook-f"></span></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="fab fa-instagram"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="fab fa-linkedin"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Nav -->
        <header class="header-nav menu_style_home_one home3_style main-menu">
            <!-- Ace Responsive Menu -->
            <nav>
                <div class="container posr">
                    <!-- Menu Toggle btn-->
                    <div class="menu-toggle">
                        <button type="button" id="menu-btn">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <a href="{{ url('/') }}" class="navbar_brand float-start dn-md" style="margin-top: 0px">
                        <img class="logo img-fluid" src="{{ asset('images/header-logo5.png') }}" alt="header-logo2.png" style="width: 200px;">
                    </a>
                    <!-- Responsive Menu Structure-->
                    <ul id="respMenu" class="ace-responsive-menu menu_list_custom_code wa text-end" data-menu-style="horizontal">
                        <li> <a href="{{ url('/') }}"><span class="title">Home</span></a></li>
                        <li> <a href="{{ url('/products') }}"><span class="title">Vehicles</span></a></li>
                        <li> <a href="{{ url('/blogs') }}"><span class="title">Blog</span></a></li>
                        <li> <a href="{{ url('/about-us') }}"><span class="title">About Us</span></a></li>
                        <li> <a href="{{ url('/contact-us') }}"><span class="title">Contact Us</span></a></li>
                        <li class="sidebar_panel"><a class="sidebar_switch pt0" href="#"><span></span></a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Main Header Nav For Mobile -->
        <div id="page" class="stylehome1 h0">
            <div class="mobile-menu">
                <div class="header stylehome1">
                    <div class="mobile_menu_bar">
                        <a class="menubar" href="#menu"><small>Menu</small><span></span></a>
                    </div>
                    <div class="mobile_menu_main_logo"><img class="nav_logo_img img-fluid" src="{{ asset('images/header-logo5.png') }}"
                            alt="images/header-logo2.png" style = "width:130px;"></div>
                </div>
            </div>
            <!-- /.mobile-menu -->
            <nav id="menu" class="stylehome1">
                <ul>
                    <li> <a href="{{ url('/') }}"><span class="title">Home</span></a></li>
                    <li> <a href="{{ url('/products') }}"><span class="title">Vehicles</span></a></li>
                    <li> <a href="{{ url('/blogs') }}"><span class="title">Blog</span></a></li>
                    <li> <a href="{{ url('/about-us') }}"><span class="title">About Us</span></a></li>
                    <li> <a href="{{ url('/contact-us') }}"><span class="title">Contact Us</span></a></li>
                    <li class="sidebar_panel"><a class="sidebar_switch pt0" href="#"><span></span></a></li>
                    <!-- Only for Mobile View -->
                    <li class="mm-add-listing">
                        <span class="border-none">
                            <span class="mmenu-contact-info">
                                <span class="phone-num"><i class="flaticon-map"></i> <a href="#">SHOW ROOM NO. 77 MUNICIPALITY, USED CAR COMPLEX RAS AL KHOR AWIR, DUBAI, UAE</a></span>
                                <span class="phone-num"><i class="flaticon-phone-call"></i> <a
                                        href="#">>+971 4 3339433</a></span>
                            </span>
                            <span class="social-links">
                                <a href="#"><span class="fab fa-facebook-f"></span></a>
                                <a href="#"><span class="fab fa-twitter"></span></a>
                                <a href="#"><span class="fab fa-instagram"></span></a>
                                <a href="#"><span class="fab fa-youtube"></span></a>
                                <a href="#"><span class="fab fa-pinterest"></span></a>
                            </span>
                        </span>
                    </li>
                </ul>
            </nav>
        </div>

        @yield('content')


        <!-- Our Footer -->
        <section class="footer_one pt50 pb25">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xl-7">
                        <div class="footer_about_widget text-start">
                            <div class="logo mb40 mb0-sm"><img src="{{ asset('images/header-logo6.png') }}" alt="header-logo.png" style="width: 200px">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xl-5">
                        <div class="footer_menu_widget text-start text-md-end mt15">
                            <ul>
                                <li class="list-inline-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="list-inline-item"><a href="{{ url('/products') }}">Vehicles</a></li>
                                <li class="list-inline-item"><a href="{{ url('/blogs') }}">Blog</a></li>
                                <li class="list-inline-item"><a href="{{ url('/about-us') }}">About us</a></li>
                                <li class="list-inline-item"><a href="{{ url('/contact-us') }}">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container pt80 pt20-sm pb70 pb0-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3">
                        <div class="footer_about_widget">
                            <h5 class="title">OFFICE</h5>
                            <p>United Arab Emirate —<br>SHOW ROOM NO. 77 MUNICIPALITY CAR COMPLEX RAS AL KHOR AWIR,<br>DUBAI,</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3">
                        <div class="footer_contact_widget">
                            <h5 class="title">NEED HELP</h5>
                            <div class="footer_phone" style="font-weight:15px"><span class="flaticon-phone-call"></span>  +971 4 3339433</div>
                            <br>
                            <div class="footer_phone" style="font-weight:15px"><img src = "{{ asset('images/icon/whatsapp2.png') }}" style = "width:35px">  +971 4 3339433</div>
                            <p>carex@eim.ae</p>
                        </div>
                    </div>
                         <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3">
                            <div class="footer_contact_widget">
                                  <h5 class="title">OPENING HOURS</h5>
                    <p>Monday – Thursday: 09:00AM – 07:00PM<br>Friday: 09:00AM – 06:00PM</br><br>Saturday: 09:00AM – 04:00PM<br>Sunday: Closed</p>
                            </div>
                        </div> 
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="footer_contact_widget">
                            <h5 class="title">KEEP IN TOUCH</h5>
                            <form class="footer_mailchimp_form">
                                <div class="wrapper">
                                    <div class="col-auto">
                                        <input type="email" class="form-control" placeholder="Enter your email...">
                                        <button type="submit">GO</button>
                                    </div>
                                </div>
                            </form>
                            <p>Get latest updates and offers.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-8 col-xl-9">
                        <div class="copyright-widget mt5 text-start mb20-sm">
                            <p>

                                © <?php echo date("Y"); ?>.
                                All Rights Reserved.

                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="footer_social_widget text-start text-md-end">
                            <ul class="mb0">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <a class="scrollToHome" href="#"><i class="fas fa-arrow-up"></i></a>
        <!-- <link href="/images/whatsapp.png" /> -->
        @php 
        use App\Models\Setting;
        $setting = Setting::find(1);
        $phone=$setting->businessPhone
        // href="https://api.whatsapp.com/send/?phone={{ $phone }}&text=Hello%20Carex%20llc,%20I%20have%20some%20car%20inquiry."   target="_blank" 
        @endphp
        <input type="text" id="company" value="{{$phone ? $phone:''}}" hidden>
       <a type="button"  onclick="openModal()" style="position: fixed; bottom: 0px;  z-index: 99999;">
           <img  src="{{ asset('images/whatsapp.png') }}" alt="" style="height: 50px; margin: 15px;  z-index: 99999 ;">
           
       </a>
        
        <!-- WhatsApp Chat Modal  -->
        <div class="modal fade" id="whatsappModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Please Enter Your Details</h5>
                  <button type="button" onclick="closeModal()" style="background:none; border:none;">
                    <span aria-hidden="true" style="font-size: 25px;">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                      <div class="row">
                            <div class="col-12 form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                                <span class="text-danger" id="name-err"></span>
                            </div>
                            <div class="col-12 form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" id="email" name="email" required>
                                <span class="text-danger" id="email-err"></span>
                            </div>
                            <div class="col-12 form-group">
                                <label for="">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                                <span class="text-danger" id="phone-err"></span>
                            </div>
                            @php
                                $message=''
                            @endphp
                            <div class="col-12 form-group">
                                <label for="">Message</label>
                                <textarea type="text" class="form-control" id="message" rows="5" name="message" style="resize:none;" required>Hi! I need to ask you about a car I have seen on carexllc.com</textarea>
                                <span class="text-danger" id="message-err"></span>
                            </div>
                      </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" onclick="closeModal()">Close</button>
                  <a type="button" onclick="saveMessage()"  class="btn btn-primary">Send Message</a>
                </div>
              </div>
            </div>
        </div>
    </div>
    <!-- Wrapper End -->
    


    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mmenu.all.js') }}"></script>
    <script src="{{ asset('js/ace-responsive-menu.js') }}"></script>
    <script src="{{ asset('js/isotop.js') }}"></script>
    <script src="{{ asset('js/snackbar.min.js') }}"></script>
    <script src="{{ asset('js/simplebar.js') }}"></script>
    <script src="{{ asset('js/parallax.js') }}"></script>
    <script src="{{ asset('js/scrollto.js') }}"></script>
    <script src="{{ asset('js/jquery-scrolltofixed-min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/progressbar.js') }}"></script>
    <script src="{{ asset('js/slider.js') }}"></script>
    <script src="{{ asset('js/timepicker.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- Custom script for all pages -->
    <script src="{{ asset('js/script.js') }}"></script>
    
</body>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    function openModal() {
        
        $('#whatsappModal').modal('show');
    }

    function closeModal() {
        
        $('#whatsappModal').modal('hide');
    }

    function saveMessage() {
        let company = $("#company").val();
        let name = $('#name').val();
        let email = $('#email').val();
        let phone = $('#phone').val();
        let message = $('#message').val();
        console.log(name);

        $("#name-err").html('');
        $("#email-err").html('')
        $("#phone-err").html('');
        $("#message-err").html('');
        
        const options = {
            url: 'https://carexllc.com/api/whatsapp',
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json;charset=UTF-8'
            },
            data: {
                name: name,
                email: email,
                phone: phone,
                message: message,
            }

            
        };

        axios(options)
        .then(response => {
            $('#whatsappModal').modal('hide');
            console.log(response.data);
            window.open(`https://api.whatsapp.com/send/?phone=${company}&text=${message}&type=phone_number&app_absent=0`, "_blank");
        })
        .catch(err => {
            console.log(err.response.data.errors);
            const errors = err.response.data.errors
            if(errors.name){
                $("#name-err").html(errors.name[0]);
            }
            if(errors.email){
                $("#email-err").html(errors.email[0]);
            }
            if (errors.phone) {
                $("#phone-err").html(errors.phone[0]);                
            }
            if (errors.message) {
                $("#message-err").html(errors.message[0]);                
            }
		})     
    }
</script>
</html>
