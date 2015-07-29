<!DOCTYPE html>
<html>
<head>
<title>ACES edit subscription</title>
<meta charset=utf-8">
<link rel="stylesheet" href="ecadminstyle.css">
</head>
<body>
<?php require ('navigation.php');?>	

<div class="content">

<h1><a href="customer.php">FirstName LastName (userName)</a></h1>
<h2>Edit seriesTitle subscription.</h2>

<span class="advice">Needs a set of titles and text fields with current values.<br />
If customer account is Prepaid (2) then Special Instructions needs this default text "PREPAID From #? to #? Website order #?"</span>

<ul>
<li>Start issue</li>
<li>End issue</li>
<li>Special requests</li>
<li>Quantity</li>
</ul>

<p><a href="customer.php">Confirm changes</a></p>
<span class="advice">Button to update changes to database, and return to customer details page.</span>

<p>Most recent issue of seriesTitle was #?</p>
<span class="advice">Query for most recent ecComic marked as use for recent issue, that has been published</span>	





</div><!--close content-->
</body>
</html>
