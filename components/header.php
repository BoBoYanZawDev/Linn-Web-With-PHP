<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    
    <!-- Custom Css -->
    <link rel="stylesheet" href="/public/css/header.css" />
  <link rel="stylesheet" href="/public/css/ScrollTopButton.css">

  </head>
  <body>
    <header class="bg-light shadow-sm sticky-top" id="header">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand" href="/">
                <img
                  id="linnLogo"
                  src="/public/asset/linn logo (final).png"
                  alt="Linn Logo"
                />
              </a>
              <!-- Reponsive Button Toggle -->
              <button
                class="navbar-toggler d-flex d-lg-none flex-column justify-content-around collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="toggler-icon top-bar"></span>
                <span class="toggler-icon middle-bar"></span>
                <span class="toggler-icon button-bar"></span>
              </button>
              <!-- Button End -->

              <!-- link Collection start -->
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navCollection navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link link" href="/">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link link" href="/aboutus.php">ABOUT US</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link link" href="/services.php">SERVICES</a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link link"
                      href="https://shop.linncomputer.com" target="_blank"
                      >SHOPPING</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link link" href="/contact.php">CONTACT</a>
                  </li>
                  <li class="nav-item">
                    <div
                      class="search nav-link mx-2"
                      id="searchToggle"
                    >
                    <!-- Don't Add Style Attribute in Input(searchBox) Tag! -->
                      <input
                        type="text"
                        class="searchBox"
                        placeholder="Search..."
                      />
                      <span class="icon" id="searchBtn"></span>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- link Collection end -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <script src="/public/js/header.js"></script>
    <script src="../public/js/scrolltopcomponent.js"></script>
  </body>
</html>
