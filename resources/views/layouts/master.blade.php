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
</head>
<body>
<!-- ----------------------- preloader start ----------------------- -->
<div id="preloader"></div>
<!-- ----------------------- preloader end ----------------------- -->

<!-- ----------------------- Navbar start ----------------------- -->
<nav class="navbar sticky-top">
    <div class="container nav-container">
        <a class="navbar-brand" href="parents-information.html">
            <img src="{{ url('assets/theme/images//Parents Experience Logo.png')}}" alt="DIU Parents Experience"/>
        </a>
    </div>
</nav>


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
            Copyright © 2022 Daffodil International University. All
            Rights Reserved.
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
</body>
</html>
