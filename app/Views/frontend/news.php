<?=view('frontend/inc/header');?>


        <!-- masthead end -->

        <!--Page Header-->
        <div class="page-header title-area">
            <div class="header-title">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h1 class="page-title">Blog</h1>
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
                                <span>Blog</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Page Header end-->

        <!--blog page sec-->
        <section class="blogpage blog-grid  secpadd">
            <div class="container">
                <div class="row">
                  <?php
                  if($news) {
                    $i=0;
                    foreach($news as $blog) {
                      if($i % 2 ==0 && $i !=0 ){
                        echo '</div><div class="row">';
                      }
                      ?>
                        <div class="blog-wrapper col-xs-12 col-sm-6 col-md-6 col-2">
                        <div class="wrapper">
                            <div class="entry-thumbnail container-fluid">
                                <a href="<?= base_url('news-details/'.$blog->slug) ?>" class="container-wraooer"><img src="<?= validImg($blog->image) ?>" width="100%" alt="<?= $blog->title??'' ?>"></a>
                                <div class="entry-time">
                                    <span class="day"><?= date('d',strtotime($blog->created_at)) ?></span>
                                    <span class="month"><?= date('M',strtotime($blog->created_at)) ?></span>
                                </div>
                            </div>
                            <header class="entry-header">
                                <div class="entry-meta clearfix">
                                    
                                    <span class="meta cat-links"><a href="#"><?= $blog->type ?? '' ?></span>
                                </div>
                                <h2 class="entry-title"><a href="#"><?= $blog->title ?? '' ?></a></h2>
                            </header>
                            <!-- .entry-header -->
                            <div class="entry-content__">
                                <p><?= $blog->short_note ?? '' ?></p>
                            </div>
                            <!-- .entry-content -->
                            <footer class="entry-footer clearfix">
                                <a href="<?= base_url('news-details/'.$blog->slug) ?>">Read More...</a>
                            </footer>
                        </div>
                    </div>
                      <?php

                    $i++;
                  }
                  }?>
                  
                    

                </div>
                <!-- <nav class="navigation paging-navigation numeric-navigation">
                    <span class="page-numbers current">1</span>
                    <a class="page-numbers" href="#">2</a>
                    <a class="next page-numbers" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </nav> -->
            </div>
        </section>
        <!--blog page end-->

        <!--footer sec-->
      <?=view('frontend/inc/footer');?>
