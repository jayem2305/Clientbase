<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>ClientBase</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="assets/Logos/ClientBook Logo only (big).svg" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Lexend', sans-serif;
            letter-spacing: normal;
            word-spacing: normal;
            line-height: 1.6;
        }

        @media (max-width: 767.98px) {
            .text-justify-mobile {
                text-align: justify !important;
            }


            .textstart {
                text-align: start !important;
            }

            .mobileview {
                max-width: 100% !important;
            }
        }

        .banner-content {
            position: relative;
            background: url('assets/img/cityscape.jpg') no-repeat center center;
            background-size: cover;
        }

        .banner-content::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(255, 255, 255, 0.8);
            /* Light overlay */
            z-index: 0;
        }

        .banner-content>* {
            position: relative;
            z-index: 1;
        }

        .danger {
            color: #fff;
            background-color: #CC2127;
        }
    </style>
    <style>
        @media (max-width: 991.98px) {
            .reverse-on-mobile {
                display: flex;
                flex-direction: column-reverse;
            }
        }

        @media (min-width: 992px) {
            .reverse-on-mobile {
                display: flex;
                flex-direction: row;
            }
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white fixed-top pt-3 pb-3 ">
        <div class="container">
            <a class="navbar-brand d-lg-none mx-auto" href="#">
                <img src="assets/Logos/PNG/ClientBook Logo FullColour - Black Text.png" alt="Logo" height="40">
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul
                    class="navbar-nav w-100 d-flex flex-column flex-lg-row justify-content-between align-items-center text-center">
                    <div class="d-flex flex-column flex-lg-row gap-3 mb-3 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-dark fw-medium" href="#solutions">Solutions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark fw-medium" href="#contact_us">Contact us</a>
                        </li>
                    </div>
                    <li class="nav-item d-none d-lg-block">
                        <a class="navbar-brand mx-lg-auto" href="#">
                            <img src="assets/Logos/SVG/ClientBase Logo FullColour - Black Text.svg" alt="Logo"
                                height="70">
                        </a>
                    </li>
                    <li class="nav-item mt-3 mt-lg-0">
                        <a href="http://app.clientbase.pro" class="btn btn-danger rounded-pill px-5 py-2 shadow-sm"
                            style="background-color:#CC2127;">
                            Sign up
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="col-lg-12 text-center py-5 pt-5 mt-5" style="padding-top: 120;">
        <div style="max-width: 900px; margin: 0 auto; padding-left: 15px; padding-right: 15px; margin-top: 50px;">
            <h1 class="fw-semibold display-2 mb-3">
                Transform Your<br class="d-block d-sm-none"> Entity Management Firm.
            </h1>
            <h5 class="pb-5">
                Discover how leading firms achieve complete control and confidence through
                optimized IT infrastructure and intelligent practice management.
            </h5>
        </div>

        <div class="col-12 banner-content text-center text-dark py-5 px-3 px-sm-5">
            <div class="mb-4">
                <div class="badge bg-danger text-white fw-bold mx-auto"
                    style="width: fit-content; background-color: #CC2127; padding-left: 20px; padding-right: 20px;">
                    <span class="h2 fw-semibold">Exclusive Launch Event!</span>
                </div>
            </div>

            <h2 class="fw-medium display-6 w-100 w-md-75 mx-auto mb-3">
                Master Your Practice: The Complete ClientBase Overview
            </h2>

            <p class="mx-auto fw-medium mb-3 text-wrap" style="max-width: 700px;">
                Join our CEO and leadership team for an exclusive deep-dive into both our revolutionary
                ClientBook platform and comprehensive IT Infrastructure & PDPA Compliance solutions.
            </p>

            <div class="mb-4 py-5 position-relative">
                <h4 class="fw-bold position-relative d-inline-block">
                    <!-- Positioned badge above "This" -->
                    <span class="position-absolute text-success fst-italic fw-bold"
                        style="top: -2rem; left: -1rem; transform: rotate(-10deg); font-size: 1.5rem; font-family: 'Caveat', cursive;">
                        Save the date!
                    </span>
                    This Friday, July 25th <span class="mx-2">|</span> 11:00 AM
                </h4>
            </div>
            <a href="#contact_us" class="btn btn-danger rounded-pill px-4 py-2 mb-2 fw-bold"
                style="background-color: #CC2127;">
                Join the webinar
            </a>
            <p class="text-dark mt-2">Secure Your Spot – Free Registration!</p>
        </div>
    </div>

    <!-- Heading + Paragraph + Button -->
    <div class="container mobileview" style="max-width: 70%;">
        <div class="row justify-content-center py-5">
            <!-- Main Text Block -->
            <div class="col-12 col-lg-10 py-5 mt-5 mb-4 text-center text-lg-start">
                <h2 class="fw-bold display-6 text-center text-lg-start">
                    <i class="bi bi-lightbulb" style="color: #CC2127;"></i><br>
                    From chaos to clarity.<br>
                    From reactive to strategic. <br>
                    From overwhelmed to in control.
                </h2>
                <div class="col-lg-12 py-5" id="solutions">
                    <hr style="color: #CC2127;">
                </div>
                <div class="col-lg-12 pb-5 ">
                    <h4 class="fw-bold text-center text-lg-start">
                        Comprehensive Solution for Modern Practices.
                    </h4>
                    <p class="fw-lighter text-center text-lg-start" style="font-size: 14px;">
                        From PDPA-compliant infrastructure to intelligent practice management — everything you need
                        to scale confidently.
                    </p>
                </div>
                <div class="col-12 pb-5 ">
                    <ul class="list-unstyled ps-2 ps-md-4 mt-4">
                        <li class="mb-3 pb-4">
                            <h4 class="fw-bold py-3" style="color: #8e181cff;">
                                <i class="bi bi-boxes text-danger fs-1 fw-bold me-2"></i>
                                PDPA-Driven Infrastructure Excellence.
                            </h4>
                            <div class="row g-4 align-items-center">
                                <!-- Image -->
                                <div class="col-lg-8 col-md-12">
                                    <img src="assets/img/gray.png" alt="Banner Preview"
                                        class="img-fluid rounded-5 shadow"
                                        style="width: 100%; max-width: 800px; height: auto;">
                                </div>
                                <!-- Description -->
                                <div class="col-lg-4 col-md-12 text-start">
                                    <h6 class="fw-bold">IT Infrastructure & PDPA Compliance</h6>
                                    <p class="text-dark text-justify"
                                        style="font-size: 14px;line-height: 3; text-align: justify;">
                                        We specialize in building and optimizing IT environments specifically for
                                        regulated
                                        professional firms. Our comprehensive review process ensures your technology
                                        infrastructure
                                        not only performs optimally but meets all PDPA compliance requirements.
                                    </p>
                                </div>

                                <!-- What We Deliver -->
                                <div class="col-12">
                                    <div class="text-start py-4 px-md-5 px-2">
                                        <h5 class="fw-bold mb-4">What we Deliver:</h5>

                                        <p><i class="bi bi-clipboard2-data text-danger fw-bold fs-5 me-2"></i> Complete
                                            IT
                                            environment
                                            assessment and optimization</p>
                                        <p><i class="bi bi-clipboard-check text-danger fw-bold fs-5 me-2"></i> PDPA
                                            compliance framework
                                            implementation</p>
                                        <p><i class="bi bi-chat-right-text text-danger fw-bold fs-5 me-2"></i>
                                            Specialized
                                            solutions for
                                            entity management firms</p>
                                        <p><i class="bi bi-sliders text-danger fw-bold fs-5 me-2"></i> Ongoing IT
                                            management
                                            and
                                            compliance monitoring</p>
                                        <p><i class="bi bi-bullseye text-danger fw-bold fs-5 me-2"></i> Purpose-built
                                            environments for
                                            regulated industries</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <h4 class="fw-bold py-3 " style="color: #8e181cff;">
                                <i class="bi bi-eye text-danger fs-1 fw-bold me-2"></i>
                                Sleep easy with everything on the map.
                            </h4>
                            <div class="row g-4 align-items-center">
                                <!-- Image -->
                                <div class="col-lg-8 col-md-12">
                                    <img src="assets/img/gray.png" alt="Banner Preview"
                                        class="img-fluid rounded-5 shadow"
                                        style="width: 100%; max-width: 800px; height: auto;">
                                </div>
                                <!-- Description -->
                                <div class="col-lg-4 col-md-12 text-start">
                                    <h6 class="fw-bold">Client Book Platform</h6>
                                    <p class="text-dark text-justify"
                                        style="font-size: 14px;line-height: 3; text-align: justify;">
                                        Transform reactive management to strategic leadership with our comprehensive
                                        practice management platform. Eliminate app-switching chaos and gain complete
                                        oversight of every aspect of your business operations.
                                    </p>
                                </div>

                                <!-- What We Deliver -->
                                <div class="col-12">
                                    <div class="text-start py-4 px-md-5 px-2">
                                        <h5 class="fw-bold mb-4">Core Capabilities:</h5>

                                        <p><i class="bi bi-buildings text-danger fw-bold fs-5 me-2"></i> Centralized
                                            command center of all operations</p>
                                        <p><i class="bi bi-graph-up-arrow text-danger fw-bold fs-5 me-2"></i> Real-time
                                            performance and profitibility analytics</p>
                                        <p><i class="bi bi-gear text-danger fw-bold fs-5 me-2"></i> Smart
                                            automation eliminating repetitive tasks</p>
                                        <p><i class="bi bi-clipboard-check text-danger fw-bold fs-5 me-2"></i> Automated
                                            compliance
                                            and deadline management</p>
                                        <p><i class="bi bi-eye text-danger fw-bold fs-5 me-2"></i> Complete project and
                                            client visibility</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="container py-5 d-flex justify-content-center">
                    <div class="row align-items-center w-100" id="responsive-row">

                        <div class="row align-items-center reverse-on-mobile">
                            <!-- Image Column -->
                            <div class="col-md-12 col-lg-6 d-flex justify-content-center mb-4 mb-lg-0 image-col">
                                <img src="assets/img/gray.png" alt="Banner Preview" class="img-fluid rounded-5 shadow"
                                    style="width: 100%; max-width: 1000px; object-fit: cover;">
                            </div>

                            <!-- Text Column -->
                            <div class="col-md-12 col-lg-6 ps-lg-4 textstart text-lg-start text-col">
                                <h2 class="fw-bold mb-3">You’re in control.</h2>
                                <p class="text-dark text-justify-mobile"
                                    style="font-size: 14px;line-height: 2;  max-width: 300px">
                                    Eliminates app-switching chaos, reduces time spent searching for information, and
                                    gives you complete control over all client interactions from one place.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-12 multi-image pt-5 flex-wrap">
                            <div class="row align-items-center w-100 pt-5">
                                <!-- Text Section -->
                                <div class="col-lg-5 ps-lg-4 mt-4 mt-lg-0 text-end text-center text-lg-end">
                                    <h2 class="fw-bold mb-3">Know Your Worth.</h2>
                                    <p class="text-dark" style="font-size: 14px;line-height: 2;  max-width: 300px">
                                        Transforms uncertainty about business health into confident decision-making,
                                        enables fair performance reviews based on data, and reveals hidden profit
                                        opportunities.
                                    </p>
                                </div>

                                <!-- ✅ Single Image for Mobile/Tablet -->
                                <div class="col-12 d-block d-lg-none pb-4">
                                    <img src="assets/img/gray.png" class="img-fluid rounded-5 shadow"
                                        style="width: 100%;">
                                </div>

                                <div class="col-7 d-none d-lg-block pb-4">
                                    <img src="assets/img/gray.png" class="img-fluid rounded-5 shadow"
                                        style="width: 100%;">
                                </div>
                                <div class="col-md-6 d-none d-lg-block">
                                    <img src="assets/img/gray.png" class="img-fluid rounded-5 shadow"
                                        style="width: 100%;">
                                </div>
                                <div class="col-md-6 d-none d-lg-block">
                                    <img src="assets/img/gray.png" class="img-fluid rounded-5 shadow"
                                        style="width: 100%;">
                                </div>
                            </div>
                        </div>

                        <!--  Mobile View Only -->
                        <div class="col-12 d-flex justify-content-center mobile-single d-none pt-5 px-3">
                            <div class="text-center textstart" style="max-width: 500px;">
                                <h2 class="fw-bold mb-3">Know Your Worth.</h2>
                                <p class="text-dark text-justify-mobile"
                                    style="font-size: 14px;line-height: 2;  max-width: 300px">
                                    Transforms uncertainty about business health into confident decision-making, enables
                                    fair performance reviews based on data, and reveals hidden profit opportunities.
                                </p>
                                <img src="assets/img/gray.png" alt="Combined Preview" class="img-fluid rounded-5 shadow"
                                    style="width: 100%;">
                            </div>
                        </div>
                        <div class="col-lg-12 pt-5 pb-5" style="min-height: 500px;">
                            <div class="row align-items-center w-100 pt-5" style="max-width: 1140px; margin: 0 auto;">

                                <!-- Text -->
                                <div
                                    class="col-lg-6 ps-lg-4 mt-4 textstart mt-lg-0 text-center text-lg-start order-1 order-lg-2">
                                    <h2 class="fw-bold mb-3">Everything on <br>the Map.</h2>
                                    <p class="text-dark text-justify-mobile"
                                        style="font-size: 14px;line-height: 2;  max-width: 300px">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mi mauris,
                                        iaculis sit amet risus et, tincidunt varius felis.
                                    </p>
                                </div>

                                <div
                                    class="col-lg-6 d-flex justify-content-center position-relative mb-4 mb-lg-0 order-2 order-lg-1">
                                    <div class="d-none d-lg-block position-relative w-100">
                                        <img src="assets/img/gray.png" alt="Banner Preview"
                                            class="img-fluid rounded-5 shadow position-relative"
                                            style="width: 100%; max-width: 800px; z-index: 2;">
                                        <img src="assets/img/gray.png" alt="Banner Preview"
                                            class="img-fluid rounded-5 shadow position-absolute"
                                            style="width: 100%; max-width: 800px; top: 200px; left: 100px; z-index: 1;">
                                    </div>

                                    <div class="d-block d-lg-none w-100">
                                        <img src="assets/img/gray.png" alt="Banner Preview"
                                            class="img-fluid rounded-5 shadow" style="width: 100%; max-width: 500px;">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 py-5">
                            <div class="row align-items-center w-100 pt-5" style="max-width: 1140px; margin: 0 auto;">
                                <!-- Left: Text -->
                                <div class="col-lg-5 ps-lg-4 py-5 textstart mt-4 mt-lg-0 text-end text-center
                                    text-lg-end">
                                    <h2 class="fw-bold mb-3">Effortless Growth.</h2>
                                    <p class="text-dark text-justify-mobile"
                                        style="font-size: 14px;line-height: 2;  max-width: 300px">
                                        Transforms uncertainty about business health into confident decision-making,
                                        enables
                                        fair performance reviews based on data, and reveals hidden profit opportunities.
                                    </p>
                                </div>
                                <div class="col-lg-6 d-flex justify-content-center">
                                    <img src="assets/img/gray.png" alt="Banner Preview"
                                        class="img-fluid rounded-5 shadow"
                                        style="width: 100%; max-width: 800px; object-fit: cover;">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 py-5">
                            <div class="row align-items-center w-100 pt-5" style="max-width: 1140px; margin: 0 auto;">

                                <!-- Text -->
                                <div class="col-lg-12 ps-lg-4 mt-4 mt-lg-0 text-end text-center text-lg-center">
                                    <h2 class="fw-bold mb-3 textstart">Sleep Easy.</h2>
                                    <p class="text-dark text-justify-mobile" style="font-size: 14px;line-height: 2;">
                                        Transforms uncertainty about business health into confident decision-making,
                                        enables fair performance reviews based on data, and reveals hidden profit
                                        opportunities.
                                    </p>
                                </div>

                                <!-- Single Image for Small Devices -->
                                <div class="col-12 d-block d-lg-none d-flex justify-content-center mt-4">
                                    <img src="assets/img/gray.png" alt="Banner Preview"
                                        class="img-fluid rounded-5 shadow"
                                        style="width: 100%; max-width: 800px; object-fit: cover;">
                                </div>

                                <!-- Two Images Side-by-Side for Large Devices -->
                                <div class="col-lg-6 d-none d-lg-flex justify-content-center">
                                    <img src="assets/img/gray.png" alt="Banner Preview"
                                        class="img-fluid rounded-5 shadow"
                                        style="width: 100%; max-width: 800px; object-fit: cover;">
                                </div>
                                <div class="col-lg-6 d-none d-lg-flex justify-content-center">
                                    <img src="assets/img/gray.png" alt="Banner Preview"
                                        class="img-fluid rounded-5 shadow"
                                        style="width: 100%; max-width: 800px; object-fit: cover;">
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5" id="contact_us">
        <div class="col-lg-12 pt-5">
            <div class="card rounded-0 " style="background-color:#E6E6E6;">
                <div class="card-body p-3 p-lg-4">
                    <form id="waitlist-form" class="form-floating">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="fw-bold">I'm ready to break free.<br>I want to know
                                    more.</h2>
                            </div>
                            <div class="col-lg-8">

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="fullname" placeholder="fullname"
                                        required>
                                    <label for="fullname">Fullname</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="email" placeholder="Email" required>
                                    <label for="email">Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="companysize"
                                        placeholder="Company Size" required>
                                    <label for="companysize">Company Size</label>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" id="inquiry" placeholder="Leave a comment here"
                                        id="floatingTextarea2" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">Briefing of summary in Inquiry </label>
                                </div>

                            </div>
                            <div class="col-lg-4">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                    aliquip ex ea commodo consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                    eu fugiat nulla pariatur.

                                </p>
                                <hr>
                                <button type="submit" id="submitBtn"
                                    class="btn btn-danger w-100 rounded-pill mt-3">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Desktop / Larger Screen Footer -->
    <footer class="text-white py-4 mt-5 d-none d-md-block" style="background-color: #96171bff; padding: 200px;">
        <div class="container-fluid" style="max-width: 100%;">
            <div class="row">
                <!-- Left: Heading & Button -->
                <div class="col-md-6 text-start mb-3 mb-md-0">
                    <h1 class="mb-0 fw-semibold">Master Your <br> Client Domain.</h1>
                    <a href="https://app.clientbase.pro"
                        class="btn btn-light rounded-pill mt-3 text-danger fw-semibold">
                        Start today
                    </a>
                </div>

                <!-- Right: QR Image -->
                <div class="col-md-6 text-end">
                    <img src="assets/img/clientbase_qr.png" alt="QR Code" class="img-fluid" style="max-width: 150px;">
                </div>

                <div class="col-md-12">
                    <hr>
                </div>

                <!-- Bottom: Socials and Copyright -->
                <div class="col-12 d-flex flex-column flex-md-row justify-content-between align-items-center">
                    <!-- Left -->
                    <div class="text-start mb-2 mb-md-0">
                        <p class="mb-0 text-white small">
                            &copy; 2025 ClientBase Pte. Ltd. — All Rights Reserved
                        </p>
                    </div>

                    <!-- Right: Social Icons & Email -->
                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <div class="d-flex align-items-center">
                            <a href="https://instagram.com" target="_blank" class="text-white me-3 fs-4">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="https://facebook.com" target="_blank" class="text-white me-3 fs-4">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="https://twitter.com" target="_blank" class="text-white me-3 fs-4">
                                <i class="bi bi-twitter-x"></i>
                            </a>
                            <a href="https://linkedin.com" target="_blank" class="text-white fs-4">
                                <i class="bi bi-linkedin"></i>
                            </a>
                        </div>
                        <span class="text-white small ms-3">info@clientbase.pro</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Mobile / Small Screen Footer -->
    <footer class="text-white py-4 d-block d-md-none" style="background-color: #96171b;">
        <div class="container px-3">
            <!-- Top: Text + QR -->
            <div class="row align-items-center text-start">
                <div class="col-6">
                    <h2 class="fw-bold mb-3">Master Your<br>Own Domain.</h2>
                    <a href="https://app.clientbase.pro"
                        class="btn btn-light text-danger rounded-pill px-4 py-2 fw-semibold">
                        Start today
                    </a>
                </div>
                <div class="col-6 text-end">
                    <img src="assets/img/clientbase_qr.png" alt="QR Code" class="img-fluid" style="max-width: 150px;">
                </div>
            </div>

            <!-- Middle: Social + Email -->
            <div class="row align-items-center mt-4">
                <div class="col-12">
                    <div class="d-flex flex-column justify-content-center align-items-center gap-2">
                        <div class="d-flex justify-content-center gap-3">
                            <a href="https://instagram.com" target="_blank" class="text-white fs-5"><i
                                    class="bi bi-instagram"></i></a>
                            <a href="https://facebook.com" target="_blank" class="text-white fs-5"><i
                                    class="bi bi-facebook"></i></a>
                            <a href="https://twitter.com" target="_blank" class="text-white fs-5"><i
                                    class="bi bi-twitter-x"></i></a>
                            <a href="https://linkedin.com" target="_blank" class="text-white fs-5"><i
                                    class="bi bi-linkedin"></i></a>
                        </div>
                        <span class="text-white small">info@clientbase.pro</span>
                    </div>
                    <hr class="border-white opacity-50 my-3">
                </div>

                <!-- Bottom: Copyright -->
                <div class="col-12 text-center">
                    <p class="mb-0 small text-white">
                        &copy; 2025 ClientBase Pte. Ltd. — All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <div class="toast-container position-fixed bottom-0 end-0 p-3" style="z-index: 9999">
        <div id="liveToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive"
            aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body" id="toast-message">
                    Success message here.
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script>
        document.getElementById('waitlist-form').addEventListener('submit', function (e) {
            e.preventDefault();

            const fullname = document.getElementById('fullname').value.trim();
            const email = document.getElementById('email').value.trim();
            const company = document.getElementById('companysize').value.trim();
            const inquiry = document.getElementById('inquiry').value.trim();
            const submitBtn = document.getElementById('submitBtn');

            const originalContent = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = `
          <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...
          `;

            const formData = new FormData();
            formData.append('fullname', fullname);
            formData.append('email', email);
            formData.append('company', company);
            formData.append('inquiry', inquiry);

            fetch('send.php', {
                method: 'POST',
                body: formData
            })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        showToast("✅ You have been added to the waiting list!", true);
                    } else {
                        showToast("❌ Failed to added on waiting list.", false);
                    }
                })
                .catch(() => {
                    showToast("❌ Something went wrong.", false);
                })
                .finally(() => {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalContent;
                });
        });
        const showToast = (message, isSuccess = true) => {
            const toastEl = document.getElementById('liveToast');
            const toastMessage = document.getElementById('toast-message');

            toastMessage.textContent = message;

            // Toggle toast color class
            toastEl.classList.remove('text-bg-success', 'text-bg-danger');
            toastEl.classList.add(isSuccess ? 'text-bg-success' : 'text-bg-danger');

            const toast = new bootstrap.Toast(toastEl);
            toast.show();
        };

    </script>
    <script>
        function reverseColumnsForMobile() {
            const row = document.getElementById("responsive-row");
            const imageCol = document.getElementById("image-col");
            const textCol = document.getElementById("text-col");

            if (window.innerWidth < 768) {
                if (textCol.nextElementSibling !== imageCol) {
                    row.insertBefore(textCol, imageCol); // Text first, image second
                }
            } else {
                if (imageCol.nextElementSibling !== textCol) {
                    row.insertBefore(imageCol, textCol); // Restore: Image first, text second
                }
            }
        }

        window.addEventListener('load', reverseColumnsForMobile);
        window.addEventListener('resize', reverseColumnsForMobile);
    </script>

</body>

</html>