<!DOCTYPE html>
<html>
<head>
  <title>PHP Example</title>
</head>
<body>
  <?php
  // PHP code starts here

  // Displaying a message
  echo "<h1>Hello, PHP!</h1>";

  // Variables and string concatenation
  $name = "John";
  $age = 25;
  echo "My name is " . $name . " and I am " . $age . " years old.";

  // Conditionals
  $score = 80;
  if ($score >= 70) {
    echo "<p>Congratulations! You passed the exam.</p>";
  } else {
    echo "<p>Sorry, you did not pass the exam.</p>";
  }

  // Loops
  for ($i = 1; $i <= 5; $i++) {
    echo "<p>The current value of \$i is: " . $i . "</p>";
  }

  // PHP code ends here
  ?>
</body>
</html>
