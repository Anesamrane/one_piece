<?php
session_start();
if (isset($_SESSION['login'])) {
    # code...
    header("Location: ../../account/profile/index.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="../../1x/Artboard 1.png">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>مرحبا بك في أكبر موقع ل محبي ون بيس في الوطن العربي</h2>
    <header>
        <div class="join">
            <a href="../join/index.php"> تسجيل الدخول </a>
        </div>
        <div class="create">
            <a href="../create/index.php"> انشاء حساب </a>
        </div>
    </header>

</body>

</html>