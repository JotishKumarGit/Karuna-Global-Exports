<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Karuna Global Exports - Services Page</title>
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
        <h1 style="font-size: 3rem; font-weight: bold; margin-bottom: 0.5rem;">Services</h1>
        <p style="font-size: 1.25rem;">Welcome to our Services</p>
    </div>
</header>

  <!-- services sections -->
  <section class="services-section">
    <div class="container">
      <h2 class="section-title text-center">Our Services</h2>

      <div class="row g-4">

        <!-- Card 1 -->
        <div class="col-md-4">
          <div class="service-card text-center">
            <i class="fas fa-leaf"></i>
            <h5>Agri Product Supply</h5>
            <p>Supplying a variety of organic and conventional agri products to meet global agricultural needs.</p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
          <div class="service-card text-center">
            <i class="fas fa-seedling"></i>
            <h5>Cocopeat & Coir Fiber</h5>
            <p>High-quality cocopeat blocks and coir fiber used for agriculture, hydroponics, and horticulture industries.</p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4">
          <div class="service-card text-center">
            <i class="fas fa-fire"></i>
            <h5>Cococharcoal</h5>
            <p>Eco-friendly charcoal made from coconut shells, ideal for barbecue, industrial, and household use.</p>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-4">
          <div class="service-card text-center">
            <i class="bi bi-chat-square-fill"></i>
            <h5>Fresh Coconuts</h5>
            <p>Exporting premium-grade semi-husked and fully husked coconuts sourced directly from farms.</p>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="col-md-4">
          <div class="service-card text-center">
            <i class="fas fa-warehouse"></i>
            <h5>Bulk Export Solutions</h5>
            <p>We handle bulk exports of all agri commodities with customized packaging and international logistics.</p>
          </div>
        </div>

        <!-- Card 6 -->
        <div class="col-md-4">
          <div class="service-card text-center">
            <i class="bi bi-bricks"></i>
            <h5>Rice Exports</h5>
            <p>Supplying premium quality rice varieties including Basmati and Non-Basmati to international markets.</p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- end services -->

<!-- footer -->
 <?php include('footer.php') ?>