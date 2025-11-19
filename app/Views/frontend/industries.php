<?= view('frontend/inc/header') ;?> 
<body>
<?= view('frontend/inc/nav');?>
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <main id="primary" class="site-main">

        <div class="space-for-header"></div>
        <!-- start: Breadcrumb Section -->
        <section class="tj-page-header" data-bg-image="<?=base_url('public/assets/template/assets/images/industries-breadcrumb-img.jpg');?>">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                  <h1 class="tj-page-title">Securing Businesses Across Every Industry</h1>
                  <div class="tj-page-link">
                    <span><i class="tji-home"></i></span>
                    <span>
                      <a href="<?=base_url();?>">Home</a>
                    </span>
                    <span><i class="tji-arrow-right"></i></span>
                    <span>
                      <span>Industries</span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="page-header-overlay" data-bg-image="<?=base_url('public/assets/template/assets/images/shape/pheader-overlay.jpg');?>"></div>
        </section>
        <!-- end: Breadcrumb Section -->

          <!-- start: Choose Section -->
        <section id="choose" class="tj-choose-section section-gap">
          <div class="container">
            <div class="row row-gap-4">
              <?php 
              if(!empty($industries)) {
                foreach($industries as $industry) { ?>
              <div class="col-lg-4">
                <div class="choose-box">
                  <div class="choose-content">
                    <div class="choose-icon">
                      <!-- <i class="tji-innovative"></i> -->
                       <img src="<?=($industry['image'] ? $industry['image'] : base_url('uploads/default.png'));?>">
                    </div>
                    <h4 class="title"><?=($industry['title'] ? $industry['title'] : '');?></h4>
                    <p class="desc"><?=($industry['note'] ? $industry['note'] : '');?></p>
                  </div>
                </div>
              </div>
              <?php 
                }
            } ?>
              

            </div>
          </div>
        </section>
        <!-- end: Choose Section -->

    </main>
  <?= view('frontend/inc/footer') ?>
    </div>
  </div>
  <?= view('frontend/inc/footerLink') ?>
  <script>
  const body = document.querySelector('body');
  const toggle = document.querySelector('#toggle');
  toggle.addEventListener('change', () => {
    body.classList.toggle('dark');
});
</script>

<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>




</body>

</html>