<?= view('frontend/inc/header') ;?> 
<body>
<?= view('frontend/inc/nav');?>

  <div id="smooth-wrapper">
    <div id="smooth-content">
      <main id="primary" class="site-main">
        <div class="space-for-header"></div>
        <!-- start: Breadcrumb Section -->
        <section class="tj-page-header section-gap-x" data-bg-image="<?=base_url('public/assets/template/assets/images/maintenance.jpg');?>">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                  <h1 class="tj-page-title">Maintenance</h1>
                  <div class="tj-page-link">
                    <span><i class="tji-home"></i></span>
                    <span>
                      <a href="<?=base_url();?>">Home</a>
                    </span>
                    <span><i class="tji-arrow-right"></i></span>
                    <span>
                      <span>Error 404</span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="page-header-overlay" data-bg-image="<?=base_url('public/assets/template/assets/images/shape/pheader-overlay.webp');?>"></div>
        </section>
        <!-- end: Breadcrumb Section -->

        <!-- start: Team Section -->
        <section class="tj-error-section">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="tj-error-wrap text-center">
                  <div class="tj-error-content">
                    <div class="error-img">
                      <img src="<?=base_url('public/assets/template/assets/images/404/error.webp');?>" alt="">
                    </div>
                    <h2 class="error-title title-anim">Oooop! Page not found</h2>
                    <div class="error-desc">
                        Our website is currently offline while our team polishes, tunes, and upgrades a few things. Think of it as a quick pit stop to get ready for the race!
                      <br>
                     <b>We apologize for the interruption. We promise it'll be worth the wait!</b> </div>
                    <a class="tj-primary-btn error-btn" href="<?=base_url();?>">
                      <span class="btn-text"><span>Go to Home Page</span></span>
                      <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end: Team Section -->

        <!-- start: Cta Section -->
        <section class="tj-cta-section" style="    margin-bottom: -65px;">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="cta-area">
                  <div class="cta-content">
                    <h2 class="title title-anim">Let’s Build Future Together.</h2>
                    
                  </div>
                  <div class="cta-img">
                    <img src="<?=base_url('public/assets/template/assets/images/maintenance.webp');?>" width="50%" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end: Cta Section -->
      </main>
  <?= view('frontend/inc/footer') ?>
    </div>
  </div>
  <?= view('frontend/inc/footerLink') ?>
</body>

</html>