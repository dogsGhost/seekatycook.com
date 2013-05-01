<?php
	include("classes/Page.php");
	$Page->setPageTitle("Availability");
	include("header-nav.php");
?>

	<h1 class="heading heading--primary"><?php echo $Page->getPageTitle(); ?> &mdash; <span>See Katy Sell!</span></h1>
	<p>Katy's always accepting custom orders! <a href="contact.php">Contact Katy</a> for details.</p>
	<p>If you're a restaraunt or other business interested in buying large amounts of See Katy Cook ice cream for resale, Katy has wholesale pricing available.</p>

<?php
	include("aside.php");
	include("footer.php");
?>