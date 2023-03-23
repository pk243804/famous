<?php $this->load->view('header');?>





<section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Blog List</h3>
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
      




<?php $this->load->view('footer');?>