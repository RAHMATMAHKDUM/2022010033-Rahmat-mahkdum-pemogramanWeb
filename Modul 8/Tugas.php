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
        text-align: center;
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
        margin-left: 44%;
    }

    button:hover {
        background-color: #45a049;
    }
    </style>
</head>

<body>
    <h1>PHP From Validation Example</h1><br>
    <form class="" action="db.php" method="post">
        <label for="">Name: </label>
        <input type="text" name="name" autocomplete="off" required> <br><br>
        <label for="">E-mail: </label>
        <input type="text" name="email" autocomplete="off" required> <br><br>
        <label for="">Website: </label>
        <input type="text" name="website" autocomplete="off"> <br><br>
        <label for="">Comment: </label>
        <textarea name="comment" id="" cols="50" rows="7"></textarea><br><br>
        <label for="">Gender: </label>
        <input type="radio" name="gender" value="female" required>Female
        <input type="radio" name="gender" value="male" required>Male <br><br>
        <button type="submit" name="submit" value=<?php echo date("h:i:sa"); ?>>Submit</button>
    </form>
</body>

</html>