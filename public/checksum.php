<?php

  require_once('../private/initialize.php');

  $message = '';
  $checksum = '';

  if(isset($_POST['submit'])) {
    $message = isset($_POST['message']) ? $_POST['message'] : nil;
    $checksum = calculate_checksum($message);
  }

?>

<!doctype html>

<html lang="en">
  <head>
    <title>Calculate Checksum</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <link rel="stylesheet" media="all" href="includes/styles.css" />
  </head>
  <body>

    <a href="index.php">Main menu</a>
    <br/>

    <div>
      <h2>Calculate Checksum</h2>

      <form action="" method="post">
        <div>
          <label for="message">Message:</label>
          <textarea name="message" maxlength="245"><?php echo h($message); ?></textarea>
        </div>
        <div>
          <input type="submit" name="submit" value="Find Checksum">
        </div>
      </form>

      <div class="result"><?php echo h($checksum); ?></div>
    </div>

  </body>
</html>
