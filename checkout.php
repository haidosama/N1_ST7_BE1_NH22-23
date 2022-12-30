<!-- HEADER-->
<?php include "header.php"; ?>
<!-- /HEADER-->

<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<h3 class="breadcrumb-header">Checkout</h3>
				<ul class="breadcrumb-tree">
					<li><a href="index.php">Home</a></li>
					<li class="active">Checkout</li>
				</ul>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<form action="purchase.php" method="post">
				<div class="col-md-7">
					<!-- Billing Details -->
					<div class="billing-details">
						<div class="section-title">
							<h3 class="title">Billing address</h3>
						</div>
						<div class="form-group">
							<input class="input" type="text" name="address" placeholder="Address">
						</div>
						<div class="form-group">
							<input class="input" type="text" name="city" placeholder="City">
						</div>
						<div class="form-group">
							<input class="input" type="text" name="country" placeholder="Country">
						</div>
						<div class="form-group">
							<input class="input" type="tel" name="tel" placeholder="Telephone">
						</div>
					</div>
					<!-- /Billing Details -->

					<!-- Order notes -->
					<div class="order-notes">
						<textarea class="input" placeholder="Order Notes"></textarea>
					</div>
					<!-- /Order notes -->
				</div>

				<!-- Order Details -->
				<div class="col-md-5 order-details">
					<div class="section-title text-center">
						<h3 class="title">Your Order</h3>
					</div>
					<div class="order-summary">
						<div class="order-col">
							<div><strong>PRODUCT</strong></div>
							<div><strong>TOTAL</strong></div>
						</div>
						<div class="order-products">
							<?php $getAllCart = $cart->getAllCart();
							$grand_total = 0;
							foreach ($getAllCart as $values):
								?>
								<div class="order-col">
									<div><?php echo ($values['qty'] . 'x ' . $values['product_name']) ?></div>
									<div>
										<?php echo number_format($values['product_price'] * $values['qty']) ?> VND
									</div>
								</div>
								<?php $grand_total += ($values['product_price'] * $values['qty']); ?>
								<?php endforeach; ?>
						</div>
						<div class="order-col">
							<div>Shiping</div>
							<div><strong>FREE</strong></div>
						</div>
						<div class="order-col">
							<div><strong>TOTAL</strong></div>
							<div><strong class="order-total">
									<?php echo number_format($grand_total); ?> VND
								</strong></div>
						</div>
						<div class="order-col">
							<div><strong>YOUR BALANCE</strong></div>
							<div><strong class="order-total">
									<?php
									$name = $_SESSION['username'] ;
									$getDataUser = $user->getDataUser($name);
									echo ($getDataUser[0]['balance']);?> VND</strong></div>
						</div>
					</div>

					<button type="submit" name="btn_submit" class="primary-btn order-submit">Purchase</button>
				</div>
			</form>
			<!-- /Order Details -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- FOOTER-->
<?php include "footer.php"; ?>
<!-- /FOOTER-->