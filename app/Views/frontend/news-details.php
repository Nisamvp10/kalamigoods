<?=view('frontend/inc/header');?>

        <!-- masthead end -->

        <!--Page Header-->
        <div class="page-header title-area">
            <div class="header-title">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h1 class="page-title"><?= $news['title'] ?? '' ?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12 site-breadcrumb">
                            <nav class="breadcrumb">
                                <a class="home" href="#"><span>Home</span></a>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <span><?= $news['title'] ?? '' ?></span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Page Header end-->

        <!--blog page sec-->
        <section class="blogpage single-post blog-classic  secpadd">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">

                        <div class="hentry">
                            <header class="entry-header">
                                <div class="entry-thumbnail">
                                    <img src="<?= validImg($news['image']) ?>" width="100%" alt="">
                                    <div class="entry-time">
                                        <span class="day"><?= date('d',strtotime($news['created_at'])) ?></span>
                                        <span class="month"><?= date('M',strtotime($news['created_at'])) ?></span>
                                    </div>
                                </div>

                                <div class="entry-meta clearfix">
                                    <span class="meta author vcard"><?= $news['type'] ?? '' ?></span>
                                </div>
                                <!-- .entry-meta -->

                                <h2 class="entry-title"><?= $news['title'] ?? '' ?></h2>
                            </header>
                            <!-- .entry-header -->

                            <div class="entry-content">
                               <?= $news['description'] ?? '' ?>
                            </div>
                            <!-- .entry-content -->

                            
                            <!-- .entry-footer -->
                        </div>

                      
                    </div>
                    <div class="col-md-4">
                        <div class="tracksidebar">
                            

                                                     

                            <div class="widget popular-posts-widget">
                                <h4 class="widget-title">Popular Post</h4>
                                 <?php
                                if(!empty($allNews)) {
                                  foreach($allNews as $rowNews) {
                                    ?>
                                     <div class="popular-post post clearfix ">
                                          <a class="widget-thumb" href="<?= base_url('news-details/'.$rowNews->slug) ?>"><img src="<?= validImg($rowNews->image) ?>" alt="" height="75" width="75"></a>
                                          <div class="mini-widget-title">
                                              <h4><a href="<?= base_url('news-details/'.$rowNews->slug) ?>"><?= $rowNews->title ?? '' ?></a></h4>
                                              <i class="fa fa-clock-o" aria-hidden="true"></i>
                                              <span class="entry-date"><?= date('d-M-Y',strtotime($rowNews->created_at)) ?? '' ?></span>
                                          </div>
                                      </div>
                                    <?php
                                  }
                                }?>
                               
                               
                                
                            </div>
                            <?php
                            
                            $gallery = $news['gallery'];
                            
                            if(!empty($gallery)) {
                              ?>
                           
                            <div class="widget latest-project-widget">
                                <h4 class="widget-title">Photo gallery</h4>
                                <div class="latest-project-list clearfix">
                                  <?php
                                  foreach($gallery as $img) { 
                                    
                                     ?>
                                    <div class="latest-project clearfix">
                                        <div class="fp-widget-thumb">
                                            <a class="widget-thumb" href="#">
                                                <i class="fa fa-link" aria-hidden="true"></i>
                                                <img src="<?= validImg($img['img']) ?>" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <?php } ?>
                                
                                </div>
                            </div>
                            <?php } ?>

                        </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--blog page end-->

    <?=view('frontend/inc/footer');?>
