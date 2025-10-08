 

 <!-- Enquiry Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="enquiryForm">
        <div class="modal-header">
          <h5 class="modal-title" id="enquiryModalLabel">Product Enquiry</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" placeholder="John Doe" required>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phone" placeholder="+1234567890" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" rows="3" placeholder="I am interested in Cocopeat." required></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Send via WhatsApp</button>
        </div>
      </form>
    </div>
  </div>
</div>
 

  <!-- enquiry form  -->
  <script>
  document.getElementById('enquiryForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const name = encodeURIComponent(document.getElementById('name').value.trim());
    const phone = encodeURIComponent(document.getElementById('phone').value.trim());
    const message = encodeURIComponent(document.getElementById('message').value.trim());

    const whatsappNumber = "916380811803"; 

    const fullMessage = `Hello, my name is ${name}.%0AI am interested in your product.%0AContact Number: ${phone}%0AMessage: ${message}`;

    const whatsappURL = `https://wa.me/${whatsappNumber}?text=${fullMessage}`;

    // Open WhatsApp
    window.open(whatsappURL, '_blank');

    // Close the modal
    const modal = bootstrap.Modal.getInstance(document.getElementById('enquiryModal'));
    modal.hide();

    // Optional: reset the form
    document.getElementById('enquiryForm').reset();
  });
</script>

 <!-- Footer -->
  <footer class="pt-5 pb-4" data-aos="fade-up" data-aos-delay="100">
    <div class="container text-center text-md-start">
      <div class="row text-center text-md-start">

        <!-- Company Info -->
        <div class="col-md-3 col-lg-4 col-xl-4 mx-auto mb-4">
          <h5 class="text-uppercase fw-bold mb-4">Karuna Global Exports</h5>
          <p>
            We offer premium embroidery fabrics that blend traditional craftsmanship with modern designs — perfect for creating elegant and timeless fashion statements.
          </p>
        </div>

        <!-- Products -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">Products</h6>
          <ul class="list-unstyled">
            <li><a href="agri_product.php">Agri Product</a></li>
            <li><a href="cocopeat.php">Cocopeat</a></li>
            <li><a href="cocofiber.php">Cocofiber </a></li>
            <li><a href="coco_charcol.php">Coco Charcol</a></li>
            <li><a href="coconut.php">Coconut</a></li>
            <li><a href="rice.php">Rice</a></li>
          </ul>
        </div>

        <!-- Quick Links -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">Quick Links</h6>
          <ul class="list-unstyled">
            <li><a href="#about">About Us</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#faq">FAQ</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>

        <!-- Contact Info -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="bi bi-house-door-fill me-2"></i>EDAPPADI, SALEM , Tamilnadu India</p>
          <p><i class="bi bi-envelope-fill me-2"></i>dhilipdeepack68@gmail.com</p>
          <p><i class="bi bi-telephone-fill me-2"></i> +91 6380811803</p>
        </div>
      </div>

      <!-- Divider -->
      <hr class="my-4">

      <!-- Social Media + Copyright -->
      <div class="row align-items-center text-center">
        <div class="col-md-6">
          <p class="mb-0 text-center">© 2025 Karuna Global Exports. All Rights Reserved.</p>
          <span>Design By <a href="https://trade4export.com/">Trade4Export</a></span>
        </div>
        <div class="col-md-6">
          <div class="d-flex justify-content-center justify-content-md-end gap-3">
            <a href="#"><i class="bi bi-facebook fs-5"></i></a>
            <a href="#"><i class="bi bi-instagram fs-5"></i></a>
            <a href="#"><i class="bi bi-whatsapp fs-5"></i></a>
            <a href="#"><i class="bi bi-linkedin fs-5"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- AOS JS -->
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script src="assets/js/script.js"></script>
  <!-- bootstrap js  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
</body>

</html>