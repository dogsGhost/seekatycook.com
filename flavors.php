<?php
	include("classes/Page.php");
	$Page->setPageTitle("Flavors");
	include("header-nav.php");
?>

	<h1 class="heading heading--primary"><?php echo $Page->getPageTitle(); ?> &mdash; <span>What Katy Makes!</span></h1>
	<h2 class="heading heading--secondary">Ice Cream Sandwiches</h2>
	<p>Katy's ice cream sandwiches are made with chocolate whoopi cakes and your choice of Vanilla, Coffee, Mint, or Cinnamon ice cream filling.</p>
	<h2 class="heading heading--secondary">Ice Cream by the Pint</h2>
	<p>New seasonal ice cream flavors have been added, available all summer long!</p>
	<section class="sub-section">
		<h2 class="heading heading--secondary">Available Flavors</h2>
		<div class="flavor-list flavor-list--1"> 
			<img src="img/peppermint-detail.jpg" width="256" height="170" alt="homemade peppermint ice cream">
			<h3 class="heading flavor-list__heading">Classic</h3>
			<ul>
				<li>Vanilla Bean </li>
				<li>Cinnamon</li>
				<li>Peppermint</li>
				<li>Mint Chocolate Chip</li>
				<li>Mocha Chip</li>
				<li>Banana Flambé</li>
				<li>Butter Pecan</li>
				<li>Coconut</li>
				<li>Pineapple</li>
				<li>Vanilla Malted</li>
			</ul>
		</div>
		<div class="flavor-list flavor-list--2"> 
			<img src="img/vanilla-detail.jpg" width="256" height="170" alt="homemade chai ice cream">
			<h3 class="heading flavor-list__heading">Specialty</h3>
			<ul>
				<li>Sweet Cream with Raspberries</li>
				<li>Green Tea</li>
				<li>Chai Tea</li>
				<li>Avocado</li>
				<li>Lavender Dark Chocolate Chip</li>
				<li>Cherry Almond Chocolate Chip</li>
				<li>Kahlua</li>
				<li>Strawberries and Champagne</li>
				<li>Guinness</li>
			</ul>
		</div>
		<div class="flavor-list flavor-list--3"> 
			<img src="img/side-detail.jpg" width="256" height="170" alt="homemade ice cream made in Michigan">
			<h3 class="heading flavor-list__heading">Seasonal</h3>
			<ul>
				<li>Pear-Ginger</li>
				<li>Maple Bacon</li>
				<li>Eggnog</li>
				<li>Apple Crisp</li>
				<li>Pecan Pie</li>
				<li>Dulce de Luche</li>
				<li>Pumpkin</li>
			</ul>
		</div>
	</section> <!-- end /sub-section -->

<?php
	include("aside.php");
	include("footer.php");
?>