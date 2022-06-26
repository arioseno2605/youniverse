<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/sbidu/main/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Oct 2021 13:23:49 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Kapanlagi Youniverse</title>
   
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
</head>

<body>
    <!--============= ScrollToTop Section Starts Here =============-->
    <div class="overlayer" id="overlayer">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <div class="overlay"></div>
    <!--============= ScrollToTop Section Ends Here =============-->


    <!--============= Header Section Starts Here =============-->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrapper">
                    <ul class="customer-support">
                       
                       
                    </ul>
                    <ul class="cart-button-area">
                                              
                        <li>
                        
                        </li>                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="index.html">
                        <h4 class=" cl-white"><b>Kapanlagi</b></h4>
                        <h4 class=" cl-white"><b>Youniverse</B></h4>
                        </a>
                    </div>
                    <ul class="menu ml-auto">
                        <li>
                         <a></a>
                        </li>
                        <li>
                        <a></a>
                        </li>
                    </ul>
                    
                    <div class="header-bar d-lg-none">
                      
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--============= Header Section Ends Here =============-->

    <!--============= Hero Section Starts Here =============-->
    <div class="hero-section">
        <div class="container">
            <ul class="breadcrumb">
           
            </ul>
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="{{ asset('assets/images/banner/hero-bg.png') }}"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->
    <section class="account-section padding-bottom">
        <div class="container">
            <div class="account-wrapper mt--100 mt-lg--440">
                <div class="left-side">
                    <div class="section-header">
                      
                    </div>
                    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        @error('error')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
        <form method="POST" action="{{ url('/loginPost') }}" class="needs-validation" novalidate="">
            @csrf
            <div class="form-group">
             <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="pass">Password:</label>
                <input type="password" class="form-control" id="pass" name="pass"></input>
            </div>
            <div class="form-group">
                <button type="submit" class="custom-button" >
                  Login
                </button>
                <br></br>
                     <!--ini buat cek doang-->
                       <!-- bacaan 'alert' diambil dari with pass redirect -->
                       @if(\Session::has('alert'))
                        <div class="alert alert-danger">
                           <div>{{Session::get('alert')}}</div>
                        </div>
                       @endif
                        <!-- bacaan 'alert' diambil dari with pass redirect -->
                       @if(\Session::has('alert-success'))
                        <div class="alert alert-success">
                           <div>{{Session::get('alert-success')}}</div>
                        </div>
                       @endif
            </div>
        </form>
                </div>
            </div>
        </div>
    </section>

    <!--============= Footer Section Starts Here =============-->
    <footer class="bg_img padding-top oh" data-background="{{ asset('assets/images/footer/footer-bg.jpg')}}">
        <div class="footer-top-shape">
            <img src="{{ asset('assets/css/img/footer-top-shape.png')}}" alt="css">
        </div>
        <div class="anime-wrapper">
            <div class="anime-1 plus-anime">
                <img src="{{ asset('assets/images/footer/p1.png')}}" alt="footer">
            </div>
            <div class="anime-2 plus-anime">
                <img src="{{ asset('assets/images/footer/p2.png')}}" alt="footer">
            </div>
            <div class="anime-3 plus-anime">
                <img src="{{ asset('assets/images/footer/p3.png')}}" alt="footer">
            </div>
            <div class="anime-5 zigzag">
                <img src="{{ asset('assets/images/footer/c2.png')}}" alt="footer">
            </div>
            <div class="anime-6 zigzag">
                <img src="{{ asset('assets/images/footer/c3.png')}}" alt="footer">
            </div>
            <div class="anime-7 zigzag">
                <img src="{{ asset('assets/images/footer/c4.png')}}" alt="footer">
            </div>
        </div>
        
                </div>
            </div>
        </div>
      
                </div>
            </div>
        </div>
    </footer>
    <!--============= Footer Section Ends Here =============-->

    <script src="{{ asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('assets/js/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/yscountdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>


<!-- Mirrored from pixner.net/sbidu/main/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Oct 2021 13:23:14 GMT -->
</html>
