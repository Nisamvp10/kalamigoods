<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KALAMI GOODS</title> <!-- Stylesheets -->
    <?php
    if($page == 'News') {
      
      $meta = $meta = !empty($news['highlights']) ? $news['highlights'] : '';
      if(!empty($meta)) {
        ?>
         <meta name="keywords" content="<?php
         foreach($meta as $key) {
          echo $key['points'].' ,';
         }
         ?>">
        <?php
      }
    }else {
      ?>
    
      <meta name="keywords" content="<?= getappdata('meta_keywords') ?>">
        <meta name="description" content="<?= getappdata('meta_description') ?>">
      <?php } ?>
    
    <!-- bootstrap v3.3.6 css -->
    <link href="<?=base_url('public/assets/template/css/bootstrap.css');?>" rel="stylesheet">
    <!-- font-awesome css -->
    <link href="<?=base_url('public/assets/template/css/font-awesome.css');?>" rel="stylesheet">
    <!-- flaticon css -->
    <link href="<?=base_url('public/assets/template/css/flaticon.css');?>" rel="stylesheet">
    <!-- factoryplus-icons css -->
    <link href="<?=base_url('public/assets/template/css/factoryplus-icons.css');?>" rel="stylesheet">
    <!-- animate css -->
    <link href="<?=base_url('public/assets/template/css/animate.css');?>" rel="stylesheet">
    <!-- owl.carousel css -->
    <link href="<?=base_url('public/assets/template/css/owl.css');?>" rel="stylesheet">
    <!-- fancybox css -->
    <link href="<?=base_url('public/assets/template/css/jquery.fancybox.css');?>" rel="stylesheet">
    <link href="<?=base_url('public/assets/template/css/hover.css');?>" rel="stylesheet">
    <link href="<?=base_url('public/assets/template/css/frontend.css');?>" rel="stylesheet">
    <link href="<?=base_url('public/assets/template/css/style.css');?>" rel="stylesheet">
    <!-- switcher css -->
    <link href="<?=base_url('public/assets/template/css/switcher.css');?>" rel="stylesheet">
    <link rel='stylesheet' id='factoryhub-color-switcher-css' href='<?=base_url('public/assets/template/css/switcher/default.css');?>' />
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('public/assets/template/css/revolution/settings.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('public/assets/template/css/revolution/layers.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('public/assets/template/css/revolution/navigation.css');?>">


    <!--Favicon-->
    <link rel="shortcut icon" href="<?=base_url('public/assets/template/images/logo.png');?>" type="image/x-icon">
    <link rel="icon" href="<?=base_url('public/assets/template/images/logo.png');?>" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?=base_url('public/assets/template/css/responsive.css');?>" rel="stylesheet">
</head>
