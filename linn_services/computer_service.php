  <title>Computer Service</title>
  <link rel="icon" type="image/x-icon" href="./asset/linn logo (final).png" sizes="16x16" />
  <link rel="stylesheet" href="./css/ReponsiveContentLayout.css">
  <link rel="stylesheet" href="./css/ServiceChild.css">
  <!-- Custom Css -->
  <Style>
    .mainBanner {
      background-image: url('/public/img/computerservice.png');
    }
  </Style>
</head>

<body>
<?php include '../components/footer.php'; ?>

  <!-- MainBanner -->
  <main class="mainContainer">
    <section class="mainBannerContainer">
      <div class="container-fluid mainBanner">
        <div class="row">
          <div class="headerImgContainer">
            <div class="headerContent col-lg-8 col-sm-12 p-4">
              <h1 class="pageTitle">Computer Service</h1>
              <h4>September 4, 2020</h4>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- content -->
    <section class="section">
      <div class="container-fluid px-4 py-2">
        <div class="row d-flex align-items-center justify-content-center pageMargin py-5">
          <div class="ServiceContent col-12 sm-p-2">
            <p>We provide the most promising IT support to our clients. More often than not your computer gets infected or experiences an unintentional fall, which may lead to internal or external damage.<br> We can repair and service PC desktops, Laptops and Mac computers. Also, we can configure your home and office network as per your requirements.</p>
            <p>If you have dropped your laptop which you need to study or work then come to Linn IT & Mobile, your laptop will be repaired the next day (for most models). Sometimes you get a software issue, an issue that you don’t know what it is, all you could be reading is “recovery mode” or just a black screen with nothing going on.</p>
          </div>
          <div class="ButtonGroup d-flex align-items-center  ">
            <button data-bs-toggle="tooltip" data-bs-placement="top" title="Share on facebook"><a
                href="https://www.facebook.com/sharer.php?u=https://linncomputer.com/mobile-service/">
                <img src="./asset/icon/facebook.png">
              </a></button>
            <button data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Telegram"><a
                href="https://t.me/LinnITSolution">
                <img src="./asset/icon/telegram.png">
              </a></button>
            <button data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Viber"><a
                href="https://bit.ly/LinnITSolutionViberCommunity">
                <img src="./asset/icon/viber.png">
              </a></button>
            <button data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Email"><a
                href="mailto:?subject=Mobile%20Service&body=https://linncomputer.com/mobile-service/">
                <img src="asset/icon/mail.png">
              </a></button>
          </div>
          <hr>
        </div>
      </div>
      </div>
    </section>
    <?php include '../components/footer.php'; ?>
    <button id="scrollTop" onclick="scrolltoTop()"><i class="fa-solid fa-angles-up"></i></button>
    <!-- for icon title -->
    <script>
      const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');

      tooltipTriggerList.forEach(tooltipTriggerEl => {
        new bootstrap.Tooltip(tooltipTriggerEl, {
          placement: 'top', // Always try to place tooltips on top
          fallbackPlacements: [] // Prevent Bootstrap from falling back to any other placement
        });
      });
    </script>    
</body>

</html>