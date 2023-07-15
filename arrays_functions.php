<!DOCTYPE html>
<html>
<head>
  <title>PHP Example</title>
</head>
<body>
  <?php
  // PHP code starts here

  // Arrays
  $fruits = array("Apple", "Banana", "Orange");
  echo "<h2>My favorite fruits:</h2>";
  echo "<ul>";
  foreach ($fruits as $fruit) {
    echo "<li>$fruit</li>";
  }
  echo "</ul>";

  // Functions
  function calculateSum($a, $b) {
    return $a + $b;
  }

  $num1 = 10;
  $num2 = 20;
  $sum = calculateSum($num1, $num2);
  echo "<p>The sum of $num1 and $num2 is: $sum</p>";

  // File handling
  $file = "example.txt";
  $content = "This is an example text.";
  file_put_contents($file, $content);
  $fileContent = file_get_contents($file);
  echo "<p>File content: $fileContent</p>";

  // PHP code ends here
  ?>
</body>
</html>
