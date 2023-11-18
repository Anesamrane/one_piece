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
        <h3>اضافة شخصية</h3>
        <form action="" class="inputBox" method="post">
            <div>
                <textarea name="name" class="feedback" id="feedback" cols="30" rows="1" required
                    placeholder=" الاسم "></textarea>
            </div>
            <div>
                <textarea name="age" class="feedback" id="feedback" cols="30" rows="1" required
                    placeholder="  العمر "></textarea>
            </div>
            <div>
                <textarea name="food" class="feedback" id="feedback" cols="30" rows="1" required
                    placeholder="  الاكلة المفظلة"></textarea>
            </div>
            <div>
                <textarea name="crew" class="feedback" id="feedback" cols="30" rows="1" required
                    placeholder=" الطاقم   "></textarea>
            </div>
            <div>
                <textarea name="prize" class="feedback" id="feedback" cols="30" rows="1" required
                    placeholder=" الجائزة   "></textarea>
            </div>
            <div>
                <textarea name="nickname" class="feedback" id="feedback" cols="30" rows="1" required
                    placeholder=" اسم الشهرة   "></textarea>
            </div>
            <div>
                <div>
                    <textarea name="description" class="feedback" id="feedback" cols="30" rows="1" required
                        placeholder=" اضافات    "></textarea>
                </div>
                <textarea name="icon" class="feedback" id="feedback" cols="30" rows="1" required
                    placeholder=" رابط صورة الشحصية    "></textarea>
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
$name = $_POST['name'];
$age = $_POST['age'];
$food = $_POST['food'];
$crew = $_POST['crew'];
$prize = $_POST['prize'];
$nickname = $_POST['nickname'];
$description = $_POST['description'];
$icon = $_POST['icon'];
if (isset($_POST['submit'])) {
    # code...
    $query = "INSERT INTO pirate (name, age, food, crew, prize, nickname, description, icon) VALUES ('$name','$age','$food','$crew','$prize','$nickname','$description','$icon')";
    $result = $conn->query($query);

}

?>