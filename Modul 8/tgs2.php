<?php
date_default_timezone_set("Asia/Bangkok");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Olah Nama Dosen</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;
      margin: 20px;
    }

    h1 {
      color: #333;
    }

    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      max-width: 500px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #333;
    }

    input[type="text"],
    textarea {
      width: 100%;
      padding: 8px;
      margin-bottom: 12px;
      box-sizing: border-box;
    }

    textarea {
      resize: vertical;
    }

    input[type="radio"] {
      margin-right: 5px;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
    <h1>PHP Form Validation Example</h1><br>
  <form class="" action="db.php" method="post">
    <label for="name">Name: </label>
    <input type="text" name="name" id="name" autocomplete="off" required> <br>
    <label for="email">E-mail: </label>
    <input type="text" name="email" id="email" autocomplete="off" required> <br>
    <label for="webshite">Website: </label>
    <input type="text" name="webshite" id="webshite" autocomplete="off"> <br>
    <label for="comment">Comment: </label>
    <textarea name="comment" id="comment" cols="50" rows="7"></textarea><br>
    <label for="gender">Gender: </label>
    <input type="radio" name="gender" value="female" required>Female
    <input type="radio" name="gender" value="male" required>Male <br>
    <button type="submit" name="submit" value="<?php echo date("h:i:sa"); ?>">Submit</button>
  </form>
</body>
</html>
