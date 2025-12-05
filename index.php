<?php
  $pageTitle = "Sanawell – Health, Fitness & Sports Wellness Network";
  $pageDescription = "Sanawell connects you with health clubs, sports facilities, clinics, nutrition shops, and athlete-focused food providers near you.";
  $extraStyles = <<<CSS
    .hero {
      background: linear-gradient(
          135deg,
          rgba(15, 155, 114, 0.06),
          rgba(10, 120, 90, 0.12)
        ),
        #f7fffd;
      padding: 5rem 0 4rem;
    }

    .hero-title {
      font-size: clamp(2.1rem, 3vw, 2.8rem);
      font-weight: 700;
      color: var(--sw-dark);
    }

    .hero-subtitle {
      font-size: 1.05rem;
      color: #4a5a55;
    }

    .pill-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.35rem;
      font-size: 0.85rem;
      border-radius: 999px;
      padding: 0.25rem 0.75rem;
      background: #ffffffaa;
      border: 1px solid #d7eee6;
      color: var(--sw-dark);
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
      transition: all 0.2s ease;
      height: 100%;
    }

    .service-card:hover {
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06);
      transform: translateY(-3px);
    }

    .service-icon {
      width: 3rem;
      height: 3rem;
      border-radius: 1rem;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background: var(--sw-primary-soft);
      color: var(--sw-primary);
      font-size: 1.5rem;
    }
  CSS;

  include 'header.php';
?>

  <!-- HERO -->
  <section class="hero">
    <div class="container">
      <div class="row align-items-center g-4">
        <div class="col-lg-6">
          <div class="mb-3">
            <span class="pill-badge">
              <i class="bi bi-geo-alt"></i> Discover health & sports services
              around you
            </span>
          </div>
          <h1 class="hero-title">
            One platform for health clubs, sports care & athlete nutrition.
          </h1>
          <p class="hero-subtitle mt-3">
            Sanawell connects you to nearby
            <strong>health clubs</strong>,
            <strong>sports facilities</strong>,
            <strong>sports clinics</strong>,
            <strong>nutrition shops</strong>,
            and <strong>athlete-focused food providers</strong> – while also
            powering membership, billing and online collections.
          </p>
          <div class="mt-4 d-flex flex-wrap gap-2">
            <a href="providers.php" class="btn btn-sw btn-lg">
              <i class="bi bi-search me-1"></i> Find Nearby Services
            </a>
            <a href="#for-providers" class="btn btn-outline-success btn-lg">
              <i class="bi bi-building-add me-1"></i> List Your Facility
            </a>
          </div>
          <p class="mt-3 small text-muted">
            Built in India for health, fitness & sports communities.
          </p>
        </div>

        <div class="col-lg-6">
          <div class="row g-3">
            <div class="col-6">
              <div class="service-card p-3">
                <div class="service-icon mb-2">
                  <i class="bi bi-people"></i>
                </div>
                <h6 class="mb-1">Health Club Memberships</h6>
                <p class="small mb-0 text-muted">
                  Smart member profiles, attendance & fees in one place.
                </p>
              </div>
            </div>
            <div class="col-6">
              <div class="service-card p-3">
                <div class="service-icon mb-2">
                  <i class="bi bi-basket3"></i>
                </div>
                <h6 class="mb-1">Healthy Food Partners</h6>
                <p class="small mb-0 text-muted">
                  Ordered daily, tracked monthly, paid online.
                </p>
              </div>
            </div>
            <div class="col-6">
              <div class="service-card p-3">
                <div class="service-icon mb-2">
                  <i class="bi bi-activity"></i>
                </div>
                <h6 class="mb-1">Sports Healthcare</h6>
                <p class="small mb-0 text-muted">
                  Physio, rehab & performance clinics for athletes.
                </p>
              </div>
            </div>
            <div class="col-6">
              <div class="service-card p-3">
                <div class="service-icon mb-2">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <h6 class="mb-1">Nearby Facilities</h6>
                <p class="small mb-0 text-muted">
                  Discover clubs, arenas & nutrition stores near you.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section id="services" class="py-5">
    <div class="container">
      <div class="text-center mb-4">
        <h2 class="section-title">Services on Sanawell</h2>
        <p class="section-subtitle mx-auto">
          A connected ecosystem for members, athletes, coaches, clinics and
          healthy food providers.
        </p>
      </div>

      <div class="row g-4">
        <!-- same three main service cards and extra ones as before -->
        <!-- (keeping them unchanged for brevity) -->
        <div class="col-md-6 col-lg-4">
          <div class="service-card p-4">
            <div class="service-icon mb-3">
              <i class="bi bi-building-check"></i>
            </div>
            <h5>Health Club Management</h5>
            <p class="small text-muted">
              Complete membership lifecycle – registrations, plans, attendance,
              renewals, billing and digital fee collection.
            </p>
            <ul class="small text-muted mb-0">
              <li>Plan-wise subscriptions</li>
              <li>QR / card based check-in</li>
              <li>Invoices, GST-ready billing</li>
              <li>Member communication & alerts</li>
            </ul>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="service-card p-4">
            <div class="service-icon mb-3">
              <i class="bi bi-bag-heart"></i>
            </div>
            <h5>Healthy Food & Nutrition Supply</h5>
            <p class="small text-muted">
              Manage providers supplying healthy meals, snacks and athlete
              nutrition to clubs, offices and homes.
            </p>
            <ul class="small text-muted mb-0">
              <li>Daily orders & standing instructions</li>
              <li>Change / pause orders easily</li>
              <li>Delivery partner management</li>
              <li>Monthly statement & online collection</li>
            </ul>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="service-card p-4">
            <div class="service-icon mb-3">
              <i class="bi bi-heart-pulse-fill"></i>
            </div>
            <h5>Sports Healthcare Services</h5>
            <p class="small text-muted">
              Manage physiotherapy, sports medicine, rehab and coaching
              services; appointments and follow-ups included.
            </p>
            <ul class="small text-muted mb-0">
              <li>Bookings & consultations</li>
              <li>Treatment plans</li>
              <li>Payments & reconciliations</li>
              <li>Outcome tracking</li>
            </ul>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="service-card p-4">
            <div class="service-icon mb-3">
              <i class="bi bi-messenger"></i>
            </div>
            <h5>Member & Athlete Communication</h5>
            <p class="small text-muted">
              Send reminders, share updates, notify about renewals and track
              engagement with your community.
            </p>
            <ul class="small text-muted mb-0">
              <li>SMS / email / WhatsApp alerts</li>
              <li>Offer & promotion broadcasts</li>
              <li>Feedback & follow-ups</li>
              <li>Reports on opens & clicks</li>
            </ul>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="service-card p-4">
            <div class="service-icon mb-3">
              <i class="bi bi-geo-alt"></i>
            </div>
            <h5>Location Discovery</h5>
            <p class="small text-muted">
              Help people find relevant providers around them and connect with
              the right service quickly.
            </p>
            <ul class="small text-muted mb-0">
              <li>Map-based browsing</li>
              <li>Filters for services</li>
              <li>Service highlights</li>
              <li>Contact & booking options</li>
            </ul>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="service-card p-4">
            <div class="service-icon mb-3">
              <i class="bi bi-cash-coin"></i>
            </div>
            <h5>Billing & Collections</h5>
            <p class="small text-muted">
              Digital billing, GST support and simplified online collections for
              memberships, food orders or healthcare services.
            </p>
            <ul class="small text-muted mb-0">
              <li>Online payments & reconciliation</li>
              <li>Invoices & receipts</li>
              <li>Auto-reminders</li>
              <li>Settlement reports</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PROVIDERS CTA -->
  <section id="for-providers" class="py-5 bg-light">
    <div class="container">
      <div class="row align-items-center g-4">
        <div class="col-lg-6">
          <h2 class="section-title">For Providers</h2>
          <p class="section-subtitle">
            Sanawell makes it easy to list, manage and grow your health,
            fitness, sports or nutrition services.
          </p>
          <ul class="list-unstyled mb-4">
            <li class="mb-2">
              <i class="bi bi-check-circle-fill text-success me-1"></i>
              Health clubs, gyms, yoga & fitness studios
            </li>
            <li class="mb-2">
              <i class="bi bi-check-circle-fill text-success me-1"></i>
              Sports clubs, academies & shooting / badminton / football centres
            </li>
            <li class="mb-2">
              <i class="bi bi-check-circle-fill text-success me-1"></i>
              Physiotherapy, rehab & sports medicine clinics
            </li>
            <li class="mb-2">
              <i class="bi bi-check-circle-fill text-success me-1"></i>
              Healthy food & tiffin providers, nutrition kitchens
            </li>
            <li class="mb-2">
              <i class="bi bi-check-circle-fill text-success me-1"></i>
              Nutrition shops & sports supplement stores
            </li>
          </ul>
          <a href="contact.php" class="btn btn-sw mt-2">
            Talk to us about onboarding
          </a>
        </div>
        <div class="col-lg-6">
          <div class="service-card p-4">
            <h5 class="mb-3">
              Platform Highlights for Providers
            </h5>
            <div class="row g-2 small text-muted">
              <div class="col-sm-6">
                <i class="bi bi-credit-card me-1 text-success"></i> Online fee &
                bill collection
              </div>
              <div class="col-sm-6">
                <i class="bi bi-clipboard-data me-1 text-success"></i> Analytics
                dashboard
              </div>
              <div class="col-sm-6">
                <i class="bi bi-bell me-1 text-success"></i> Member reminders &
                alerts
              </div>
              <div class="col-sm-6">
                <i class="bi bi-phone me-1 text-success"></i> Mobile-friendly
                access
              </div>
              <div class="col-sm-6">
                <i class="bi bi-lock me-1 text-success"></i> Role-based access &
                security
              </div>
              <div class="col-sm-6">
                <i class="bi bi-whatsapp me-1 text-success"></i> Optional
                WhatsApp chatbot integration
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php include 'footer.php'; ?>
