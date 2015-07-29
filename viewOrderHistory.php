<!DOCTYPE html>
<html>
<head>
<title>ACES</title>
<meta charset=utf-8">
<link rel="stylesheet" href="ecadminstyle.css">
</head>
<body>
<?php require ('navigation.php');?>	

<div class="content">

<h1><a href="customer.php">FirstName LastName (userName)</a></h1>
<h2>Order history.</h2>
<span class="advice">Show all paid orders</span>

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
<ul>
<li>Order Created Date.</li>
<li>Order Paid Date and Method.</li>
<li>Order dispatched date.</li>	
</ul>	

<span class="advice">We should be able to do the following to Paid orders.<br />
The note would need to be added to the database (new column in ecOrder?), could be used to record damages, refunds etc - referenced/displayed on Admin side only</span>
<ul>
<li>Change the Payment Status of this order.</li>
<li>Change the dispatch status of this order.</li>
<li>Add/edit a note to this order.</li>
</ul>



</div><!--close content-->
</body>
</html>
