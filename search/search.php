<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "one_piece";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['search'])) {
    echo '  <div class="all">';
    $searchresult = $_GET['search'];
    $sql = "SELECT * FROM theorie WHERE title LIKE '$searchresult%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $theorieid = $row['id'];
            $name = $row['title'];
            $type = $row['type'];
            // Adjust the href and img src paths accordingly based on your folder structure
            echo '<a href="../discus/theorie/read theorie/index.php?theorieid=' . $theorieid . '&type=' . $type . '" class="book5">';
            echo '  <div class="book-img5">';
            echo '    <img src="' . $row['icon'] . '" alt="">';
            echo '  </div>';
            echo '<div class="book-info5">';
            echo '    <p>' . $row['title'] . ' </p>';
            echo '    <h6>   نضرية   </h6>';
            echo '</div>';
            echo '</a>';
        }
    }
    $sql = "SELECT * FROM episode WHERE episode LIKE '$searchresult%'";
    $result = $conn->query($sql);

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
                echo '<a href="../anime/watch/watch episode/index.php?episode=' . $episodeNumber . '&type=' . $type . '&id=' . $id . '" class="book5">';
                echo '  <div class="book-img5">';
                echo '    <img src="' . $row2['icon'] . '" alt="">';
                echo '  </div>';
                echo '  <div class="book-info5">';
                echo '    <p> الحلقة ' . $episodeNumber . ' </p>';
                echo '  </div>';
                echo '</a>';
            }
        }
    }


    $sql = "SELECT * FROM manga WHERE chapter LIKE '$searchresult%'";
    $result = $conn->query($sql);

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
                echo '<a href="../manga/read chapter/index.php?chapter=' . $chapter . '&name=' . $name . '&id=' . $id . '" class="book5">';
                echo '  <div class="book-img5">';
                echo '    <img src="' . $row2['icon'] . '" alt="">';
                echo '  </div>';
                echo '  <div class="book-info5">';
                echo '    <p> الفصل ' . $chapter . ' </p>';
                echo '  </div>';
                echo '</a>';
            }
        }
    }



    $sql = "SELECT * FROM episode WHERE title LIKE '$searchresult%' AND type ='film'";
    $result = $conn->query($sql);

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
                echo '<a href="../anime/watch/watch episode/index.php?episode=' . $episodeNumber . '&type=' . $type . '&id=' . $id . '" class="book5">';
                echo '  <div class="book-img5">';
                echo '    <img src="' . $row2['icon'] . '" alt="">';
                echo '  </div>';
                echo '  <div class="book-info5">';
                echo '    <p> الحلقة ' . $episodeNumber . ' </p>';
                echo '  </div>';
                echo '</a>';
            }
        }
    }





    $sql = "SELECT * FROM pirate WHERE name LIKE '$searchresult%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $name = $row['name'];
            // Adjust the href and img src paths accordingly based on your folder structure
            echo '<a href="../information/characters/character description/index.php?id=' . $id . '&name=' . $name . '" class="book5">';
            echo '  <div class="book-img5">';
            echo '    <img src="' . $row['icon'] . '" alt="">';
            echo '  </div>';
            echo '  <div class="book-info5">';
            echo '    <p>' . $name . ' </p>';
            echo '  </div>';
            echo '</a>';
        }
    }



    echo '  </div>';
}
$conn->close();
?>