
<?=view('frontend/inc/headerLink');?>
<body class="home header-transparent  header-sticky header-v1 hide-topbar-mobile">
    <div id="page">
        <!-- Preloader-->
        <div class="preloader"></div>
        <!-- masthead -->
        <header id="masthead" class="site-header clearfix">

            <div class="header-main clearfix">
                <div class="container mobile_relative">
                    <div class="row">
                        <div class="site-logo col-md-3 col-sm-6 col-xs-6">
                            <a href="<?= base_url() ?>" class="logo">
                                <img src="<?=base_url('public/assets/template/images/logo-KG.png');?>" alt="KalamiGoods" class="logo-light show-logo"
                                    style="width: 220px;">
                                <img src="<?=base_url('public/assets/template/images/logo-KG.png');?>" alt="KalamiGoods" class="logo-dark hide-logo"
                                    style="width: 220px;">
                            </a>
                            <!-- <h1 class="site-title"><a href="#">CargoHub</a></h1>
                            <h2 class="site-description">Just another Steel Themes Sites site</h2> -->
                        </div>
                        <div class="site-menu col-md-9 col-sm-6 col-xs-6">
                            <nav id="site-navigation" class="main-nav primary-nav nav">
                                <ul class="menu header-menu">
                                    <li><a href="<?= base_url() ?>" <?= ($page == 'Home' ? 'style="color: red;"' :'') ?> >Home</a>
                                    </li>
                                    <li><a href="<?= base_url('about-us') ?>"  <?= ($page == 'About-us' ? 'style="color: red;"' :'') ?>>About Us</a>
                                    </li>
                                    <li><a href="<?= base_url('services') ?>"  <?= ($page == 'Services' ? 'style="color: red;"' :'') ?> >Services</a>
                                    </li>
                                    
                                    <li><a href="<?= base_url('contact') ?>"  <?= ($page == 'Contact' ? 'style="color: red;"' :'') ?> >Contact</a></li>
                                    
                                    <li class="menu-phone">
                                        <a href="tel:<?=getappdata('phone') ;?>">
                                            <i class="fa fa-phone"></i> <?=getappdata('phone') ;?>
                                        </a>
                                    </li>
                                    <li class="menu-phone">
                                        <a href="mailto:<?=getappdata('email') ;?>" style="text-transform: lowercase;">
                                            <i class="fa fa-envelope"></i>  <?=getappdata('email') ;?>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <a href="#" class="navbar-toggle">
                        <span class="navbar-icon">
                            <span class="navbars-line"></span>
                        </span>
                    </a>
                </div>
            </div>

        </header>