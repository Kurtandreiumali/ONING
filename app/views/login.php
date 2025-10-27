<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>ONING FLIP - Login</title>
  <meta content="Restaurant Login" name="description">
  <meta content="restaurant, login, account" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Poppins:300,400,500,600" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet">
  <link href="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/bootstrap-icons/bootstrap-icons.css' ?>" rel="stylesheet">
  <link href="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/boxicons/css/boxicons.min.css' ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo BASE_URL . PUBLIC_DIR . '/assets/css/style.css' ?>" rel="stylesheet">

  <!-- Custom Styles -->
<style>
  /* Smooth gray background */
  body {
    background: #96A78D; /* light gray */
    font-family: 'Poppins', sans-serif;
    color: #0b3d0b;
  }

  /* Center container layout */
  .right-side {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  /* Green GLASS container (darker + clean look) */
  .card {
    background: #043915; /* deeper elegant green */
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border-radius: 20px;
    border: 1px solid rgba(255, 255, 255, 0.08);
    box-shadow: 0 8px 20px rgba(0,0,0,0.25);
    color: white;
    padding: 32px;
  }

  /* Title */
  .card-title {
    font-weight: 600;
    color: #ffffff !important;
  }

  /* Subtext */
  .small, .text-muted {
    color: #c9ffcc !important;
  }

  /* Input fields */
  .form-control {
    background: rgba(255,255,255,0.15);
    border: 1px solid rgba(255,255,255,0.3);
    border-radius: 8px;
    color: white;
  }
  .form-control::placeholder {
    color: rgba(255,255,255,0.6);
  }
  .form-control:focus {
    background: rgba(255,255,255,0.25);
    border-color: #9fff9f;
    box-shadow: 0 0 8px rgba(159,255,159,0.5);
    color: white;
  }

  /* Checkbox label */
  .form-check-label {
    color: #ffffff !important;
  }

  /* ✅ Clean & solid login button */
  .btn-warning {
    background: #14532d !important;    /* dark green */
    color: #ffffff !important;
    border: none;
    border-radius: 8px;
    font-weight: 500;
    padding: 10px 20px;
    transition: 0.2s ease-in-out;
  }
  .btn-warning:hover {
    background: #166534 !important;
    transform: translateY(-1px);
    box-shadow: 0 4px 10px rgba(0,0,0,0.25);
  }

  /* Footer link */
  .footer-links {
    color: #b3ffb3;
  }
  .footer-links:hover {
    color: #ffffff;
  }
</style>




</head>

<body>

  <main>
    <div class="container">
      <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        <!-- Left side with image -->
        <div class="col-lg-6 left-side">
        <a href="/">
          <img src="public/img/ONING.jpg" alt="Image" class="img-fluid">
        </a>
        </div>

      <!-- Right side with login form -->
<div class="col-lg-6 right-side">
  <div class="card mb-3 mx-auto" style="max-width: 500px; height: auto; padding: 20px;">
    <div class="card-body" style="padding: 20px;">
      <div class="pt-3 pb-2">
       <h5 class="card-title text-center pb-0 fs-4" style="color:#0b3d0b;">Login to Your Account</h5>
        <p class="text-center small text-muted">Enter your email & password to login</p>
      </div>

      <form class="row g-3 needs-validation" novalidate method="post" action="/auth">
        <div class="col-12">
          <input type="text" name="email" class="form-control" id="yourEmail" placeholder="Email" required>
          <div class="invalid-feedback">Please enter your email address!</div>
        </div>

        <div class="col-12">
          <input type="password" name="password" class="form-control" id="yourPassword" placeholder="Password" required>
          <div class="invalid-feedback">Please enter your password!</div>
        </div>

        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
            <label class="form-check-label" for="rememberMe">Remember me</label>
          </div>
        </div>

        <div class="col-12">
          <button class="btn btn-warning w-100" type="submit">Login</button>
        </div>
        <div class="col-12">
          <p class="small mb-0 text-center">Don't have an account? <a href="/register" class="footer-links">Create an account</a></p>
        </div>
      </form>
    </div>
  </div>
</div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  </main>

  <!-- Vendor JS Files -->
  <script src="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
  <script src="<?php echo BASE_URL . PUBLIC_DIR . '/assets/js/main.js' ?>"></script>

</body>

</html>
