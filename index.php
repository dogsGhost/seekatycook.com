<?php
	include("classes/Page.php");
	include("header-nav.php");
?>

<img class="image-left" src="img/ice-cream-home.jpg" alt="homemade Michigan ice cream" width="280" height="364">
<h1 class="heading heading--primary">Welcome! <span>About See Katy Cook</span></h1>
<p>See Katy Cook dishes out deliciously homemade, hand churned, Michigan ice cream made with a variety of local and regional ingredients. Whether you're in the mood for something traditional or exotic, purchase your favorite flavors by the pint from your computer.</p>

<?php 
// echo "<pre style='clear:both'>"; var_dump($Page->getProducts()); echo "</pre>";
?>

<div class="pricing">
	<h2 class="heading heading--secondary">Pricing</h2>
	<?php include("products.html"); ?>
</div>	
<?php
	include("aside.php");
	include("footer.php");
?>
