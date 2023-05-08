<?php
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
    <title>Get Closer to Success with iPhone App Development Company</title>
    <meta name="description"
        content="iPhone App Development Services to provide you with the best technology solutions to create a powerful app meeting all your needs. Get in touch now." />
    <!-- OG Tags -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Get Closer to Success with iPhone App Development Company" />
    <meta property="og:description"
        content="iPhone App Development Services to provide you with the best technology solutions to create a powerful app meeting all your needs. Get in touch now." />
    <meta property="og:url" content="<?= $url; ?>" />
    <meta property="og:site_name" content="Get Closer to Success with iPhone App Development Company" />
    <!-- Canonical -->
    <link rel="canonical" href="<?= $url; ?>" />
    <!-- Bing Master Verification  -->
    <meta name="msvalidate.01" content="7BBFFA763CEB48CAC0828E22D44DD12B" />
    <!-- Favicon -->
    <link rel="icon" sizes="16x16" alt="favicon" title="favicon" href="<?= $url; ?>/src/media/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="<?= $url; ?>/src/sliders/slick/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= $url; ?>/src/sliders/slick/slick-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= $url; ?>/src/css/grid.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= $url; ?>/src/css/globle.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= $url; ?>/src/css/header.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= $url; ?>/src/css/main.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= $url; ?>/src/css/new.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= $url; ?>/src/css/lp.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= $url; ?>/src/css/footer.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= $url; ?>/src/css/responsive.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= $url; ?>/src/css/application-design.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/SS/home.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/AZ/home.min.css" />
    <!-- Load After Page Load -->
    <script>
        window.onload = () => {
            setTimeout(() => {
                $.getScript("<?= $url; ?>/src/js/chat.min.js");
                $.getScript("<?= $url; ?>/src/js/msclarity.min.js");
            }, 5000);
        }
    </script>
</head>
<body class="main--page iphone--app services--app">
    <?php include('../components/new-header.php'); ?>
    <main>
        <?php include('../components/iphone-app-development/hero-fold.php'); ?>
        <?php include('../components/lp/lp-counter.php'); ?>
        <?php include('../components/iphone-app-development/what-we.php'); ?>
        <?php include('../components/tablet-tabs.php'); ?>
        <?php include('../components/iphone-app-development/benefits-fold.php'); ?>
        <?php include('../components/why-choose.php'); ?>
        <?php include('../components/our-process.php'); ?>
        <?php include('../components/steps-fold.php'); ?>
        <?php include('../components/iphone-app-development/integration-fold.php'); ?>
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
        <?php include('../components/testimonial-fold.php'); ?>
        <?php include('../components/industries-fold.php'); ?>
        <?php include('../components/home-page/integration-offer-fold.php'); ?>
        <?php include('../components/publications-fold.php'); ?>
        <?php include('../components/strategy-session-fold.php'); ?>
        <?php include('../components/why-hire-fold.php'); ?>
        <?php include('../components/faqs-fold.php'); ?>
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
    <!-- What We Slider -->
    <script defer src="<?= $url; ?>/src/sliders/services/services-card.min.js"></script>
    <!-- Benefits Slider -->
    <script defer src="<?= $url; ?>/src/sliders/benefits.min.js"></script>
    <!-- Why Choose Slider -->
    <script defer src="<?= $url; ?>/src/sliders/services/why-choose.min.js"></script>
    <!-- Steps Slider -->
    <script defer src="<?= $url; ?>/src/sliders/steps.min.js"></script>
    <!-- Case Study Slider -->
    <script defer src="<?= $url; ?>/src/sliders/casestudy.min.js"></script>
    <!-- Testimonial Slider -->
    <script defer src="<?= $url; ?>/src/sliders/testimonial.min.js"></script>
    <!-- Publications Slider -->
    <script defer src="<?= $url; ?>/src/sliders/publications.min.js"></script>
    <!-- CaseStudies Tabs -->
    <script defer src="<?= $url; ?>/src/tabs/caseStudiesTabs.min.js"></script>
    <!-- Services Slider -->
    <script defer src="<?= $url; ?>/src/sliders/industries.min.js"></script>
    <!-- Hire Us Slider -->
    <script defer src="<?= $url; ?>/src/sliders/hire-us.min.js"></script>
</body>
</html>