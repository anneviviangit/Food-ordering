<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible"
		content="ie=edge">
	<title>
		Cell phone number in an International way
	</title>
	
	<style>
		body {
			text-align: center;
		}
		
		h1 {
			color: green;
		}
	</style>
</head>

<body>
	<h1>GeeksforGeeks</h1>
	
	<h3>
		Cell phone number in
		an International way
	</h3>
	
	<script>
		var localNumber = prompt("Please enter your number");

		// Using regular expression to check whether
		// string is valid or not
		var newArray = localNumber.match
				(/^(91|)?(\d{3})(\d{3})(\d{4})$/);

		// Checking the international code
		var intlCountryCode = (newArray[1] ? '+91' : '');

		// Resolving the above array we get
		// the international number
		var internationalNumber = intlCountryCode +
				' (' + newArray[2] + ') ' + newArray[3]
				+ '-' + newArray[4];

		document.write("The number in international" +
					"form is: " + internationalNumber);
	</script>
</body>

</html>
