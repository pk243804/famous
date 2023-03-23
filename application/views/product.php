<?php $this->load->view('header'); ?>




<section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Product Grid</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row products">
               <?php foreach($data as $row){ ?>
               <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="box">
                     
                     <div class="img-box">
                        <img src="<?= $row->image; ?>" alt="">  
                     </div>
                     <div class="detail-box">
                        <h5><?= $row->name; ?></h5> 
                        <h6>$<?= $row->price; ?></h6>
                     </div>
                     <div class="options">
                        <a href="<?php echo site_url('cart/add_cart/'.$row->id); ?>" class="option1">Add to Cart</a>
                     </div>
                  
                  </div>
               </div>
              <?php } ?>
            </div>
      </section>
      <!-- end product section -->
      





<?php $this->load->view('footer'); ?>
