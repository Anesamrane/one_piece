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
    .server form:hover>input {
      background-color: #2135A6;
    }

    .next {
      position: absolute;
      width: 100%;
      display: flex;
      justify-content: space-between;
      bottom: -5vh;
    }

    .next a {
      padding: 2vh;
      border-radius: 2vh;
      border: none;
      outline: none;
      background: #252525;
      color: #fff;
      transition: 0.3s;
      text-decoration: none;
    }

    .next a:hover {
      background-color: #2135A6;
      color: #fff;
    }

    .custom-button.clicked {
      background-color: #0056b3;
    }

    .box-img {
      width: 15%;
      height: 45vh;
      position: absolute;
      right: 7%;
      top: 10vh;
    }

    .box-detail {
      width: 65%;
      height: 70%;
      padding: 2vh;
      position: relative;
      padding-top: 12vh;
      right: 25%;
      color: #e6e6e6;
      font-weight: normal;
    }

    .pub {
      width: 90%;
      height: 50vh;
      background-color: #252525;
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      top: 90vh;
    }

    .like {
      position: absolute;
      top: 5vh;
      left: 5vh;
      border: none;
      outline: none;
      padding: 1vh 6vh 1vh 1vh;
      background-color: #171717;
      color: #fff;
      box-shadow: 0 0 0.3vh #252525;
      transition: 0.3s;
      word-spacing: 2vh;
    }


    .fav {
      position: absolute;
      top: 5vh;
      left: 30vh;
      border: none;
      outline: none;
      padding: 1vh 6vh 1vh 1vh;
      background-color: #171717;
      color: #fff;
      box-shadow: 0 0 0.3vh #252525;
      transition: 0.3s;
      word-spacing: 2vh;
    }

    .select {
      border: none;
      outline: none;
      background-color: #fff;
    }

    .likeButton {
      border: none;
      outline: none;
      background: none;
    }

    .favButton {
      border: none;
      outline: none;
      background: none;
    }

    .likeButton:focus>i {
      color: red;
    }

    .favButton:focus>i {
      color: yellow;
    }

    #disqus_thread {
      position: relative;
      top: 250vh;
    }
  </style>
</head>

<body>
  <header>
    <nav>
      <div><a href="../../../main/index.php" class="logo"><img src="../../../1x/Artboard 1.png" alt=""></a></div>
      <div class="hover1"><a href="../../../account/create or join/index.php" class="nav"><i
            class="fa-solid fa-user"></i> حسابي</a></div>
      <div class="hover2"><a href="../../affich/index.php" class="nav"><i class="fa-solid fa-play"></i> الأنمي</a>
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
      $lineId = $_GET['episode'];
      $linetype = $_GET['type'];
      // Fetch data from the database
      if ($linetype == "episode") {
        $lineId = "One piece";
      }
      $sql = "SELECT * FROM type WHERE type = '$linetype' AND name = '$lineId'";
      $result = $conn->query($sql);


      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo '<div class="box-img">';
          echo '<img src="' . $row["icon"] . '" alt="">';
          echo '</div>';
          echo '<div class="box-detail">';
          echo '<h2>' . $row["name"] . '</h2>';
          echo '<p>' . $row["description"] . '</p>';
          echo '</div>';
        }
      } else {
        echo "No data found.";
      }

      $conn->close();
      ?>

      <?php
      $servername = "localhost";
      $user = "root";
      $password = "";
      $db_name = "one_piece";
      $conn = new mysqli($servername, $user, $password, $db_name);

      $lineId = $_GET['episode'];
      $id = $_GET['id'];
      $linetype = $_GET['type'];
      $sql = "SELECT * FROM episode WHERE type = '$linetype' AND id = '$id'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo '<div class="like">';
          echo '<span>' . $row['love'] . '</span>';
          echo '<a href="love.php?lineId=' . $lineId . '&type=' . $linetype . '&id=' . $id . '" class="likeButton" onclick="redheart()">';
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

      $lineId = $_GET['episode'];
      $linetype = $_GET['type'];
      $id = $_GET['id'];
      $sql = "SELECT * FROM episode WHERE type = '$linetype' AND id = '$id'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo '<div class="fav">';
          echo '<span>' . $row['fav'] . '</span>';
          echo '<a href="fav.php?lineId=' . $lineId . '&type=' . $linetype . '&id=' . $id . '" class="favButton" onclick="yellowfav()">';
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

  <!-- video -->

  <!-- episode -->
  <div class="allepisode">
    <div class="episode">
      <div>
        <h6>جميع الحلقات</h6>
      </div>
      <?php



      $servername = "localhost";
      $user = "root";
      $password = "";
      $db_name = "one_piece";
      $conn = new mysqli($servername, $user, $password, $db_name);

      // Assuming you have already established a database connection in $conn
      
      // Fetch episode information from the database
      $lineId = $_GET['episode'];
      $id = $_GET['id'];
      $linetype = $_GET['type'];
      $query = "SELECT * FROM episode WHERE type = '$linetype' ORDER BY episode DESC";

      $result = $conn->query($query);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $episodeNumber = $row['title'];
          $episodeTitle = $row['title'];
          $episode = $row['episode'];
          $episodeArc = $row['arc'];
          $episodeFiller = $row['filr'];
          $type = $_GET['type'];

          $query2 = "SELECT * FROM episode where episode='$episode'";
          $result2 = $conn->query($query2);
          $row2 = $result2->fetch_assoc();
          $newid = $row2['id'];

          // Create a link to the episode
      

          // Add a CSS class to the link
          $linkClass = 'book2';

          // Display the episode information
          echo '<div>';
          echo '<a href="../../../anime/watch/watch episode/index.php?episode=' . $episodeNumber . '&type=' . $type . '&id=' . $newid . '" class="' . $linkClass . '"> الحلقة ';
          echo $episodeTitle;
          echo '<p>' . $episodeArc . '</p>';
          if (strpos($episodeFiller, "فلر") !== false) {
            echo '<h6>' . $episodeFiller . '</h6>';
          } else {
            // Do nothing
          }
          echo '</a>';
          echo '</div>';
        }
      } else {
        echo 'No episodes found.';
      }

      ?>



    </div>
  </div>


  <!-- publication -->
  <div class="pub">

  </div>





  <!-- video -->

  <div class="all">
    <div class="server">


      <?php
      $servername = "localhost";
      $user = "root";
      $password = "";
      $db_name = "one_piece";
      $conn = new mysqli($servername, $user, $password, $db_name);

      // Assuming you have already established a database connection in $conn
      
      // Fetch episode information from the database
      $lineId = $_GET['episode'];
      $type = $_GET['type'];
      $query = "SELECT * FROM server where episode= '$lineId'";
      $result = $conn->query($query);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $episodeNumber = $row['episode'];
          $link = $row['link'];
          $currentEpisode = $episodeNumber;

          // Get the row id of the button
          $rowId = $row['id'];

          // Get the data from the database for that row
          $serverName = $row['server_name'];

          // Display the data
          echo '    <form method="post">';
          echo '<input type="submit" value="' . $serverName . '"class="custom-button" name="server" onclick="hover(event)">';
          echo '    </form>';
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

    // Assuming you have already established a database connection in $conn
    
    // Fetch episode information from the database
    $lineId = $_GET['episode'];
    $linetype = $_GET['type'];
    $query = "SELECT * FROM server where episode='$lineId'";
    $result = $conn->query($query);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $server = $_POST['server'];

      $query = "SELECT * FROM server WHERE episode = '$lineId' AND server_name = '$server'";
      $result = $conn->query($query);
    }
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {


        $episodeNumber = $row['episode'];
        $link = $row['link'];
        $type = $_GET['type'];
        if (is_numeric($lineId)) {
          $currentEpisode = $episodeNumber;
          $new = $episodeNumber - 1;
          $old = $episodeNumber + 1;

          $query2 = "SELECT * FROM episode where episode='$new'";
          $result2 = $conn->query($query2);
          if ($result2->num_rows > 0) {
            while ($row2 = $result2->fetch_assoc()) {
              $newid = $row2['id'];
            }
          }
          $query3 = "SELECT * FROM episode where episode='$old'";
          $result3 = $conn->query($query3);
          if ($result3->num_rows > 0) {
            while ($row3 = $result3->fetch_assoc()) {
              $oldid = $row3['id'];
            }
          }

          $rowId = $row['id'];
          $type = $_GET['type'];

          // Check if the server is the one we want to display
          if ($row['id'] == $rowId) {
            echo '  <div class="container">';
            echo $row['link'];
            echo '  </div>';
            echo '  <h5>الحلقة ' . $episodeNumber . '</h5>';
            echo '  <div class="next">';

            $query2 = "SELECT * FROM episode where episode='$new'";
            $result2 = $conn->query($query2);
            if ($result2->num_rows > 0) {
              while ($row2 = $result2->fetch_assoc()) {
                echo '<a class="right" href="../../watch/watch episode/index.php?episode=' . $new . '&type=' . $type . '&id=' . $newid . '">الحلقة السابقة</a>';
              }
            }


            $query3 = "SELECT * FROM episode where episode='$old'";
            $result3 = $conn->query($query3);
            if ($result3->num_rows > 0) {
              while ($row3 = $result3->fetch_assoc()) {
                echo '    <a class="left" href="../../watch/watch episode/index.php?episode=' . $old . '&type=' . $type . '&id=' . $oldid . '" >الحلقة التالية</a> ';
              }
            }
            echo '  </div>';
          }
        } else {
          $rowId = $row['id'];
          $type = $_GET['type'];

          // Check if the server is the one we want to display
          if ($row['id'] == $rowId) {
            echo '  <div class="container">';
            echo $row['link'];
            echo '  </div>';
            echo '  <h5>الحلقة ' . $episodeNumber . '</h5>';
          }

        }

      }
    } else {
      echo 'No episodes found.';
    }
    ?>




  </div>


  <!-- download -->
  <div class="download">
    <div class="title">
      <a>روابط تحميل الحلقة</a>
    </div>
    <div class="alllink">
      <?php
      $servername = "localhost";
      $user = "root";
      $password = "";
      $db_name = "one_piece";
      $conn = new mysqli($servername, $user, $password, $db_name);

      // Assuming you have already established a database connection in $conn
      
      // Fetch episode information from the database
      $lineId = $_GET['episode'];
      $linetype = $_GET['type'];
      $query = "SELECT * FROM server where episode= '$lineId'";
      $result = $conn->query($query);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $episodeNumber = $row['episode'];
          $link = $row['link'];
          $currentEpisode = $episodeNumber;

          // Get the row id of the button
          $rowId = $row['id'];

          // Get the data from the database for that row
          $download_name = $row['download_name'];
          $download = $row['download'];

          // Display the data
          echo '    <div method="post">';
          echo '<a href="' . $download . '" class="link">' . $download_name . '</a>';
          echo '    </div>';
        }
      } else {
        echo 'No episodes found.';
      }
      ?>




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
  $lineId = $_GET['episode'];
  $id = $_GET['id'];
  $type = $_GET['type'];
  $user_id = $_SESSION['id'];
  $query = "SELECT * FROM fav where fav_id = '$id' AND react = 'love' AND user_id = '$user_id' AND type = '$type'";
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
  $lineId = $_GET['episode'];
  $id = $_GET['id'];
  $type = $_GET['type'];
  $user_id = $_SESSION['id'];
  $query = "SELECT * FROM fav where fav_id = '$id' AND react = 'fav' AND user_id = '$user_id' AND type = '$type'";
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
  </script>
  <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by
      Disqus.</a></noscript>
  <script id="dsq-count-scr" src="//oparabic.disqus.com/count.js" async></script>


</body>

</html>