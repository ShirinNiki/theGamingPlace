
<?php if($this->cart->contents()): ?>
<form style="padding:8px;" action='cart/process' method="POST">
<table class="table table-striped" >
	<tr>
		<th>Quantity</th>
		<th>Product</th>
		<th style="text-align:right">Item Price</th>
	</tr>
	<?php $i=0; ?>
	<?php foreach($this->cart->contents() as $items): ?>
	<tr>
		<td><?php echo $items['qty']; ?></td>
		<td><?php echo $items['name']; ?></td>
		<td style="text-align:right">$<?php echo $this->cart->format_number($items['price']); ?></td>
	</tr>
	<?php echo '<input type="hidden" name="item_name['.$i.']" value="'. $items['name'].'" '; ?>
	<?php echo '<input type="hidden" name="item_code['.$i.']" value="'. $items['id'].'" '; ?>
	<?php echo '<input type="hidden" name="item_qty['.$i.']" value="'.$items['qty'].'" '; ?>
		<?php $i++; ?>
	<?php endforeach; ?>
	
	<tr>
		<td class="right"><strong>Shipping</strong></td>
		<td class="right" style="text-align:right"><?php echo $this->config->item('shipping'); ?></td>
	</tr> 
	<tr>
		<td class="right"><strong>Tax</strong></td>
		<td class="right" style="text-align:right"><?php echo $this->config->item('tax'); ?></td>
	</tr>
	<tr>
		<td class="right"><strong>Total</strong></td>
		<td class="right" style="text-align:right"><?php  //echo $this->cart->format_number($this->cart->total() + $this->cart->tax()); ?></td>
	</tr>
	</table>	
	<br>
	<?php if(!$this->session->userdata('logged_in')): ?>
	<p><a class="btn btn-primary" href="<?php echo base_url();?>users/register">Register</a></p>
	<p><em>You must Loge in to make purcheses</em></p>
	<?php else: ?>
	<h3>Shipping Info</h3>
		<div class="form-group">
			<label>Address</label>
			<input type="text" name="address" class="form-control">
		</div>
		<div class="form-group">
			<label>Address2</label>
			<input type="text"  name="address2" class="form-control">
		</div>
		<div class="form-group">
			<label>city</label>
			<input type="text"  name="city" class="form-control">
		</div>
		<div class="form-group">
			<label>state</label>
			<input type="text"  name="state" class="form-control">
		</div>
		<div class="form-group">
			<label>zipcode</label>
			<input type="text"  name="zipcode" class="form-control">
		</div>
		<p>
			<button class="btn btn-primary">Check Out</button>
		</p>
	<?php endif; ?>
	</form>

<?php else: ?>
	<p>There are no items in your cart</p>
<?php endif; ?>