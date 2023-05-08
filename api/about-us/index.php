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
    <title>Revolutionize Software and Application Development with Us</title>
    <meta name="description"
        content="A software development firm specializing in custom app solutions tailored to your needs. Together, let's create software that makes a difference." />
    <!-- OG Tags -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Revolutionize Software and Application Development with Us" />
    <meta property="og:description"
        content="A software development firm specializing in custom app solutions tailored to your needs. Together, let's create software that makes a difference." />
    <meta property="og:url" content="<?= $url; ?>" />
    <meta property="og:site_name" content="Revolutionize Software and Application Development with Us" />
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
    <link rel="stylesheet" href="<?= $url; ?>/src/css/about-us.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/footer.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/responsive.min.css" />
    <link rel="stylesheet" href="<?= $url; ?>/src/css/animate.min.css" />
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
<body class="main--page website--page aboutUs">
    <?php include('../components/new-header.php'); ?>
    <main>
        <section>
            <div class="hero--fold">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 col-xxl-6">
                            <h1 class="f-40 f-p mb-2 mb-md-3">
                                About <span class="f-p">Us </span>
                            </h1>
                            <p class="f-14 f-w f-400 mb-3 mb-md-4">
                                Bitswits are revolutionizing the software industry, having crafted world-class solutions
                                for some of its leading companies in the past 12 years.
                                These cutting edge products have an impeccable history of optimizing business operations
                                and services to ensure a high quality experience. Our devoted
                                team is dedicated to working together with clients while anticipating their needs
                                through our advanced technology knowledge base. The company’s corporate
                                foundation stands firmly upon state-of-the art engineering coupled with unequaled
                                expertise – offering complete coverage on all resolutions one might need!
                            </p>
                            <a href="javascript:LC_API.open_chat_window();" class="p--btn">Get Free Consultation</a>
                        </div>
                    </div>
                </div>
                <div class="hero--video">
                    <video loop muted autoplay>
                        <source
                            src="https://player.vimeo.com/progressive_redirect/playback/796970668/rendition/1080p/file.mp4?loc=external&signature=1ea3f74034d25e27460b8d9eb4e82aadfff7c4e1dfca0d94d08be39b045c146d"
                            type="video/mp4">
                    </video>
                </div>
            </div>
        </section>
        <section class="mt-md-5 mb-md-5 companyOverview">
            <div class="container">
                <div class="row justify-content-center align-items-center pt-md-4 pt-md-4">
                    <div class="col-lg-7">
                        <h3 class="f-18 f-p f-medium f-upperCase f-spacing-10 mb-1">
                            About Us
                        </h3>
                        <h2 class="f-40 f-s mb-3">
                            Company Overview
                        </h2>
                        <p class="f-14 mb-3">Proudly serving the world’s leading telecommunication
                            Bitswits are revolutionizing the software industry, having crafted world-class solutions for
                            some of its leading companies in the past 12 years. These cutting-edge products have an
                            impeccable history of optimizing business operations and services to ensure a high-quality
                            experience.
                        </p>
                        <p class="f-14 mb-3">
                            Our knowledgeable team offers custom solutions developed with the latest technological
                            advances tailored to each customer's unique business needs. As a trusted partner, we are
                            committed to understanding your challenges and innovating together toward success!
                        </p>
                    </div>
                    <div class="col-lg-5 p-lg-3 wow fadeInRight" data-wow-duration="2s">
                        <img src="<?= $url; ?>./src/images/about-us/about-company.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-md-5 pb-md-5 bg-off-w expertiseFold">
            <div class="container">
                <div class="row align-self-sm-center justify-content-center pt-md-4 pb-3">
                    <div class="col-lg-3 mb-4">
                        <div class="box-grid">
                            <div class="img-box wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.1s">
                                <img src="<?= $url; ?>./src/images/about-us/idea.png" class="img-fluid" alt="">
                            </div>
                            <h3 class="mt-2 mb-3 gr-color f-poppins-600">Deep Expertise</h3>
                            <p class="gr-color f-13">
                                We have immense experience in telecommunication domain and technology
                                partnerships with leading suppliers.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="box-grid">
                            <div class="img-box wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                                <img src="<?= $url; ?>./src/images/about-us/architecture.png" class="img-fluid" alt="">
                            </div>
                            <h3 class="mt-2 mb-3 gr-color f-poppins-600">Stable Architecture</h3>
                            <p class="gr-color f-13">
                                Our stable software architecture can process high volumes of traffic
                                without any interruption.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="box-grid">
                            <div class="img-box wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                                <img src="<?= $url; ?>./src/images/about-us/computer.png" class=" img-fluid box-img" alt="">
                            </div>
                            <h3 class="mt-2 mb-3 gr-color f-poppins-600">All-in-one</h3>
                            <p class="gr-color f-13">
                                Our end-to-end solutions address areas which are crucial for the success
                                of telecom business, by automating various processes and simplifying
                                operational complexity.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="box-grid">
                            <div class="img-box wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                                <img src="<?= $url; ?>./src/images/about-us/web-design.png" class="img-fluid box-img" alt="">
                            </div>
                            <h3 class="mt-2 mb-3 gr-color f-poppins-600">User-friendly Interface</h3>
                            <p class="gr-color f-13">
                                Bitswits solutions are user-friendly. Intuitive interface saves time and
                                helps carriers easily manage their daily operations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-md-5 pb-md-5 gallery text-center">
            <div class="container">
                <div class="row f-center">
                    <h3 class="f-18 f-p f-medium f-upperCase f-spacing-10 f-center mb-1">
                        Gallery of Team Fun
                    </h3>
                    <h2 class="f-40 f-s f-center mb-3">
                        Our Gallery
                    </h2>
                </div>
                <div class="row pb-0 mb-0 f-center wow fadeInLeft" data-wow-duration="2s">
                    <div class="col-lg-3 g-3">
                        <img src="<?= $url; ?>./src/images/about-us/gl-1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-3 g-3">
                        <img src="<?= $url; ?>./src/images/about-us/gl-2.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-3 g-3">
                        <img src="<?= $url; ?>./src/images/about-us/gl-3.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-3 g-3">
                        <img src="<?= $url; ?>./src/images/about-us/gl-4.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="row pt-0 mt-0 f-center wow fadeInRight" data-wow-duration="2s">
                    <div class="col-lg-3 g-3">
                        <img src="<?= $url; ?>./src/images/about-us/gl-5.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-3 g-3">
                        <img src="<?= $url; ?>./src/images/about-us/gl-6.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-3 g-3">
                        <img src="<?= $url; ?>./src/images/about-us/gl-7.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-3 g-3">
                        <img src="<?= $url; ?>./src/images/about-us/gl-8.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-md-5 pb-md-5 gallery missonVision">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <h3 class="f-18 f-p f-medium f-upperCase f-spacing-10 f-center mb-1">
                        HELLO EVERYONE!
                    </h3>
                    <h2 class="f-40 f-s f-center mb-3">
                        Mission & Vision
                    </h2>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6 h-30">
                        <div class="box-border">
                            <h3 class="f-poppins-600">
                                Company Vision
                            </h3>
                            <p class="f-14">
                                Our goal is to be the go-to provider for innovative and top tier software solutions. Our
                                commitment to excellence makes us a leader in our industry, delivering reliable products
                                customers can count on!
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 h-30 ">
                        <div class="color-border b-gradient">
                            <h3 class="f-poppins-600 f-w">
                                Company Mission : </h3>
                            <p class="f-14  f-w">
                                Our mission is to deliver tailored solutions that meet the unique needs of businesses,
                                big or small. With knowledgeable experts on hand and a flexible approach, we can help
                                make your vision come alive!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-md-5 pb-md-5 PHILOSOPHY">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <h3 class="f-18 f-p f-medium f-upperCase f-spacing-10 mb-1">
                            PHILOSOPHY
                        </h3>
                        <h2 class="f-40 f-s mb-3">
                            OUR PHILOSOPHY
                        </h2>
                        <p class="f-14 mb-5">
                            We believe in collaborating with you to harness automation in your business.
                            You will benefit from a team that always listens. A team of skilled and
                            qualified professionals. And a team that utilizes trailblazing tools to
                            deliver futuristic products. We believe in the joint power of compassion and
                            innovation.
                        </p>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-4 mb-3 f-center wow fadeInRight" data-wow-duration="2s">
                        <img src="<?= $url; ?>./src/images/about-us/pholosophy.svg" width="400" class="img-fluid" alt="">
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