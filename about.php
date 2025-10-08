<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Karuna Global Exports - About Us Page</title>
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
        <h1 style="font-size: 3rem; font-weight: bold; margin-bottom: 0.5rem;">About Us</h1>
        <p style="font-size: 1.25rem;">Welcome to our about us</p>
    </div>
</header>

  <!-- About us -->
  <section class="company-section">
    <div class="container">
      <h2 class="text-center">About Us</h2>
      <p class="text-center"> We are a leading company in the agricultural sector, committed to delivering high-quality products and services to farmers and agribusinesses. Our mission is to revolutionize farming through innovation, technology, and sustainability.</p>
      <div class="row align-items-center">
        <!-- Image Column -->
        <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
          <img src="assets/images/Cocopeat.webp" alt="Pep Technology Image" class="company-img">
        </div>

        <!-- Content Column -->
        <div class="col-md-6" data-aos="fade-left">
          <h2>Karuna Global Exports and Products</h2>
          <p>
            We are a leading manufacturer and exporter of premium agricultural products, specializing in a diverse range of solutions designed to enhance crop yield, soil health, and sustainable farming. Our product line includes organic fertilizers, soil conditioners, bio-stimulants, and advanced irrigation systems — all crafted to support eco-friendly and efficient farming practices.
          </p>

          <p>
            In addition, we are a trusted supplier of high-quality coconut and coconut-based products. From semi-husked and fully husked coconuts to coconut coir, copra, and virgin coconut oil, our offerings meet international quality standards and are sourced directly from certified farms. Whether you need bulk supply for industrial use or packaged products for retail, we deliver freshness, purity, and reliability in every shipment.
          </p>
          <ul>
            <li>Wide range of organic agri inputs and fertilizers</li>
            <li>High-quality semi-husked and fully husked coconuts</li>
            <li>Coconut-based products like coir, copra, and virgin coconut oil</li>
            <li>Export-ready packaging with global shipping capabilities</li>
          </ul>

          <button class="read-more-btn mt-3" ><a href="contact.php" class="text-decoration-none">Read More</a></button>
        </div>
      </div>
    </div>
  </section>
  <!-- End About us -->

<!-- footer -->
 <?php include('footer.php') ?>