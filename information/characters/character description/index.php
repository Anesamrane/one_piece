<?php
session_start();
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
  <link rel="shortcut icon" href="../../../1x/Artboard 1.png">
  <link rel="stylesheet" href="style.css">
  <style>
    #disqus_thread {
      position: relative;
      top: 20vh;
    }

    span {
      font-size: smaller;
    }

    .like a i {
      color: black;
    }
  </style>
</head>

<body>
  <header>
    <nav>
      <div><a href="../../../main/index.php" class="logo"><img src="../../../1x/Artboard 1.png" alt=""></a></div>
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






  <div class="ma9al">

    <!-- first page of the picture and description-->
    <div class="box">
      <?php
      $servername = "localhost";
      $user = "root";
      $password = "";
      $db_name = "one_piece";
      $conn = new mysqli($servername, $user, $password, $db_name);

      // Assuming you have already established a database connection in $conn
      
      // Fetch episodes from the database (you may need to modify the query based on your table structure)
      $id = $_GET['id'];
      $query = "SELECT * FROM pirate where id = '$id'";
      $result = $conn->query($query);



      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $theorieid = $row['id'];
          $name = $row['title'];
          // Adjust the href and img src paths accordingly based on your folder structure
      
          echo '  <div class="box-img">';
          echo '    <img src="' . $row['icon'] . '" alt="">';
          echo '  </div>';
          echo '  <div class="box-detail">';
          echo '<p> الاسم: ' . $row['name'] . '</p>';
          echo '<p> العمر: ' . $row['age'] . '</p>';
          echo '<p> الأكلة المفظلة: ' . $row['food'] . '</p>';
          echo '<p> الطاقم: ' . $row['crew'] . '</p>';
          echo '<p> المكافئة: ' . $row['prize'] . '</p>';
          echo '<p> اللقب: ' . $row['nickname'] . '</p>';
          echo '  </div>';


        }
      } else {
        echo 'No episodes found.';
      }
      ?>


    </div>


    <?php
    $servername = "localhost";
    $user = "root";
    $password = "";
    $db_name = "one_piece";
    $conn = new mysqli($servername, $user, $password, $db_name);

    $id = $_GET['id'];
    $name = $_GET['name'];
    $query = "SELECT * FROM pirate where id = '$id'";
    $result = $conn->query($query);

    $query2 = "SELECT * FROM fav where fav_id = '$id' AND react = 'love'";
    $result2 = $conn->query($query2);


    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $id = $_GET['id'];
        echo '<div class="like">';
        echo '<span>' . $row['love'] . '</span>';
        echo '<a href="love.php?id=' . $id . '&name=' . $name . '" class="likeButton" onclick="redheart()">';
        echo '<i class="fa-solid fa-heart fa-2xl" id="redheart"></i>';
        echo '</a>';
        echo '</div>';
      }
    } else {
      echo 'No results found.';
    }

    $conn->close();
    ?>




    <?php
    $servername = "localhost";
    $user = "root";
    $password = "";
    $db_name = "one_piece";
    $conn = new mysqli($servername, $user, $password, $db_name);

    $id = $_GET['id'];
    $query = "SELECT * FROM pirate where id = '$id'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo '<div class="fav">';
        echo '<span>' . $row['fav'] . '</span>';
        echo '<a href="fav.php?id=' . $id . '&name=' . $name . '" class="favButton" onclick="yellowfav()">';
        echo '<i class="fa-solid fa-star fa-2xl" id="favorite"></i>';
        echo '</a>';
        echo '</div>';
      }
    } else {
      echo 'No results found.';
    }

    $conn->close();
    ?>
  </div>

  </div>
  </div>







  <script>
    let redheart = document.getElementById('redheart');
    function redheart() {
      redheart.style.color = "red";
      let likeButton = document.querySelector('.likeButton');
      likeButton.setAttribute("onclick", "hideheart()");

      <?php
      $servername = "localhost";
      $user = "root";
      $password = "";
      $db_name = "one_piece";
      $conn = new mysqli($servername, $user, $password, $db_name);


      // Assuming you have already established a database connection in $conn
      
      // Fetch episode information from the database
      if (isset($_SESSION['login'])) {
      } else {
        ?>
        alert('تحتاج الى تسجيل الدخول الى حسابك لاكمال العملية');

      <?php }
      ?>


    }

    function hideheart() {
      let redheart = document.getElementById('redheart').style.color = "black";
      let likeButton = document.querySelector('.likeButton');
      likeButton.setAttribute("onclick", "redheart()");

      <?php
      $servername = "localhost";
      $user = "root";
      $password = "";
      $db_name = "one_piece";
      $conn = new mysqli($servername, $user, $password, $db_name);
      ?>
      alert('تحتاج الى تسجيل الدخول الى حسابك لاكمال العملية');

      <?php

      // Assuming you have already established a database connection in $conn
      
      // Fetch episode information from the database
      if (isset($_SESSION['login'])) {
      } else {
        ?>
        alert('تحتاج الى تسجيل الدخول الى حسابك لاكمال العملية');

      <?php }
      ?>
    }


    function yellowfav() {
      let favorite = document.getElementById('favorite').style.color = "yellow";
      let favButton = document.querySelector('.favButton');
      favButton.setAttribute("onclick", "hidefav()");
      <?php
      $servername = "localhost";
      $user = "root";
      $password = "";
      $db_name = "one_piece";
      $conn = new mysqli($servername, $user, $password, $db_name);

      // Assuming you have already established a database connection in $conn
      
      // Fetch episode information from the database
      if (isset($_SESSION['login'])) {
      } else {
        ?>
        alert('تحتاج الى تسجيل الدخول الى حسابك لاكمال العملية');
      <?php }
      ?>

    }
    function hidefav() {
      let favorite = document.getElementById('favorite').style.color = "black";
      let favButton = document.querySelector('.favButton');
      favButton.setAttribute("onclick", "yellowfav()");

    }




  </script>


  <!-- love react -->
  <?php
  $id = $_GET['id'];
  $name = $_GET['name'];
  $user_id = $_SESSION['id'];
  $query = "SELECT * FROM fav where fav_id = '$id' AND react = 'love' AND user_id = '$user_id' AND type = '$name'";
  $result = $conn->query($query);
  if ($result->num_rows > 0) {
    ?>
    <script>
      redheart.style.color = "red";
    </script>
  <?php } else { ?>
    <script>
      redheart.style.color = "black";
    </script>
  <?php } ?>




  <!-- fav react -->
  <?php
  $id = $_GET['id'];
  $name = $_GET['name'];
  $user_id = $_SESSION['id'];
  $query = "SELECT * FROM fav where fav_id = '$id' AND react = 'fav' AND user_id = '$user_id'";
  $result = $conn->query($query);
  if ($result->num_rows > 0) {
    ?>
    <script>
      favorite.style.color = "yellow";
    </script>
  <?php } else { ?>
    <script>
      favorite.style.color = "black";
    </script>
  <?php } ?>













  <!-- Rest of your HTML/PHP code -->

  <div id="disqus_thread"></div>
  <script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */

    var disqus_config = function () {
      var currentPageURL = window.location.href;
      this.page.url = currentPageURL;  // Replace PAGE_URL with your page's canonical URL variable
      this.page.identifier = currentPageURL; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };

    (function () { // DON'T EDIT BELOW THIS LINE
      var d = document, s = d.createElement('script');
      s.src = 'https://oparabic.disqus.com/embed.js';
      s.setAttribute('data-timestamp', +new Date());
      (d.head || d.body).appendChild(s);
    })();
  </sc >
  <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by
      Disqus.</a></noscript>
  <script id="dsq-count-scr" src="//oparabic.disqus.com/count.js" async></script>







</body>

</html>