<script>
    <?php
    session_start();
    $servername = "localhost";
    $user = "root";
    $password = "";
    $db_name = "one_piece";
    $conn = new mysqli($servername, $user, $password, $db_name);
    $id = $_GET['id'];
    $lineId = $_GET['lineId'];
    $type = $_GET['type'];
    $user_id = $_SESSION['id'];

    $query = "SELECT * FROM fav where fav_id = '$id' AND react = 'fav' AND user_id = '$user_id' AND type = '$type'";
    $result = $conn->query($query);



    // Assuming you have already established a database connection in $conn
    
    // Fetch episode information from the database
    if (isset($_SESSION['login'])) {
        if ($result->num_rows < 1) {
            $result->fetch_assoc();
            $query = "UPDATE episode SET fav = fav + 1 WHERE id = '$id'";
            $result = $conn->query($query);
            $query = "INSERT INTO fav (user_id, fav_id, type, react) VALUES ('$user_id','$id','$type','fav')";
            $result = $conn->query($query);

        } else {
            $query = "UPDATE episode SET fav = fav - 1 WHERE id = '$id'";
            $result = $conn->query($query);
            $query = "DELETE FROM `fav` WHERE fav_id = '$id' AND react = 'fav' AND user_id = '$user_id' AND type = '$type'";
            $result = $conn->query($query);
        }
        header("Location: index.php?episode=$lineId&type=$type&id=$id");
    } else {
        ?>
        alert('تحتاج الى تسجيل الدخول الى حسابك لاكمال العملية');


        <?php
        header("Location: ../../../account/create or join/index.php");
    }
    ?>


</script>