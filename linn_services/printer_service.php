  <title>Printer Service</title>
  <link rel="icon" type="image/x-icon" href="./asset/linn logo (final).png" sizes="16x16" />
  <link rel="stylesheet" href="./css/ReponsiveContentLayout.css">
  <link rel="stylesheet" href="./css/ServiceChild.css">
  <!-- Custom Css -->
  <Style>
    .mainBanner {
      background-image: url('./asset/Other img/service.png');
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
              <h1 class="pageTitle">Printer Service</h1>
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
            <p>Looking for Printer Service? Yes we sell new printers and have printer repairs services which come with year warranty, physical damage done to repaired parts are not under warranty.</p>
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