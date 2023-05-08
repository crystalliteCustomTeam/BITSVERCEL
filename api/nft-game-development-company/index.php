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
    <title>Reliable NFT Game Development Company - Bitswits!</title>
    <meta name="description"
        content="Don't let your game idea go unrealized. Our NFT game developers have the expertise to create games that engage players on every level." />
    <!-- OG Tags -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Reliable NFT Game Development Company - Bitswits!" />
    <meta property="og:description"
        content="Don't let your game idea go unrealized. Our NFT game developers have the expertise to create games that engage players on every level." />
    <meta property="og:url" content="<?= $url; ?>" />
    <meta property="og:site_name" content="Reliable NFT Game Development Company - Bitswits!" />
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
    <link rel="stylesheet" href="<?= $url; ?>/src/css/lp.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/flutter-lp.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/game-dev.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/game-dev-new.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/footer.min.css" />
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
<body class="flutter--app services--app game-dev gameDevNew nftGamePage">
    <?php include('../components/new-header.php'); ?>
    <main>
        <?php include('../components/nft-game-development/hero-fold.php'); ?>
        <div class="d-md-block d-none">
            <?php include('../components/home/form-fold.php'); ?>
        </div>
        <div class="d-md-none d-block">
            <?php include('../components/home/new-form-fold-mobile.php'); ?>
        </div>
        <?php 
            include('../components/lp/lp-counter.php');
            include('../components/nft-game-development/app-features-fold.php');
            include('../components/nft-game-development/nft-game-features.php');
            include('../components/nft-game-development/what-we-fold.php');
            include('../components/nft-game-development/game-demands-fold.php');
            include('../components/nft-game-development/integration-fold.php');
            include('../components/nft-game-development/developers-fold.php');
            include('../components/nft-game-development/gaming-projects-fold.php');
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
    <!-- Counter Slider -->
    <script defer src="<?= $url; ?>/src/sliders/counter.min.js"></script>
    <!-- Services Slider -->
    <script defer src="<?= $url; ?>/src/sliders/services/services-card.min.js"></script>
    <!-- Tools Tabs -->
    <script defer src="<?= $url; ?>/src/tabs/tools.min.js"></script>
    <!-- Tools Slider -->
    <script defer src="<?= $url; ?>/src/sliders/services/tools.min.js"></script>
    <!-- Technologies Tabs -->
    <script defer src="<?= $url; ?>/src/tabs/what-we.min.js"></script>
    <!-- Images Tabs -->
    <script defer src="<?= $url; ?>/src/tabs/images.min.js"></script>
    <!-- Three Cards Slider -->
    <script defer src="<?= $url; ?>/src/sliders/services/three-cards.min.js"></script>
    <!-- Two Cards Slider -->
    <script defer src="<?= $url; ?>/src/sliders/services/two-cards.min.js"></script>
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