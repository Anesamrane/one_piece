<?php

$servername = "localhost";
$user = "root";
$password = "";
$db_name = "one_piece";
$conn = new mysqli($servername, $user, $password, $db_name);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $submit = $_POST['submit'];

  $query = "SELECT * FROM users WHERE username = '$username'";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    // Username exists
    if (isset($submit)) {
      $row = $result->fetch_assoc();
      if ($_POST['username'] == $row['username'] && $_POST['password'] == $row['password']) {
        $inserted_id = $conn->insert_id;
        session_start();
        $_SESSION['login'] = $username;
        $_SESSION['id'] = $row['id'];
        header('location: ../../main/index.php');

      } else {
        echo "<span>   اسم المستخدم او كلمة السر خاطئة  </span>";
      }
    }
  }

}

?>




<!DOCTYPE html>
<html lang="en" dir="rtl">

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Op arabic</title>
  <link rel="shortcut icon" href="../../1x/Artboard 1.png">
  <link rel="stylesheet" href="style.css">
  <style>
    span {
      position: absolute;
      right: 40%;
      top: 47vh;
      color: red;
      z-index: 99999999;
    }

    .img img {
      height: 12vh;
      width: 12vh;
      position: relative;
      bottom: 8vh;
      border-radius: 50%;
      right: 25%;
      transform: translateX(-50%);
    }

    form input[type="submit"]:hover {
      background-color: #2256F2;
    }
  </style>
</head>

<body>
  <div class="wall">
    <div class="container">
      <div class="img">
        <a href="../../main/index.php">
          <img src="../../1x/Artboard 1.png" alt="">
        </a>
      </div>
      <form method="post">
        <h2> تسجيل الدخول </h2>
        <div class="inputBox">
          <input type="text" name="username" id="username" required>
          <label for="username">اسم المستخدم</label>
        </div>
        <div class="inputBox">
          <input type="password" name="password" id="password" required>
          <label for="password"> كلمة السر</label>
        </div>
        <input type="submit" value="   تسجيل الدخول    " name="submit">
      </form>
    </div>
  </div>


</body>

</html>