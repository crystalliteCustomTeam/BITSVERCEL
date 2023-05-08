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
    <title>Thanks For Choosing Us For Your Application Needs - BitsWits</title>
    <meta name="description"
        content="Thank you for choosing a software development company that will help your business grow! Let us show you how we can help bring your vision to life." />
    <!-- OG Tags -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Thanks For Choosing Us For Your Application Needs - BitsWits" />
    <meta property="og:description"
        content="Thank you for choosing a software development company that will help your business grow! Let us show you how we can help bring your vision to life." />
    <meta property="og:url" content="<?= $url; ?>" />
    <meta property="og:site_name" content="Thanks For Choosing Us For Your Application Needs - BitsWits" />
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
    <link rel="stylesheet" href="<?= $url; ?>/src/css/footer.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/responsive.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/SS/home.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/AZ/home.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/fancybox.min.css" />
    <!-- Google Verification -->
    <meta name="google-site-verification" content="jg7nSxeneqpzOKNtVKXDQRVGjThDC6_7zGXI8wAXqkY" />
    <!-- Google Tag Manager -->
    <script defer src="https://www.googletagmanager.com/gtag/js?id=AW-11114809734"></script>
    <script defer src="<?= $url; ?>/src/js/googletagmanager.min.js"></script>
    <!-- Conversion Tracking Code -->
    <script>
        function gtag(){dataLayer.push(arguments)}window.dataLayer=window.dataLayer||[],gtag("js",new Date),gtag("config","AW-11114809734");
        gtag('event', 'conversion', {'send_to': 'AW-11114809734/O9snCOO5m5EYEIaT-rMp'});
    </script>
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
    <style>
        .thankYou {
            background-image: url(https://imagedelivery.net/nJwaBs__P2JfMUeYJ4vmjQ/d816a241-fd13-4e6e-c209-5bff04f10100/public);
            background-repeat: no-repeat; 
            background-size: cover;
        }
    </style>
</head>
<body class="main--page thankyou">
    <?php include('../components/new-header.php'); ?>
    <main>
        <section>
            <div class="hero--fold thankYou">
                <div class="container">
                    <div class="row f-center align-items-center justify-content-center">
                        <div class="col-12 col-sm-12 col-md-9 col-lg-7 col-xl-9 col-xxl-9">
                            <h1 class="f-50 f-p mb-2 mb-md-3">
                                Thank You!
                            </h1>
                            <h2 class="f-20 f-w f-400 mb-3 mb-md-4">
                               Welcome to the community, your personalized experience awaits!
                            </h2>
                            <a href="<?= $url; ?>" class="p--btn m-auto">Go Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include('../components/footer-black.php'); ?>
    <!-- jQuery File -->
    <script defer src="<?= $url; ?>/src/js/jquery-3.6.1.min.js"></script>
    <!-- Slick Slider File -->
    <script defer src="<?= $url; ?>/src/sliders/slick/js/slick.min.js"></script>
    <!-- Globle -->
    <script defer src="<?= $url; ?>/src/js/globle.min.js"></script>
</body>

</html>