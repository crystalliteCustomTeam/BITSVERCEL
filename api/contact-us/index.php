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
    <title>Connect With Us for Custom Software & App Development!</title>
    <meta name="description"
        content="Looking for an innovative software development solution? Contact us now. We can help you create the perfect software for your specific needs." />
    <!-- OG Tags -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Connect With Us for Custom Software & App Development!" />
    <meta property="og:description"
        content="Looking for an innovative software development solution? Contact us now. We can help you create the perfect software for your specific needs." />
    <meta property="og:url" content="<?= $url; ?>" />
    <meta property="og:site_name" content="Connect With Us for Custom Software & App Development!" />
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
    <link rel="stylesheet" href="<?= $url; ?>/src/css/contact.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/footer.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/responsive.min.css" />
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
<body class="main--page android--page">
    <?php include('../components/new-header.php'); ?>
    <!-- Header End -->
    <main>
        <section class="banner-contact">
            <div class="before-banner"></div>
            <div class="container">
                <div class="row justify-content-center align-content-center pt-5 pb-5">
                    <div class="col-lg-10 col-xl-10 col-xxl-10 col-sm-12">
                        <h2 class="f-45 f-w f-center mb-3"> Say <span class="f-p"> Hello!</span></h2>
                        <p class="f-center f-w">
                            Let’s make headlines together! We’re excited to collaborate with you on
                            your fantastic project.
                        </p>
                    </div>
                    <div class="row contact-t p-md-4 p-3 mt-4">
                        <div class="col-lg-8 col-xl-8 col-xxl-8 col-sm-12 mt-3">
                            <h2 class="f-40 f-s mb-2">
                                <span class="f-b">For Work</span> Inquiry
                            </h2>
                            <p class="f-14">
                                Whether you need a mobile app or a particular game solution, every venture starts with a
                                simple email or phone call. Fill in the following information and we will get in touch
                                within 1 business day.
                            </p>
                            <div class="">
                                <div class="contact-usform">
                                    <form class="row contactform1" id="contactusform1" enctype="multipart/form-data">
                                        <div class="form--items col-lg-6">
                                            <input type="text" class="" name="name" id="name" placeholder="Full Name"
                                                required />
                                        </div>
                                        <div class="form--items col-lg-6">
                                            <input type="email" name="email" id="email" placeholder="Email Address"
                                                required />
                                        </div>
                                        <div class="form--items col-lg-6">
                                            <input type="tel" name="phone" id="phone" placeholder="Phone" required
                                                minlength="7" maxlength="15"
                                                onkeypress="return /[0-9]/i.test(event.key)" />
                                        </div>
                                        <div class="form--items col-lg-6">
                                            <input type="text" class="" name="budget" id="budget"
                                                placeholder="Budget (in USD)" required />
                                        </div>
                                        <div class="form-group form--items col-lg-12">
                                            <label for="upload"></label>
                                            <input type="file" name="upload" id="upload" class="form-control-file">
                                        </div>
                                        <div class="progress">
                                            <div id="progressBar" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <div class="form--items">
                                            <input type="textarea" class="" name="comments" id="comments"
                                                placeholder="comments" required />
                                        </div>
                                        <div class="form--btn mt-3">
                                            <button id="savebtns" type="submit" class="b-gradient">SEND INQUERY</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-4 col-xxl-4 col-sm-12 border-left getInTouch">
                            <div class="pt-4 pe-md-3 px-md-3">
                                <h3 class="f-18 f-p f-medium f-upperCase f-spacing-10 mb-1">
                                    GET IN TOUCH
                                </h3>
                                <h2 class="f-20 f-s">
                                    For Work Inquiry
                                </h2>
                                <h4 class="f-16 f-poppins-600">Mail to Our Sales Department</h4>
                                <ul class="b-color f-14 mt-4 mb-3">
                                    <li> <a href="mailto:info@bitswits.co" class="f-p">Contact Email</a></li>
                                    <li>Skype - Daniel</li>
                                    <li>Phone: <a href="tel:13123795987" class="f-p">1 - 312 379 5987</a></li>
                                </ul>
                                <h4 class="f-20 f-s mb-2">For Career Inquiry</h4>
                                <ul class="b-color f-14">
                                    <li><a href="mailto:hr@bitswits.co" class="f-p">Email Us</a></li>
                                </ul>
                                <h4 class="f-18 f-poppins-600 mt-4">Connect With Us</h4>
                                <ul class="socials-c mt-3">
                                    <li>
                                        <a href="https://www.facebook.com/officialbitswits" target="_blank" rel="noopener noreferrer">
                                            <img src="<?= $url; ?>/src/icons/m-fb-icon.png" alt="bitswits" width="30" height="30">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/officialbitswits/" target="_blank" rel="noopener noreferrer">
                                            <img src="<?= $url; ?>/src/icons/m-insta-icon.png" alt="bitswits" width="30" height="30">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/BitsWits_/" target="_blank" rel="noopener noreferrer">
                                            <img src="<?= $url; ?>/src/icons/m-twitter-icon.png" alt="bitswits" width="30" height="30">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/company/officialbitswits" target="_blank" rel="noopener noreferrer">
                                            <img src="<?= $url; ?>/src/icons/m-linkedin.png" alt="bitswits" width="30" height="30">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/@officialbitswits" target="_blank" rel="noopener noreferrer">
                                            <img src="<?= $url; ?>/src/icons/m-youtube-icon.png" alt="bitswits" width="30" height="30">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
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