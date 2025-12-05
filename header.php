<?php
  $pageTitle = $pageTitle ?? 'Sanawell';
  $pageDescription = $pageDescription ?? 'Sanawell connects you with health clubs, sports facilities, clinics, nutrition shops, and athlete-focused food providers near you.';
  $bodyClass = $bodyClass ?? '';
  $extraStyles = $extraStyles ?? '';
  $navCtaHref = $navCtaHref ?? 'providers.php';
  $navCtaLabel = $navCtaLabel ?? 'Search Near You';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php if (!empty($pageDescription)): ?>
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>" />
  <?php endif; ?>

  <!-- Bootstrap 5 CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <!-- Bootstrap Icons -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
  />

  <style>
    :root {
      --sw-primary: #0f9b72;
      --sw-primary-soft: #e6f7f1;
      --sw-dark: #083b33;
    }

    body {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
        sans-serif;
    }

    .navbar {
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04);
    }

    .navbar-brand span {
      font-weight: 700;
      color: var(--sw-dark);
    }

    .btn-sw {
      background: var(--sw-primary);
      border-color: var(--sw-primary);
      color: #fff;
    }

    .btn-sw:hover {
      background: #0b7a59;
      border-color: #0b7a59;
      color: #fff;
    }

    footer {
      border-top: 1px solid #e1ece6;
      background: #f7fffd;
    }
  </style>

  <?php if (!empty($extraStyles)): ?>
    <style>
      <?= $extraStyles ?>
    </style>
  <?php endif; ?>
</head>
<body<?= $bodyClass ? ' class="' . htmlspecialchars($bodyClass) . '"' : '' ?>>
  <nav class="navbar navbar-expand-lg bg-white sticky-top">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="index.php">
        <span
          class="me-2 rounded-circle d-inline-flex align-items-center justify-content-center"
          style="width:32px;height:32px;background:var(--sw-primary-soft);color:var(--sw-primary);"
        >
          <i class="bi bi-heart-pulse"></i>
        </span>
        <span>sanawell</span>
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#mainNav"
        aria-controls="mainNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="providers.php">Find Nearby</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#for-providers">For Providers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
        <a href="<?= htmlspecialchars($navCtaHref) ?>" class="btn btn-sw ms-lg-3 mt-2 mt-lg-0">
          <i class="bi bi-search me-1"></i> <?= htmlspecialchars($navCtaLabel) ?>
        </a>
      </div>
    </div>
  </nav>
