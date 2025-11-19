     <?=view('frontend/inc/header');?>



        <!-- masthead end -->

        <!-- masthead end -->

        <!--Page Header-->
        <div class="page-header title-area">
            <div class="header-title">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h1 class="page-title">Logistics</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12 site-breadcrumb">
                            <nav class="breadcrumb">
                                <a class="home" href="services.html"><span>Services</span></a>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <span>Logistics</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Page Header end-->

        <!--services Welcome sec -->
        <div class="dtloffsec secpadd">
          <div class="container">
            <div class="row justify-content-center">
            
              <!-- Air Freight Logistics -->
               <?php  
               if(!empty( $serviceItems['cards'])) {

                          foreach ($serviceItems['cards'] as $item){
                            ?>
              <div class="col-md-4 col-sm-8">
                <div class="fh-service-box-2 box-style-1">
                  <div class="box-thumb">
                    <img src="<?= validImg($item['image']) ?>" alt="Air Freight Logistics">
                  </div>
                  <div class="box-wrapper">
                    <div class="box-header clearfix text-center">
                      <span class="fh-icon"  style="padding-right: 10px;"><img src="<?= base_url('public/assets/template/images/icon/arrow.svg') ?>" style="width:40px"></span>
                      <h4 class="box-title text-left"><?= $item['title'] ?></h4>
                      <!-- <span class="sub-title main-color">Fast & Reliable Global Shipping</span> -->
                    </div>
                    <div class="box-content">
                     
                     <?= $item['description'] ?>
                    </div>
                  </div>
                </div>
              </div>
              <?php 
                          }
                        }
                        ?>
          
            
          
            </div>
          </div>
        </div>

        <!-- Welcome sec end-->



        <!-- services sec -->
        <div class="industry_cover secpadd graybg">
          <div class="container">
            <div class="fh-section-title clearfix f25 text-center version-dark paddbtm20">
              <h2>Industry Covered</h2>
            </div>
            <p class="margbtm40 text-center" style="text-align: justify;">
              <?= ( $serviceItems['description'] ?  $serviceItems['description'] :'') ?>
            </p>
            
            <div class="row">
              <!-- Air Freight -->
             <div class="container">
                  <div class="row">

                      <?php 
                      $i = 0;
                      
                      if(!empty( $serviceItems['points'])) {

                          foreach ($serviceItems['points'] as $item){
                          if ($i % 2 == 0 && $i != 0){ ?>
                              </div><div class="row"> <!-- Close row & start new after 2 cols -->
                          <?php }         ?>
                      
                      <div class="col-sm-6 col-xs-12 mb-4">
                      <div class="fh-icon-box style-2 version-dark hide-button <?= ($i % 2 == 0 ? 'icon-right' :'icon-left' ) ?>">
                                <span class="fh-icon"><img src="<?= base_url('public/assets/template/images/icon/check.svg') ?>" style="width:40px"></span>
                                <h4 class="box-title"><span><?= $item['highlight'] ?> </span></h4>
                                <div class="desc">
                                  <p style="text-align: justify;">
                                    Fast and reliable <strong>air freight solutions</strong> for time-sensitive cargo, 
                                    ensuring global connectivity with efficient customs clearance and end-to-end delivery.
                                  </p>
                                </div>
                              </div>
                      </div>

                      <?php 
                      $i++; 
                          } 
                        }
                      ?>
                  </div>
              </div>

                          
                          
                            <!-- Marine & Shipping -->
                            
            </div>
          </div>
        </div>
        <!-- services sec end -->

          <?=view('frontend/inc/footer');?>
