<!DOCTYPE html>
<html>
<head>
<title>ACES - Add subscription</title>
<meta charset=utf-8">
<link rel="stylesheet" href="ecadminstyle.css">
</head>
<body>
<?php require ('navigation.php');?>	

<div class="content">

<h1><a href="customer.php">FirstName LastName (userName)</a></h1>
<h2>Add seriesTitle subscription.</h2>

<span class="advice">Needs a set of titles and text fields with values.<br />
SeriesTitle is dropdown of all active series titles.<br/>
Start issue should be 'most recent issue number' plus one as default.
</span>
<ul>
<li>Series title</li>
<li>Start issue</li>
<li>End issue (leave as 0 for ongoing)</li>
<li>Special requests</li>
<li>Quantity</li>
</ul>

<p><a href="customer.php">Confirm changes</a></p>
<span class="advice">Button to update changes to database, and return to customer details page.</span>





</div><!--close content-->
</body>
</html>
