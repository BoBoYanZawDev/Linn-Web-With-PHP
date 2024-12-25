<head>
  <title>Training</title>
  <link rel="icon" type="image/x-icon" href="/public/asset/linn logo (final).png" sizes="16x16" />
  <link rel="stylesheet" href="../public/css/ReponsiveContentLayout.css">
  <link rel="stylesheet" href="../public/css/servicechild.css">
  <!-- Custom Css -->
  <Style>
    .mainBanner {
      background-image: url('../public/asset/other_img/trainingfixed.png');
      background-position: 50% 3%;
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
              <h1 class="pageTitle">Computer Training Center</h1>
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
            <p>We have training center and offers technical training designed to assist today’s corporations and government agencies keep pace with technological changes, as well as custom training solutions for your company’s unique software requirements. Linn Computer Training Center prepares businesses and government to use the latest technology effectively to enhance their productivity.</p>
          </div>
        <?php include '../components/btngroup.php';?>
          <hr>
        </div>
      </div>
      </div>
    </section>
    <?php include '../components/footer.php'; ?>
    <button id="scrollTop" onclick="scrolltoTop()"><i class="fa-solid fa-angles-up"></i></button>
    <!-- for icon title -->
    <script src="../public/js/tooltip.js"></script>   
</body>

</html>