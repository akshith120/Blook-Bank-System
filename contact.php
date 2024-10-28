<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" href="style.css">
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="registration.php">Blood Registration</a></li>
        <li><a href="search.php">Blood Search</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
    </nav>
</head>
<body>
	<div class="container">
		<main>
			<form action="submit_contact_form.php" method="post">
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" required> <br>
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" required> <br> 
				<label for="message">Message:</label>
				<textarea id="message" name="message" rows="5" required></textarea>
				<input type="submit" value="Send">
			</form>
		</main>
		
</body>
</html>
