<?php
//search
if (isset($_GET['keyword'])) {
	include "header.php";
	include "sidebar.php";
	$keyword = $_GET['keyword'];
	$search = $product->search($keyword);
} else {
	header("location: index.php");
}
?>

<body>
	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- STORE -->
				<div id="store" class="col-md-9">

					<!-- store products -->
					<ul class="breadcrumb-tree">
						<li class="active">Products:
							<?php echo count($search) . " (result)";
                            $totalrecords = count($search);
                            ?>

						</li>
					</ul>
					<!-- store products -->

					<!-- store products -->
					<div class="row">

						<?php if ($totalrecords == 0) { ?>
						<div class="col-md-12">
							<label>NO RESULTS FOUND</label>
						</div>

						<?php

                        } else { ?>
						<?php foreach ($search as $value): ?>
						<!-- product -->
						<div class="col-md-4 col-xs-6">
							<div class="product">
								<div class="product-img">
									<img src="../img/<?php echo $value['image'] ?>" width="250" height="200" alt="">
									<div class="product-label">
									</div>
								</div>
								<div class="product-body">
									<p class="product-category"></p>
									<h3 class="product-name"><a
											href="product_detail.php?id=<?php echo $value['id'] ?>">
											<?php if (strlen($value['name']) > 10) {
			                        echo substr($value['name'], 0, 20) . '...';
		                        } else {
			                        echo $value['name'];
		                        } ?></a></h3>
									<h4 class="product-price">
										<?php echo number_format($value['price']) ?> VND
									</h4>
								</div>
								
							</div>
						</div>
						<?php endforeach;
                        } ?>
						<!-- /product -->
					</div>
					<!-- /store products -->

				</div>
				<!-- /STORE -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->
	</div>

	<?php include "footer.php"; ?>