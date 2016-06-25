
	<div class="col-md-4">
		<img src="<?php echo base_url(); ?>assets/images/products/<?php echo $product->image; ?>" />
	</div>
	<div class="col-md-8">
		<h3><?php echo $product->title; ?></h3>
		<div class="details-price">
			<?php echo $product->price; ?>
		</div>
		<div class="details-description">
			<?php echo $product->description; ?>
		</div>
		<div class="details-buy">
			<form action="<?php echo base_url(); ?>cart/add" method="post">
			QTY:<input class="qty" type="text" name="qty" value="1" >
			<input type="hidden" name="item_number" value="<?php echo $product->id; ?>" >
			<input type="hidden" name="price" value="<?php echo $product->price; ?>" >
			<input type="hidden" name="title" value="<?php echo $product->title; ?>" >
			<button type="submit" class="btn btn-primary">Add To Cart</button>
			</form>
		</div>
	</div>
