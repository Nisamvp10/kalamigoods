<?= view('frontend/inc/header') ;?> 
<body>
<?= view('frontend/inc/nav');?>

  <div id="smooth-wrapper">
    <div id="smooth-content">
      <main id="primary" class="site-main">

        <div class="space-for-header"></div>
        <!-- start: Breadcrumb Section -->
        <section class="tj-page-header" data-bg-image="<?=base_url('public/assets/template/assets/images/pressandmedia-breadcrumb-img.jpg');?>">
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

        <!-- start: Blog Section -->
        <section class="tj-blog-section section-gap slidebar-stickiy-container">
          <div class="container">
            <div class="row row-gap-5">
              <div class="col-lg-12">
                <div class="post-details-wrapper">
                  <!-- <div class="blog-images wow fadeInUp" data-wow-delay=".1s">
                    <img src="<?=($news['image'] ? $news['image']: base_url('uploads/default.png'));?>" alt="Images">
                  </div> -->
                  <h2 class="title title-anim"><?=($news['title'] ? $news['title'] : '') ;?> </h2>
                  <div class="blog-text">
                    <p class="wow fadeInUp" data-wow-delay=".3s"><?=($news['shortnote'] ? $news['shortnote'] : '') ;?></p>
                    <?php
                    $highlight = $news['highlights'];
                    if($highlight) {
                        ?>
                         <h3 class="wow fadeInUp" data-wow-delay=".3s">Key Highlights</h3>
                          <ul class="wow fadeInUp" data-wow-delay=".3s">
                        <?php
                        foreach($highlight as $pointKey) {
                            ?>
                             <li><span><i class="tji-check"></i></span><?=($pointKey['points'] ? $pointKey['points'] :'');?></li>
                            <?php
                        }
                        ?>
                        </ul>
                        <?php
                    }
                    ?>
                   
                    <h3 class="wow fadeInUp" data-wow-delay=".3s">Event Galley</h3>
                   
                    <P class="wow fadeInUp" data-wow-delay=".3s"><?=($news['description'] ? $news['description'] : '') ;?></P>
                    <div class="images-wrap">
                      <div class="row">
                        <?php
                          $gallery = $news['gallery'];
                          if($gallery) { 
                            foreach($gallery as $rowImg) {
                            ?>
                              <div class="col-sm-4">
                                <div class="image-box wow fadeInUp" data-wow-delay=".3s">
                                  <a class="gallery" data-gall="gallery" href="<?=($rowImg['img'] ? $rowImg['img'] : base_url('uploads/default.png') );?>">
                                    <img src="<?=($rowImg['img'] ? $rowImg['img'] : base_url('uploads/default.png') );?>" alt="Image"></a>
                                </div>
                              </div>
                          <?php } 
                          }?>
                      </div>
                    </div>
                  </div>
                  <div class="tj-post__navigation mb-0 wow fadeInUp d-none" data-wow-delay=".3s">
                    <!-- previous post -->
                    <div class="tj-nav__post previous">
                      <div class="tj-nav-post__nav prev_post">
                        <a href=""><span><i class="tji-arrow-left"></i></span>Previous</a>
                      </div>
                    </div>
                    <div class="tj-nav-post__grid">
                      <a href="portfolio.html"><i class="tji-window"></i></a>
                    </div>
                    <!-- next post -->
                    <div class="tj-nav__post next">
                      <div class="tj-nav-post__nav next_post">
                        <a href="">Next<span><i class="tji-arrow-right"></i></span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>
        <!-- end: Blog Section -->

    



        
        
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