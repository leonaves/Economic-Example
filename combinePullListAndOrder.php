<!DOCTYPE html>
<html>
<head>
<title>ACES Combine order and pull list</title>
<meta charset=utf-8">
<link rel="stylesheet" href="ecadminstyle.css">
</head>
<body>
<?php require ('navigation.php');?>	

<div class="content">

<h1><a href="customer.php">FirstName LastName (userName)</a></h1>
<span class="advice">List of pull list items selected on previous screen.</span>

<p>
<h2>Add these items &hellip;</h2>
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

<h2>to this order.</h2>

<h4>Order number.</h4>
<ol>
<li>seriesTitle #issueNumber subtitle price quantity.</li>
<li>seriesTitle #issueNumber subtitle price quantity.</li>
<li>seriesTitle #issueNumber subtitle price quantity.</li>
<li>seriesTitle #issueNumber subtitle price quantity.</li>
</ol>
<p>Subtotal of all items in order: £??.??<br/>
Postage (postage type): £??.??<br />
Total: £??.??</p>

<h2>New order totals.</h2>
<p>Subtotal of all items in combined order: £??.??<br/>
Combined Postage (postage type): £??.??<br />
Combined Total: £??.??</p>


	<p><a href="customer.php">Combine pull list items and order.</a></p>
	<span class="advice">Button to update changes to database, and return to customer details page.<br />
	Need to check that order remains unpaid for at this point, we don't want to add to an order already marked as paid.</span>


	
	





</div><!--close content-->
</body>
</html>
