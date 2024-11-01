<!DOCTYPE html>
<html>
  <head>
    <title>Online Blood Bank System - Blood Registration</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="registration.php">Blood Registration</a></li>
        <li><a href="search.php">Blood Search</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
    </nav>
<main>
  <div class="form-container">
    <form action="submit.php" method="post">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
      </div>
      <div class="form-group">
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
      </div>
      <div class="form-group">
        <label for="bloodgroup">Blood Group:</label>
        <select id="bloodgroup" name="bloodgroup" required>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
        </select>
      </div>
      <div class="form-group">
        <label for="city">City:</label>
        <input type="text" id="city" name="city" required>
      </div>
      <div class="form-group">
        <label for="cellno">Cell No:</label>
        <input type="text" id="cellno" name="cellno" required>
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea>
      </div>
      <button type="submit">Submit</button>
    </form>
  </div>
  <p style="text-align: justify;">Blood registration is the process of collecting and maintaining accurate and up-to-date information about blood donors. This information includes the donor's personal details, medical history, blood type, and contact information. Blood registration is a critical step in ensuring that there is a sufficient supply of blood available for those in need.

By registering as a blood donor, individuals can play a vital role in saving lives. Blood registration involves filling out a registration form, which includes personal information, such as name, age, address, and contact details, as well as medical information, such as previous illnesses and medications. This information is kept confidential and is only used to determine the donor's eligibility to donate blood.

Once the registration process is complete, the donor's blood type is determined through a blood test. This information is then added to a database of donors, which is used by blood banks to identify potential donors when there is a need for a specific blood type.

In addition to registering as a blood donor, individuals can also participate in blood donation drives, which are organized by blood banks and other organizations to encourage blood donation. By participating in these drives, individuals can help ensure that there is a sufficient supply of blood available for those in need, including accident victims, surgical patients, and those with chronic illnesses.

Overall, blood registration is a critical step in ensuring that there is a sufficient supply of blood available to save lives. By registering as a donor and participating in blood donation drives, individuals can play a vital role in supporting their communities and helping those in need.




.</p>

</main>

  </body>
</html>
