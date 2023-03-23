<?php $this->load->view('header'); ?>



<div class="container py-5">
  <div class="row">
  <div class="col-md-8 offset-md-2">
  <h2 class="text-center">User Registration </h2><br>
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




<?php $this->load->view('footer'); ?>