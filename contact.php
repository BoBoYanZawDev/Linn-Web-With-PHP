    <title>Contact-Linn IT Solution Co.,Ltd</title>
    <link rel="icon" type="image/x-icon" href="/public/asset/linn logo (final).png" />
    <!-- for main banner -->
    <link rel="stylesheet" href="/public/css/mainbanner.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="/public/css/contactus.css" />
    <link rel="stylesheet" href="/public/css/formValidation.css" />
    </head>

    <body>
      <!-- header -->
      <?php include './components/header.php'; ?>
      <main class="mainContainer">
        <!-- Banner -->
        <section class="mainBannerContainer container-fluid">
          <div class="mainBanner">
            <div class="row">
              <div class="headerImgContainer">
                <div class="headerContent flex-nowrap col-lg-8 col-sm-12 p-4">
                  <h1 class="pageTitle fs-3">Contact Us</h1>
                  <div class="linkcontainer">
                    <a href="/"><span class="home">Home</span></a>
                  </div>
                  <span class="currentPage">Contact Us</span>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Section 1 -->
        <section class="section1 section my-5">
          <div class="container-fluid px-4 py-2 justify-content-center sendMessageForm">
            <div class="container">
              <form
                class="row d-flex align-items-center justify-content-center p-4 contect-form">
                <div class="textbox col-lg-6 col-sm-12">
                  <label for="name"></label>
                  <input type="text" placeholder="Your Name" id="name" name="Name" value="" />
                  <span class="filltext"></span>
                </div>
                <div class="textbox col-lg-6 col-sm-12">
                  <label for="email"></label>
                  <input
                    type="email"
                    placeholder="Email Address"
                    id="email"
                    name="Email"
                    value="" />
                  <span class="filltext"></span>
                </div>
                <div class="textbox col-lg-12 col-sm-12">
                  <label for="Messagebox"></label>
                  <textarea
                    id="Messagebox"
                    placeholder="Your Comments Here"></textarea>
                  <span class="filltext"></span>
                </div>
                <button type="submit" class="SubmitBtn " id="Submit">Send Message<i class="SendIcon my-auto"></i></button>
                <!-- Alert Boxs -->
                <div class="errorMessage alert alert-danger d-none align-items-center m-4" role="alert">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill bi flex-shrink-0 me-2" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                  </svg>
                  <div>
                    Please correct errors before submitting this form.
                  </div>
                </div>
                <div class="successMessage alert alert-success d-none align-items-center m-4" role="alert">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill bi flex-shrink-0 me-2" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                  </svg>
                  <div>
                    Email send successfully
                  </div>
                </div>
              </form>
            </div>
          </div>
        </section>
        <!-- Section2 -->
        <section class="section section2">
          <div
            class="container-fluid p-3 d-flex align-items-start justify-content-center cardContainer">
            <div class="container">
              <div class="row p-3">
                <h2 class="fs-4">Head Office</h2>
                <div class="shadow d-md-flex WhiteCardContainer">
                  <div class="WhiteCard col-lg-4 col-md-4 col-12">
                    <i class="fa-solid fa-map-location-dot infoicon"></i>
                    <h3 class="fs-4">Address</h3>
                    <p>No. 14/585, 4th Street, Paung Laung Quarter, Pyinmana.</p>
                  </div>
                  <div class="WhiteCard col-lg-4 col-md-4 col-12">
                    <i class="fa-solid fa-phone infoicon"></i>
                    <h3 class="fs-4">Call Us</h3>
                    <p><a href="tel:09788788788">09 788 788 788</a></p>
                  </div>
                  <div class="WhiteCard col-lg-4 col-md-4 col-12">
                    <i class="fa-regular fa-envelope infoicon"></i>
                    <h3 class="fs-4">Mail Us</h3>
                    <p><a href="mailto:info@linncomputer.com">info@linncomputer.com</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Section 4 -->
        <section class="section4 section">
          <div class="px-md-4 container">
            <div
              class="container p-3 d-flex align-items-start justify-content-center">
              <div class="ratio ratio-21x9">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d741.2590271104327!2d96.20344172407769!3d19.755025260459036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf04984d50590d3ff!2sLinn%20IT%20%26%20Mobile%20Mart!5e0!3m2!1sen!2smm!4v1623655308235!5m2!1sen!2smm"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"></iframe>
              </div>
            </div>
          </div>
        </section>
        <!-- Section 3 -->
        <section class="section section3">
          <div
            class="container-fluid p-3 pb-5 d-flex align-items-start justify-content-center cardContainer">
            <div class="container">
              <div class="row p-3">
                <h2 class="fs-4">Branches</h2>
                <div class="d-md-flex align-items-center justify-content-center BlueCardContainer">
                  <div class="col-lg-4 col-md-4 col-12">
                    <ul class="BlueCard">
                      <li>No.11/7, Bogyoke Road, Pyinmana</li>
                      <li><a href="tel:09788788788">09 788 788 788</a></li>
                      <li><a href="mailto:info@linncomputer.com">info@linncomputer.com</a></li>
                    </ul>
                    <div class="ratio ratio-16x9">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15020.03490631158!2d96.19388240559655!3d19.7547838479944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c8ba2f4e0cd0c1%3A0x371a6ba88980820f!2sLinn%20IT%20%2C%20Mobile%20%26%20Electronic!5e0!3m2!1sen!2ssg!4v1735794028998!5m2!1sen!2ssg" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-12">
                    <ul class="BlueCard">
                      <li>No.117, Thapyagone Quarter, Naypyitaw</li>
                      <li><a href="tel:09788788788">09 788 788 788</a></li>
                      <li><a href="mailto:info@linncomputer.com">info@linncomputer.com</a></li>
                    </ul>
                    <div class="ratio ratio-16x9">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15020.85345829483!2d96.10066588715821!3d19.74608750000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c8bc2897593097%3A0xe6b322be14967211!2sLinn%20IT%20%2CMobile%20%26%20Electronic%20Mart!5e0!3m2!1sen!2ssg!4v1735797076329!5m2!1sen!2ssg" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-12">
                    <ul class="BlueCard">
                      <li>Pa.(231), Myoma Market, Naypyitaw</li>
                      <li><a href="tel:09788788788">09 788 788 788</a></li>
                      <li><a href="mailto:info@linncomputer.com">info@linncomputer.com</a></li>
                    </ul>
                    <div class="ratio ratio-16x9">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15020.11518732513!2d96.06813868715818!3d19.7539311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c8bb558aca09b7%3A0xa7001f7132bc7b94!2sLinn%20IT%2C%20Mobile%20%26%20Electronic%20(Myoma)!5e0!3m2!1sen!2ssg!4v1735797126920!5m2!1sen!2ssg" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
      <?php include './components/footer.php'; ?>
      <button id="scrollTop" onclick="scrolltoTop()">
        <i class="fa-solid fa-angles-up"></i>
      </button>
      <!-- //for animated icon -->
      <script src="https://cdn.lordicon.com/lordicon.js"></script>
      <!-- //for Custom JavaScript -->
      <script src="/public/js/index.js"></script>
      <Script src="/public/js/formValidation.js"></Script>
    </body>

    </html>