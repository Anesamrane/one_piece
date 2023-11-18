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
  <link rel="shortcut icon" href="../../1x/Artboard 1.png">
  <link rel="stylesheet" href="style.css">
  <style>
    .manga .page {
      width: 90%;
      height: auto;
      background-color: #252525;
    }

    .next {
      position: relative;
      width: 100%;
      display: flex;
      justify-content: space-around;
      margin-top: 10vh;
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

    #disqus_thread {
      background-color: #252525;
      width: 90%;
    }

    .like,
    .fav {
      position: absolute;
      top: 18vh;
      background-color: #2135A6;
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

    </nav>
  </header>












  </div>
  </div>


  <div class="manga">


    <?php
    $servername = "localhost";
    $user = "root";
    $password = "";
    $db_name = "one_piece";
    $conn = new mysqli($servername, $user, $password, $db_name);

    $linename = $_GET['name'];
    $linechapter = $_GET['chapter'];
    $id = $_GET['id'];
    // Fetch data from the database
    $sql = "SELECT * FROM manga WHERE name = '$linename' AND chapter = '$linechapter' AND id = '$id'";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo '<div class="like">';
        echo '<span>' . $row['love'] . '</span>';
        echo '<a href="love.php?chapter=' . $linechapter . '&name=' . $linename . '&id=' . $id . '" class="likeButton" onclick="redheart()">';
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

    $linename = $_GET['name'];
    $linechapter = $_GET['chapter'];
    $id = $_GET['id'];
    // Fetch data from the database
    $sql = "SELECT * FROM manga WHERE name = '$linename' AND chapter = '$linechapter' AND id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo '<div class="fav">';
        echo '<span>' . $row['fav'] . '</span>';
        echo '<a href="fav.php?chapter=' . $linechapter . '&name=' . $linename . '&id=' . $id . '" class="favButton" onclick="yellowfav()">';
        echo '<i class="fa-solid fa-star fa-2xl" id="favorite"></i>';
        echo '</a>';
        echo '</div>';
      }
    } else {
      echo 'No results found.';
    }

    $conn->close();
    ?>

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
    $linename = $_GET['name'];
    $linechapter = $_GET['chapter'];
    $id = $_GET['id'];
    // Fetch data from the database
    $sql = "SELECT * FROM manga_server WHERE name = '$linename' AND chapter = '$linechapter'";
    $result = $conn->query($sql);



    $new = $linechapter + 1;
    $old = $linechapter - 1;


    $query2 = "SELECT * FROM manga where chapter='$new'";
    $result2 = $conn->query($query2);
    if ($result2->num_rows > 0) {
      while ($row2 = $result2->fetch_assoc()) {
        $newid = $row2['id'];
      }
    }
    $query3 = "SELECT * FROM manga where chapter='$old'";
    $result3 = $conn->query($query3);
    if ($result3->num_rows > 0) {
      while ($row3 = $result3->fetch_assoc()) {
        $oldid = $row3['id'];
      }
    }

    echo "<h2>الفصل $linechapter</h2>";

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo '<div class="page">';
        echo '<img src="' . $row["link"] . '" alt="">';
        echo '</div>';
      }
      echo '  <div class="next">';

      $query3 = "SELECT * FROM manga where chapter='$old'";
      $result3 = $conn->query($query3);
      if ($result3->num_rows > 0) {
        while ($row3 = $result3->fetch_assoc()) {
          echo '<a class="right" href="../../manga/read chapter/index.php?chapter=' . $old . '&name=' . $linename . '&id=' . $oldid . '">الفصل السابق</a>';
        }
      }


      $query2 = "SELECT * FROM manga where chapter='$new'";
      $result2 = $conn->query($query2);
      if ($result2->num_rows > 0) {
        while ($row2 = $result2->fetch_assoc()) {
          echo '    <a class="left" href="../../manga/read chapter/index.php?chapter=' . $new . '&name=' . $linename . '&id=' . $newid . '" >الفصل التالي</a> ';
        }
      }
      echo '  </div>';
    } else {
      echo "No data found.";
    }

    $conn->close();
    ?>



    <div class="pub">

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
    $chapter = $_GET['chapter'];
    $id = $_GET['id'];
    $type = $_GET['name'];
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
    $chapter = $_GET['chapter'];
    $id = $_GET['id'];
    $type = $_GET['name'];
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
  </div>
  <script id="dsq-count-scr" src="//oparabic.disqus.com/count.js" async></script>





  <script>
    $(document).ready(function () {
      $('#search').keyup(function () {
        var searchQuery = $(this).val();

        if (searchQuery === "") {
          $('#search-results').empty(); // Clear the search results div
        } else {
          $.ajax({
            type: 'GET',
            url: '../../search/search.php', // The PHP script that handles the search
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