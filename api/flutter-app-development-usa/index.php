<?php
    include('./page-setting.php');
    include('../page-url.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">
    <!-- Title & Description -->
    <title>Innovative Flutter App Development Company In USA - Bitswits</title>
    <meta name="description"
        content="From ideation to launch, our Flutter application development company provides end-to-end services that ensure your app is a success." />
    <!-- OG Tags -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Innovative Flutter App Development Company In USA - Bitswits" />
    <meta property="og:description"
        content="From ideation to launch, our Flutter application development company provides end-to-end services that ensure your app is a success." />
    <meta property="og:url" content="<?= $url; ?>" />
    <meta property="og:site_name" content="Innovative Flutter App Development Company In USA - Bitswits" />
    <!-- Canonical -->
    <link rel="canonical" href="<?= $url; ?>" />
    <!-- Bing Master Verification  -->
    <meta name="msvalidate.01" content="7BBFFA763CEB48CAC0828E22D44DD12B" />
    <!-- Favicon -->
    <link rel="icon" sizes="16x16" alt="favicon" title="favicon" href="<?= $url; ?>/src/media/favicon.ico" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/grid.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/sliders/slick/slick.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/sliders/slick/slick-theme.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/globle.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/header.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/main.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/footer.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/lp.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/flutter-lp.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/web-lp.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/responsive.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/application-design.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/SS/home.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/AZ/home.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/fancybox.min.css" />
    <!-- Load After Page Load -->
    <script>
        window.onload = () => {
            setTimeout(() => {
                $.getScript("<?= $url; ?>/src/js/chat.min.js");
                $.getScript("<?= $url; ?>/src/js/msclarity.min.js");
                $.getScript("<?= $url; ?>/src/js/fancybox.min.js");
            }, 5000);
        }
    </script>
</head>
<body class="main--page landing--page lp_new light--hero flutter-app-usa lpNewStyled">
    <?php include('../components/new-header.php'); ?>
    <main>
        <?php 
            include('../components/flutter-app-development-usa-page/hero-fold.php');
            include('../components/counter-fold.php');
            include('../components/flutter-app-development-usa-page/advantage-fold.php');
            include('../components/flutter-app-development-usa-page/what-we-fold.php');
            include('../components/technologies-stack-fold.php');
        ?>
        <div class="d-md-block d-none">
            <?php
                include('../components/product-ideas-fold.php');
                include('../components/cab-services-fold.php');
                include('../components/food-delivery-fold.php');
            ?>
        </div>
        <div class="d-md-none d-block">
            <?php include('../components/case-studies-mobile-slider.php') ?>
        </div>
        <?php 
            include('../components/home-page/publication.php');
            include('../components/home-page/industries-fold.php');
            include('../components/home-page/why-hire-fold.php');
            include('../components/home-page/integration-offer-fold.php');
            include('../components/home-page/testimonials-fold.php');
            include('../components/video-testimonial-fold.php');
            include('../components/home-page/get-free.php');
            include('../components/home-page/faqs-fold.php');
            include('../components/contact-fold-new-styled.php');
            include('../components/locations-fold-new-styled.php');
        ?>
    </main>
    <?php include('../components/footer-black.php'); ?>
    <!-- jQuery File -->
    <script defer src="<?= $url; ?>/src/js/jquery-3.6.1.min.js"></script>
    <!-- Slick Slider File -->
    <script defer src="<?= $url; ?>/src/sliders/slick/js/slick.min.js"></script>
    <!-- Globle -->
    <script defer src="<?= $url; ?>/src/js/globle.min.js"></script>
    <!-- Partners Slider -->
    <script defer src="<?= $url; ?>/src/sliders/partners.min.js"></script>
    <!-- Awards Slider -->
    <script defer src="<?= $url; ?>/src/sliders/awards.min.js"></script>
    <!-- Counter Slider -->
    <script defer src="<?= $url; ?>/src/sliders/counter.min.js"></script>
    <!-- Services Slider -->
    <script defer src="<?= $url; ?>/src/sliders/services/services-card.min.js"></script>
    <!-- What We Tabs -->
    <script defer src="<?= $url; ?>/src/tabs/what-we.min.js"></script>
    <!-- Technologies Tabs -->
    <script defer src="<?= $url; ?>/src/tabs/technologies.min.js"></script>
    <!-- Case Study Slider -->
    <script defer src="<?= $url; ?>/src/sliders/casestudy.min.js"></script>
    <!-- Publications Slider -->
    <script defer src="<?= $url; ?>/src/sliders/publications.min.js"></script>
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