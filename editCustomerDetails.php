<!DOCTYPE html>
<html>
<head>
<title>ACES edit customer details</title>
<meta charset=utf-8">
<link rel="stylesheet" href="ecadminstyle.css">
</head>
<body>
<?php require ('navigation.php');?>	

<div class="content">

<h1><a href="customer.php">FirstName LastName (userName)</a></h1>
	<span class="advice">Needs a set of titles and text fields with current values.<br />
	Country is drop down from database.<br/>
	Account status, Shipping frequency, Pull List Notifications and Postage Type are NOT tables but they probably should be.<br/>
	Current shortcodes are:<br/>
	Account status: 1=Economic customer, 2=Prepaid customer, 0=Inactive.<br/>
	Shipping frequency: 1=Weekly, 2=Fortnightly, 3=Monthly, 4=Every two months, 5=Every three months, 6=Every four months.<br/>
	Pull List Notifications: 1=Yes, 2=No.<br/>
	Postage Type:1=1st Class, 2=2nd Class, 3=AirMail-Europe, 4=AirMailROW1, 5=AirMailROW2, 0=Prepaid.<br/>
	</span>
	
	<form>
	<fieldset>
	<label for "firstName">First Name</label>
	<input id="firstName" name="firstName" type="text" placeholder="First Name">
	</fieldset>
	<fieldset>
	<label for "lastName">Last Name</label>
	<input id="lastName" name="lastName" type="text" placeholder="Last Name">
	</fieldset>
	<fieldset>
	<label for "address1">Address Line 1</label>
	<input id="address1" name="address1" type="text" placeholder="Address Line 1">
	</fieldset>
	<fieldset>
	<label for "address2">Address Line 2</label>
	<input id="address2" name="address2" type="text" placeholder="Address Line 2">
	</fieldset>
	<fieldset>
	<label for "town">Town</label>
	<input id="town" name="town" type="text" placeholder="Town">
	</fieldset>
	<fieldset>
	<label for "county">County</label>
	<input id="county" name="county" type="text" placeholder="County">
	</fieldset>
	<fieldset>
	<label for "postcode">Post Code</label>
	<input id="postcode" name="postcode" type="text" placeholder="Post Code">
	</fieldset>
	<fieldset>
	<label for "country">Country</label>
	<input id="country" name="country" type="text" placeholder="Country">
	</fieldset>
	<fieldset>
	<label for "phone1">Phone Number - area code</label>
	<input id="phone1" name="phone1" type="text" placeholder="Phone 1">
	<label for "phone2">Phone Number</label>
	<input id="phone2" name="phone2" type="text" placeholder="Phone 2">
	</fieldset>
	<fieldset>
	<label for "email">Email</label>
	<input id="email" name="email" type="text" placeholder="email@email.email">
	</fieldset>
	<fieldset>
	<label for "accountStatus">Account Status</label>
	<input id="accountStatus" name="accountStatus" type="text" placeholder="Account Status">
	</fieldset>
	<fieldset>
	<label for "shippingFrequency">Shipping Frequency</label>
	<input id="shippingFrequency" name="shippingFrequency" type="text" placeholder="Shipping Frequency">
	</fieldset>
	<fieldset>
	<label for "shippingFrequency">Shipping Frequency</label>
	<input id="shippingFrequency" name="shippingFrequency" type="text" placeholder="Shipping Frequency">
	</fieldset>
	<fieldset>
	<label for "pullListNotifactions">Pull List Notifications</label>
	<input id="pullListNotifactions" name="pullListNotifactions" type="text" placeholder="Pull List Notifications">
	</fieldset>
	<fieldset>
	<label for "postageType">Postage Type</label>
	<input id="postageType" name="postageType" type="text" placeholder="Postage Type">
	</fieldset>
	</form>

	<p><a href="customer.php">Confirm changes</a></p>
	<span class="advice">Button to update changes to database, and return to customer details page.</span>








</div><!--close content-->
</body>
</html>
