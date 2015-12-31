<!DOCTYPE html>
<html lang="en">
	<?php require 'header.php' ?>
	<body>
		<?php require 'navigation.php' ?>
		<div class="container" id="Not_Ajax_Output">
			<div class="row">
				<div class="col-lg-3">
					<h3>Address</h3>
					<form action="changeAddress.php" method="POST">
						<p>Street 1:</p><input type="text" placeholder="Street 1" name="street1" id="street1">
						<p>Street 2:</p><input type="text" placeholder="Street 2" name="street2" id="street2">
						<p>Zipcode:</p><input type="text" placeholder="Zipcode" name="zipcode" id="zipcode">
						<p>City:</p><input type="text" placeholder="City" name="city" id="city">
						<p>State:</p><input type="text" placeholder="State" name="state" id="state">
						<p>Country:</p><input type="text" placeholder="Country" name="country" id="country">
						<button>Update</button>
					</form>
				</div>
				<div class="col-lg-3">
					<h3>Current Address</h3>
					<div class="scrollbox">
					<?php
						//echo $_SESSION['customerid'];
		               	$sql = "SELECT street_one, street_two, zipcode, city, state, country FROM customer_address c JOIN address a ON c.address_id = a.id WHERE customer_id = " . $_SESSION['customerid'];
		               	foreach ($pdo->query($sql) as $row) {
			               	echo '<p name="street1" id="street1">Street 1: ' . $row['street_one'] . '</p>
								  <p name="street2" id="street2">Street 2: ' . $row['street_two'] . '</p>
								  <p name="zipcode" id="zipcode">Zipcode: ' . $row['zipcode'] . '</p>
								  <p name="city" id="city">City: ' . $row['city'] . '</p>
								  <p name="state" id="state">State: ' . $row['state'] . '</p>
								  <p name="country" id="country">Country: ' . $row['country'] . '</p>
								  <br>';
		               }
		            ?>
		        	</div>
				</div>
				<div class="col-lg-3">
					<h3>New Card</h3>
					<form action="changePayment.php" method="POST">
						<p>Name on Card:</p><input type="text" placeholder="Name on Card" name="nameOnCard" id="nameOnCard">
						<p>Card Number:</p><input type="text" placeholder="Card Number" name="cardNumber" id="cardNumber">
						<p>Security Code:</p><input type="text" placeholder="Security Code" name="securityCode" id="securityCode">
						<p>Expiration:</p><input type="text" placeholder="Expiration" name="expiration" id="expiration">
						<button>Update</button>
					</form>
				</div>
				<div class="col-lg-3">
					<h3>Card on Record</h3>
					<form action="address.php" method="POST">
						<p name="nameOnCard" id="nameOnCard"></p>
						<p name="cardNumber" id="cardNumber"></p>
						<p name="securityCode" id="securityCode"></p>
						<p name="expiration" id="expiration"></p>
					</form>
				</div>
			</div>
		</div>
	</body>

	<?php require 'footer.php' ?>
</html>