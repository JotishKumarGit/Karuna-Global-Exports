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
        <div style="background-image: url('assets/images/charpoy.jpeg'); background-size: cover; background-position: center; position: absolute; top: 0; left: 0; right: 0; bottom: 0; z-index: 1;"></div>
        <!-- Dark overlay -->
        <div style="background-color: rgba(0, 0, 0, 0.6); position: absolute; top: 0; left: 0; right: 0; bottom: 0; z-index: 2;"></div>

        <!-- Text content -->
        <div class="d-flex justify-content-center align-items-center flex-column h-100" style="position: relative; z-index: 3; color: white;">
            <h1 style="font-size: 3rem; font-weight: bold; margin-bottom: 0.5rem;">Charpoy</h1>
            <p style="font-size: 1.25rem;">Traditional handcrafted charpoys — durable, breathable, and perfect for indoor or outdoor lounging.</p>
        </div>
    </header>

    <!-- Product Details -->
    <div class="container-fluid py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image Column -->
                <div class="col-md-6 mb-4 mb-md-0 fade-in">
                    <img src="assets/images/charpoy.jpeg" alt="Charpoy Product Image" class="product-img shadow-sm w-100">
                </div>

                <!-- Content Column -->
                <div class="col-md-6 fade-in">
                    <h2 class="mb-3">Charpoy</h2>
                    <p>
                        The Charpoy is a traditional woven bed widely used in rural and urban homes for its comfort, simplicity, and breathability. Made with sturdy wooden frames and handwoven ropes, our charpoys are crafted by skilled artisans for long-lasting use in both indoor and outdoor settings.
                    </p>
                    <ul>
                        <li>Made from high-quality wood and durable rope</li>
                        <li>Handcrafted by local artisans</li>
                        <li>Perfect for traditional seating or sleeping</li>
                        <li>Available in various sizes and designs</li>
                    </ul>
                    <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include('footer.php') ?>