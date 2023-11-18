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
        <h3>اضافة حلقة</h3>
        <form action="" class="inputBox" method="post">
            <div>
                <textarea name="title" class="feedback" id="feedback" cols="30" rows="1" required
                    placeholder="عنوان الحلقة  "></textarea>
            </div>
            <div>
                <textarea name="arc" class="feedback" id="feedback" cols="30" rows="3" required
                    placeholder="   الأرك  "></textarea>
            </div>
            <div>
                <textarea name="episode" class="feedback" id="feedback" cols="30" rows="3" required
                    placeholder="   رقم الحلقة( 0 اذا كان فيلم )  "></textarea>
            </div>
            <div>
                <textarea name="link" class="feedback" id="feedback" cols="30" rows="1" required
                    placeholder=" رابط الجلقة  "></textarea>
            </div>
            <div>
                <textarea name="download" class="feedback" id="feedback" cols="30" rows="3"
                    placeholder="   رابط التحميل  "></textarea>
            </div>
            <div>
                <textarea name="download_name" class="feedback" id="feedback" cols="30" rows="3"
                    placeholder="   اسم التحميل  "></textarea>
            </div>
            <div>
                <textarea name="server_name" class="feedback" id="feedback" cols="30" rows="3" required
                    placeholder="   اسم السيرفر  "></textarea>
            </div>
            <div>
                <label for="filr"> فلر </label>
                <input type="checkbox" name="filr" id="filr">
            </div>
            <div>
                <select name="type" id="">
                    <option value="episode"> حلقة </option>
                    <option value="film"> فيلم </option>
                    <option value="special"> حلقة خاصة </option>
                </select>
            </div>
            <div>
                <input type="submit" value="نشر" name="submit">
            </div>

        </form>
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

if (isset($_POST['submit'])) {
    # code...
    $title = $_POST['title'];
    $arc = $_POST['arc'];
    $episode = $_POST['episode'];
    $filr = $_POST['filr'];
    $type = $_POST['type'];
    if (isset($_POST['filr'])) {
        $query = "INSERT INTO episode (title, arc, episode, type, filr) VALUES ('$title','$arc','$episode','$type','فلر')";
        $result = $conn->query($query);
        // Get the ID of the last inserted row
        $inserted_id = $conn->insert_id;
        $link = $_POST['link'];
        $download = $_POST['download'];
        $download_name = $_POST['download_name'];
        $server_name = $_POST['server_name'];
        $query = "INSERT INTO server (episode_id, link, episode, server_name, download, download_name) VALUES ('$inserted_id','$link','$episode','$server_name','$download','$download_name')";
        $result = $conn->query($query);
    } else {
        $query = "INSERT INTO episode (title, arc, episode, type) VALUES ('$title','$arc','$episode','$type')";
        $result = $conn->query($query);
        // Get the ID of the last inserted row
        $inserted_id = $conn->insert_id;
        $link = $_POST['link'];
        $download = $_POST['download'];
        $download_name = $_POST['download_name'];
        $server_name = $_POST['server_name'];
        $query = "INSERT INTO server (episode_id, link, episode, server_name, download, download_name) VALUES ('$inserted_id','$link','$episode','$server_name','$download','$download_name')";
        $result = $conn->query($query);
    }
}


?>