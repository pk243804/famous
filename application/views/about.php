<?php $this->load->view('header'); ?>




<section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>About us</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
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
      





<?php $this->load->view('footer'); ?>