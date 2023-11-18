<?php
$servername = "localhost";
$user = "root";
$password = "";
$db_name = "one_piece";
$conn = new mysqli($servername, $user, $password, $db_name);

if (isset($_POST['submit'])) {
    # code...
    $name = $_POST['name'];
    $title = $_POST['title'];
    $chapter = $_POST['chapter'];

    $query = "INSERT INTO manga (title, name, chapter) VALUES ('$title','$name','$chapter')";
    $result = $conn->query($query);
    // Get the ID of the last inserted row
    $inserted_id = $conn->insert_id;
    // Assuming you have established a database connection ($conn) already
// and have defined $chapter, $name, etc.

    for ($page = 0; $page < 30; $page++) {
        $input_name = "page-$page"; // Construct the input name dynamically
        echo "$input_name";
        if (!empty($_POST[$input_name])) {
            $link = $_POST[$input_name]; // Sanitize the input
            $query = "INSERT INTO manga_server (chapter, page, link, name) VALUES ('$chapter','$page','$link','$name')";

            if ($conn->query($query) === TRUE) {
                echo "Insert successful for $input_name<br>";
            } else {
                echo "Error: " . $query . "<br>" . $conn->error;
            }
        }
    }



    $query = "SELECT * FROM manga_type WHERE name = '$name'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Username exists
    } else {
        $icon = $_POST['icon'];
        $description = $_POST['description'];
        $query = "INSERT INTO manga_type (name, icon, description) VALUES ('$name','$icon','$description')";
        $result = $conn->query($query);
    }
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
                <textarea name="icon" class="feedback" id="feedback" cols="30" rows="1"
                    placeholder="  صورة المانجا   "></textarea>
            </div>
            <div>
                <textarea name="description" class="feedback" id="feedback" cols="30" rows="1"
                    placeholder="  وصف المانجا   "></textarea>
            </div>
            <div>
                <textarea name="name" class="feedback" id="feedback" cols="30" rows="1" required
                    placeholder="  اسم المانجا   "></textarea>
            </div>
            <div>
                <textarea name="chapter" class="feedback" id="feedback" cols="30" rows="3" required
                    placeholder="   رقم الفصل  "></textarea>
            </div>
            <div>
                <textarea name="title" class="feedback" id="feedback" cols="30" rows="3" required
                    placeholder="   عنوان الفصل "></textarea>
            </div>
            <?php
            for ($page = 0; $page < 30; $page++) {
                # code...
                echo '<div>';
                echo '<textarea name="page-' . $page . '" class="feedback" id="feedback" cols="30" rows="3" placeholder="رابط الصفحة  ' . $page . '">';
                echo '</textarea>';
                echo '</div>';
            }
            ?>
            <div>
                <input type="submit" value="نشر" name="submit">
            </div>

        </form>
    </div>

</body>

</html>