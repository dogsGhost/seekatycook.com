<?php
	include("classes/Page.php");
	$Page->setPageTitle("Contact");
	include("header-nav.php");
?>

	<h1 class="heading heading--primary"><?php echo $Page->getPageTitle(); ?> &mdash; <span>Talk To Katy!</span></h1>
	<img class="image-right" src="img/katy.png" alt="photo of Katy" width="300" height="225">
	<p>Contact Katy with any flavor suggestions, questions, or custom orders via email, <a href="mailto:katyschoetzow@gmail.com" class="mail-link">katyschoetzow at gmail dot com</a><!--, or fill out the form below-->.</p>

	<!--<form action="" method="post" id="contactForm" class="form" role="form">
	<fieldset><legend>Contact Katy</legend>
		<input type="hidden" name="redirect" value="thankyou.php">
		
		<div>
			<label for="fname" class="req">Name:</label>
			<input size="20" placeholder="Your Name" required type="text" name="fname" id="fname" value="">
		</div>
		
		<div>
			<label for="phone">Phone#:</label>
			<input size="20" placeholder="ex. (313) 555-5555" type="tel" name="phone" id="phone" maxlength="20" value="">
		</div>
	
		<div>
			<label for="email" class="req">Email:</label>
			<input size="20" placeholder="your@email.com" required type="email" name="email" id="email" value="">
		</div>

		<div>
			<label for="message" class="req">Message:</label>
			<textarea placeholder="Your message here." rows="12" required spellcheck="true" name="message" id="message"></textarea>
		</div>

		<input type="submit" class="btn" value="Send Email">
		<input type="reset" class="btn" value="Reset Form">
	</fieldset>
	</form>-->

	<h2 class="heading heading--secondary">Notes on Custom Orders</h2>
	<p>Please be advised of the following when placing a custom order with See Katy Cook:</p>
	<ul>
		<li>Please allow <em>up to 1 week</em> for orders to be processed. Large orders may take longer, Katy will inform you if this is the case.</li>
		<li>If having ice cream delivered, the address must be within Wayne or Macomb County.</li>
		<li>Once you have placed an order, Katy will contact you by phone or email (typically within 24 hrs) to confirm  your order and resolve any issues.</li>
		<li>In some cases payment may be required before delivery.</li>
	</ul>
	<div class="pricing">
		<h2 class="heading heading--secondary">Pricing for Custom Orders</h2>
		<p>Additional costs for delivery if applicable.</p>
		<?php include("products.html"); ?>
	</div>
<?php
	include("aside.php");
	include("footer.php");
?>