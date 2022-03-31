<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ Site::config()->site_title, 'DIU Parents Information Page' }} </title>
    <link rel="shortcut icon" href="images/fav.png')}}" type="image/x-icon" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href=" {{ url('assets/theme/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href=" {{ url('assets/theme/css/all.min.css')}}"/>
    <link rel="stylesheet" href=" {{ url('assets/theme/css/owl.carousel.min.css')}}"/>
    <link rel="stylesheet" href=" {{ url('assets/theme/css/owl.theme.default.min.css')}}"/>
    <link rel="stylesheet" href=" {{ url('assets/theme/css/animate.min.css')}}"/>
    <link rel="stylesheet" href=" {{ url('assets/theme/css/aos.css')}}"/>
    <link rel="stylesheet" href=" {{ url('assets/theme/css/style.css')}}"/>
    <link rel="stylesheet" href=" {{ url('assets/theme/css/responsive.css')}}">

    @stack('style')
    @stack('feedback')

</head>
<body>
<!-- ----------------------- preloader start ----------------------- -->
<div id="preloader"></div>
<!-- ----------------------- preloader end ----------------------- -->

<!-- ----------------------- Navbar start ----------------------- -->
@if(Auth::check())
    <!-- ----------------------- Navbar start ----------------------- -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand after_login" href="{{ route('home') }}">
                <img src="{!! Site::config()->logo!=null?Site::config()->logo->getUrl()??url('assets/theme/images//Parents Experience Logo.png'):url('assets/theme/images//Parents Experience Logo.png')!!}" alt="DIU Parents Experience"/>

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('newsfeed')}}" aria-current="page">Newsfeed</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route('profile')}}"><i class="fas fa-pencil-alt"></i>Edit Profile</a></li>
                            <li><a class="dropdown-item" href="{{route('feedback')}}"><i class="fas fa-envelope"></i>Feedback</a></li>

                            <li>
                                <a class="dropdown-item"  href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                                    <i class="fas fa-sign-out-alt"></i>

                                    </i>
                                    {{ trans('global.logout') }}
                                </a>

                            </li>



                        </ul>
                        <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ----------------------- Navbar end ----------------------- -->

@else
    <nav class="navbar sticky-top">
        <div class="container nav-container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{!! Site::config()->logo!=null?Site::config()->logo->getUrl()??url('assets/theme/images//Parents Experience Logo.png'):url('assets/theme/images//Parents Experience Logo.png')!!}" alt="DIU Parents Experience"/>

            </a>
            <div class="sign_button">
                <a class="btn regular_btn" href="{{route('login')}}">Sign In</a>
                <a class="btn regular_btn s_btn" href="{{ route('register') }}">Sign Up</a>
            </div>
        </div>
    </nav>
@endif





<!-- ----------------------- Navbar end ----------------------- -->

@yield('content')
@include('theme.partial.feedback')
<!-- ----------------------- footer start ----------------------- -->
<footer>
    <!-- ------------------------------ Return to Top start ------------------------------ -->
    <a href="javascript:" id="return-to-top">
        <i class="fas fa-chevron-up"></i>
    </a>
    <!-- ------------------------------ Return to Top end ------------------------------ -->
{{--    <div class="container">--}}
{{--        <p class="footer_text">--}}
{{--            {{ Site::config()->site_title, 'Copyright © 2022 Daffodil International University. All Rights Reserved.' }}--}}
{{--        </p>--}}
{{--    </div>--}}

<div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
            <div class="col-lg-4">
                <div class="f_inner">
                    <div class="footer_logo_main">
                        <div class="f_logo">
                            <img src="{!! Site::config()->logo!=null?Site::config()->logo->getUrl()??url('assets/theme/images//Parents Experience Logo.png'):url('assets/theme/images//Parents Experience Logo.png')!!}" alt="DIU Parents Experience"/>

                        </div>
                    </div>

                    <p class="footer_text f_p_top"> {{ Site::config()->copyright??'Copyright © 2022 Daffodil International University. All Rights Reserved.' }}</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="f_inner">
                    <p class="heading_three text_white">Support</p>

                    <div class="f_links f_p_top">
                        <p class="footer_text"><span>Hotline:</span> {{ Site::config()->mobile?? '09617901212' }}</p>
                        <p class="footer_text"><span>Email:</span>{{ Site::config()->mobile??'info@daffodilvarsity.edu.bd' }}</p>
                        <a  class="footer_text" target="_blank" href="https://pd.daffodilvarsity.edu.bd/support_ticket">Helpdesk</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="f_inner">
                    <p class="heading_three text_white">Connect With Us</p>

                    <div class="f_social f_p_top">
                        <a class="social_box" href="https://www.facebook.com/daffodilvarsity.edu.bd" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <a class="social_box" href="https://twitter.com/daffodilvarsity" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>

                        <a class="social_box" href="https://www.instagram.com/daffodil.university/" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>

                        <a class="social_box" href="https://www.youtube.com/user/webmasterdiu" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>

                        <a class="social_box" href="https://www.linkedin.com/company/daffodil-international-university/" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>

                        <a class="social_box" href="https://www.pinterest.com/daffodilvarsity/" target="_blank">
                            <i class="fab fa-pinterest"></i>
                        </a>

                        <a class="social_box" href="https://daffodilvarsity.edu.bd/article/whatsapp" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                        </a>

                        <a class="social_box" href="https://gmail.com/" target="_blank">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>


</footer>
<!-- ----------------------- footer end ----------------------- -->

<script src="{{ url('assets/theme/js/jquery-1.12.4.min.js')}}"></script>

<script>
    // ===== Return to Top ====
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 200) {
            // If page is scrolled more than 200px
            $("#return-to-top").fadeIn(200); // Fade in the arrow
        } else {
            $("#return-to-top").fadeOut(200); // Else fade out the arrow
        }
    });

    $("#return-to-top").click(function () {
        // When arrow is clicked
        $("body,html").animate(
            {
                scrollTop: 0, // Scroll to top of body
            },
            500
        );
    });
</script>

<script src="{{ url('assets/theme/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ url('assets/theme/js/owl.carousel.min.js')}}"></script>
<script src="{{ url('assets/theme/js/aos.js')}}"></script>
<script src="{{ url('assets/theme/js/script.js')}}"></script>

@stack('script')
</body>
</html>
