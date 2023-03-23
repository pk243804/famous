<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famous - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="<?=base_url()?>css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="<?=base_url()?>css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="<?=base_url()?>css/responsive.css" rel="stylesheet" />
   </head>



   
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="<?php echo base_url(); ?>" style="color:#f7444e;"><h1>FAMOUS</h1></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="<?php echo base_url('about'); ?>">About</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="<?php echo base_url('product'); ?>">Products</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="<?php echo base_url('blog'); ?>">Blog</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="<?php echo base_url('account'); ?>">Account</a>
                        </li>
                        <li class="nav-item">
                           
                           <a class="nav-link badge badge-light" href="<?php echo base_url('cart'); ?>">
                             <i class="fa fa-shopping-cart fa-3x" aria-hidden="true"></i>
                             <span class="count" id="product_detail_cart_count">
                             <?php
                               if (!empty($this->session->userdata('cart'))) {
                           $items = array_values(unserialize($this->session->userdata('cart')));
                           $sm = count($items);  echo ($sm);  
                               } else {
                                 print 0;
                               }
                             ?>
                           </span>
                           </a>
                        
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         