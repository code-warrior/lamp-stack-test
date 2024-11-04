<!DOCTYPE html>
<?php
require 'includes/db.php';

$title = "Lamp Stack Test";
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title ?></title>
</head>
<body>
  <header>
    <h1><?php echo $title ?></h1>
  </header>
  <main>
    <p>The band <b><?php getValue(); ?></b> exists in our database.</p>
    <p>The band <b><?php getBandNameWithID("2"); ?></b> exists in our database.</p>
  </main>
</body>
</html>
