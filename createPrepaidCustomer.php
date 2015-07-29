<!DOCTYPE html>
<html>
<head>
<title>ACES create new prepaid customer</title>
<meta charset=utf-8">
<link rel="stylesheet" href="ecadminstyle.css">
</head>
<body>
<?php require ('navigation.php');?>	

<div class="content">

<h1>Create new Prepaid Customer</h1>
	<span class="advice">Needs a set of titles and text fields with current values.<br />
	Country is drop down from database.<br/>
	create a new username that has not been previously used, start with prepaid1, and increment up from there<br />
	create a random password. Prepaid accounts have log in disabled anyway.
	
</span>
	<ul>
	<li>First Name</li>
	<li>Last Name</li>
	<li>Address Line 1</li>
	<li>Address Line 2</li>
	<li>Town</li>
	<li>County</li>
	<li>Post code</li>
	<li>Country</li>
	<li>phone (split into area code, and phone number)</li>
	<li>Email</li>
	</ul>
	
	<span class="advice">The following have the default values listed so do not display them.</span>
	<li>Account status (pullList) - 2</li>
	<li>Shipping Frequency - 1</li>
	<li>Pull List Notifications - 0</li>
	<li>Postage Type - 0 (prepaid)</li>
	<p><a href="customer.php">Create new Prepaid customer</a></p>
	<span class="advice">Button to update changes to database, and go to the new customer details page.</span>
	
	





</div><!--close content-->
</body>
</html>
