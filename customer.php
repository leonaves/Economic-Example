<!DOCTYPE html>
<html>
<head>
<title>ACES Customer Details</title>
<meta charset=utf-8">
<link rel="stylesheet" href="ecadminstyle.css">
</head>
<body>
<?php require ('navigation.php');?>	

<div class="content">

	<h1><a href="customer.php">FirstName LastName (userName)</a></h1>
	<section>
	<ul>
		<li><a href="#customerdetails">Customer Details</a></li>
		<li><a href="#subscriptions">Subscriptions</a></li>
		<li><a href="#basket">Basket</a></li>
		<li><a href="#orderhistory">Order History</a></li>
	</ul>
	</section>
	<section>
	<span class="advice">Success (or failure) notification of any of the below actions when returning to customer page.</span>
	
	<section id="customerdetails">
	<h2>Customer Details</h2>
		<p>Address, email and phone number<br />
			Shipping Preferences: Frequency, Postage Type, Account type.<br />
			<a href="editCustomerDetails.php">Edit customer details.</a>
		</p>
	</section>
	<section id="subscriptions">
	<h2>Subscriptions.</h2>
		<p><span class="advice">List of subscriptions sorted by seriesTitle</span>
			<ol>
				<li>seriesTitle - starting from 'startNumber', ending with 'endNumber' (0 = ongoing) - quantity, <a href="editSubscription.php">Edit</a>, <a href="deleteSubscription.php">Delete</a>.</li>
				<li>seriesTitle - starting from 'startNumber', ending with 'endNumber' (0 = ongoing) - quantity, <a href="editSubscription.php">Edit</a>, <a href="deleteSubscription.php">Delete</a>.</li>
				<li>seriesTitle - starting from 'startNumber', ending with 'endNumber' (0 = ongoing) - quantity, <a href="editSubscription.php">Edit</a>, <a href="deleteSubscription.php">Delete</a>.</li>
				<li>seriesTitle - starting from 'startNumber', ending with 'endNumber' (0 = ongoing) - quantity, <a href="editSubscription.php">Edit</a>, <a href="deleteSubscription.php">Delete</a>.</li>
			</ol>
			<a href="addSubscription.php">Add new title to list of subscriptions.</a>
		</p>
	</section>
	<section id="basket">
		<span class="advice">List of items in basket (pull list and any unpaid orders), seriesTitle, issueNumber</span>
		<h2>Basket.</h2>
			<h3>Pull list.</h3>
			<span class="advice">Checkbox for selecting items for order conversion should be all ticked by default. Button to toggle select all / deselect all.</span>
				<ol>
					<li><em>checkbox</em> seriesTitle #issueNumber subtitle price quantity <a href="deleteItemFromPullList.php">Delete</a>.</li>
					<li><em>checkbox</em> seriesTitle #issueNumber subtitle price quantity <a href="deleteItemFromPullList.php">Delete</a>.</li>
					<li><em>checkbox</em> seriesTitle #issueNumber subtitle price quantity <a href="deleteItemFromPullList.php">Delete</a>.</li>
					<li><em>checkbox</em> seriesTitle #issueNumber subtitle price quantity <a href="deleteItemFromPullList.php">Delete</a>.</li>
				</ol>
				<a href="addToPullList.php">Add item to pull list.</a><br />
				<a href="convertPullListToOrder.php">Convert Selected Items from Pull List to an order.</a><br />
			
			<h3>Unpaid order.</h3>
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
	</section>
	<section id="orderhistory">
			<span class="advice">For all existing unpaid orders, option to add selected items from pull list to that order.</span>
			<a href="combinePullListAndOrder.php">Combine selected items from pull list with unpaid order.</a><br />
			<span class="advice">For all existing unpaid orders, option to return all items from the order to the pull list.</span>
			<a href="returnOrderToPullList.php">Return all items in the order to the pull list.</a><br />
			<span class="advice">For all existing unpaid orders, option to delete that order.</span>
			<a href="deleteOrder.php">Delete order.</a><br />
	</section>
	<section>
	<h2>Order History.</h2>
	<p><a href="viewOrderHistory.php">View order history</a></p>
	</section>


</div><!--close content-->
</body>
</html>
