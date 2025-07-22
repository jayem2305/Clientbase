<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>ClientBase</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/Logos/ClientBook Logo only (big).svg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <style>
    .navmenu a.active {
      color: #CC2127;
    }

    .navmenu a:hover,
    .navmenu a.active:hover {
      color: #CC2127;
    }

    .hero {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 0;
    }

    .hero .container {
      text-align: center;
    }

    .input-button-group {
      display: flex;
      width: 100%;
      max-width: 600px;
    }

    .input-button-group input[type="email"] {
      flex: 1;
      padding: 12px 16px;
      font-size: 16px;
      border: 1px solid #333;
      border-right: none;
      border-radius: 50px 0 0 50px;
      outline: none;
    }

    .input-button-group button {
      padding: 12px 24px;
      width: 200px;
      background-color: #d32f2f;
      color: white;
      font-weight: bold;
      font-size: 16px;
      border: 1px solid #d32f2f;
      border-radius: 0 50px 50px 0;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .input-button-group button:hover {
      background-color: #b71c1c;
    }
  </style>
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div
      class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="#hero" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1 class="sitename"> <img src="assets/Logos/PNG/ClientBook Logo FullColour - Black Text.png" alt="Customer 1"
            class="avatar"></h1>
      </a>

      <nav id="navmenu " class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">Vision</a></li>
          <li><a href="#testimonials">About us</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <!--<a class="btn-getstarted" href="index.html#about">Get Started</a>-->
      <a class="btn-getstarted" href="http://app.clientbase.pro">Sign-in</a>

    </div>
  </header>

  <main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
              <h1 class="mb-4 text-center display-1">
                <span class="text-danger">Master your own domain</span>
              </h1>
              <h5 class="mb-4 mb-md-5 text-center fst-italic">
                From chaos to clarity. From reactive to strategic. From overwhelmed to in control.
              </h5>
              <h2 class="mb-4 text-center">Complete Control, Complete Confidence</h2>
            </div>
          </div>

          <!-- Form + Phrase -->
          <div class="col-12 d-flex justify-content-center align-items-center flex-column">
            <div class="position-relative text-center my-4 w-100" style="max-width: 600px;">
              <div class="input-button-group d-flex align-items-center">
                <input type="email" id="emailInput" class="form-control rounded-start-pill"
                  placeholder="Example@gmail.com">
                <button class="btn btn-danger rounded-end-pill px-4" data-bs-toggle="modal"
                  data-bs-target="#waitlistModal">Join the wait list</button>
              </div>

              <!-- Engaging Phrase -->
              <div class="engaging-phrase d-none d-md-block position-absolute"
                style="top: -20px; right: -180px; transform: rotate(-10deg);">
                <span
                  style="color: #e91e63; font-style: italic; font-weight: 500; font-size: 1rem; white-space: nowrap;">
                  <i class="bi bi-arrow-left" style="font-size: 1.2rem; transform: rotate(10deg);"></i>
                  Be the <strong>first</strong> to try!
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="waitlistModal" tabindex="-1" aria-labelledby="waitlistModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content border-0 shadow-lg rounded-4">
            <div class="modal-header border-0 bg-light rounded-top-4 px-4 pt-4">
              <div class="d-flex align-items-center">
                <div class="bg-danger text-white rounded-circle d-flex justify-content-center align-items-center me-3"
                  style="width: 40px; height: 40px;">
                  <i class="bi bi-stars fs-5"></i>
                </div>
                <h5 class="modal-title fw-bold" id="waitlistModalLabel">We’re thrilled you’re interested!</h5>
              </div>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-4 pb-4">
              <p class="text-muted mb-4">Sign up with your email to secure your spot on the waitlist. Let’s get to know
                you
                better.</p>
              <form id="waitlist-form">
                <div class="mb-3">
                  <label for="firstName" class="form-label">First Name</label>
                  <input type="text" class="form-control rounded-pill" id="firstName" placeholder="Your first name">
                </div>
                <div class="mb-3">
                  <label for="lastName" class="form-label">Last Name</label>
                  <input type="text" class="form-control rounded-pill" id="lastName" placeholder="Your last name">
                </div>
                <div class="mb-3">
                  <label for="modalEmail" class="form-label">Email address</label>
                  <input type="email" class="form-control rounded-pill" id="modalEmail" placeholder="you@example.com"
                    readonly>
                </div>
                <button type="submit" id="submitBtn" class="btn btn-danger w-100 rounded-pill mt-3">Join the wait
                  list</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- About Section -->
    <section id="about" class="about section bg-light">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 align-items-center justify-content-between">
          <div class="col-xl-12" data-aos="fade-up" data-aos-delay="200">
            <h1 class="about-meta">Vision</h1>
            <h3 class="text-center">“ <i>Transform from being overwhelmed by your practice to being the confident master
                of
                every aspect of your business operations. </i>”</h3>
          </div>
        </div>
      </div>
    </section><!-- /About Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section " style="backkground-color: #E6E6E6;">
      <!-- Section Title -->
      <div class="container text-center " data-aos="fade-up" style="margin-bottom: 40px;">
        <h2 class="text-decoration-underline text-danger">Why ClientBook Works</h2>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-item" style="border-left: 8px solid #dc3545; border-radius: 10px;">
              <img src="assets/img/img.png" class="testimonial-img bg-danger" alt="">
              <h3>You're in Control</h3>
              <h4>Centralized Command Center</h4>
              <p>
                <i>
                  <h2 class="text-center">"Master of your practice"</h2>
                </i>
              <p>Eliminates app-switching chaos, reduces time spent searching for information, and gives you
                complete control over all client interactions from one place.</p>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-item" style="border-left: 8px solid #dc3545; border-radius: 10px;">
              <img src="assets/img/img2.png" class="testimonial-img bg-danger" alt="">
              <h3>Know Your Worth</h3>
              <h4>Performance & Profitability Analytics</h4>
              <p>
                <i>
                  <h2 class="text-center">“Finally see the full picture”</h2>
                  <p>Transforms uncertainty about business health into confident decision-making, enables fair
                    performance reviews based on data, and reveals hidden profit opportunities.</p>
                </i>
              </p>
            </div>
          </div><!-- End testimonial item -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-item" style="border-left: 8px solid #dc3545; border-radius: 10px;">
              <img src="assets/img/img3.png" class="testimonial-img bg-danger" alt="">
              <h3>Everything on the Map</h3>
              <h4>Real-Time Visibility</h4>
              <p>
                <i>
                  <h2 class="text-center">“No more working in the dark”</h2>
                  <p>Eliminates the anxiety of not knowing project status, reduces time spent in status meetings, and
                    gives management complete oversight without micromanaging.</p>
                </i>
              </p>
            </div>
          </div><!-- End testimonial item -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-item" style="border-left: 8px solid #dc3545; border-radius: 10px;">
              <img src="assets/img/img4.png" class="testimonial-img bg-danger" alt="">
              <h3>Effortless Growth</h3>
              <h4>Smart Automation & Scaling</h4>
              <p>
                <i>
                  <h2 class="text-center">“Growth without the growing pains”</h2>
                  <p>Enables handling more clients without hiring more staff, reduces employee burnout from repetitive
                    tasks, and creates scalable processes that grow with your business.</p>
                </i>
              </p>
            </div>
          </div><!-- End testimonial item -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-item" style="border-left: 8px solid #dc3545; border-radius: 10px;">
              <img src="assets/img/img5.png" class="testimonial-img bg-danger" alt="">
              <h3>Sleep Easy Tonight</h3>
              <h4>Automated Compliance & Deadlines</h4>
              <p>
                <i>
                  <h2 class="text-center">“No more deadline PTSD”</h2>
                  <p>Transforms the stress of compliance management into confidence, eliminates human error in deadline
                    tracking, and ensures regulatory requirements are never missed.</p>
                </i>
              </p>
            </div>
          </div><!-- End testimonial item -->
        </div>
      </div>
    </section><!-- /Testimonials Section -->
    <section id="contact" class="contact section bg-light text-center">
      <img src="assets/Logos/PNG/ClientBook Logo FullColour - Black Text.png" alt="Customer 1"
        class="avatar img-fluid mx-auto d-block mb-3" style="max-width: 150px;">

      <h4 class="text-center mx-auto fw-lighter">
        <i>ClientBook transforms you from a reactive manager constantly putting out fires into a strategic leader
          confidently steering your practice toward sustainable growth. You stop working in your business and
          start
          working on it.</i>
      </h4>
    </section>

    <footer class="container-fluid copyright  mt-4 bg-dark text-white py-3">
      <p class="mb-0">© 2025 <span>Copyright</span>
        <strong class="px-1 sitename">ClientBook</strong>
        <span>All Rights Reserved</span>
      </p>
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

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const emailInput = document.getElementById("emailInput");
        const modalEmail = document.getElementById("modalEmail");

        document.getElementById("waitlistModal").addEventListener("show.bs.modal", function () {
          modalEmail.value = emailInput.value;
        });
      });
    </script>
    <script>
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

      document.getElementById('waitlist-form').addEventListener('submit', function (e) {
        e.preventDefault();

        const firstName = document.getElementById('firstName').value.trim();
        const lastName = document.getElementById('lastName').value.trim();
        const modalEmail = document.getElementById('modalEmail').value.trim();
        const submitBtn = document.getElementById('submitBtn');

        const originalContent = submitBtn.innerHTML;
        submitBtn.disabled = true;
        submitBtn.innerHTML = `
          <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...
          `;

        const formData = new FormData();
        formData.append('firstname', firstName);
        formData.append('lastname', lastName);
        formData.append('email', modalEmail);

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
    </script>


</body>

</html>