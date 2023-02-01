<?php

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
    <form>
      <input type="text" placeholder="Enter show info">
      <button type="submit">Submit</button>
      <button type="reset">Reset</button>
    </form>

    <table>
      <thead>
        <tr>
          <th>Show Info </th>
        </tr>
      </thead>
      <tbody>
        <!-- add rows to the table with JS -->
      </tbody>
    </table>
  </main>

  <footer>
    <p>
      Contact us at <a href="mailto:example@phishshowdb.com">example@phishshowdb.com</a> <br>
      Copyright &copy; 2023 Phish Show DB
    </p>
  </footer>
</body>

</html>