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
                <img src="{{ url('assets/theme/images//Parents Experience Logo.png')}}" alt="DIU Parents Experience"/>
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
                <img src="{{ url('assets/theme/images//Parents Experience Logo.png')}}" alt="DIU Parents Experience"/>
            </a>
        </div>
    </nav>
@endif





<!-- ----------------------- Navbar end ----------------------- -->

@yield('content')

<!-- ----------------------- footer start ----------------------- -->
<footer>
    <!-- ------------------------------ Return to Top start ------------------------------ -->
    <a href="javascript:" id="return-to-top">
        <i class="fas fa-chevron-up"></i>
    </a>
    <!-- ------------------------------ Return to Top end ------------------------------ -->
    <div class="container">
        <p class="footer_text">
            {{ Site::config()->site_title, 'Copyright © 2022 Daffodil International University. All Rights Reserved.' }}
        </p>
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
