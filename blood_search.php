<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank Search Results</title>
	<style>
		body {
			background-color: #f5f5f5;
		}
		
		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 2px 5px rgba(0,0,0,0.3);
		}

		h1 {
			text-align: center;
			color: #c00;
			margin-top: 0;
		}

		table {
			width: 100%;
			border-collapse: collapse;
			margin-top: 20px;
			margin-bottom: 20px;
		}

		th, td {
			padding: 10px;
			text-align: left;
			border: 1px solid #c00;
		}

		th {
			background-color: #c00;
			color: #fff;
		}

		tfoot {
			background-color: #c00;
			color: #fff;
			font-weight: bold;
		}

		tfoot td {
			padding: 5px;
			border-top: 1px solid #fff;
			text-align: center;
		}
        div button {
  background-color: red;
  color: white;
  padding: 10px 20px;
  border-radius: 5px;
  border: none;
  cursor: pointer;
  font-size: 16px;
}

	</style>
</head>
<body>
	<div class="container">
		<h1>Blood Bank Search Results</h1>
		<?php
		// connect to the database
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "root";
		$dbname = "bloodbank";
		$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

		// check connection
		if (!$conn) {
		  die('Database connection failed: ' . mysqli_connect_error());
		}

		// retrieve search parameters from the form
		$city = $_POST['city'];
		$bloodgroup = $_POST['bloodgroup'];

		// build the SQL query to retrieve the matching donors
		$sql = "SELECT * FROM donors WHERE city='$city' AND bloodgroup='$bloodgroup'";
		

		$result = mysqli_query($conn, $sql);

		// check if any donors were found
		if (mysqli_num_rows($result) > 0) {
			// display the donors in a table
			echo "<table>";
			echo "<thead><tr><th>Name</th><th>Age</th><th>Gender</th><th>Blood Group</th><th>City</th><th>Cell No.</th><th>Address</th></tr></thead>";
			echo "<tbody>";
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr><td>" . $row['name'] . "</td><td>" . $row['age'] . "</td><td>" . $row['gender'] . "</td><td>" . $row['bloodgroup'] . "</td><td>" . $row['city'] . "</td><td>" . $row['cellno'] . "</td><td>" . $row['address'] . "</td></tr>";
			}
			echo "</tbody>";
			echo "</table>";
} else {
// display a message if no donors were found
echo "<h2>No Donors Found</h2>";
}
// close the database connection
mysqli_close($conn);
?>
  </div>
  <div class="button" align="center">
		<button onclick="window.print()">Print</button>
	</div>
 
  
  <footer class="bg-red py-3">
    <div class="container">
      <div class="text-center text-white">

      </div>
    </div>
   
  </footer>
  
</body>
</html>




