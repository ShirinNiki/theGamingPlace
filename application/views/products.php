</div>
<?php if($this->session->flashdata('registered')): ?>
	<div class="alert alert-success">
		<?php echo $this->session->flashdata('registered'); ?>
	</div>
<?php endif; ?>
<?php if($this->session->flashdata('pass_login')): ?>
	<div class="alert alert-success">
		<?php echo $this->session->flashdata('pass_login'); ?>
	</div>
<?php endif; ?>
<?php if($this->session->flashdata('fail_login')): ?>
	<div class="alert alert-danger">
		<?php echo $this->session->flashdata('fail_login'); ?>
	</div>
<?php endif; ?>
<?php if(!empty($products)): ?>
<?php foreach($products as $product): ?>
	<div class="col-md-4 game">
		<div class="game-price">$<?php echo $product->price; ?></div>
		<a href="<?php echo base_url(); ?>products/details/<?php echo $product->id; ?>">
			<img src="<?php echo base_url(); ?>assets/images/products/<?php echo $product->image; ?>"  />
		</a>
		<div class="game-title">
			<?php echo $product->title; ?>
		</div>
		<div class="game-add">
			<form action="<?php echo base_url(); ?>cart/add" method="post">
			QTY:<input class="qty" type="text" name="qty" value="1" >
			<input type="hidden" name="item_number" value="<?php echo $product->id; ?>" >
			<input type="hidden" name="price" value="<?php echo $product->price; ?>" >
			<input type="hidden" name="title" value="<?php echo $product->title; ?>" >
			<button type="submit" class="btn btn-primary">Add To Cart</button>
			</form>
		</div>
	</div>
	
<?php endforeach; ?>
<?php else:
	echo "there is no available item for these category"; 
	endif; ?>