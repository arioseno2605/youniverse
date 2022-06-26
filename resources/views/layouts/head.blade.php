<!DOCTYPE html>
<html lang="en">
    <?php
    session_start ( ) ;
    ?>

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
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
	  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    


    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <script src="{{ asset('assets/js/adminguest.js')}}"></script>
    @stack('scripts')
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
  
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                    <a href="index.html">
                    <h4 class="cl-white"><b>Kapanlagi</B></h4>
                    <h4 class="cl-white"><b>Youniverse</B></h4>
                    </a>
                    </div>
                    <ul class="menu ml-auto">
                 
                        |
                        <li>
                            <a href="{{ route('index') }}" >Admin Page</a>
                        </li>       
                    |
                         <li>
                            <a href="{{ route('guest') }}" >List Guest Book</a>
                        </li>     
                        |   
                        <li>
                            <a href="{{ url('/logout') }}" >Keluar</a>
                        </li>   
                        |   
                      @if (auth()->user())
                    <li>
                        <a href="{{route('dashboard')}}">Dashboard</a>
                    </li>

                            <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </li>
                                   @endif
                    </ul>
                    
                   
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--============= Header Section Ends Here =============-->
    <!--============= Cart Section Starts Here =============-->
               
                    </div>
                </div>
         


            
            @yield('content')


  


        </div>
        </div>
                </div>
            </div>
        </div>
    </footer>
    <!--============= Footer Section Ends Here =============-->

    <script>
        $(function () {
          bsCustomFileInput.init();
        });
        </script>
          <script>
            $('.upgrade').click( function(){
              var usersid = $(this).attr('data-id');
              swal({
        title: "Apa anda yakin ?",
        text: "Kamu akan Mengupgrade account ke Pelelang "+usersid+" ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "/successupgrade/"+usersid+" "
        } else {
          swal("Account gagal di upgrade");
        }
      });
            });
                 </script>
                 <script>
                $(".profile .icon_wrap").click(function(){
  $(this).parent().toggleClass("active");
  $(".notifications").removeClass("active");
});

$(".notifications .icon_wrap").click(function(){
  $(this).parent().toggleClass("active");
   $(".profile").removeClass("active");
});

$(".show_all .link").click(function(){
  $(".notifications").removeClass("active");
  $(".popup").show();
});

$(".close, .shadow").click(function(){
  $(".popup").hide();
});
</script>


                </body>


<!-- Mirrored from pixner.net/sbidu/main/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Oct 2021 13:22:47 GMT -->
</html>