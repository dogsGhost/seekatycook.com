<?php
	include("classes/Page.php"); 
	$Page->setPageTitle("404 Error");
	include("header-nav.php");
?>

<h1 class="heading heading--primary">404 (Page Not Found) Error!</h1>
<dl>
<dt>If you're a visitor and not sure what happened:</dt>
	<dd>1) You entered or copied the URL incorrectly, or</dd>
	<dd>2) The link you used to get here is faulty. A recent site change may have changed or moved some pages.</dd>
</dl>
<p>Dont worry though! Click the spoon at the top of the page to go straight to the <a href="/">See Katy Cook homepage!</a></p>

<?php
	include("aside.php");
	include("footer.php");
?>