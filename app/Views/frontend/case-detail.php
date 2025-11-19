

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


        <!-- start: Blog Section -->
        <section class="tj-blog-section section-gap slidebar-stickiy-container">
          <div class="container">
            <div class="row row-gap-5">
              <div class="col-lg-8">
                <div class="post-details-wrapper ">
                  <div class="blog-images wow fadeInUp h-10 overflow-hidden case-img" data-wow-delay=".1s">
                    <img src="<?=($blogsData['image'] ? $blogsData['image'] : base_url('public/assets/template/assets/images/project/project-1-inner.jpg'));?>" alt="Images" class="w-100">
                  </div>
                  <h2 class="title title-anim"><?=($blogsData['title'] ? $blogsData['title'] :'');?></h2>
                   <p class="wow fadeInUp" data-wow-delay=".3s"><?=($blogsData['note'] ? $blogsData['note'] :'');?></p>
                       <div class="blog-text">
                    
                    <ul class="wow fadeInUp" data-wow-delay=".3s">
                      <?php
                         if(!empty($blogsData['points'])) {
                        $i=1;
                        foreach($blogsData['points'] as $highlight) {
                            ?>
                            <li><span><i class="tji-check"></i></span><?=($highlight['point'] ? $highlight['point'] : '');?></li>
                                
                            <?php
                        }

                    }?>
                     
                    </ul>
                  </div>
                </div>
               
              <div class="post-details-wrapper mt-4">
                <?=($blogsData['description'] ? $blogsData['description'] :'');?>
            </div>


              </div>
              <div class="col-lg-4">
                <div class="tj-main-sidebar">
                  <div class="tj-sidebar-widget tj-recent-posts wow fadeInUp" data-wow-delay=".3s">
                    <h4 class="widget-title">Recent Case Study</h4>
                    <ul>
                     
                        <?php
                        if(!empty($recentBlog)) {
                          foreach($recentBlog as $reblog) {
                            ?>
                             <li>
                              <div class="post-thumb w-10">
                                <a href="<?=($reblog->slug ? base_url('service/'.$reblog->slug) : '#');?>"> <img src="<?=($reblog->image ? $reblog->image :  base_url('uploads/default.png'));?>" alt="Blog"></a>
                              </div>
                               <div class="post-content">
                                <h6 class="post-title">
                                  <a href="blog-details.html"><?=($reblog->title ?$reblog->title : '');?></a>
                                </h6>
                              </div>
                            </li>
                            <?php
                          }
                        } ?>
                       
                    </ul>
                  </div>
                  <div class="tj-sidebar-widget widget-categories wow fadeInUp" data-wow-delay=".5s">
                    <h4 class="widget-title">Services</h4>
                    <ul>
                       <?php
                        if(!empty($services)) {
                          foreach($services as $service) {
                            ?>
                          <li><a href="<?=base_url('service/'.($service->slug ? $service->slug :''));?>"><?=($service->title ? $service->title :'');?></a></li>
                          <?php 
                          }
                        }?>
                    </ul>
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


</body>

</html>