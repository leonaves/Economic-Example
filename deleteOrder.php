<!DOCTYPE html>
<html>
<head>
<title>ACES delete order</title>
<meta charset=utf-8">
<link rel="stylesheet" href="ecadminstyle.css">
</head>
<body>
<?php require ('navigation.php');?>	

<div class="content">

<h1><a href="customer.php">FirstName LastName (userName)</a></h1>
<span class="advice">List of all items in selected order.</span>
<h4>Order number.</h4>

<p>
<ol>
<li>seriesTitle #issueNumber subtitle price quantity <a href="deleteItemFromPullList.php">Delete</a>.</li>
<li>seriesTitle #issueNumber subtitle price quantity <a href="deleteItemFromPullList.php">Delete</a>.</li>
<li>seriesTitle #issueNumber subtitle price quantity <a href="deleteItemFromPullList.php">Delete</a>.</li>
<li>seriesTitle #issueNumber subtitle price quantity <a href="deleteItemFromPullList.php">Delete</a>.</li>
</ol>
<p>Subtotal of all items in order: £??.??<br/>
Postage (postage type): £??.??<br />
Total: £??.??</p>

	<p><a href="customer.php">Delete this order</a></p>
	<span class="advice">Button to update changes to database, and return to customer details page.</span>





</div><!--close content-->
</body>
</html>
