<!DOCTYPE html>
<html>
<head>
  <title>File Operations</title>
</head>
<body>

<h1>Choose 1, 2, or 3</h1>

<form action="" method="GET">
  <h2>1. Read a file</h2>
  <h2>2. Write to a file</h2>
  <h2>3. Append to a file</h2>

  <h3>Enter your choice:</h3>
  <input type="text" name="choice" required><br><br>

  <h3>Enter text (for write/append):</h3>
  <input type="text" name="text"><br><br>

  <input type="submit" value="Submit"><br><br>
</form>

<?php
if (isset($_GET['choice'])) {
  $choice = $_GET['choice'];
  $text = isset($_GET['text']) ? $_GET['text'] : '';

  switch ($choice) {
    case '1':
      $file = 'txtsample.txt';
      if (file_exists($file)) {
        $content = file_get_contents($file);
        echo nl2br($content);
      } else {
        echo "File does not exist.";
      }
      break;

    case '2':
      $file = 'nesample.txt';
      file_put_contents($file, $text);
      echo "Text written to file.";
      break;

    case '3':
      $file = 'nesample.txt';
      file_put_contents($file, $text, FILE_APPEND);
      echo "Text appended to file.";
      break;

    default:
      echo "Invalid choice. Please enter 1, 2, or 3.";
  }
}
?>

</body>
</html>
