<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Karuna Global Exports - Products Page</title>
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
            <h1 style="font-size: 3rem; font-weight: bold; margin-bottom: 0.5rem;">Cocopeat</h1>
            <p style="font-size: 1.25rem;">Cocopeat, also known as coir pith or coir dust, is a natural, organic by-product extracted from the husk of coconuts.</p>
        </div>
    </header>

    <!-- products details -->
     <div class="container-fluid py-5 bg-light">
    <div class="container">
      <div class="row align-items-center">
        <!-- Image Column -->
        <div class="col-md-6 mb-4 mb-md-0 fade-in">
          <img src="assets/images/Cocopeat.webp" height="auto" width="100%" alt="Cocopeat Product Image" class="product-img shadow-sm">
        </div>

        <!-- Content Column -->
        <div class="col-md-6 fade-in">
          <h2 class="mb-3">Cocopeat</h2>
          <p>
            Cocopeat is a natural, eco-friendly growing medium made from coconut husk fibers. It is widely used in agriculture and horticulture for its water retention, aeration, and anti-fungal properties. Ideal for soil conditioning and seed germination.
          </p>
          <ul>
            <li>Excellent water retention capacity</li>
            <li>100% organic and renewable</li>
            <li>Enhances root aeration</li>
            <li>Suitable for all types of plants</li>
          </ul>
        <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</button>
        </div>
      </div>
    </div>
  </div>

    <!-- footer -->
    <?php include('footer.php') ?>
