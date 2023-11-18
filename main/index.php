<?php
session_start();
?>
<?php
$servername = "sql311.infinityfree.com";
$user = "if0_34909146";
$password = "s50zSySamk";
$db_name = "if0_34909146_one_piece";
$conn = new mysqli($servername, $user, $password, $db_name);

if (isset($_POST['logout'])) {
  header('location: ../main/index.php');
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>Op arabic</title>
  <link rel="shortcut icon" href="../1x/Artboard 1.png">
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

    #search-results {
      position: absolute;
      left: 2%;
      top: 9vh;
      z-index: 9999;
      width: 36%;
      height: 50vh;

    }

    .book5 {
      width: 100%;
      height: 20%;
      transition: 0.1s;
    }

    .book5:hover {
      background-color: #e6e6e6;
      color: #2256F2;
    }

    .book5 .book-img5 {
      position: absolute;
      right: 3%;
      width: 7vh;
      height: 7vh;
      object-fit: cover;
      object-position: center;
    }

    .book5 .book-img5 img {
      width: 100%;
      height: 100%;
      right: 3%;
      object-fit: cover;
      object-position: center;
    }

    .book-info5 {
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bolder;
    }

    .book-info5 p,
    .book-info5 h6 {
      font-weight: bold;
    }

    .book-info5 h6 {
      position: absolute;
      left: 3%;
    }

    .all {
      width: 100%;
      min-height: 50vh;
      background-color: #fff;
      overflow-y: scroll;
    }

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
      <div><a href="" class="logo"><img src="../1x/Artboard 1.png" alt=""></a></div>
      <div class="hover1"><a href="../account/create or join/index.php" class="nav"><i class="fa-solid fa-user"></i>
          حسابي</a></div>
      <div class="hover2"><a href="../anime/affich/index.php" class="nav"><i class="fa-solid fa-play"></i> الأنمي</a>
      </div>
      <div class="hover3"><a href="" class="nav"><i class="fa-solid fa-book-open"></i> المانجا</a>
        <div class="chapters3all">
          <nav class="chapters3">
            <div><a href="../manga/affich/index.php"><i class="fa-solid fa-book"></i> فصول المانجا </a></div>
            <div><a href="../manga/spoiler/index.php"><i class="fa-solid fa-fire"></i> التسريبات</a></div>
          </nav>
        </div>
      </div>
      <div class="hover5"><a href="" class="nav"><i class="fa-solid fa-message"></i> نقاشات</a>
        <div class="chapters5all">
          <nav class="chapters5">
            <div><a href="../discus/pub/affich theories/index.php"><i class="fa-solid fa-fire"></i> منشورات عامة </a>
            </div>
            <div><a href="../discus/theorie/affich theories/index.php"><i class="fa-solid fa-eye"></i> نظريات</a></div>
            <div><a href="../information/databook/index.php"><i class="fa-brands fa-youtube"></i> مقاطع يوتيوب </a>
            </div>
          </nav>
        </div>
      </div>
      <div class="hover4"><a href="" class="nav"><i class="fa-solid fa-person"></i> معلومات</a>
        <div class="chapters4all">
          <nav class="chapters4">
            <div><a href="../information/characters/affich/index.php"><i class="fa-solid fa-face-smile"></i> الشخصيات
              </a></div>
            <div><a href="../information/databook/index.php"><i class="fa-solid fa-book"></i> داتابوك</a></div>
            <div><a href="../information/databook/index.php"><i class="fa-solid fa-book"></i> فيفر كارد</a></div>
            <div><a href="../information/databook/index.php"><i class="fa-solid fa-star"></i> معلومات متنوعة </a></div>
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
      <div><a><input type="text" class="search-input" id="search"></a></div>
      <div id="search-results"></div>
    </nav>
  </header>




  <!--this is the slides-->
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">

      <a href="" class="carousel-item active">
        <img src="Luffy.jpg" class="d-block w-100" alt="...">
      </a>

      <a href="" class="carousel-item">
        <img src="Wallpaper Zoro One Piece.jpg" class="d-block w-100" alt="...">
      </a>

      <a href="" class="carousel-item">
        <img src="OnePiece bounty wanted poster desktop_pc wallpaper.png" class="d-block w-100" alt="...">
      </a>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



  <!-- books -->


  <div class="wall">
    <h5> اخر الحلقات المضافة </h5> <br>
    <?php
    $servername = "sql311.infinityfree.com";
    $user = "if0_34909146";
    $password = "s50zSySamk";
    $db_name = "if0_34909146_one_piece";
    $conn = new mysqli($servername, $user, $password, $db_name);

    // Assuming you have already established a database connection in $conn
    
    // Fetch episodes from the database (you may need to modify the query based on your table structure)
    $query = "SELECT * FROM episode WHERE type='episode' ORDER BY episode DESC LIMIT 6";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $episodeNumber = $row['episode'];
        $type = $row['type'];
        $id = $row['id'];
        $query2 = "SELECT icon FROM type WHERE name= 'One piece'";
        $result2 = $conn->query($query2);
        $row2 = $result2->fetch_assoc();
        if ($row2['type'] = 'episode') {
          // Adjust the href and img src paths accordingly based on your folder structure
          echo '<a href="../anime/watch/watch episode/index.php?episode=' . $episodeNumber . '&type=' . $type . '&id=' . $id . '" class="book2">';
          echo '  <div class="book-img2">';
          echo '    <img src="' . $row2['icon'] . '" alt="">';
          echo '  </div>';
          echo '  <div class="book-info">';
          echo '    <p> الحلقة ' . $episodeNumber . ' </p>';
          echo '  </div>';
          echo '</a>';
        }
      }
    } else {
      echo 'No episodes found.';
    }
    ?>


  </div>




  <div class="wall">
    <h5> اخر فصول المانجا </h5> <br>

    <?php
    $servername = "sql311.infinityfree.com";
    $user = "if0_34909146";
    $password = "s50zSySamk";
    $db_name = "if0_34909146_one_piece";
    $conn = new mysqli($servername, $user, $password, $db_name);

    // Assuming you have already established a database connection in $conn
    
    // Fetch episodes from the database (you may need to modify the query based on your table structure)
    $query = "SELECT * FROM manga ORDER BY chapter DESC LIMIT 5";
    $result = $conn->query($query);

    $query2 = "SELECT * FROM manga_type";
    $result2 = $conn->query($query2);

    if ($result->num_rows > 0) {
      $row2 = $result2->fetch_assoc();
      while ($row = $result->fetch_assoc()) {
        $name = $row['name'];
        $chapter = $row['chapter'];
        $id = $row['id'];
        if ($row2['name'] == $name) {
          // Adjust the href and img src paths accordingly based on your folder structure
          echo '<a href="../manga/read chapter/index.php?chapter=' . $chapter . '&name=' . $name . '&id=' . $id . '" class="book">';
          echo '  <div class="book-img">';
          echo '    <img src="' . $row2['icon'] . '" alt="">';
          echo '  </div>';
          echo '    <h6> الفصل ' . $chapter . ' </h6>';
          echo '</a>';
        }
      }
    } else {
      echo 'No episodes found.';
    }
    ?>


  </div>


  <div class="wall">
    <h5> اخر الافلام </h5> <br>


    <?php
    $servername = "sql311.infinityfree.com";
    $user = "if0_34909146";
    $password = "s50zSySamk";
    $db_name = "if0_34909146_one_piece";
    $conn = new mysqli($servername, $user, $password, $db_name);

    // Assuming you have already established a database connection in $conn
    
    // Fetch episodes from the database (you may need to modify the query based on your table structure)
    $query = "SELECT * FROM episode WHERE type='film'";
    $result = $conn->query($query);




    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $episodeNumber = $row['title'];
        $type = $row['type'];
        $id = $row['id'];
        $name = $row['title'];
        $query2 = "SELECT icon FROM type WHERE name= '$name'";
        $result2 = $conn->query($query2);
        $row2 = $result2->fetch_assoc();
        if ($row2['type'] = 'film') {
          // Adjust the href and img src paths accordingly based on your folder structure
          echo '<a href="../anime/watch/watch episode/index.php?episode=' . $episodeNumber . '&type=' . $type . '&id=' . $id . '" class="book">';
          echo '  <div class="book-img">';
          echo '    <img src="' . $row2['icon'] . '" alt="">';
          echo '  </div>';
          echo '    <h6>' . $name . ' </h6>';
          echo '</a>';
        }
      }
    } else {
      echo 'No episodes found.';
    }
    ?>


  </div>



  <div class="wall">
    <h5> أبرز النظريات و المنشورات </h5> <br>


    <?php
    $servername = "sql311.infinityfree.com";
    $user = "if0_34909146";
    $password = "s50zSySamk";
    $db_name = "if0_34909146_one_piece";
    $conn = new mysqli($servername, $user, $password, $db_name);

    // Assuming you have already established a database connection in $conn
    
    // Fetch episodes from the database (you may need to modify the query based on your table structure)
    $query = "SELECT * FROM theorie";
    $result = $conn->query($query);



    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $theorieid = $row['id'];
        $name = $row['title'];
        $type = $row['type'];
        // Adjust the href and img src paths accordingly based on your folder structure
        echo '<a href="../discus/theorie/read theorie/index.php?theorieid=' . $theorieid . '&type=' . $type . '" class="book3">';
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
    } else {
      echo 'No episodes found.';
    }
    ?>

  </div>









  <div class="wall">
    <h5> أبرز الشخصيات</h5> <br>
    <?php
    $servername = "sql311.infinityfree.com";
    $user = "if0_34909146";
    $password = "s50zSySamk";
    $db_name = "if0_34909146_one_piece";
    $conn = new mysqli($servername, $user, $password, $db_name);

    // Assuming you have already established a database connection in $conn
    
    // Fetch episodes from the database (you may need to modify the query based on your table structure)
    $query = "SELECT * FROM pirate ORDER BY id DESC LIMIT 5";
    $result = $conn->query($query);




    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $name = $row['name'];
        // Adjust the href and img src paths accordingly based on your folder structure
        echo '<a href="../information/characters/character description/index.php?id=' . $id . '&name=' . $name . '" class="book">';
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




  <footer>
    <div class="social">
      <a href="" class="facebook"><i class="fa-brands fa-facebook fa-xl"></i></a>
      <a href="" class="instagram"><i class="fa-brands fa-instagram fa-xl"></i></a>
      <a href="" class="twitter"><i class="fa-brands fa-twitter fa-xl"></i></a>
      <a href="" class="discord"><i class="fa-brands fa-discord fa-xl"></i></a>
    </div>
    <div class="about">
      <a href="">DMCA</a>
      <a href="">اتصل بنا </a>
      <a href=""> اعمل معنا</a>
    </div>
    <div class="right">
      <p>جميع الحقوق محفوظة ل موقع ون بيس بالعربية | Oparabic</p>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>



  <script>
    $(document).ready(function () {
      $('#search').keyup(function () {
        var searchQuery = $(this).val();

        if (searchQuery === "") {
          $('#search-results').empty(); // Clear the search results div
        } else {
          $.ajax({
            type: 'GET',
            url: '../search/search.php', // The PHP script that handles the search
            data: { search: searchQuery },
            success: function (response) {
              $('#search-results').html(response); // Update the search results div
            }
          });
        }
      });
    });
  </script>


</body>

</html>