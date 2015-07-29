<!DOCTYPE html>
<html>
<head>
<title>ACES Convert pull list to order</title>
<meta charset=utf-8">
<link rel="stylesheet" href="ecadminstyle.css">
</head>
<body>
<?php require ('navigation.php');?>	

<div class="content">

<h1><a href="customer.php">FirstName LastName (userName)</a></h1>
<span class="advice">List of pull list items selected on previous screen.</span>

<p>
<ol>
<li>seriesTitle #issueNumber subtitle price quantity <a href="deleteItemFromPullList.php">Delete</a>.</li>
<li>seriesTitle #issueNumber subtitle price quantity <a href="deleteItemFromPullList.php">Delete</a>.</li>
<li>seriesTitle #issueNumber subtitle price quantity <a href="deleteItemFromPullList.php">Delete</a>.</li>
<li>seriesTitle #issueNumber subtitle price quantity <a href="deleteItemFromPullList.php">Delete</a>.</li>
</ol>
<span class="advice">Postage calculation needed.</span>
<p>Subtotal of all items in order: £??.??<br/>
Postage (postage type): £??.?? <span class="advice">option to change the postage charge required</span><br />
Total: £??.??</p>

	<p><a href="customer.php">Create this order</a></p>
	<span class="advice">Button to update changes to database, and return to customer details page.</span>






</div><!--close content-->
</body>
</html>
