<?= view('frontend/inc/header') ;?> 
<body>
<?= view('frontend/inc/nav');?>

  <div id="smooth-wrapper">
    <div id="smooth-content">
      <main id="primary" class="site-main">

        <div class="space-for-header"></div>
        <!-- start: Breadcrumb Section -->
        <section class="tj-page-header" data-bg-image="<?=base_url('public/assets/template/assets/images/career-breadcrumb-img.jpg');?>">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                  <h1 class="tj-page-title">Careers That Make an Impact Protect the Digital World with Us</h1>
                  <div class="tj-page-link">
                    <span><i class="tji-home"></i></span>
                    <span>
                      <a href="<?=base_url();?>">Home</a>
                    </span>
                    <span><i class="tji-arrow-right"></i></span>
                    <span>
                      <span>Career</span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="page-header-overlay" data-bg-image="<?=base_url('public/assets/template/assets/images/shape/pheader-overlay.jpg');?>"></div>
        </section>
        <!-- end: Breadcrumb Section -->

        <!-- start: Careers Section -->
        <section class="tj-careers-details section-gap">
          <div class="container">
            <?php
               if(!empty($careers)){
                foreach($careers as $career){ ?>
            <div class="row rg-50">
              <div class="col-lg-8">
                <div class="tj-post-wrapper">
                  <div class="tj-post-single-post">
                    <!-- top content -->
                    <div class="tj-careers-top mb-30">
                      <div class="tj-careers-top-icon">
                        <!-- <i class="tji-manage"></i> -->
                         <img src="<?=($career['image'] ? $career['image'] : '');?>" width="50%" />
                      </div>
                      <div class="tj-careers-top-content">
                        <div class="tj-careers-tag">
                          <span><?=($career['duration'] ? $career['duration'] : '');?></span> <span><?=($career['type'] ? $career['type'] : '');?></span>
                        </div>
                        <h4 class="tj-careers-top-title text-anim"><?=($career['title'] ? $career['title'] : '');?></h4>
                        <span class="location"><i class="tji-location"></i><?=($career['location'] ? $career['location'] : '');?></span>
                      </div>
                    </div>
                    <!-- content -->
                    <div class="tj-entry-content">
                      <h4 class="text-anim">Job Description</h4>
                      <p class="wow fadeInUp" data-wow-delay="0.1s">
                        <?=($career['shortnote'] ? $career['shortnote'] : '');?>
                      <div class="tj-check-list">
                        <h4 class="text-anim"> <?=($career['highlights_title'] ? $career['highlights_title'] : '');?></h4>
                        <ul class="wow fadeInUp" data-wow-delay="0.3s">
                            <?php 
                           
                            if(!empty($career['highlights'])) {
                                foreach($career['highlights'] as $pnts) { ?>
                                    <li><span><i class="tji-check"></i></span><?=($pnts['points'] ? $pnts['points'] : '');?></li>

                                <?php
                                }
                            }?>
                        
                        </ul>
                      </div>
                    </div>
                    <!-- post tag and share -->
                    <div class="tj-tags-post tj-post-details_tags_share wow fadeInUp" data-wow-delay=".1s"
                      style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                      <!-- <div class="tagcloud">
                        <span>Tags:</span>
                        <a href="#">Security Engineer</a>
                        <a href="#">Cybersecurity Engineer</a>
                        <a href="#">Information Security Engineer</a>
                      </div> -->
                      <div class="post-share">
                        

                      <?php 

               
                  $title = isset($career['title']) ? $career['title'] : '';
                  $slug  = isset($career['slug']) ? $career['slug'] : '';
                  $desc  = isset($career['shortnote']) ? strip_tags($career['shortnote']) : '';
                  $image = isset($career['image']) ? base_url('uploads/career/' . $career['image']) : '';

                 
                  $pageUrl = base_url('career/' . $slug);

                  
                  $encodedUrl   = urlencode($pageUrl);
                  $encodedTitle = urlencode($title);
                  $encodedDesc  = urlencode(substr($desc, 0, 150)); // short version
                  $encodedImage = urlencode($image);

                  
                  $whatsappMessage = urlencode("*{$title}*\n\n{$desc}\n\n{$pageUrl}\n\n⭐⭐⭐⭐⭐⭐⭐\n✨ Follow us for more updates!");
                  ?>

                  <ul class="social-share">
                    <li>Share:</li>

                    <!-- Facebook -->
                    <li>
                      <a href="https://www.facebook.com/sharer/sharer.php?u=<?= $encodedUrl ?>&quote=<?= $encodedDesc ?>" 
                        target="_blank" title="Share on Facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                      </a>
                    </li>

                    <!-- Twitter (X) -->
                    <li>
                      <a href="https://twitter.com/intent/tweet?url=<?= $encodedUrl ?>&text=<?= $encodedTitle ?>+-+<?= $encodedDesc ?>" 
                        target="_blank" title="Share on Twitter">
                        <i class="fab fa-x-twitter"></i>
                      </a>
                    </li>

                    <!-- LinkedIn -->
                    <li>
                      <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?= $encodedUrl ?>&title=<?= $encodedTitle ?>&summary=<?= $encodedDesc ?>" 
                        target="_blank" title="Share on LinkedIn">
                        <i class="fa-brands fa-linkedin-in"></i>
                      </a>
                    </li>

                    <!-- WhatsApp -->
                    <li>
                      <a href="https://api.whatsapp.com/send?text=<?= $whatsappMessage ?>" 
                        target="_blank" title="Share on WhatsApp">
                        <i class="fa-brands fa-whatsapp"></i>
                      </a>
                    </li>
                  </ul>


                      </div>
                    </div>
                  </div>
                
                </div>
              </div>
              <div class="col-lg-4">
                <aside class="tj-blog-sidebar">
                  <!-- Job information  -->
                  <div class="tj-sidebar-widget wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="widget-title">Job Information</h4>
                    <div class="project_catagory">
                      <ul>
                        <li><span class="first-child">Category</span><span><?=($career['category'] ? $career['category'] : '');?></span></li>
                        <li><span class="first-child">Number</span><span><?=($career['jobcode'] ? $career['jobcode'] : '');?></span></li>
                        <li><span class="first-child">Salary</span><span><?=($career['salary'] ? $career['salary'] : '');?></span></li>
                        <li><span class="first-child">Vacancy</span><span><?=($career['vacancy'] ? $career['vacancy'] : '');?></span></li>
                        <li><span class="first-child">Published on</span><span><?=($career['apply_on'] ? date('M-d-Y',strtotime($career['apply_on'])) : '');?></span></li>
                      </ul>
                    </div>
                  </div>
                  <!-- apply form -->
                  <div class="tj-sidebar-widget wow fadeInUp" data-wow-delay="0.3s">
                    <h4 class="widget-title">Apply Online</h4>
                    <div class="tj-careers-form">
                      <form action="#">
                        <div class="form-input">
                          <input type="text" name="cr_name" placeholder="Full name*">
                        </div>
                        <div class="form-input">
                          <input type="email" name="cr_email" placeholder="Enter email*">
                        </div>
                        <div class="form-input">
                          <input type="text" name="cr_phone" placeholder="Phone number*">
                        </div>
                        <div class="form-input">
                          <textarea name="cr_cover_letter" placeholder="Cover letter*"></textarea>
                        </div>
                        <div class="form-input reduce">
                          <label class="label" for="inputFile">Attach Resume*</label>
                          <input type="file" id="inputFile">
                        </div>
                        <div class="tj-careers-button">
                          <button type="submit" class="tj-secondary-btn">
                            <span class="btn-text"><span>Submit Now</span></span>
                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </aside>
              </div>
            </div>
            <?php
                }
            }?>
          </div>
        </section>
        <!-- end: Careers Section -->



        
        
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
// document.querySelectorAll('.social-share a').forEach(link => {
//   link.addEventListener('click', function(e) {
//     e.preventDefault();
//     window.open(this.href, 'Share', 'width=600,height=500,scrollbars=no');
//   });
// });
</script>




</body>

</html>