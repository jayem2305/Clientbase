<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>ClientBase</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link href="assets/Logos/SVG/ClientBase Logo only (big).svg" rel="icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lexend&family=Poppins&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Just+Another+Hand&display=swap" rel="stylesheet">

  </style>
  <style>
    @media (max-width: 576px) {
      .central-image-bg {
        width: 100% !important;
        left: 0 !important;
        top: 250px !important;
      }

      .central-image-fg {
        width: 95% !important;
        top: 400px !important;
        right: 0 !important;
      }

      .position-relative.central-wrapper {
        min-height: 700px !important;
        padding-bottom: 480px !important;
      }
    }

    @media (max-width: 768px) {
      .img-fluid.position-relative {
        display: block;
        width: 100%;
        margin-bottom: 1rem;
      }
    }

    body {
      font-family: 'Lexend', sans-serif;
      letter-spacing: normal;
      word-spacing: normal;
      line-height: 1.6;
      overflow-x: hidden;
    }

    h1,
    h2,
    h3,
    .btn,
    .nav-link {
      font-family: 'Poppins', sans-serif;
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
      background: url('assets/img/cityscape.jpg') no-repeat;
      background-size: cover;
      background-position: 50% 30%;
      /* horizontally centered, 20% down from top */
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
    <div class="container" style="max-width: 80%">
      <a class="navbar-brand d-lg-none mx-auto" href="#">
        <img src="assets/Logos/PNG/ClientBook Logo FullColour - Black Text.png" alt="Logo" height="40">
      </a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
        aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul
          class="navbar-nav w-100 d-flex flex-column flex-lg-row justify-content-between align-items-center text-center">
          <div class="d-flex flex-column flex-lg-row gap-3 mb-3 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link text-dark fw-medium" href="#solutions">Solutions</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link text-dark fw-medium" href="#contact_us">Contact us</a>
            </li>-->
          </div>
          <li class="nav-item d-none d-lg-block">
            <a class="navbar-brand mx-lg-auto" href="#">
              <img src="assets/Logos/SVG/clientbaselogo.svg" alt="Logo" height="70">
            </a>
          </li>
          <li class="nav-item mt-3 mt-lg-0">
            <a href="#signup_form" class="btn btn-danger rounded-pill px-5 py-2 shadow-sm"
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
      <h1 class="fw-bold text-center display-3"
        style=" font-family: 'Lexend', sans-serif;line-height: 110%;color: #0E171F;">
        Transform Your<br> Entity Management Firm.
      </h1>

      <h5 class="pb-5 text-center" style=" font-family: 'poppins' ;color: #0E171F;">
        Discover how leading firms achieve complete control and confidence through
        optimized IT infrastructure and intelligent practice management.
      </h5>
    </div>

    <div class="col-12 banner-content text-center text-dark py-5 px-3 px-sm-5"
      style=" font-family: 'Lexend', sans-serif; ">
      <div class="mb-4">
        <div class="badge text-white fw-bold mx-auto rounded-0"
          style="width: fit-content; background-color: #CC2127; padding-left: 20px; padding-right: 20px;">
          <span class="h2 fw-semibold">Exclusive
            Launch Event!</span>
        </div>
      </div>

      <h2 class="fw-semibold w-100 w-md-75 mx-auto mb-3">
        Master Your Practice: The Complete ClientBase Overview
      </h2>

      <p class="mx-auto fw-medium mb-3 text-wrap"
        style="font-family: 'poppins' ;color: #0E171F; max-width: 50%; font-size:15px;">
        Join our CEO and leadership team for an exclusive deep-dive into both our revolutionary
        ClientBook platform and comprehensive IT Infrastructure & PDPA Compliance solutions.
      </p>

      <div class="mb-4 pt-4 pb-3 position-relative">
        <h6 class="fw-bold position-relative d-inline-block" style="font-family: 'poppins' ;color: #0E171F;">
          <!-- Positioned badge above "This" -->
          <span class="position-absolute"
            style="top: -1rem; left: -3rem; letter-spacing: 2px; transform: rotate(-10deg); font-size: 20px; font-family: 'Just Another Hand', sans-serif; color: #149345;">
            Save the date!
          </span>
          This Friday, July 25th <span class="mx-2">|</span> 11:00 AM
        </h6>
      </div>
      <a href="https://shorturl.at/VVYDz" class="btn rounded-pill px-4 mb-2 fw-medium"
        style="background-color: #CC2127; color:#fff;">
        Join the webinar
      </a>
      <p class="text-dark mt-1" style="font-family: 'poppins' ;color: #0E171F;">Secure Your Spot – Free Registration!
      </p>
    </div>
  </div>

  <!-- Heading + Paragraph + Button -->
  <div class="container mobileview" style="font-family: 'Lexend', sans-serif; max-width: 70%;">
    <div class="row justify-content-center py-5">
      <!-- Main Text Block -->
      <div class="col-12 col-lg-10  mt-5 mb-4 text-center text-lg-start">
        <h2 class="fw-bold display-6 text-center text-lg-start" style="line-height: 120%;">
          <img src="assets/img/light.png" alt="Banner Preview" class="img-fluid pb-5" style="max-width: 10%;">
          <br>
          From chaos to clarity.<br>
          From reactive to strategic. <br>
          From overwhelmed to in control.
        </h2>
      </div>
      <div class="col-lg-12 pt-5">
        <hr style="color: #891014;" class="border-2 opacity-75">
      </div>
      <div class="col-12 col-lg-10  mt-5 mb-4 text-center text-lg-start">
        <div class="col-lg-12 pt-5">
          <h2 class="fw-bold text-center text-lg-start" style="line-height: 100%;">
            Comprehensive Solution for Modern Practices.
          </h2>
          <p class="fw-lighter text-center text-lg-start"
            style="font-size: 14px; font-family: 'poppins' ;color: #0E171F;" id="solutions">
            From PDPA-compliant infrastructure to intelligent practice management — everything you need
            to scale confidently.
          </p>
        </div>
        <div class="col-lg-12 pt-5">
          <h3 class="fw-bold py-5" style="color: #891014;">
            <i class="bi bi-boxes fs-1 fw-bold me-2"></i>
            PDPA-Driven Infrastructure Excellence.
          </h3>
          <div class="col-lg-12 col-md-12">
            <img src="assets/img/img_1.png" alt="Banner Preview" class="img-fluid ">
          </div>
          <!-- Description -->
          <div class="col-lg-12 col-md-12 text-start pt-5" style=" font-family: 'poppins' ;color: #0E171F;">
            <h5 class="fw-bold">IT Infrastructure & PDPA Compliance</h5>
            <p class="text-dark text-justify text-justify-mobile"
              style="font-size: 15px;line-height: 2; font-family: 'poppins' ;">
              We specialize in building and optimizing IT environments specifically for regulated professional firms.
              Our
              comprehensive review process ensures your technology infrastructure not only performs optimally but meets
              all PDPA compliance requirements.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mobileview" style="font-family: 'Lexend', sans-serif; max-width: 70%;">
    <div class="row justify-content-center ">
      <!-- Main Text Block -->
      <div class="col-12 pb-5 ">
        <ul class="list-unstyled ps-2 ps-md-4 mt-4">
          <li class="mb-3 pb-4">
            <div class="row g-4 align-items-center">
              <!-- What We Deliver -->
              <div class="col-12">
                <div class="row gy-4 gx-4">
                  <!-- Card 1 -->
                  <div class="col-lg-5 mb-4">
                    <div class="card h-100 p-4 rounded-4 border-0 shadow-sm"
                      style="background-color: rgba(137, 16, 20, 0.07);">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col-9 text-start">
                            <h5 class="fw-semibold mb-0" style="font-family: 'Poppins';">Specialized Solutions</h5>
                          </div>
                          <div class="col-3 d-flex justify-content-end">
                            <img src="assets/img/check.png" alt="Banner Preview" class="img-fluid"
                              style="max-width: 55px;">
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-12">
                            <p class="fw-light mb-0 text-start" style="font-size: 14px; font-family: 'Poppins';">
                              We deliver tailored IT infrastructure solutions designed specifically for the unique
                              operational and
                              regulatory challenges faced by professional services firms in regulated industries.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Card 2 -->
                  <div class="col-lg-7 mb-4">
                    <div class="card h-100 p-4 rounded-4 border-0 shadow-sm"
                      style="background-color: rgba(137, 16, 20, 0.07);">
                      <div class="card-body">
                        <!-- Row 1: Image + Heading -->
                        <div class="row align-items-center">
                          <!-- Image/Icon -->
                          <div class="col-3 d-flex justify-content-start">
                            <img src="assets/img/vector.png" alt="Banner Preview" class="img-fluid"
                              style="max-width: 55px;">
                          </div>
                          <!-- Heading -->
                          <div class="col-9 text-end">
                            <h5 class="fw-semibold mb-0" style="font-family: 'Poppins';">Complete IT Environment
                              Assessment</h5>
                          </div>
                        </div>

                        <!-- Paragraph -->
                        <div class="row mt-3">
                          <div class="col-12">
                            <p class="fw-light mb-0 text-start" style="font-size: 14px; font-family: 'Poppins';">
                              Conduct thorough evaluations of your current technology infrastructure to identify
                              performance gaps,
                              security vulnerabilities, and compliance deficiencies with actionable improvement
                              recommendations.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Card 3 (Full Width) -->
                  <div class="col-lg-12 mb-4">
                    <div class="card h-100 p-4 rounded-4 border-0 shadow-sm"
                      style="background-color: rgba(137, 16, 20, 0.07);">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col-9 text-start">
                            <h5 class="fw-semibold mb-0" style="font-family: 'Poppins';">PDPA Compliance Framework
                              Implementation</h5>
                          </div>
                          <div class="col-3 d-flex justify-content-center">
                            <img src="assets/img/list.png" alt="Banner Preview" class="img-fluid"
                              style="max-width: 70px;">
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-12">
                            <p class="fw-light mb-0 text-start"
                              style="font-size: 14px; font-family: 'Poppins'; max-width: 80%;">
                              Establish robust data protection protocols and systems that ensure full compliance with
                              Singapore's Personal Data Protection Act, including data governance policies and breach
                              prevention measures.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Card 4 -->
                  <div class="col-lg-7 mb-4">
                    <div class="card h-100 p-4 rounded-4 border-0 shadow-sm"
                      style="background-color: rgba(137, 16, 20, 0.07);">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col-8 text-start">
                            <h5 class="fw-semibold mb-0" style="font-family: 'Poppins';">Purpose-built Environments for
                              Regulated Industries</h5>
                          </div>
                          <div class="col-4 d-flex justify-content-end">
                            <img src="assets/img/globe.png" alt="Banner Preview" class="img-fluid"
                              style="max-width: 55px;">
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-12">
                            <p class="fw-light mb-0 text-start" style="font-size: 14px; font-family: 'Poppins';">
                              Design and deploy IT infrastructures specifically engineered to meet the stringent
                              security, performance, and regulatory requirements of professional firms in finance,
                              legal, and consulting sectors.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Card 5 -->
                  <div class="col-lg-5 mb-4">
                    <div class="card h-100 p-4 rounded-4 border-0 shadow-sm"
                      style="background-color: rgba(137, 16, 20, 0.07);">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col-4 d-flex justify-content-start">
                            <img src="assets/img/tools.png" alt="Banner Preview" class="img-fluid"
                              style="max-width: 55px;">
                          </div>
                          <div class="col-8 text-end">
                            <h5 class="fw-semibold mb-0" style="font-family: 'Poppins';">Compliance Maintenance</h5>
                          </div>

                        </div>
                        <div class="row mt-3">
                          <div class="col-12">
                            <p class="fw-light mb-0 text-start" style="font-size: 14px; font-family: 'Poppins';">
                              Provide ongoing monitoring and maintenance services to ensure your IT environment
                              continuously meets evolving regulatory standards and maintains optimal performance over
                              time.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 text-center p-5">
                <button class="btn btn-lg mb-3 p-5" type="button" data-bs-toggle="collapse"
                  data-bs-target="#cardSection" aria-expanded="false" aria-controls="cardSection"
                  style="background-color: transparent; border: none;">
                  <i class="bi bi-chevron-down" style="font-size: 3rem;color: #891014;"></i>
                </button>
                <!-- Collapsible Cards Section -->
                <div class="collapse" id="cardSection">
                  <div class="container py-5 d-flex justify-content-center">
                    <!--  contents -->
                  </div>
                </div>
              </div>
          </li>
          <li class="mb-3">
            <div class="container mobileview" style="font-family: 'Lexend', sans-serif; max-width: 90%;">
              <h3 class="fw-bold py-3 " style="color: #891014;">
                <i class="bi bi-eye fs-1 fw-bold me-2"></i>
                Sleep Easy With Everything On The Map.
              </h3>
              <div class="row g-4 align-items-center">
                <!-- Description -->
                <div class="col-lg-12 col-md-12 text-start">
                  <img src="assets/Logos/SVG/ClientBook Logo FullColour - Black Text.svg" alt="Clinebook_logo"
                    class="img-fluid rounded-5" style="width: 100%; max-width: 40%; z-index: 1;">
                  <p class="text-dark text-justify text-justify-mobile"
                    style="font-size: 14px;line-height: 3; font-family: 'poppins' ;">
                    Our comprehensive platform will help you transform from reactive management to strategic leadership
                    by
                    eliminating app-switching chaos and gain complete oversight of every aspect of your business
                    operations.
                  </p>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-lg-12 col-md-12 p-5">
    <div class="row g-4 justify-content-center align-items-center pb-5">
      <div class="col-auto">
        <img src="assets/img/img_2.png" alt="Banner Preview" class="img-fluid pb-5" style="max-width: 90%;">
      </div>
    </div>

  </div>
  <div class="container mobileview" style="font-family: 'Lexend', sans-serif; max-width: 70%;">
    <div class="row g-4 justify-content-center align-items-center" style="margin-bottom: 700px;">
      <div class="col-12 mb-5">
        <div class="position-relative central-wrapper" style="min-height: 520px; padding-bottom: 300px;">
          <div class="card p-4 rounded-4 border-0 shadow-sm mx-auto mb-5"
            style="background-color: rgba(137, 16, 20, 0.07); max-width: 900px; z-index: 2; position: relative;">
            <div class="card-body">
              <h5 class="fw-semibold mb-3" style="font-family: 'Lexend', sans-serif;">
                Centralized Operations Center
              </h5>
              <p class="fw-light mb-0 text-start" style="font-size: 14px; font-family: 'Poppins';">
                Streamline team collaboration with a unified ticketing system that automatically filters and
                routes tasks based on departments, ensuring efficient workflow management across your
                organization.
              </p>
            </div>
          </div>

          <img src="assets/img/image_13.png" alt="Background Tickets"
            class="position-absolute img-fluid central-image-bg"
            style="width: 70%; top: 120px; left: 40%; z-index: 1; opacity: 1;">

          <img src="assets/img/image_15.png" alt="Main Ticket View"
            class="position-absolute img-fluid rounded-3 shadow-lg central-image-fg"
            style="width: 80%; top: 70%; right: 30%; z-index: 3;">
        </div>
      </div>

    </div>

    <!-- What We Deliver -->
    <div class="col-12">
      <div class="row gy-4 gx-4">
        <div class="col-lg-5 mb-4">
          <div class="card h-100 p-4 rounded-4 border-0 shadow-sm" style="background-color: rgba(137, 16, 20, 0.07);">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-9 text-start">
                  <h5 class="fw-semibold mb-0" style="font-family: 'Poppins';">Centralized Client Records and
                    File Storage</h5>
                </div>
                <div class="col-3 d-flex justify-content-end">
                  <img src="assets/img/store.png" alt="Banner Preview" class="img-fluid" style="max-width: 55px;">
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <p class="fw-light mb-0 text-start" style="font-size: 14px; font-family: 'Poppins';">
                    Access all client information, contacts, and employee records from one secure, centralized
                    database with customizable authorization controls for team members.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="col-lg-7 mb-4">
          <div class="card h-100 p-4 rounded-4 border-0 shadow-sm" style="background-color: rgba(137, 16, 20, 0.07);">
            <div class="card-body">
              <!-- Row 1: Image + Heading -->
              <div class="row align-items-center">
                <!-- Image/Icon -->
                <div class="col-3 d-flex justify-content-start">
                  <img src="assets/img/target.png" alt="Banner Preview" class="img-fluid" style="max-width: 55px;">
                </div>
                <!-- Heading -->
                <div class="col-9 text-end">
                  <h5 class="fw-semibold mb-0" style="font-family: 'Poppins';">Compliance tracker</h5>
                </div>
              </div>

              <!-- Paragraph -->
              <div class="row mt-3">
                <div class="col-12">
                  <p class="fw-light mb-0 text-start" style="font-size: 14px; font-family: 'Poppins';">
                    Monitor and maintain adherence to Singaporean regulatory requirements with automated
                    tracking tools that help clients stay compliant and avoid legal issues.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Card 4 -->
        <div class="col-lg-7 mb-4">
          <div class="card h-100 p-4 rounded-4 border-0 shadow-sm" style="background-color: rgba(137, 16, 20, 0.07);">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-8 text-start">
                  <h5 class="fw-semibold mb-0" style="font-family: 'Poppins';">Seamless Email Integration</h5>
                </div>
                <div class="col-4 d-flex justify-content-end">
                  <img src="assets/img/email.png" alt="Banner Preview" class="img-fluid" style="max-width: 55px;">
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <p class="fw-light mb-0 text-start" style="font-size: 14px; font-family: 'Poppins';">
                    Work directly within the app with built-in Gmail and Outlook integration, allowing you to
                    send emails, attach documents, and automatically save correspondence to client records
                    without switching platforms.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Card 5 -->
        <div class="col-lg-5 mb-4">
          <div class="card h-100 p-4 rounded-4 border-0 shadow-sm" style="background-color: rgba(137, 16, 20, 0.07);">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-4 d-flex justify-content-start">
                  <img src="assets/img/group.png" alt="Banner Preview" class="img-fluid" style="max-width: 55px;">
                </div>
                <div class="col-8 text-end">
                  <h5 class="fw-semibold mb-0" style="font-family: 'Poppins';">Comments and Notes
                    Management System</h5>
                </div>

              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <p class="fw-light mb-0 text-start" style="font-size: 14px; font-family: 'Poppins';">
                    Foster team collaboration through organized comment threads on any record, creating a
                    centralized communication history that makes tracking conversations and decisions
                    effortless.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 mb-4">
          <div class="card h-100 p-4 rounded-4 border-0 shadow-sm" style="background-color: rgba(137, 16, 20, 0.07);">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-9 text-start">
                  <h5 class="fw-semibold mb-0" style="font-family: 'Poppins';">AML/CFT Risk Monitoring</h5>
                </div>
                <div class="col-3 d-flex justify-content-end">
                  <img src="assets/img/watch.png" alt="Banner Preview" class="img-fluid" style="max-width: 55px;">
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <p class="fw-light mb-0 text-start" style="font-size: 14px; font-family: 'Poppins';">
                    Conduct comprehensive anti-money laundering and counter-terrorism financing assessments for
                    new and existing clients, including Know-Your-Customer background checks with results
                    automatically saved to client profiles.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="col-lg-7 mb-4">
          <div class="card h-100 p-4 rounded-4 border-0 shadow-sm" style="background-color: rgba(137, 16, 20, 0.07);">
            <div class="card-body">
              <!-- Row 1: Image + Heading -->
              <div class="row align-items-center">
                <!-- Image/Icon -->
                <div class="col-3 d-flex justify-content-start">
                  <img src="assets/img/sign.png" alt="Banner Preview" class="img-fluid" style="max-width: 55px;">
                </div>
                <!-- Heading -->
                <div class="col-9 text-end">
                  <h5 class="fw-semibold mb-0" style="font-family: 'Poppins';">E-signing feature</h5>
                </div>
              </div>

              <!-- Paragraph -->
              <div class="row mt-3">
                <div class="col-12">
                  <p class="fw-light mb-0 text-start" style="font-size: 14px; font-family: 'Poppins';">
                    Accelerate document processing with secure electronic signatures that reduce costs, enhance
                    security, and improve the overall client experience.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Card 4 -->
        <div class="col-lg-7 mb-4">
          <div class="card h-100 p-4 rounded-4 border-0 shadow-sm" style="background-color: rgba(137, 16, 20, 0.07);">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-8 text-start">
                  <h5 class="fw-semibold mb-0" style="font-family: 'Poppins';">ACRA Entity Information Query
                  </h5>
                </div>
                <div class="col-4 d-flex justify-content-end">
                  <img src="assets/img/info.png" alt="Banner Preview" class="img-fluid" style="max-width: 55px;">
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <p class="fw-light mb-0 text-start" style="font-size: 14px; font-family: 'Poppins';">
                    Instantly access up-to-date profile information for any registered ACRA entity directly
                    within your workflow.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Card 5 -->
        <div class="col-lg-5 mb-4">
          <div class="card h-100 p-4 rounded-4 border-0 shadow-sm" style="background-color: rgba(137, 16, 20, 0.07);">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-4 d-flex justify-content-start">
                  <img src="assets/img/light.png" alt="Banner Preview" class="img-fluid" style="max-width: 55px;">
                </div>
                <div class="col-8 text-end">
                  <h5 class="fw-semibold mb-0" style="font-family: 'Poppins';">Real-time Insights
                    and Analytics</h5>
                </div>

              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <p class="fw-light mb-0 text-start" style="font-size: 14px; font-family: 'Poppins';">
                    Transform your operational data into actionable insights with comprehensive departmental and
                    company-wide analytics that empower management decision-making.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 mb-4">
          <div class="card h-100 p-4 rounded-4 border-0 shadow-sm" style="background-color: rgba(137, 16, 20, 0.07);">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-9 text-start">
                  <h5 class="fw-semibold mb-0" style="font-family: 'Poppins';">Client Lifecycle Management</h5>
                </div>
                <div class="col-3 d-flex justify-content-end">
                  <img src="assets/img/docurec.png" alt="Banner Preview" class="img-fluid" style="max-width: 55px;">
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <p class="fw-light mb-0 text-start" style="font-size: 14px; font-family: 'Poppins';">
                    Track and manage every stage of your client relationships from initial contact through
                    project completion with comprehensive lifecycle visibility.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="col-lg-7 mb-4">
          <div class="card h-100 p-4 rounded-4 border-0 shadow-sm" style="background-color: rgba(137, 16, 20, 0.07);">
            <div class="card-body">
              <!-- Row 1: Image + Heading -->
              <div class="row align-items-center">
                <!-- Image/Icon -->
                <div class="col-3 d-flex justify-content-start">
                  <img src="assets/img/message.png" alt="Banner Preview" class="img-fluid" style="max-width: 55px;">
                </div>
                <!-- Heading -->
                <div class="col-9 text-end">
                  <h5 class="fw-semibold mb-0" style="font-family: 'Poppins';">Integrated
                    WhatsApp Messaging</h5>
                </div>
              </div>

              <!-- Paragraph -->
              <div class="row mt-3">
                <div class="col-12">
                  <p class="fw-light mb-0 text-start" style="font-size: 14px; font-family: 'Poppins';">
                    Communicate with clients and team members directly through WhatsApp integration, keeping all
                    conversations organized within your client management system.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Card 4 -->
        <div class="col-lg-7 mb-4">
          <div class="card h-100 p-4 rounded-4 border-0 shadow-sm" style="background-color: rgba(137, 16, 20, 0.07);">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-8 text-start">
                  <h5 class="fw-semibold mb-0" style="font-family: 'Poppins';">People Performance Tracker</h5>
                </div>
                <div class="col-4 d-flex justify-content-end">
                  <img src="assets/img/chat.png" alt="Banner Preview" class="img-fluid" style="max-width: 55px;">
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <p class="fw-light mb-0 text-start" style="font-size: 14px; font-family: 'Poppins';">
                    Leverage system-wide data to generate detailed performance analytics for individual
                    employees or entire teams, supporting informed decisions on training, incentives, and
                    personnel management.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Card 5 -->
        <div class="col-lg-5 mb-4">
          <div class="card h-100 p-4 rounded-4 border-0 shadow-sm" style="background-color: rgba(137, 16, 20, 0.07);">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-4 d-flex justify-content-start">
                  <img src="assets/img/docu.png" alt="Banner Preview" class="img-fluid" style="max-width: 55px;">
                </div>
                <div class="col-8 text-end">
                  <h5 class="fw-semibold mb-0" style="font-family: 'Poppins';">Proposal Generator</h5>
                </div>

              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <p class="fw-light mb-0 text-start" style="font-size: 14px; font-family: 'Poppins';">
                    Create professional proposals quickly with real-time collaboration tools and integrated
                    sales pipeline tracking to streamline your business development process.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row p-5">
      <div class="col-lg-12 d-flex flex-column align-items-center justify-content-center text-center">
        <img src="assets/img/chain.png" alt="Banner Preview" class="img-fluid mb-3" style="max-width: 55px;">
        <h2 class="fw-bold">I'm ready to break free.<br>I want to know more.</h2>
      </div>
    </div>

    <div class="container py-5" id="signup_form" style="font-family: 'Lexend', sans-serif;">
      <div class="col-lg-12 pt-5">
        <div class="card rounded-0 p-3" style="background-color:#E6E6E6;">
          <div class="card-body p-3 p-lg-4">
            <form id="waitlist-form" class="form-floating">
              <div class="row">
                <div class="col-lg-8">

                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="fullname" placeholder="fullname" required>
                    <label for="fullname">Fullname</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" placeholder="Email" required>
                    <label for="email">Email</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="companysize" placeholder="Company Size" required>
                    <label for="companysize">Company Size</label>
                  </div>
                  <div class="form-floating">
                    <textarea class="form-control" id="inquiry" placeholder="Leave a comment here"
                      id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Briefing of summary in Inquiry </label>
                  </div>
                  <button type="submit" id="submitBtn" class="btn  w-100 rounded-pill mt-3"
                    style="background-color: #CC2127; color:#fff">Submit</button>
                </div>
                <div class="col-lg-4" style=" font-family: 'poppins';">
                  <p>We believe business should be about building what matters most to you and not getting bogged down
                    in complexity.</p>
                  <br>
                  <p>
                    Drop us your details below and we'll connect you with someone from our team who actually gets your
                    industry. Expect to hear back within 48 hours (usually sooner, because we're eager to chat).
                  </p>
                  <br>
                  <p>
                    <b>Let's start something great together!</b>

                  </p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Desktop / Larger Screen Footer -->
  <footer class="text-white py-4 mt-5 d-none d-md-block"
    style="background-color: #891014; padding: 200px; font-family: 'Lexend', sans-serif;">
    <div class="container-fluid" style="max-width: 100%;">
      <div class="row">
        <!-- Left: Heading & Button -->
        <div class="col-md-6 text-start mb-3 mb-md-0">
          <h1 class="mb-0 fw-semibold">Master Your <br> Client Domain.</h1>
          <!-- <a href="https://app.clientbase.pro" class="btn btn-light rounded-pill mt-3 text-danger fw-semibold"
            style="color: #891014;">
            Start today
          </a>-->
        </div>

        <!-- Right: QR Image -->
        <div class="col-md-6 text-end">
          <span class="text-white small" style="font-family: 'poppins'; font-size: 10px;">Login to sign Up to</span>
          <div class="col-12 d-flex justify-content-end">
            <img src="assets/Logos/SVG/ClientBook Logo FullColour - White Text.svg" alt="Banner Preview"
              class="img-fluid" style="max-width: 100px;">
          </div>
          <img src="assets/img/clientbase_qr.png" alt="QR Code" class="img-fluid" style="max-width: 150px;">
        </div>

        <div class="col-md-12">
          <hr>
        </div>

        <!-- Bottom: Socials and Copyright -->
        <div class="col-12 d-flex flex-column flex-md-row justify-content-between align-items-center">
          <!-- Left -->
          <div class="text-start mb-2 mb-md-0">
            <p class="mb-0 text-white " style=" font-family: 'poppins'; font-size: 10px;">
              &copy; 2025 ClientBase Pte. Ltd. — All Rights Reserved
            </p>
          </div>

          <!-- Right: Social Icons & Email -->
          <div class="d-flex flex-wrap align-items-center gap-3">
            <div class="d-flex align-items-center">
              <!--<a href="https://instagram.com" target="_blank" class="text-white me-3 fs-5">
                <i class="bi bi-instagram"></i>
              </a>
              <a href="https://facebook.com" target="_blank" class="text-white me-3 fs-5">
                <i class="bi bi-facebook"></i>
              </a>
              <a href="https://twitter.com" target="_blank" class="text-white me-3 fs-5">
                <i class="bi bi-twitter-x"></i>
              </a>-->
              <a href="https://www.linkedin.com/company/clientbase-pte-ltd/?originalSubdomain=sg" target="_blank"
                class="text-white fs-5">
                <i class="bi bi-linkedin"></i>
              </a>
            </div>
            <span class="text-white small ms-3"
              style="font-family: 'poppins'; font-size: 10px;">info@clientbase.pro</span>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Mobile / Small Screen Footer -->
  <footer class="text-white py-4 d-block d-md-none"
    style="background-color: #891014; font-family: 'Lexend', sans-serif;">
    <div class="container px-3">
      <!-- Top: Text + QR -->
      <div class="row align-items-center text-start">
        <div class="col-6">
          <h2 class="fw-bold mb-3">Master Your<br>Own Domain.</h2>
          <!--<a href="https://app.clientbase.pro" class="btn btn-light rounded-pill px-4 py-2 fw-semibold"
            style="color: #891014;">
            Start today
          </a>-->
        </div>
        <div class="col-6 text-end">
          <span class="text-white small" style="font-family: 'poppins'; font-size: 10px;">Login to sign Up to</span>
          <div class="col-4 d-flex justify-content-start">
            <img src="assets/Logos/SVG/ClientBook Logo FullColour - White Text.svg" alt="Banner Preview"
              class="img-fluid" style="max-width: 55px;">
          </div>
          <img src="assets/img/clientbase_qr.png" alt="QR Code" class="img-fluid" style="max-width: 150px;">
        </div>
      </div>

      <!-- Middle: Social + Email -->
      <div class="row align-items-center mt-4">
        <div class="col-12">
          <div class="d-flex flex-column justify-content-center align-items-center gap-2">
            <div class="d-flex justify-content-center gap-3">
              <!-- <a href="https://instagram.com" target="_blank" class="text-white fs-5"><i
                  class="bi bi-instagram"></i></a>
              <a href="https://facebook.com" target="_blank" class="text-white fs-5"><i class="bi bi-facebook"></i></a>
              <a href="https://twitter.com" target="_blank" class="text-white fs-5"><i class="bi bi-twitter-x"></i></a>-->
              <a href="https://www.linkedin.com/company/clientbase-pte-ltd/?originalSubdomain=sg" target="_blank"
                class="text-white fs-5"><i class="bi bi-linkedin"></i></a>
            </div>
            <span class="text-white small" style="font-family: 'poppins'; font-size: 10px;">info@clientbase.pro</span>
          </div>
          <hr class="border-white opacity-50 my-3">
        </div>

        <!-- Bottom: Copyright -->
        <div class="col-12 text-center">
          <p class="mb-0 small text-white" style="font-family: 'poppins'; font-size: 10px;">
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
  <!--<script>
    const toastEl = document.getElementById('liveToast');
    const toast = new bootstrap.Toast(toastEl, {
      autohide: false
    });
    toast.show();
  </script>-->
</body>

</html>