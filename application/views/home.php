<?php $this->load->view('header'); ?>




      <section class="slider_section ">
            <div class="slider_bg_box">
               <img src="images/slider-bg.jpg" alt="">
            </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <?php $i=0;
                  foreach ($res as $value): ?>
                  <div class="carousel-item <?php if($i==0){echo 'active';} ?>">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <?= $value->heading; ?>
                                 </h1>
                                 <p>
                                    <?= $value->description; ?>
                                 </p>
                                 <div class="btn-box">
                                    <a href="" class="btn1">
                                    <?= $value->btn_txt; ?>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php $i++;
               endforeach; ?>
               </div>
               <div class="container">
                  <ol class="carousel-indicators">
                     <?php $j=0;
                  foreach ($res as $value): ?>
                     <li data-target="#customCarousel1" data-slide-to="<?= $j;?>" class="<?php if($j==0){echo 'active';} ?>"></li>
                     <?php $j++;
                  endforeach; ?>
                  </ol>
               </div>
            </div>
         </section>
         <!-- end slider section -->
      




      <!-- why section -->
      <section class="why_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Why Shop With Us
               </h2>
            </div>
            <div class="row">
               <?php foreach($val as $value): ?>
               <div class="col-md-4">
                  <div class="box ">
                     <div class="img-box">
                        <i class="fa <?= $value->icon; ?> fa-4x" aria-hidden="true"></i>
                     </div>
                     <div class="detail-box">
                        <h5>
                           <?php echo $value->heading; ?>
                        </h5>
                        <p>
                           <?php echo $value->description; ?>
                        </p>
                     </div>
                  </div>
               </div>
               <?php endforeach; ?>        
            </div>
         </div>
      </section>
      <!-- end why section -->
      



      <!-- arrival section -->
      <section class="arrival_section">
         <div class="container">
            <div class="box">
               <div class="arrival_bg_box">
                  <img src="images/arrival-bg.png" alt="">
               </div>
               <div class="row">
                  <?php foreach($que as $row): ?>
                  <div class="col-md-6 ml-auto">
                     <div class="heading_container remove_line_bt">
                        <h2>
                           <?php echo $row->header; ?>
                        </h2>
                     </div>
                     <p style="margin-top: 20px;margin-bottom: 30px;">
                        <?php echo $row->paragraph; ?>
                     </p>
                     <a href=""> <?php echo $row->btn_txt; ?> </a>
                  </div>
                  <?php endforeach; ?>
               </div>
            </div>
         </div>
      </section>
      <!-- end arrival section -->
      



      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">
               <?php foreach($data as $row){ ?>
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <!-- <a href="" class="option1">Add To Cart</a> -->
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="<?= $row->image; ?>" alt="">
                     </div>
                     <div class="detail-box">
                        <h5><?= $row->name; ?></h5>
                        <h6>$<?= $row->price; ?></h6>
                     </div>
                  </div>
               </div>
              <?php } ?>
            </div>
            <div class="btn-box">
               <a href="<?php echo base_url('product'); ?>">View All products</a>
            </div>
         </div>
      </section>
      <!-- end product section -->




   
<?php $this->load->view('footer'); ?>