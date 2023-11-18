<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GESTION DES ACTUALITE</title>
  <link rel="shortcut icon" href="lll.png">
  <style>
    * {
      padding: 0vh;
      margin: 0vh;

    }

    body {
      background-color: #e6e6e6;

    }


    td,
    th {
      padding: 3vh;
    }

    fieldset {
      width: 60%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);

    }

    table {
      background-color: #e6e6e6;
    }

    header h3 {
      padding: 3vh;
      background-color: #252525;
      color: #e6e6e6;
    }

    header a {
      text-decoration: none;
      position: relative;
      top: 2vh;
      left: 2.6%;
    }

    .gestion1 a {
      background-color: #252525;
      padding: 1vh;
      color: white;
    }

    input {
      width: 150%;
      height: 4vh;
      border: none;
      transition: 0.8s;
    }

    textarea {
      border: none;
      transition: 0.8s;
    }

    select {
      width: 150%;
      height: 4vh;
      border: none;
    }

    input:focus {
      transform: scale(1.1);
      border: none;
      outline: none;
    }

    textarea:focus {
      transform: scale(1.1);
      border: none;
      outline: none;
    }
  </style>

</head>

<body>
  <header>
    <div>
      <h3>ADD STORY</h3>
    </div>
    <div class="gestion1">
      <a href='index.php'>RETOUR</a>
    </div> <br>



    <div class="table">
      <fieldset>
        <legend>ADD STORY</legend>
        <form action="" method="post">
          <table>
            <tr>
              <td><label for="">TITLE</label></td>
              <td><input type="text" placeholder="TITLE" name="name"></td>
            </tr>
            <tr>
              <td><label for="act">THE STORY</label></td>
              <td><textarea name="act" id="act" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
              <td><input type="submit" name="submit" value="Registre"></td>
            </tr>


          </table>
        </form>
      </fieldset>
    </div>
</body>

</html>