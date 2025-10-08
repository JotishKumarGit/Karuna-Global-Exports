<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Karuna Global Exports - Home Page</title>
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

  <!-- carousel -->
  <div id="carouselExample" class="carousel slide overflow-hidden" data-bs-ride="carousel" data-bs-interval="2000">
    <div class="carousel-inner">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <img src="assets/images/Agri_Product.jpg" class="d-block w-100 object-fit-cover" style="height:600px;" alt="...">
        <div class="carousel-caption  d-md-block text-white">
          <h2>Agricultural Products</h2>
          <p>Agricultural Products are goods produced through farming, including crops, livestock, and other food or raw materials used for consumption or industry.
          </p>
          <button class="btn btn-primary "><a href="" class="text-white">Read More</a></button>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <img src="assets/images/Coco_Charcol.jpg" class="d-block w-100 object-fit-cover" style="height:600px;" alt="...">
        <div class="carousel-caption d-md-block text-white">
          <h2>Coconut Charcoal</h2>
          <p>Eco-friendly and long-lasting fuel</p>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <img src="assets/images/Cocofiber.jpg" class="d-block w-100 object-fit-cover" style="height:600px;" alt="...">
        <div class="carousel-caption d-md-block text-white">
          <h2>Coco Fiber</h2>
          <p>Natural and sustainable material</p>
        </div>
      </div>

    </div>

    <!-- Carousel controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bg-primary rounded-circle p-2" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon bg-primary rounded-circle p-2" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- end carousel -->

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

          <button class="read-more-btn mt-3"><a href="contact.php" class="text-decoration-none">Read More</a></button>
        </div>
      </div>
    </div>
  </section>
  <!-- End About us -->

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

  <!-- Products  -->
  <section class="products-section">
    <div class="container">
      <h2 class="text-center">Our Export Products</h2>
      <p class="text-center">
        Karuna Global Exports is a leading exporter of high-quality agricultural and coconut-based products including cocopeat, cocofiber, cococharcoal, coconuts, and rice — serving clients across the globe with trust and consistency.
      </p>

      <div class="row justify-content-center text-center g-3">

        <!-- Product 1 -->
        <div class="col-md-3" data-aos="fade-up">
          <div class="product-card">
            <img src="assets/images/Cocopeat.webp" alt="Agri Products">
            <div class="product-card-body">
              <h5>Cocopeat</h5> 
              <a href="cocopeat.php" class="btn btn-primary text-deco">View More</a> 
            </div> 
          </div>  
        </div>  
        <!-- Product 2 -->
        <div class="col-md-3" data-aos="fade-up">
          <div class="product-card">
            <img src="assets/images/rice.jpg" alt="Agri Products">
            <div class="product-card-body">
              <h5>Rice</h5>
                <a href="rice.php" class="btn btn-primary text-deco">View More</a> 
            </div>
          </div>
        </div>
        <!-- Product 3 -->
        <div class="col-md-3" data-aos="fade-up">
          <div class="product-card">
            <img src="assets/images/Coconut.jpg" alt="Agri Products">
            <div class="product-card-body">
              <h5>Coconut</h5>
            <a href="coconut.php" class="btn btn-primary text-deco">View More</a> 
            </div>
          </div>
        </div>
        <!-- Product 4 -->
        <div class="col-md-3" data-aos="fade-up">
          <div class="product-card">
            <img src="assets/images/Coco_Charcol.jpg" alt="Agri Products">
            <div class="product-card-body">
              <h5>Coco Charcol</h5>
               <a href="coco_charcol.php" class="btn btn-primary text-deco">View More</a> 
            </div>
          </div>
        </div>
        <!-- Product 5 -->
        <div class="col-md-3" data-aos="fade-up">
          <div class="product-card">
            <img src="assets/images/Cocofiber.jpg" alt="Agri Products">
            <div class="product-card-body">
              <h5>Cocofiber</h5> 
               <a href="cocofiber.php" class="btn btn-primary text-deco">View More</a> 
            </div>
          </div> 
        </div>   
        <!-- Product 6 --> 
        <div class="col-md-3" data-aos="fade-up">
          <div class="product-card">
            <img src="assets/images/Agri_Product.jpg" alt="Agri Products">
            <div class="product-card-body">
              <h5>Agri Products</h5>
              <a href="agri_product.php" class="btn btn-primary text-deco">View More</a> 
            </div>
          </div>
        </div>
        <!-- Product 7 -->
        <div class="col-md-3" data-aos="fade-up">
          <div class="product-card">
            <img src="assets/images/Copra_coconut.webp" alt="Agri Products">
            <div class="product-card-body">
              <h5>Copra Coconut</h5> 
               <a href="Copra_Coconut.php" class="btn btn-primary text-deco">View More</a> 
            </div>
          </div>
        </div>  
        <!-- Product 8 --> 
        <div class="col-md-3" data-aos="fade-up">
          <div class="product-card">
            <img src="assets/images/jaggery-powder.jpg" alt="Agri Products">
            <div class="product-card-body">
              <h5>Jaggery Powder</h5>
               <a href="Jaggery_Powder.php" class="btn btn-primary text-deco">View More</a> 
            </div>
          </div>
        </div>

        <!-- Product 9 -->
        <div class="col-md-3" data-aos="fade-up">
          <div class="product-card">
            <img src="assets/images/Tobacco_leaf.jpg" alt="Agri Products">
            <div class="product-card-body">
              <h5>Tobacco</h5>
               <a href="Tobacco.php" class="btn btn-primary text-deco">View More</a> 
            </div>
          </div>
        </div>

        <!-- Product 10 -->
        <div class="col-md-3" data-aos="fade-up">
          <div class="product-card">
            <img src="assets/images/charpoy.jpeg" alt="Agri Products">
            <div class="product-card-body">
              <h5>Charpoy</h5>
                <a href="Charpoy.php" class="btn btn-primary text-deco">View More</a> 
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- end products -->

  <!-- FAQ Section -->
  <section class="faq-section container py-5 bg-white" data-aos="fade-up">
    <div class="faq-header text-center mb-4">
      <h2 class="text-primary">Frequently Asked Questions</h2>
      <p class="text-muted">Have questions about our exports? We’re here to help.</p>
    </div>

    <div class="accordion" id="faqAccordion">

      <!-- FAQ 1 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqOne">
          <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
            What products does Karuna Global Exports offer?
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            We offer a wide range of export-grade agricultural products including cocopeat, cocofiber, cococharcoal, fresh coconuts, and rice.
          </div>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqTwo">
          <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
            Do you export to international markets?
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Yes, we export globally and adhere to all international packaging and phytosanitary requirements for smooth delivery worldwide.
          </div>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqThree">
          <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
            Are your products organic or chemical-free?
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            We offer both organic and conventional options. Our cocopeat and coconut-based products are 100% natural and eco-friendly.
          </div>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqFour">
          <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
            Can you provide bulk supply and custom packaging?
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Yes, we specialize in bulk exports and offer customizable packaging based on buyer requirements, including OEM branding if needed.
          </div>
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqFive">
          <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
            What is cocopeat and how is it used?
          </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Cocopeat is a natural byproduct of coconut husk used widely in agriculture and horticulture as a soil enhancer and soilless growing medium.
          </div>
        </div>
      </div>

      <!-- FAQ 6 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqSix">
          <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
            How do you ensure quality in your exports?
          </button>
        </h2>
        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Our products undergo strict quality checks and are packaged under ISO-compliant processes to ensure consistency and export-grade quality.
          </div>
        </div>
      </div>

      <!-- FAQ 7 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqSeven">
          <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven">
            Do you work with international buyers and distributors?
          </button>
        </h2>
        <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Yes, we welcome partnerships with global buyers, wholesalers, and distributors. Long-term contracts and consistent supply are available.
          </div>
        </div>
      </div>

      <!-- FAQ 8 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqEight">
          <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight">
            How can I place an order with Karuna Global Exports?
          </button>
        </h2>
        <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            You can contact our sales team via email, phone, or by filling out the enquiry form on our website. We'll assist you with product details, pricing, and shipping.
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- end faq -->

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
