<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Karuna Global Exports - Products Page</title>

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- AOS Animation -->
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

  <!-- Header -->
  <?php include('header.php') ?>

<!-- Page Header -->
<header class="position-relative text-center" style="height: 300px; overflow: hidden;">
  <!-- Background image -->
  <div style="background-image: url('assets/images/Copra_coconut.webp'); background-size: cover; background-position: center; position: absolute; top: 0; left: 0; right: 0; bottom: 0; z-index: 1;"></div>
  <!-- Dark overlay -->
  <div style="background-color: rgba(0, 0, 0, 0.6); position: absolute; top: 0; left: 0; right: 0; bottom: 0; z-index: 2;"></div>

  <!-- Text content -->
  <div class="d-flex justify-content-center align-items-center flex-column h-100" style="position: relative; z-index: 3; color: white;">
    <h1 style="font-size: 3rem; font-weight: bold; margin-bottom: 0.5rem;">Copra Coconut</h1>
    <p style="font-size: 1.25rem;">Sun-dried and naturally processed Copra — rich in oil content and perfect for edible oil production and other uses.</p>
  </div>
</header>

<!-- Product Details -->
<div class="container-fluid py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <!-- Image Column -->
      <div class="col-md-6 mb-4 mb-md-0 fade-in">
        <img src="assets/images/Copra_coconut.webp" alt="Copra Coconut Product Image" class="product-img shadow-sm w-100">
      </div>

      <!-- Content Column -->
      <div class="col-md-6 fade-in">
        <h2 class="mb-3">Copra Coconut</h2>
        <p>
          Copra is the dried kernel of the coconut, primarily used for extracting coconut oil. Our Copra is carefully sourced and sun-dried to retain maximum oil content and purity. It is suitable for edible oil processing, animal feed, and various industrial applications.
        </p>
        <ul>
          <li>High oil content for efficient extraction</li>
          <li>Sun-dried and naturally processed</li>
          <li>Used in oil production and animal feed</li>
          <li>Available in bulk for export</li>
        </ul>
        <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</button>
      </div>
    </div>
  </div>
</div>

  <!-- Footer -->
  <?php include('footer.php') ?>
