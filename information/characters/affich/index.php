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
  <link rel="shortcut icon" href="../../../1x/Artboard 1.png">
  <link rel="stylesheet" href="style.css">
  <style>
    .book p {
      position: relative;
      width: fit-content;
      bottom: 7vh;
      right: 40%;
      background-color: #fff;
      padding: 1vh;
      letter-spacing: 5%;
      font-size: smaller;
      border-radius: 3vh;
    }
  </style>
</head>

<body>
  <header>
    <nav>
      <div><a href="../../../main/index.php" class="logo"><img src="../../..//1x/Artboard 1.png" alt=""></a></div>
      <div class="hover1"><a href="../../../account/create or join/index.php" class="nav"><i
            class="fa-solid fa-user"></i> حسابي</a></div>
      <div class="hover2"><a href="../../../anime/affich/index.php" class="nav"><i class="fa-solid fa-play"></i>
          الأنمي</a>
      </div>
      <div class="hover3"><a href="" class="nav"><i class="fa-solid fa-book-open"></i> المانجا</a>
        <div class="chapters3all">
          <nav class="chapters3">
            <div><a href="../../../manga/affich/index.php"><i class="fa-solid fa-book"></i> فصول المانجا </a></div>
            <div><a href="../../../manga/spoiler/index.php"><i class="fa-solid fa-fire"></i> التسريبات</a></div>
          </nav>
        </div>
      </div>
      <div class="hover5"><a href="" class="nav"><i class="fa-solid fa-message"></i> نقاشات</a>
        <div class="chapters5all">
          <nav class="chapters5">
            <div><a href="../../../discus/pub/affich theories/index.php"><i class="fa-solid fa-fire"></i> منشورات عامة
              </a></div>
            <div><a href="../../../discus/theorie/affich theories/index.php"><i class="fa-solid fa-eye"></i> نظريات</a>
            </div>
            <div><a href="../../../information/databook/index.php"><i class="fa-brands fa-youtube"></i> مقاطع يوتيوب
              </a></div>
          </nav>
        </div>
      </div>
      <div class="hover4"><a href="" class="nav"><i class="fa-solid fa-person"></i> معلومات</a>
        <div class="chapters4all">
          <nav class="chapters4">
            <div><a href="../../../information/characters/affich/index.php"><i class="fa-solid fa-face-smile"></i>
                الشخصيات </a></div>
            <div><a href="../../../information/databook/index.php"><i class="fa-solid fa-book"></i> داتابوك</a></div>
            <div><a href="../../../information/databook/index.php"><i class="fa-solid fa-book"></i> فيفر كارد</a></div>
            <div><a href="../../../information/databook/index.php"><i class="fa-solid fa-star"></i> معلومات متنوعة </a>
            </div>
          </nav>
        </div>
      </div>
    </nav>
  </header>



  <!-- characters-->

  <div class="wall">
    <h5> أبرز الشخصيات</h5> <br>
    <?php
    $servername = "localhost";
    $user = "root";
    $password = "";
    $db_name = "one_piece";
    $conn = new mysqli($servername, $user, $password, $db_name);

    // Assuming you have already established a database connection in $conn
    
    // Fetch episodes from the database (you may need to modify the query based on your table structure)
    $query = "SELECT * FROM pirate";
    $result = $conn->query($query);




    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $name = $row['name'];
        // Adjust the href and img src paths accordingly based on your folder structure
        echo '<a href="../../../information/characters/character description/index.php?id=' . $id . '&name=' . $name . '" class="book">';
        echo '  <div class="book-img">';
        echo '    <img src="' . $row['icon'] . '" alt="">';
        echo '<p><i class="fa-solid fa-heart">' . $row['love'] . '</i></p>';
        echo '  </div>';
        echo '    <h6>' . $name . ' </h6>';
        echo '</a>';
      }
    } else {
      echo 'No episodes found.';
    }
    ?>


  </div>

</body>

</html>