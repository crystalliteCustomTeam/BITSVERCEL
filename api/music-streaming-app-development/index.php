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
    <title>Our Attempt On Music Streaming App Development : Case Study</title>
    <meta name="description"
        content="Your chance to get insights into how we made a music streaming app! This details the music streaming app development process from start to finish." />
    <!-- OG Tags -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Our Attempt On Music Streaming App Development : Case Study" />
    <meta property="og:description"
        content="Your chance to get insights into how we made a music streaming app! This details the music streaming app development process from start to finish." />
    <meta property="og:url" content="<?= $url; ?>" />
    <meta property="og:site_name" content="Our Attempt On Music Streaming App Development : Case Study" />
    <!-- Canonical -->
    <link rel="canonical" href="<?= $url; ?>" />
    <!-- Bing Master Verification  -->
    <meta name="msvalidate.01" content="7BBFFA763CEB48CAC0828E22D44DD12B" />
    <!-- Favicon -->
    <link rel="icon" sizes="16x16" alt="favicon" title="favicon" href="<?= $url; ?>/src/media/favicon.ico" />
    <link rel="stylesheet" href="<?= $url; ?>/src/sliders/slick/slick.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/sliders/slick/slick-theme.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/grid.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/globle.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/header.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/main.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/new.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/lp.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/footer.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/responsive.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/soul-sound.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/application-design.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/SS/home.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/AZ/home.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/works-responsiveness.min.css" />
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
<body class="main--page iphone--app services--app">
    <?php include('../components/new-header.php'); ?>
    <main>
        <?php 
            include('../components/soul-sound/banner.php');
            include('../components/soul-sound/overview.php');
            include('../components/soul-sound/concept.php');
            include('../components/soul-sound/typeface.php');
            include('../components/soul-sound/process.php');
            include('../components/soul-sound/mobiles.php');
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
    <!-- Works Images Slider -->
    <script defer src="<?= $url; ?>/src/sliders/works/images.min.js"></script>
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