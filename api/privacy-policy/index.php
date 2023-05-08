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
    <title>Privacy Policy To Ensure Transparency and Security</title>
    <meta name="description"
        content="BitsWits values your privacy and want you to feel safe while using our services. Please take the time to read it and reach us if you have any concerns." />
    <!-- OG Tags -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Privacy Policy To Ensure Transparency and Security" />
    <meta property="og:description"
        content="BitsWits values your privacy and want you to feel safe while using our services. Please take the time to read it and reach us if you have any concerns." />
    <meta property="og:url" content="<?= $url; ?>" />
    <meta property="og:site_name" content="Privacy Policy To Ensure Transparency and Security" />
    <!-- Canonical -->
    <link rel="canonical" href="<?= $url; ?>" />
    <!-- Bing Master Verification  -->
    <meta name="msvalidate.01" content="7BBFFA763CEB48CAC0828E22D44DD12B" />
    <!-- Favicon -->
    <link rel="icon" sizes="16x16" alt="favicon" title="favicon" href="<?= $url; ?>/src/media/favicon.ico" />
    <link rel="stylesheet" href="<?= $url; ?>/src/sliders/slick/slick.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/sliders/slick/slick-theme.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/phone.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/grid.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/globle.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/header.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/main.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/footer.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/responsive.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/SS/home.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/AZ/home.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/application-design.min.css" />
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
<body class="main--page privacy-page">
    <?php include('../components/new-header.php'); ?>
    <main>
        <section> 
            <div class="hero--fold">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <h1 class="f-40 f-p f-center">
                                Privacy <span class="f-p">Policy </span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="normal--content pt-md-5 pb-md-5">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <h2 class="f-30 f-b mb-2 mb-xl-3">
                                Personal Information:
                            </h2>
                            <p class="f-13 f-b f-400 mb-2">
                                When you interact with us, we automatically receive and store certain types of information, such as the content you
                                view, the date and time that you view this content, the products you purchase, or your location information associated
                                with your IP address. We use the information we collect to serve you more relevant advertisements (referred to as
                                “Retargeting”). This is statistical information used to monitor the usage of our website and for advertising purposes.
                                This information does not include personal information. a) Personally Identifiable Information: BitsWits Consulting will
                                not rent or sell your personally identifiable information to others. We may store personal information in locations
                                outside the direct control of BitsWits Consulting (for instance on servers or databases co-located with hosting
                                providers). Any personally identifiable information you elect to make publicly available on our sites, such as posting
                                comments on our blog page, will be available to others. If you remove information that you have made public on our site,
                                copies may remain viewable in cached and archived pages of our site, or if other users have copied or saved that
                                information. Our blog is managed by a third party application that may require you to register to post a comment. We do
                                not have access or control of the information posted on the blog. You will need to contact or login into the third party
                                application if you want the personal information that was posted to the comments section removed. To learn how the third
                                party application uses your information, please visit their privacy policy. All personal information used within our
                                contact form will be used by the internal team at BitsWits for communication purposes. b) Non-Personally Identifiable
                                Information: Non-Personally Identifiable Information: We may share non-personally identifiable information (such as
                                anonymous usage data, referring/exit pages and URLs, platform types, number of clicks, etc,) with interested third
                                parties to help them understand the usage patterns for certain BitsWits Consulting services.
                            </p>
                            <h2 class="f-30 f-b mb-2 mb-xl-3">
                                Cookies
                            </h2>
                            <p class="f-13 f-b f-400 mb-2">
                                As you browse bitswits.co, advertising cookies will be placed on your computer so that we can understand what you are
                                interested in. Our display advertising partner, then enables us to present you with retargeting advertising on other
                                sites based on your previous interaction with bitswits.co. The techniques our partners employ do not collect personal
                                information such as your name, email address, postal address or telephone number. You can visit this page to opt out of
                                AdRoll and their partner's targeted advertising.
                            </p>
                            <h2 class="f-30 f-b mb-2 mb-xl-3">
                                Security
                            </h2>
                            <p class="f-13 f-b f-400">
                                We implement a secure processing server on our site when collecting information to ensure a high level of security for
                                your personal information entered such as bank details and credit card information.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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