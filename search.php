<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Blood Search</title>
    <link rel="stylesheet" href="style.css">
  </head>
    
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="registration.php">Blood Registration</a></li>
        <li><a href="search.php">Blood Search</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
    </nav>
    <main class="main-content">
      <h2>Blood Search</h2>
      <form action="blood_search.php" method="POST">
        <label for="city">City:</label>
        <select name="city" id="city">
          <option value="select">Select a City</option>
          <option value="Hyderabad">Hyderabad</option>
          <option value="Warangal">Warangal</option>
          <option value="chennai">chennai</option>
        </select>
        <label for="blood-group">Blood Group:</label>
        <select name="bloodgroup" id="bloodgroup">
          <option value="select">Select a Blood Group</option>
          <option value="A+">A+</option>
          <option value="B+">B+</option>
          <option value="AB+">AB+</option>
          <option value="O+">O+</option>
          <option value="A-">A-</option>
          <option value="B-">B-</option>
          <option value="AB-">AB-</option>
          <option value="O-">O-</option>
        </select>
        <button type="submit">Search</button>
      </form>
    </main>


  </body>
</html>
