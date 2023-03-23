<?php $this->load->view('header'); ?>




    <section class="container">
		<h3 class="text-center mb-5">Shopping Cart</h3>
        <table class="table table-striped">
        	<tr>
        		<th>Id</th>
        		<th>Name</th>
        		<th>Photo</th>
        		<th>Price</th>
        		<th>Quantity</th>
        		<th>Sub Total</th>
        		<th>Action</th>
        	</tr>
        	<?php foreach ($items as $item) { ?>
        		<tr>
        			<td><?php echo $item['id']; ?></td>
        			<td><?php echo $item['name']; ?></td>
        			<td><img src="<?php echo $item['photo']; ?>" width="50"></td>
        			<td><?php echo $item['price']; ?></td>
        			<td><?php echo $item['quantity']; ?></td>
        			<td><?php echo $item['price'] * $item['quantity']; ?></td>
        			<td align="center">
        				<a href="<?php echo site_url('cart/item_remove/'.$item['id']); ?>">X</a>
        			</td>
        		</tr>
        	<?php } ?>
        		<tr>
        			<td colspan="5" align="right"><b>Total</b></td>
        			<td><b><?php echo $total; ?></b></td>
        		</tr>
        </table>
    </section>
      <br>
      <p class="text-center">  <a href="<?php echo site_url('product'); ?>" style="padding:8px 15px; display: inline-block; border-radius: 30px; background: #f7444e; color: #fff; width:14%;">Continue Shopping</a>
        <a href="<?php echo site_url(''); ?>" style="padding:8px 20px; display: inline-block; border-radius: 30px; background: #f7444e; color: #fff; margin-left:52px; width:12%;">Checkout</a>
       </p>


<?php $this->load->view('footer'); ?>