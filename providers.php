<?php
  $pageTitle = "Find Nearby Services – Sanawell";
  $pageDescription = "Explore nearby health clubs, sports facilities, sports clinics, nutrition shops and healthy food providers.";
  $navCtaHref = 'contact.php';
  $navCtaLabel = 'Partner with Sanawell';
  $extraStyles = <<<CSS
    body {
      background: #f5faf8;
    }

    .providers-hero {
      background: var(--sw-primary-soft);
      padding: 4rem 0 2.5rem;
    }

    .section-title {
      font-weight: 700;
      color: var(--sw-dark);
    }

    .section-subtitle {
      color: #64736e;
      max-width: 680px;
    }

    .providers-section {
      padding: 3rem 0;
    }

    .provider-card {
      border-radius: 0.9rem;
      border: 1px solid #dbece5;
      background: #fff;
      padding: 1rem 1rem;
      margin-bottom: 0.9rem;
    }

    .provider-tag {
      font-size: 0.75rem;
      padding: 0.1rem 0.55rem;
      border-radius: 999px;
      background: #eef6f3;
      color: #3b5c52;
      display: inline-block;
      margin: 0 0.25rem 0.25rem 0;
    }
  CSS;

  include 'header.php';
?>

  <!-- HERO -->
  <section class="providers-hero">
    <div class="container">
      <h1 class="section-title mb-2">Search & Find Nearby Services</h1>
      <p class="section-subtitle mb-0">
        Enter your area and category to explore nearby health clubs, sports facilities,
        sports clinics, nutrition shops and healthy food providers. This page currently
        shows sample data – later you can connect it to your API.
      </p>
    </div>
  </section>

  <!-- SEARCH & RESULTS -->
  <section class="providers-section">
    <div class="container">
      <div class="row g-4">
        <!-- Filters -->
        <div class="col-lg-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body">
              <h5 class="card-title mb-3">
                <i class="bi bi-funnel me-1"></i> Search Filters
              </h5>
              <div class="mb-3">
                <label class="form-label small fw-semibold">Your Area / City</label>
                <input
                  id="locationInput"
                  type="text"
                  class="form-control"
                  placeholder="Eg. Kowdiar, Trivandrum"
                />
                <div class="form-text small">
                  In production, you can use GPS or pincode-based search.
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label small fw-semibold">Category</label>
                <select id="categorySelect" class="form-select">
                  <option value="all">All Categories</option>
                  <option value="health-club">Health Club / Gym</option>
                  <option value="sports-facility">Sports Club / Facility</option>
                  <option value="sports-clinic">Sports Clinic / Physio</option>
                  <option value="nutrition-shop">Nutrition Shop</option>
                  <option value="food-provider">Healthy Food Provider</option>
                </select>
              </div>

              <button id="searchBtn" class="btn btn-sw w-100">
                <i class="bi bi-search me-1"></i> Search Providers
              </button>

              <p class="small text-muted mt-3 mb-0">
                The search below uses static sample providers. Replace this logic
                with an API call or database query.
              </p>
            </div>
          </div>
        </div>

        <!-- Results -->
        <div class="col-lg-8">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
              <h5 class="mb-0">Results</h5>
              <p class="small text-muted mb-0">Showing providers based on your filter.</p>
            </div>
            <button class="btn btn-outline-success btn-sm" onclick="renderProviders(sampleProviders)">
              Reset
            </button>
          </div>

          <div id="providersList"></div>
        </div>
      </div>
    </div>
  </section>

  <script>
    const sampleProviders = [
      {
        id: 1,
        name: "GreenPulse Health Club",
        category: "health-club",
        tags: ["Gym", "Personal Training", "Yoga"],
        location: "Kowdiar, Trivandrum",
        distanceKm: 1.2,
        rating: 4.6,
      },
      {
        id: 2,
        name: "Elite Sports Arena",
        category: "sports-facility",
        tags: ["Football", "Badminton", "Swimming"],
        location: "Sasthamangalam, Trivandrum",
        distanceKm: 3.8,
        rating: 4.4,
      },
      {
        id: 3,
        name: "ProMotion Sports Clinic",
        category: "sports-clinic",
        tags: ["Physiotherapy", "Rehab", "Sports Medicine"],
        location: "Pattom, Trivandrum",
        distanceKm: 4.1,
        rating: 4.8,
      },
      {
        id: 4,
        name: "NutriFuel Store",
        category: "nutrition-shop",
        tags: ["Supplements", "Protein", "Healthy Snacks"],
        location: "Statue, Trivandrum",
        distanceKm: 2.3,
        rating: 4.3,
      },
      {
        id: 5,
        name: "AthleteMeals Kitchen",
        category: "food-provider",
        tags: ["Athlete Meals", "Tiffin", "Diet Plans"],
        location: "Vellayambalam, Trivandrum",
        distanceKm: 1.9,
        rating: 4.5,
      },
    ];

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

    const providersList = document.getElementById("providersList");
    const categorySelect = document.getElementById("categorySelect");
    const locationInput = document.getElementById("locationInput");
    const searchBtn = document.getElementById("searchBtn");

    function renderProviders(list) {
      providersList.innerHTML = "";

      if (!list.length) {
        providersList.innerHTML = `<div class="alert alert-warning">No providers found for your filters.</div>`;
        return;
      }

      list.forEach((p) => {
        const tagsHtml = p.tags
          .map((t) => `<span class="provider-tag">${t}</span>`)
          .join("");

        const card = document.createElement("div");
        card.className = "provider-card";
        card.innerHTML = `
          <div class="d-flex justify-content-between align-items-start">
            <div>
              <h6 class="mb-1">${p.name}</h6>
              <p class="small text-muted mb-1">
                <i class="bi bi-geo-alt me-1 text-success"></i>${p.location}
              </p>
              <p class="small text-muted mb-2">
                <i class="bi bi-pin-map me-1 text-success"></i>Approx. ${p.distanceKm} km away
              </p>
              <div>${tagsHtml}</div>
            </div>
            <div class="text-end ms-2">
              <span class="badge bg-light text-success border mb-2 d-inline-block">
                ${formatCategory(p.category)}
              </span>
              <a href="provider.php?id=${p.id}" class="btn btn-sm btn-outline-success d-block">
                View / Book
              </a>
            </div>
          </div>
        `;

        providersList.appendChild(card);
      });
    }

    function searchProviders() {
      const category = categorySelect.value;
      const loc = locationInput.value.trim().toLowerCase();

      let filtered = sampleProviders.slice();

      if (category !== "all") {
        filtered = filtered.filter((p) => p.category === category);
      }

      if (loc) {
        filtered = filtered.filter((p) =>
          p.location.toLowerCase().includes(loc)
        );
      }

      renderProviders(filtered);
    }

    searchBtn.addEventListener("click", searchProviders);

    // initial render
    renderProviders(sampleProviders);
  </script>

<?php include 'footer.php'; ?>
