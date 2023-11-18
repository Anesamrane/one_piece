<?php
session_start();
?>
<!-- log out -->

<?php
$servername = "localhost";
$user = "root";
$password = "";
$db_name = "one_piece";
$conn = new mysqli($servername, $user, $password, $db_name);

if (isset($_POST['logout'])) {
  header('location: ../../main/index.php');
  unset($_SESSION);
  session_destroy();

}
?>



<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&family=Manrope:wght@300&family=Noto+Naskh+Arabic:wght@700&family=Noto+Sans+Arabic:wght@300&family=Poppins:wght@300;500&family=Roboto&family=Ubuntu:wght@700&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Op arabic</title>
  <link rel="shortcut icon" href="../../1x/Artboard 1.png">
  <link rel="stylesheet" href="style.css">
  <style>
    .sun form {
      position: absolute;
      width: 100%;
      height: 100%;
    }

    .sun form:hover>button {
      background-color: #2256F2;
      color: #fff;
    }

    nav input {
      position: absolute;
      width: 350%;
      padding: 1vh;
      right: 35%;
      background-color: #e6e6e6;
      color: #171717;
      border: none;
      outline: none;
      border: none;
    }

    .sun {
      background-color: #e6e6e6;
      width: 6vh;
      height: 6vh;
      border-radius: 50%;
      position: relative;
      right: 45%;
      margin: 0 1vh 0 1vh;
    }

    .photo-profile h5 {
      position: absolute;
      bottom: 3vh;
      color: #fff;
    }

    .photo-profile h6 {
      position: absolute;
      bottom: -0.5vh;
      color: #fff;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <header>
    <nav>
      <div><a href="../../main/index.php" class="logo"><img src="../../1x/Artboard 1.png" alt=""></a></div>
      <div class="hover1"><a href="../../account/create or join/index.php" class="nav"><i class="fa-solid fa-user"></i>
          حسابي</a></div>
      <div class="hover2"><a href="../../anime/affich/index.php" class="nav"><i class="fa-solid fa-play"></i> الأنمي</a>
      </div>
      <div class="hover3"><a href="" class="nav"><i class="fa-solid fa-book-open"></i> المانجا</a>
        <div class="chapters3all">
          <nav class="chapters3">
            <div><a href="../../manga/affich/index.php"><i class="fa-solid fa-book"></i> فصول المانجا </a></div>
            <div><a href="../../manga/spoiler/index.php"><i class="fa-solid fa-fire"></i> التسريبات</a></div>
          </nav>
        </div>
      </div>
      <div class="hover5"><a href="" class="nav"><i class="fa-solid fa-message"></i> نقاشات</a>
        <div class="chapters5all">
          <nav class="chapters5">
            <div><a href="../../discus/pub/affich theories/index.php"><i class="fa-solid fa-fire"></i> منشورات عامة </a>
            </div>
            <div><a href="../../discus/theorie/affich theories/index.php"><i class="fa-solid fa-eye"></i> نظريات</a>
            </div>
            <div><a href="../../information/databook/index.php"><i class="fa-brands fa-youtube"></i> مقاطع يوتيوب </a>
            </div>
          </nav>
        </div>
      </div>
      <div class="hover4"><a href="" class="nav"><i class="fa-solid fa-person"></i> معلومات</a>
        <div class="chapters4all">
          <nav class="chapters4">
            <div><a href="../../information/characters/affich/index.php"><i class="fa-solid fa-face-smile"></i> الشخصيات
              </a></div>
            <div><a href="../../information/databook/index.php"><i class="fa-solid fa-book"></i> داتابوك</a></div>
            <div><a href="../../information/databook/index.php"><i class="fa-solid fa-book"></i> فيفر كارد</a></div>
            <div><a href="../../information/databook/index.php"><i class="fa-solid fa-star"></i> معلومات متنوعة </a>
            </div>
          </nav>
        </div>
      </div>
      <?php
      $logout = 'logout';
      if (isset($_SESSION['login'])) {
        # code...
        echo '<div class="sun">';
        echo '<form  method="post"> <button value="' . $logout . '" class="logout" name="logout"><i class="fa-solid fa-right-from-bracket"></i></button></form>';
        echo '</div>';
      }
      ?>
    </nav>
  </header>





  <div class="back">
    <?php
    // Replace "your_database_credentials" with your actual database credentials
    $servername = "localhost";
    $user = "root";
    $password = "";
    $db_name = "one_piece";
    $conn = new mysqli($servername, $user, $password, $db_name);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $username = $_SESSION['login'];
    // Fetch data from the database
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);






    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $character = $row['icon'];
        $sql2 = "SELECT * FROM icons WHERE name ='$character'";
        $result2 = $conn->query($sql2);
        $row2 = $result2->fetch_assoc();
        echo '<div class="photo-profile">';
        echo '<img src="' . $row2['link'] . '" alt="">';
        echo '</br>';
        echo '<h6>' . $row['username'] . '</h6>';
        echo '<h5>' . $row['name'] . '</h5>';
        echo '</div>';
      }

    } else {
      echo "No data found.";
    }


    $conn->close();
    ?>
  </div>




  <div class="wall">
    <h5> النظريات المفظلة </h5>



    <?php
    $servername = "localhost";
    $user = "root";
    $password = "";
    $db_name = "one_piece";
    $conn = new mysqli($servername, $user, $password, $db_name);

    // Assuming you have already established a database connection in $conn
    
    // Fetch episodes from the database (you may need to modify the query based on your table structure)
    $user = $_SESSION['id'];
    $query = "SELECT * FROM theorie";
    $result = $conn->query($query);





    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $query2 = "SELECT * FROM fav WHERE react='fav'";
        $result2 = $conn->query($query2);
        if ($result2->num_rows > 0) {
          while ($row2 = $result2->fetch_assoc()) {
            if ($row2['user_id'] = $user) {
              if ($row['id'] == $row2['fav_id']) {
                $theorieid = $row['id'];
                $name = $row['title'];
                $type = $row['type'];
                // Adjust the href and img src paths accordingly based on your folder structure
                echo '<a href="../../discus/theorie/read theorie/index.php?theorieid=' . $theorieid . '&type=' . $type . '" class="book3">';
                echo '  <div class="book-img3">';
                echo '    <img src="' . $row['icon'] . '" alt="">';
                echo '  </div>';
                echo '<div class="book-info3">';
                echo '    <h6>' . $row['title'] . ' </h6>';
                echo '<p>' . $row['start'] . '</p>';
                if ($row['spoil'] == 1) {
                  echo '<h6 class="spoil">';
                  echo 'يحتوي على حرق ';
                  echo '</h6>';
                }
                echo '</div>';
                echo '</a>';
              }
            }
          }
        }
      }
    } else {
      echo 'No episodes found.';
    }
    ?>

  </div>



  <div class="wall">
    <h5> الشخصيات المفظلة</h5> <br>



    <?php
    $servername = "localhost";
    $user = "root";
    $password = "";
    $db_name = "one_piece";
    $conn = new mysqli($servername, $user, $password, $db_name);

    // Assuming you have already established a database connection in $conn
    
    // Fetch episodes from the database (you may need to modify the query based on your table structure)
    $user = $_SESSION['id'];
    $query = "SELECT * FROM pirate";
    $result = $conn->query($query);




    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {

        $query2 = "SELECT * FROM fav WHERE react='fav'";
        $result2 = $conn->query($query2);
        if ($result2->num_rows > 0) {
          while ($row2 = $result2->fetch_assoc()) {
            if ($row2['user_id'] = $user) {
              if ($row['id'] == $row2['fav_id']) {

                $id = $row['id'];
                $name = $row['name'];
                // Adjust the href and img src paths accordingly based on your folder structure
                echo '<a href="../../information/characters/character description/index.php?id=' . $id . '&name=' . $name . '" class="book">';
                echo '  <div class="book-img">';
                echo '    <img src="' . $row['icon'] . '" alt="">';
                echo '<p><i class="fa-solid fa-heart">' . $row['love'] . '</i></p>';
                echo '  </div>';
                echo '    <h6>' . $name . ' </h6>';
                echo '</a>';
              }
            }
          }
        }
      }
    } else {
      echo 'No episodes found.';
    }
    ?>


  </div>

</body>

</html>