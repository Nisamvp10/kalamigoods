

<?= view('frontend/inc/header') ;?> 
<body>
<?= view('frontend/inc/nav');?>
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <main id="primary" class="site-main">
        <div class="space-for-header"></div>
        <!-- start: Breadcrumb Section -->
        <section class="tj-page-header" data-bg-image="<?=base_url('public/assets/template/assets/images/casestudy-breadcrumb-img.jpg');?>">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                  <h1 class="tj-page-title">Showcasing Our Cyber Defense Projects.</h1>
                  <div class="tj-page-link">
                    <span><i class="tji-home"></i></span>
                    <span>
                      <a href="<?=base_url();?>">Home</a>
                    </span>
                    <span><i class="tji-arrow-right"></i></span>
                    <span>
                      <span>Case Study</span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="page-header-overlay" data-bg-image="<?=base_url('public/assets/template/assets/images/shape/pheader-overlay.jpg');?>"></div>
        </section>
        <!-- end: Breadcrumb Section -->

        <!-- start: History title Section -->
        <section class="tj-history section-gap">
          <div class="container">
            <div class="row rg-30 justify-content-between">
               
            <div class="col-xl-5">
                <div class="sec-heading mb-0">
                    <span class="sub-title wow fadeInUp" data-wow-delay="0.1s"><i class="tji-box"></i> Our projects</span>
                    <h2 class="sec-title text-anim">When It Comes to Cyber Threats, <span>We’re the Shield.</span></h2>
                </div>
            </div>
                       
          
              <div class="col-xl-5">
                <div class="desc wow fadeInUp" data-wow-delay="0.3s">
                  <p>
                    Explore real-world cybersecurity case studies that showcase our expertise in protecting businesses from evolving digital threats. From ransomware mitigation to network defense strategies, each case highlights our approach to detecting, responding to, and preventing cyberattacks.
                  </p>
                  <p>Discover how our cybersecurity solutions have helped organizations safeguard their data, strengthen infrastructure, and recover from incidents. Each case study reveals practical insights and proven results from real client experiences.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end: History tile Section -->


        <!-- start: Project Section -->
        <section class="tj-project-section padding-bottom-10 case-study-img">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="project-area tj-arrange-container">
                      <?php
                if(!empty($blogs)){
                    foreach($blogs as $blog) {
                    ?>
                        <div class="project-item tj-arrange-item">
                            <div class="project-img" data-bg-image="<?=($blog->slug ? $blog->image :base_url('uploads/default.png' ));?>"></div>
                            <div class="project-content">
                            <span class="categories"><a href="<?=($blog->slug ? base_url('case-study/'.$blog->slug) :'#');?>"><?=($blog->type ? $blog->type :'');?></a></span>
                            <div class="project-text">
                                <h4 class="title"><a href="<?=($blog->slug ? base_url('case-study/'.$blog->slug ):'#');?>"><?=($blog->title ? $blog->title :'');?></a></h4>
                                <a class="project-btn" href="<?=($blog->slug ? base_url('case-study/'.$blog->slug ):'#');?>">
                                <i class="tji-arrow-right-long"></i>
                                </a>
                            </div>
                            </div>
                        </div>
                    <?php
                    }
                } ?>
                  
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end: Project Section -->
         
        

        </main>
 <?= view('frontend/inc/footer') ?>
    </div>
  </div>
  <?= view('frontend/inc/footerLink') ?>


</body>

</html>