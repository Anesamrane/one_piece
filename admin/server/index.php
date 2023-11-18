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
        .wall {
            position: relative;
            top: 10vh;
            width: 90%;
            height: auto;
            margin-right: 5%;
            display: flex;
            flex-wrap: wrap;
            padding: 5vh;
        }

        .book {
            width: 17%;
            height: 50vh;
            margin: 2vh;
            text-decoration: none;
            color: #171717;
        }

        .book p {
            position: relative;
            width: fit-content;
            bottom: 7vh;
            right: 58%;
            background-color: #fff;
            padding: 1vh;
            letter-spacing: 5%;
            border-radius: 3vh;
        }

        .book-img {
            width: 100%;
            height: 80%;
            transition: 0.3s;
        }

        .book-img img {
            width: 100%;
            height: 100%;
            border-radius: 1vh;
            transition: 0.3s;
            filter: brightness(90%);
            object-fit: cover;
            object-position: center;
        }

        .wall h5 {
            position: absolute;
            top: -3vh;
            font-weight: bold;
            background-color: #2256F2;
            padding: 1.2vh;
            color: #F0F0F2;
            border-radius: 2vh;
        }

        .book h6 {
            margin-top: 2vh;
            font-weight: bold;
            color: #fff;
        }

        .book:hover>.book-img img {
            box-shadow: 0 0 2vh #2256F2;
            border-radius: 0;
            filter: brightness(100%);
        }


        .book2 {
            width: 31%;
            height: 35vh;
            display: flex;
            text-decoration: none;
            color: #171717;
            margin: 2vh;
            transition: 0.3s;
        }

        .book2 .book-img2 {
            width: 100%;
            height: 80%;
        }

        .book2 .book-img2 img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            border-radius: 1vh;
            transition: 0.3s;
            filter: brightness(90%);
        }

        .book-info {
            position: absolute;


        }

        .book-info p {
            position: relative;
            top: 30vh;
            right: 3vh;
            font-weight: bold;
            color: #fff;
        }

        .book2:hover>.book-img2 img {
            box-shadow: 0 0 2vh #2256F2;
            border-radius: 0;
            filter: brightness(100%);
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <div><a href="../../../main/index.html" class="logo"><img src="../../../1x/Artboard 1.png" alt=""></a></div>
            <div class="hover1"><a href="" class="nav"><i class="fa-solid fa-user"></i> حسابي</a></div>
            <div class="hover2"><a href="" class="nav"><i class="fa-solid fa-play"></i> الأنمي</a>
            </div>
            <div class="hover3"><a href="" class="nav"><i class="fa-solid fa-book-open"></i> المانجا</a></div>
            <div class="hover5"><a href="" class="nav"><i class="fa-solid fa-message"></i> نقاشات</a></div>
            <div class="hover4"><a href="" class="nav"><i class="fa-solid fa-person"></i> معلومات</a></div>
            <div class="sun"><button><i class="fa-solid fa-sun"></i></button></div>
            <div><a><input type="text" class="search-input"></a></div>
        </nav>
    </header>





    <div class="wall">
        <h5> اضافة سيرفر </h5> <br>
        <?php
        $servername = "localhost";
        $user = "root";
        $password = "";
        $db_name = "one_piece";
        $conn = new mysqli($servername, $user, $password, $db_name);

        // Assuming you have already established a database connection in $conn
        
        // Fetch episodes from the database (you may need to modify the query based on your table structure)
        $query = "SELECT * FROM episode";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $episodeNumber = $row['title'];
                $type = $row['type'];
                $episodeid = $row['id'];
                $type = $row['type'];
                if ($type == 'episode') {
                    $query2 = "SELECT icon FROM type WHERE name= 'One piece'";
                    $result2 = $conn->query($query2);
                    $row2 = $result2->fetch_assoc();
                    // Adjust the href and img src paths accordingly based on your folder structure
                    echo '<a href="add/index.php?episodeid=' . $episodeid . '&title=' . $episodeNumber . '" class="book2">';
                    echo '  <div class="book-img2">';
                    echo '    <img src="' . $row2['icon'] . '" alt="">';
                    echo '  </div>';
                    echo '  <div class="book-info">';
                    echo '    <p> الحلقة ' . $episodeNumber . ' </p>';
                    echo '  </div>';
                    echo '</a>';
                }
                if ($type == 'film') {
                    $query2 = "SELECT icon FROM type WHERE name= '$episodeNumber'";
                    $result2 = $conn->query($query2);
                    $row2 = $result2->fetch_assoc();
                    // Adjust the href and img src paths accordingly based on your folder structure
                    echo '<a href="add/index.php?episodeid=' . $episodeid . '&title=' . $episodeNumber . '" class="book2">';
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


    <script>
        function canvas() {
            let x = document.querySelector('.chapters');
            x.style.display = "block";
            let y = document.querySelector('.btn');
            y.setAttribute("onclick", "hideOffcanvas()");
        }

        function hideOffcanvas() {
            let x = document.querySelector('.chapters');
            x.style.display = "none";
            let y = document.querySelector('.btn');
            y.setAttribute("onclick", "canvas()");
        }



        function spoil() {
            let redheart = document.getElementById('fire').style.color = "red";
            let likeButton = document.querySelector('.spoilbutton');
            likeButton.setAttribute("onclick", "notspoil()");
        }
        function notspoil() {
            let redheart = document.getElementById('fire').style.color = "black";
            let likeButton = document.querySelector('.spoilbutton');
            likeButton.setAttribute("onclick", "spoil()");
        }

    </script>
</body>

</html>

<?php
$servername = "localhost";
$user = "root";
$password = "";
$db_name = "one_piece";
$conn = new mysqli($servername, $user, $password, $db_name);
$title = $_POST['title'];
$arc = $_POST['arc'];
$episode = $_POST['episode'];
$filr = $_POST['filr'];
$type = $_POST['type'];
if (isset($_POST['submit'])) {
    # code...
    if (isset($_POST['filre'])) {
        $query = "INSERT INTO episode (title, arc, episode, type, filr) VALUES ('$title','$arc','$episode','$type','فلر')";
        $result = $conn->query($query);
    } else {
        $query = "INSERT INTO episode (title, arc, episode, type) VALUES ('$title','$arc','$episode','$type')";
        $result = $conn->query($query);
    }
}

?>