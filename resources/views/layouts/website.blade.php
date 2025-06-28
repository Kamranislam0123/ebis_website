<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Nova Free Bootstrap Template for Agency &mdash; by FreeBootstrap.net </title>

    <!-- ======= Google Font =======-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet">
    <!-- End Google Font-->

    <!-- ======= Styles =======-->
    <link href="assets/vendors/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="assets/vendors/glightbox/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendors/aos/aos.css" rel="stylesheet">
    <!-- End Styles-->

    <!-- ======= Theme Style =======-->
    <link href="assets/css/style.css" rel="stylesheet">
    @vite(entrypoints: 'resources/css/app.css')
    @stack('website-css')
    <!-- End Theme Style-->

    <!-- ======= Apply theme =======-->
    <script>
        // Apply the theme as early as possible to avoid flicker
        (function() {
            const storedTheme = localStorage.getItem('theme') || 'light';
            document.documentElement.setAttribute('data-bs-theme', storedTheme);
        })();
    </script>
</head>

<body>


    <!-- ======= Site Wrap =======-->
    <div class="site-wrap">


        @include('partial.header')

        <!-- ======= Main =======-->
        <main>
            @yield(section: 'website-contents')

            <!-- ======= Footer =======-->

            @include('partial.footer')
        </main>
    </div>

    <!-- ======= Back to Top =======-->
    <button id="back-to-top"><i class="bi bi-arrow-up-short"></i></button>
    <!-- End Back to top-->

    <!-- ======= Javascripts =======-->
    <script src="{{ asset('/') }}assets/vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/gsap/gsap.min.js"></script>
    <script src="assets/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/vendors/glightbox/glightbox.min.js"></script>
    <script src="assets/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendors/aos/aos.js"></script>
    <script src="assets/vendors/purecounter/purecounter.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/send_email.html"></script>

    @vite(entrypoints: 'resources/js/app.js')

    <!-- End JavaScripts-->
</body>

<!-- Mirrored from themewagon.github.io/Nova-Bootstrap/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Jun 2025 05:00:40 GMT -->

</html>