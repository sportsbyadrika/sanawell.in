<?php
  $pageTitle = "Contact Sanawell";
  $pageDescription = "Reach out to Sanawell for partnerships, platform demos, or support.";
  $extraStyles = <<<CSS
    .contact-hero {
      background: linear-gradient(
          135deg,
          rgba(15, 155, 114, 0.06),
          rgba(10, 120, 90, 0.12)
        ),
        #f7fffd;
      padding: 4rem 0 2.5rem;
    }

    .section-title {
      font-weight: 700;
      color: var(--sw-dark);
    }

    .section-subtitle {
      color: #64736e;
      max-width: 640px;
    }

    .service-card {
      border-radius: 1rem;
      border: 1px solid #e3f0ea;
      background: #fff;
      height: 100%;
    }
  CSS;

  include 'header.php';
?>

  <section class="contact-hero">
    <div class="container">
      <div class="row align-items-center g-4">
        <div class="col-lg-7">
          <h1 class="section-title mb-3">Contact Sanawell</h1>
          <p class="section-subtitle">
            Let's talk about listing your facility, integrating healthy food providers,
            or partnering for sports healthcare. Fill out the form and we'll get back to you.
          </p>
        </div>
        <div class="col-lg-5">
          <div class="service-card p-4 shadow-sm">
            <h5 class="mb-3">Quick contact options</h5>
            <p class="small text-muted mb-2">
              <i class="bi bi-envelope text-success me-1"></i> info@sanawell.in
            </p>
            <p class="small text-muted mb-0">
              <i class="bi bi-telephone text-success me-1"></i> +91 98765 43210
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-7">
          <div class="service-card p-4 shadow-sm">
            <h5 class="mb-3">Send us a message</h5>
            <form>
              <div class="mb-3">
                <label class="form-label small fw-semibold">Your Name</label>
                <input type="text" class="form-control" placeholder="Name" required />
              </div>
              <div class="mb-3">
                <label class="form-label small fw-semibold">Email</label>
                <input type="email" class="form-control" placeholder="name@example.com" required />
              </div>
              <div class="mb-3">
                <label class="form-label small fw-semibold">Phone</label>
                <input type="tel" class="form-control" placeholder="Mobile number" required />
              </div>
              <div class="mb-3">
                <label class="form-label small fw-semibold">How can we help?</label>
                <textarea class="form-control" rows="4" placeholder="Tell us about your needs"></textarea>
              </div>
              <button type="submit" class="btn btn-sw">Send</button>
            </form>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="service-card p-4 shadow-sm h-100">
            <h5 class="mb-3">Why connect with Sanawell?</h5>
            <ul class="small text-muted mb-0">
              <li>List your health club, sports facility or clinic and reach more members.</li>
              <li>Partner with healthy food providers and manage billing digitally.</li>
              <li>Offer a seamless experience for bookings, renewals and payments.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php include 'footer.php'; ?>
