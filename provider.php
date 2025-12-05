<?php
  $pageTitle = "Provider Details – Sanawell";
  $pageDescription = "View details of a selected provider and submit a booking or request.";
  $navCtaHref = 'providers.php';
  $navCtaLabel = 'Back to Search';
  $extraStyles = <<<CSS
    body {
      background: #f5faf8;
    }

    .provider-hero {
      background: var(--sw-primary-soft);
      padding: 3.5rem 0 2rem;
    }

    .section-title {
      font-weight: 700;
      color: var(--sw-dark);
    }

    .badge-cat {
      border-radius: 999px;
      background: #fff;
      border: 1px solid #c6e3d9;
      font-size: 0.8rem;
      padding: 0.25rem 0.7rem;
      color: #31554a;
    }

    .tag-chip {
      font-size: 0.75rem;
      padding: 0.15rem 0.55rem;
      border-radius: 999px;
      background: #eef6f3;
      color: #3b5c52;
      display: inline-block;
      margin: 0 0.25rem 0.25rem 0;
    }

    .info-card {
      border-radius: 1rem;
      border: 1px solid #e1ece6;
      background: #fff;
    }

    .slot-pill {
      border-radius: 999px;
      border: 1px solid #d6e7e1;
      padding: 0.3rem 0.7rem;
      font-size: 0.8rem;
      cursor: pointer;
      margin: 0.15rem;
      background: #fff;
    }

    .slot-pill.active {
      background: var(--sw-primary);
      color: #fff;
      border-color: var(--sw-primary);
    }
  CSS;

  include 'header.php';
?>

  <!-- PROVIDER HERO -->
  <section class="provider-hero">
    <div class="container">
      <div id="providerHeader"
           class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
      </div>
      <div id="providerImages" class="row g-3 mt-3">
      </div>
    </div>
  </section>

  <!-- MAIN CONTENT -->
  <section class="py-4 py-md-5">
    <div class="container">
      <div class="row g-4">
        <!-- LEFT: Details -->
        <div class="col-lg-7">
          <div class="info-card p-4 mb-3">
            <h5 class="mb-2">About this provider</h5>
            <p id="providerAbout" class="small text-muted mb-3"></p>

            <h6 class="small text-uppercase text-muted mb-2">Highlights</h6>
            <div id="providerTags" class="mb-3"></div>

            <h6 class="small text-uppercase text-muted mb-2">Location</h6>
            <p class="small mb-1">
              <i class="bi bi-geo-alt me-1 text-success"></i>
              <span id="providerLocation"></span>
            </p>
            <p class="small text-muted mb-0">
              <i class="bi bi-pin-map me-1 text-success"></i>
              Approx. <span id="providerDistance"></span> km from your search area
            </p>
          </div>

          <div class="info-card p-4 mb-3">
            <h5 class="mb-3">Services & Plans</h5>
            <ul id="providerServices" class="small text-muted mb-0"></ul>
          </div>

          <div class="info-card p-4">
            <h6 class="mb-2">Typical Timings</h6>
            <p class="small text-muted mb-2" id="providerTimings"></p>
            <p class="small text-muted mb-0">
              Exact slots will be confirmed after booking.
            </p>
          </div>
        </div>

        <!-- RIGHT: Booking form -->
        <div class="col-lg-5">
          <div class="info-card p-4">
            <h5 class="mb-3">
              <i class="bi bi-calendar-check me-1 text-success"></i>
              Book / Request a Slot
            </h5>
            <form id="bookingForm">
              <div class="mb-3">
                <label class="form-label small fw-semibold">Your Name</label>
                <input type="text" name="name" class="form-control" required />
              </div>
              <div class="mb-3">
                <label class="form-label small fw-semibold">Email</label>
                <input type="email" name="email" class="form-control" required />
              </div>
              <div class="mb-3">
                <label class="form-label small fw-semibold">Preferred Date</label>
                <input type="date" name="date" class="form-control" required />
              </div>
              <div class="mb-3">
                <label class="form-label small fw-semibold">Preferred Slot</label>
                <div id="slotsWrapper" class="d-flex flex-wrap"></div>
                <input type="hidden" name="slot" id="selectedSlot" required />
              </div>
              <div class="mb-3">
                <label class="form-label small fw-semibold">Additional Notes</label>
                <textarea name="notes" class="form-control" rows="3" placeholder="Share your goals or requirements"></textarea>
              </div>
              <button type="submit" class="btn btn-sw w-100">
                Submit Request
              </button>
            </form>
            <div id="formStatus" class="alert alert-success mt-3 d-none" role="alert">
              Thanks! We've received your request and will confirm shortly.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    const providersData = [
      {
        id: 1,
        name: "GreenPulse Health Club",
        category: "health-club",
        location: "Kowdiar, Trivandrum",
        distanceKm: 1.2,
        tags: ["Gym", "Yoga", "Personal Training"],
        about:
          "GreenPulse Health Club is a full-service fitness centre offering strength training, cardio, yoga and functional fitness with certified trainers.",
        services: [
          "Monthly membership – Gym access",
          "Quarterly membership – Gym + Yoga",
          "Personal training packages",
        ],
        timings: "Mon–Sat: 5:30 AM – 9:30 PM, Sun: 6:00 AM – 11:00 AM",
        slots: ["06:00–07:00", "07:00–08:00", "17:00–18:00", "18:00–19:00"],
        images: [
          "images/greenpulse-hero.jpg",
          "images/greenpulse-gym.jpg",
          "images/greenpulse-floor.jpg",
        ],
      },
      {
        id: 2,
        name: "Elite Sports Arena",
        category: "sports-facility",
        location: "Sasthamangalam, Trivandrum",
        distanceKm: 3.8,
        tags: ["Badminton", "Futsal", "Coaching"],
        about:
          "Elite Sports Arena hosts badminton courts and a futsal turf with coaching for kids and adults, along with pay-per-use bookings.",
        services: [
          "Hourly badminton court booking",
          "Futsal turf – per match booking",
          "Monthly coaching batches",
        ],
        timings: "Daily: 5:00 AM – 11:00 PM",
        slots: ["05:30–06:30", "06:30–07:30", "19:00–20:00", "20:00–21:00"],
        images: [
          "images/greenpulse-hero.jpg",
          "images/greenpulse-gym.jpg",
          "images/greenpulse-floor.jpg",
        ],
      },
      {
        id: 3,
        name: "ProMotion Sports Clinic",
        category: "sports-clinic",
        location: "Pattom, Trivandrum",
        distanceKm: 4.1,
        tags: ["Physiotherapy", "Rehab", "Sports Medicine"],
        about:
          "ProMotion Sports Clinic offers physiotherapy, injury rehab and sports performance screening for athletes and fitness enthusiasts.",
        services: [
          "First consultation – sports physio",
          "Rehab session package",
          "Performance screening & assessment",
        ],
        timings: "Mon–Sat: 9:00 AM – 1:00 PM, 3:00 PM – 7:00 PM",
        slots: ["09:30–10:00", "10:00–10:30", "16:00–16:30", "18:00–18:30"],
        images: [
          "images/greenpulse-hero.jpg",
          "images/greenpulse-gym.jpg",
          "images/greenpulse-floor.jpg",
        ],
      },
      {
        id: 4,
        name: "NutriFuel Store",
        category: "nutrition-shop",
        location: "Statue, Trivandrum",
        distanceKm: 2.3,
        tags: ["Supplements", "Health Foods"],
        about:
          "NutriFuel Store provides supplements, protein, healthy snacks and athlete-focused groceries from verified brands.",
        services: [
          "In-store consultation and purchase",
          "Home delivery order",
          "Monthly nutrition pack subscription",
        ],
        timings: "Mon–Sat: 10:00 AM – 9:00 PM, Sun: 11:00 AM – 7:00 PM",
        slots: ["11:00–12:00", "16:00–17:00", "18:00–19:00"],
        images: [
          "images/greenpulse-hero.jpg",
          "images/greenpulse-gym.jpg",
          "images/greenpulse-floor.jpg",
        ],
      },
      {
        id: 5,
        name: "AthleteMeals Kitchen",
        category: "food-provider",
        location: "Vellayambalam, Trivandrum",
        distanceKm: 1.9,
        tags: ["Calorie-counted meals", "Subscription"],
        about:
          "AthleteMeals Kitchen prepares balanced, calorie-counted meals designed for athletes and fitness-focused individuals, delivered daily.",
        services: [
          "Daily lunch subscription",
          "Daily lunch + dinner subscription",
          "Custom weekend athlete meal plan",
        ],
        timings: "Deliveries typically between 12:00–2:00 PM and 7:00–9:00 PM",
        slots: ["Lunch 12:00–13:00", "Lunch 13:00–14:00", "Dinner 19:00–20:00"],
        images: [
          "images/greenpulse-hero.jpg",
          "images/greenpulse-gym.jpg",
          "images/greenpulse-floor.jpg",
        ],
      },
    ];

    function getQueryParam(key) {
      var params = new URLSearchParams(window.location.search);
      return params.get(key);
    }

    function formatCategory(cat) {
      switch (cat) {
        case "health-club":
          return "Health Club";
        case "sports-facility":
          return "Sports Facility";
        case "sports-clinic":
          return "Sports Clinic";
        case "nutrition-shop":
          return "Nutrition Shop";
        case "food-provider":
          return "Healthy Food Provider";
        default:
          return "Service";
      }
    }

    function renderProvider(p) {
      var hero = document.getElementById("providerHeader");
      hero.innerHTML = `
        <div>
          <div class="d-flex align-items-center gap-2 mb-1">
            <h2 class="section-title mb-0">${p.name}</h2>
            <span class="badge-cat">${formatCategory(p.category)}</span>
          </div>
          <div class="small text-muted">
            <i class="bi bi-geo-alt text-success"></i> ${p.location} • ${p.distanceKm} km away
          </div>
        </div>
        <div class="d-flex align-items-center gap-2">
          <span class="badge bg-success-subtle text-success">
            <i class="bi bi-star-fill text-warning"></i> 4.${p.id + 3} rating
          </span>
          <a href="providers.php" class="btn btn-outline-success btn-sm">
            Back to list
          </a>
        </div>
      `;

      var imagesRow = document.getElementById("providerImages");
      imagesRow.innerHTML = "";
      p.images.forEach(function (img) {
        var col = document.createElement("div");
        col.className = "col-sm-4";
        col.innerHTML = `<img src="${img}" alt="${p.name}" class="img-fluid rounded" />`;
        imagesRow.appendChild(col);
      });

      document.getElementById("providerAbout").textContent = p.about;
      document.getElementById("providerLocation").textContent = p.location;
      document.getElementById("providerDistance").textContent = p.distanceKm;

      var tagContainer = document.getElementById("providerTags");
      tagContainer.innerHTML = p.tags
        .map(function (t) {
          return `<span class="tag-chip">${t}</span>`;
        })
        .join("");

      var servicesList = document.getElementById("providerServices");
      servicesList.innerHTML = p.services
        .map(function (s) {
          return `<li class="mb-1"><i class="bi bi-check-circle text-success me-1"></i> ${s}</li>`;
        })
        .join("");

      document.getElementById("providerTimings").textContent = p.timings;

      var slotsWrapper = document.getElementById("slotsWrapper");
      slotsWrapper.innerHTML = "";
      p.slots.forEach(function (slot) {
        var btn = document.createElement("button");
        btn.type = "button";
        btn.className = "slot-pill";
        btn.textContent = slot;
        btn.addEventListener("click", function () {
          document
            .querySelectorAll(".slot-pill")
            .forEach(function (pill) {
              pill.classList.remove("active");
            });
          btn.classList.add("active");
          document.getElementById("selectedSlot").value = slot;
        });
        slotsWrapper.appendChild(btn);
      });
    }

    function initBookingForm() {
      var form = document.getElementById("bookingForm");
      var status = document.getElementById("formStatus");
      var selectedSlotInput = document.getElementById("selectedSlot");

      form.addEventListener("submit", function (e) {
        e.preventDefault();
        status.classList.remove("d-none", "alert-danger");
        status.classList.add("alert-success");
        status.textContent = "Thanks! We've received your request and will confirm shortly.";
        form.reset();
        document
          .querySelectorAll(".slot-pill")
          .forEach(function (pill) {
            pill.classList.remove("active");
          });
        selectedSlotInput.value = "";
      });
    }

    (function () {
      var idParam = getQueryParam("id");
      var id = parseInt(idParam ? idParam : providersData[0].id.toString(), 10);
      var provider = null;

      for (var i = 0; i < providersData.length; i++) {
        if (providersData[i].id === id) {
          provider = providersData[i];
          break;
        }
      }

      if (!provider) {
        var hero = document.querySelector(".provider-hero .container");
        hero.innerHTML =
          '<h2 class="section-title mb-1">Provider not found</h2>' +
          '<p class="text-muted">The provider you are looking for does not exist or the link is invalid.</p>';

        document.getElementById("providerImages").innerHTML = "";
        var mainSection = document.querySelector("section.py-4");
        if (mainSection) {
          mainSection.remove();
        }
      } else {
        renderProvider(provider);
        initBookingForm();
      }
    })();
  </script>

<?php include 'footer.php'; ?>
