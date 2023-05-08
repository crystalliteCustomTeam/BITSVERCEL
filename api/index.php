<?php
    include('./page-url.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">
    <!-- Title & Description -->
    <title>Top Mobile App Development Company - Bitswits.</title>
    <meta name="description"
        content="Apps that simplify your life, one click at a time, Bitswits is your go-to destination for professional app developers who can help you bring your ideas to life" />
    <!-- OG Tags -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Top Mobile App Development Company - Bitswits." />
    <meta property="og:description"
        content="Apps that simplify your life, one click at a time, Bitswits is your go-to destination for professional app developers who can help you bring your ideas to life" />
    <meta property="og:url" content="<?= $url; ?>" />
    <meta property="og:site_name" content="Top Mobile App Development Company - Bitswits." />
    <!-- Canonical -->
    <link rel="canonical" href="<?= $url; ?>" />
    <!-- Bing Master Verification  -->
    <meta name="msvalidate.01" content="7BBFFA763CEB48CAC0828E22D44DD12B" />
    <!-- Favicon -->
    <link rel="icon" sizes="16x16" alt="favicon" title="favicon" href="<?= $url; ?>/src/media/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="<?= $url; ?>/src/css/grid.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= $url; ?>/src/sliders/slick/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= $url; ?>/src/sliders/slick/slick-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= $url; ?>/src/css/fancybox.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?= $url; ?>/src/css/globle.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= $url; ?>/src/css/header.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= $url; ?>/src/css/main.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= $url; ?>/src/css/responsive.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= $url; ?>/src/css/application-design.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= $url; ?>/src/css/SS/home.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= $url; ?>/src/css/AZ/home.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= $url; ?>/src/css/footer.min.css" />
    <!-- Google Verification -->
    <meta name="google-site-verification" content="jg7nSxeneqpzOKNtVKXDQRVGjThDC6_7zGXI8wAXqkY" />
    <!-- Google Tag Manager -->
    <script defer src="https://www.googletagmanager.com/gtag/js?id=AW-11114809734"></script>
    <script defer src="<?= $url; ?>/src/js/googletagmanager.min.js"></script>
    <!-- Load After Page Load -->
    <script>
        window.onload = () => {
            setTimeout(() => {
                $.getScript("<?= $url; ?>/src/js/chat.min.js");
                // $.getScript("<?= $url; ?>/src/js/msclarity.min.js");
                // $.getScript("<?= $url; ?>/src/js/fancybox.min.js");
                // $.getScript("https://www.googletagmanager.com/gtag/js?id=AW-11114809734");
                $.getScript("<?= $url; ?>/src/js/googletagmanager.min.js");
            }, 7000);
        }
    </script>
</head>
<body class="main--page application-design home--page newHomePage remove-shadow">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T2JSP4C" height="0" width="0" class="d-none"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="bg-w b-color">
        <?php include('./components/new-header.php'); ?>
    </div>
    <main>
        <?php 
            include('./components/home-page/hero-fold.php');
            include('./components/home-page/awards-fold.php');
            include('./components/home-page/video-fold.php');
            include('./components/home-page/heart-felt-services.php');
            include('./components/home-page/services-fold.php');
            // include('./components/home-page/case-studies-tabs-fold.php');
            include('./components/home-page/publication.php');
            include('./components/home-page/industries-fold.php');
            include('./components/home-page/why-hire-fold.php');
            include('./components/home-page/integration-offer-fold.php');
            include('./components/home-page/testimonials-fold.php');
            include('./components/video-testimonial-fold.php');
            include('./components/home-page/get-free.php');
            include('./components/home-page/faqs-fold.php');
            include('./components/contact-fold-new-styled.php');
            include('./components/locations-fold-new-styled.php');
            include('./components/footer-black.php');
        ?>
    </main>
    <!-- jQuery File -->
    <script defer src="<?= $url; ?>/src/js/jquery-3.6.1.min.js"></script>
    <!-- Slick Slider File -->
    <script defer src="<?= $url; ?>/src/sliders/slick/js/slick.min.js"></script>
    <!-- Globle -->
    <script defer src="<?= $url; ?>/src/js/globle.min.js"></script>
    <!-- Globle -->
    <script defer src="<?= $url; ?>/src/js/home-video.min.js"></script>
    <!-- Home Banner Slider -->
    <script defer src="<?= $url; ?>/src/sliders/home/banner.min.js"></script>
    <!-- Awards Slider -->
    <script defer src="<?= $url; ?>/src/sliders/awards.min.js"></script>
    <!-- Publications Slider -->
    <script defer src="<?= $url; ?>/src/sliders/publications.min.js"></script>
    <!-- Services Slider -->
    <script defer src="<?= $url; ?>/src/sliders/home/services.min.js"></script>
    <!-- CaseStudies Tabs -->
    <script defer src="<?= $url; ?>/src/tabs/caseStudiesTabs.min.js"></script>
    <!-- Services Slider -->
    <script defer src="<?= $url; ?>/src/sliders/industries.min.js"></script>
    <!-- Hire Us Slider -->
    <script defer src="<?= $url; ?>/src/sliders/hire-us.min.js"></script>
    <!-- Testimonial Slider -->
    <script defer src="<?= $url; ?>/src/sliders/testimonial.min.js"></script>
    <!-- Video Testimonial Slider -->
    <script defer src="<?= $url; ?>/src/sliders/video-testimonial.min.js"></script>
    <!-- Locations Slider -->
    <script defer src="<?= $url; ?>/src/sliders/locations.min.js"></script>
</body>

</html>