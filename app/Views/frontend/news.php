<?= view('frontend/inc/header') ;?> 
<body>
<?= view('frontend/inc/nav');?>

  <div id="smooth-wrapper">
    <div id="smooth-content">
      <main id="primary" class="site-main">

        <div class="space-for-header"></div>
        <!-- start: Breadcrumb Section -->
        <section class="tj-page-header" data-bg-image="<?=base_url('public/assets/template/assets/images/pressandmedia-breadcrumb-img.jpg')?>">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                  <h1 class="tj-page-title">Company News & Updates</h1>
                  <div class="tj-page-link">
                    <span><i class="tji-home"></i></span>
                    <span>
                      <a href="<?=base_url();?>">Home</a>
                    </span>
                    <span><i class="tji-arrow-right"></i></span>
                    <span>
                      <span>Press & Media</span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="page-header-overlay" data-bg-image="<?=base_url('public/assets/template/assets/images/shape/pheader-overlay.jpg');?>"></div>
        </section>
        <!-- end: Breadcrumb Section -->

        <!-- start: Project Section -->
        <section class="tj-project-section section-gap">
          <div class="container">
            <div class="row d-flex align-items-stretch row-gap-4">
             <?php 
                if(!empty($news)) {
                    foreach($news as $events) {
                ?>
              <div class="col-lg-4 col-md-6 order-lg-4 order-4 d-flex">
                <div class="project-item w-100 wow fadeInUp" data-wow-delay=".1s">
                  <div class="project-img">
                    <img src="<?=($events->image ? $events->image : base_url('uploads/default.png')) ;?>" alt="">
                  </div>
                  <div class="project-content">
                    <span class="categories"><a href="<?=base_url('news-details/'.$events->slug);?>"><?=($events->type ? $events->type : '') ;?> | <?=($events->created_at ? date('M-d-Y',strtotime($events->created_at)): '') ;?></a></span>
                    <div class="project-text">
                      <h4 class="title"><a href="<?=base_url('news-details/'.$events->slug);?>"><?=($events->title ? character_limiter($events->title,100,'...') : '') ;?></a></h4>
                      <a class="project-btn" href="<?=base_url('news-details/'.$events->slug);?>">
                        <i class="tji-arrow-right-big"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <?php } 
                }?>
              
              
            </div>
            <!-- <div class="tj-pagination d-flex justify-content-center">
              <ul>
                <li>
                  <span aria-current="page" class="page-numbers current">1</span>
                </li>
                <li>
                  <a class="page-numbers" href="#">2</a>
                </li>
                <li>
                  <a class="page-numbers" href="#">3</a>
                </li>
                <li>
                  <a class="next page-numbers" href="#"><i class="tji-arrow-right-long"></i></a>
                </li>
              </ul>
            </div> -->

          </div>
        </section>
        <!-- end: Project Section -->

    



        
        
    </main>
  <?= view('frontend/inc/footer') ?>
    </div>
  </div>
  <?= view('frontend/inc/footerLink') ?>

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