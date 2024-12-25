  <title>CCTV Service</title>
  <link rel="icon" type="image/x-icon" href="/public/asset/linn logo (final).png" sizes="16x16" />
  <link rel="stylesheet" href="/public/css/servicechild.css">

  <!-- Custom Css -->
  <Style>
    .mainBanner {
      background-image: url('../public/asset/other_img/cctvser-360x240.jpg');
      background-position: 50% 16%;
    }
  </Style>
</head>

<body>
<?php include '../components/header.php'; ?>
  <!-- MainBanner -->
  <main class="mainContainer">
    <section class="mainBannerContainer">
      <div class="container-fluid mainBanner">
        <div class="row">
          <div class="headerImgContainer">
            <div class="headerContent col-lg-8 col-sm-12 p-4">
              <h1 class="pageTitle">CCTV & Smart Home Services</h1>
              <h4>September 4, 2020</h4>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- content -->
    <section class="section">
      <div class="container px-4 py-2">
        <div class="row d-flex align-items-center justify-content-center pageMargin py-5">
          <div class="ServiceContent col-12 sm-p-2">
            <p>Our professional sales staff and technicians are experienced in providing CCTV security services to your area, and we specialize in providing solutions for retail stores, malls, educational facilities, hospitals & healthcare, the financial industry, banks, government buildings, city & urban surveillance, industrial complex sites, and the protection of critical infrastructure.</p>
          </div>
          <?php include '../components/btngroup.php'?>
          <hr>
        </div>
      </div>
      </div>
    </section>
  </main>
    <?php include '../components/footer.php'; ?>
    <button id="scrollTop" onclick="scrolltoTop()"><i class="fa-solid fa-angles-up"></i></button>
    <!-- for icon title -->
   <script src="../public/js/tooltip.js"></script> 
</body>

</html>