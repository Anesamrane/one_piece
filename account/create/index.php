<!-- here i write script to insert new user -->



<?php

$servername = "localhost";
$user = "root";
$password = "";
$db_name = "one_piece";
$conn = new mysqli($servername, $user, $password, $db_name);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $name = $_POST['name'];
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $icon = $_POST['icon'];
      $submit = $_POST['submit'];

      $query = "SELECT * FROM users WHERE username = '$username'";
      $result = $conn->query($query);

      if ($result->num_rows > 0) {
            // Username exists
            echo "<span>اسم المستخدم محجوز بالفعل. <br> اختر اسم مستخدم اخر.</span>";
      } else {
            if (isset($submit)) {
                  $query = "INSERT INTO users (name, username, email, password, icon) VALUES ('$name', '$username', '$email', '$password', '$icon')";
                  $res = $conn->query($query);
                  $inserted_id = $conn->insert_id;
                  session_start();
                  $_SESSION['login'] = $username;
                  $_SESSION['id'] = $inserted_id;
                  header('location: ../../main/index.php');


                  if ($res) {
                        echo "Registration successful";
                  } else {
                        echo "Error: " . mysqli_error($connection);
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
                  top: 73vh;
                  color: red;
                  z-index: 99999999;
            }

            .chapters2 {
                  z-index: 999999999;
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
                        <h2> انشاء حساب </h2>
                        <div class="inputBox">
                              <input type="text" name="name" id="name" required>
                              <label for="name"> الاسم و اللقب </label>
                        </div>
                        <div class="inputBox">
                              <input type="text" name="username" id="username" required>
                              <label for="username"> اسم المستخدم </label>
                        </div>
                        <div class="inputBox">
                              <input type="email" name="email" id="email" required>
                              <label for="email"> البريد الالكنروتي </label>
                        </div>
                        <div class="inputBox">
                              <input type="password" name="password" id="password" required>
                              <label for="password"> كلمة السر </label>
                        </div>


                        <div class="inputBox">
                              <div class="hover2"><a class="nav"> اختر شخصبة <img
                                                src="https://i.pinimg.com/564x/ea/79/ea/ea79eab0bc2a6dc291fa4f6b2f9fedb8.jpg"
                                                alt=""></a>
                                    <div class="chapters2all">
                                          <div class="chapters2">
                                                <!-- display icons -->

                                                <?php
                                                // Assuming you have already established a database connection in $conn
                                                
                                                $query = "SELECT * FROM icons";
                                                $result = $conn->query($query);

                                                if ($result->num_rows > 0) {
                                                      while ($row = $result->fetch_assoc()) {
                                                            echo '<div><a name="' . $row['name'] . '" value="' . $row['name'] . '"> <input type="radio" name="icon" value="' . $row['name'] . '"> <img src="' . $row['link'] . '" alt=""> </a></div>';
                                                      }
                                                } else {
                                                      echo 'No icons found in the database.';
                                                }
                                                ?>


                                          </div>
                                    </div>
                              </div>
                        </div>
                        <input type="submit" value="  انشاء حساب   " name="submit">
                  </form>
            </div>
      </div>



</body>

</html>