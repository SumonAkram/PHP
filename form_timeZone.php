<!DOCTYPE html>
<html>
<head>
  <title>PHP Example</title>
</head>
<body>
  <?php
  // PHP code starts here

  // Working with dates and times
  date_default_timezone_set('UTC');
  $currentDate = date('Y-m-d');
  $currentTime = date('H:i:s');
  echo "<p>Current date: $currentDate</p>";
  echo "<p>Current time: $currentTime</p>";

  // Form handling
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    echo "<p>Thank you, $name! Your email ($email) has been received.</p>";
  }

  // PHP code ends here
  ?>
  
  <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>
    <input type="submit" value="Submit">
  </form>
</body>
</html>
