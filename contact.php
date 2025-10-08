<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Karuna Global Exports - Contact Us Page</title>
  <!-- bootstrap icnos -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <!-- bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
  <link rel="stylesheet" href="assets/css/style.css">

  <style>
    .product-img {
      height: 250px;
      object-fit: cover;
    }

    .card:hover {
      transform: translateY(-5px);
      transition: 0.3s ease;
    }

    footer a:hover {
      color: #0dcaf0 !important;
      /* Bootstrap info color */
      transition: 0.3s ease;
    }
  </style>

</head>

<body>

  <!-- header -->
<?php include('header.php') ?>

<!-- page-header -->
<header class="position-relative text-center" style="height: 300px; overflow: hidden;">
    <!-- Background image -->
    <div style="background-image: url('assets/images/Coconut.jpg');background-size: cover;background-position: center;position: absolute;top: 0;left: 0;right: 0;bottom: 0;z-index: 1;"></div>
    <!-- Dark overlay on top of the image -->
    <div style="background-color: rgba(0, 0, 0, 0.6);  /* 0.6 = 60% dark overlay */position: absolute;top: 0;left: 0;right: 0;bottom: 0;z-index: 2;"></div>

    <!-- Text content -->
    <div class="d-flex justify-content-center align-items-center flex-column h-100" style="position: relative; z-index: 3; color: white;">
        <h1 style="font-size: 3rem; font-weight: bold; margin-bottom: 0.5rem;">Contact Us</h1>
        <p style="font-size: 1.25rem;">Welcome to our Contact Us</p>
    </div>
</header>

  <!-- contact us  -->
  <section class="contact-section py-5 bg-light" id="contact">
    <div class="container">
      <!-- Section Title -->
      <div class="text-center mb-5">
        <h2 class="mb-3" data-aos="fade-up">Contact Us</h2>
        <p class="text-muted" data-aos="fade-up" data-aos-delay="100">
          Have a question or business inquiry? Get in touch — we’re here to help!
        </p>
      </div>

      <div class="row g-4 align-items-center justify-content-center">
        <!-- Map Column -->
        <div class="col-lg-6" data-aos="fade-right">
          <div class="rounded-3 overflow-hidden shadow-sm">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31268.306150178934!2d77.81755289860554!3d11.58492181325259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba9597f7213686d%3A0xdd2172f68ae50f45!2sEdappadi%2C%20Tamil%20Nadu%20637105!5e0!3m2!1sen!2sin!4v1759128899423!5m2!1sen!2sin"
              width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

        <!-- Form Column -->
        <div class="col-lg-6" data-aos="fade-left">
          <div class="p-4 p-md-5 bg-white shadow-lg rounded-4">
            <h4 class="mb-4 text-center">We’d love to hear from you</h4>
            <form id="contactForm" onsubmit="return sendToWhatsApp();">
              <div class="mb-3">
                <input type="text" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" id="email" placeholder="Your Email" required>
              </div>
              <div class="mb-3">
                <input type="tel" class="form-control" id="phone" placeholder="Your Phone" required>
              </div>
              <div class="mb-3">
                <textarea class="form-control" id="message" rows="4" placeholder="Your Message"
                  required></textarea>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-success px-4">
                  Send via WhatsApp
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- footer -->
 <?php include('footer.php') ?>