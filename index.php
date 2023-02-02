<?php

// $showDate = filter_input(INPUT_GET, "show");

//include("./config/createTable.php");

include_once("./config/Database.php");

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Phish Show DB</title>
  <link rel="stylesheet" href="./css/main.css">
</head>

<body>
  <header>
    <h1>Phish Show DB</h1>
  </header>

  <main>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
      <input type="text" name="show" placeholder="2014-07-03" pattern="\d{4}-\d{2}-\d{2}" title="YYYY-MM-DD">
      <button type="submit">Submit</button>
      <input type="text" name="delete" placeholder="2014-07-03" pattern="\d{4}-\d{2}-\d{2}" title="YYYY-MM-DD">
      <button type="submit">Delete</button>
    </form>
  </main>

  <footer>
    <p>
      Contact us at <a href="mailto:example@phishshowdb.com">example@phishshowdb.com</a> <br>
      Copyright &copy; 2023 Phish Show DB
    </p>
  </footer>
</body>

</html>