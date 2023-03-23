<?php $this->load->view('header'); ?>




<section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>User Account</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- why section -->
      <section class="why_section layout_padding">
         <div class="container">
         
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <h2 class="text-center">Register Here</h2><br>
                  <div class="full">
                     <form method="post" action="http://localhost/famous/register/">
                      <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="">Name</label>
                        <input type="text" class="form-control" id="Name1" name="name">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="">Email</label>
                        <input type="email" class="form-control" id="Email1" name="email">
                      </div>
                      </div>

                      <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="">Password</label>
                        <input type="password" class="form-control" id="Password1" name="password">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="">Address</label>
                        <input type="text" class="form-control" id="Address1" name="address">
                      </div>
                      </div>
                      <p>
                      <button type="submit" class="btn btn-danger" name="insert">Submit</button>
                      <span class="ml-4">Already Registered <a href="http://localhost/famous/login/" style="color:#f7444e; text-decoration: underline;">Click Here</a> </span></p>
                    </form>
                  </div>
               </div>
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