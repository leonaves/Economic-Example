<!DOCTYPE html>
<html>
<head>
<title>ACES - Add to pull list</title>
<meta charset=utf-8">
<link rel="stylesheet" href="ecadminstyle.css">
</head>
<body>
<?php require ('navigation.php');?>	

<div class="content">

<h1><a href="customer.php">FirstName LastName (userName)</a></h1>
<h2>Add to pull list.</h2>

<span class="advice">We start with options to control the list of items that should be displayed below.<br />
Supplies and special offers are series created so we could add items, but that are now not active (we don't want subscriptions to them.) but we do want to add from a list of items.</span>

<ul>
<li>Show all comics from a single series title <span class="advice">dropdown of all series titles</span>.</li>
<li>Show all comics from the last ?? days <span class="advice">Default to 14 days but allow this to be changed</span>.</li>
<li>Show all comics.</li>
<li>Show all supplies items.</li>
<li>Show all special offers.</li>
</ul>

	<p>Search</p>
<span class="advice">For each comic we need to be able to adjust the quantity and price.</span>
	<ul>
		<li>seriesTitle issueNumber subtitle (comicID) - quantity - price - checkbox</li>
	</ul>
<p><a href="customer.php">Confirm changes</a></p>
<span class="advice">Button to update changes to database, and return to customer details page.</span>





</div><!--close content-->
</body>
</html>
