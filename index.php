<?php

//require i include importjemo code
//u require ako se baci greska nece se izvrsavati nista na toj stranici, a u include ce nastaviti sa izvrsavanjem
    require "model/users.php";
    require "dbBroker.php";

    session_start();

    if(isset($_POST['username']) && isset($_POST['password'])){
        $uname = $_POST['username'];
        $upass = $_POST['password'];

        $korisnik = new User(1,$uname,$upass);

      //  $conn = new mysqli();
        //:: za pristupanje statickoj metodi
        $odgovor = User::loginUser($korisnik,$conn);

        //odgovor vraca redove, posto je korisnik jedinstven vracace uvek 1 ako ga nadje
        if($odgovor->num_rows){
            $_SESSION["user_id"] = $korisnik->id;
            //ukoliko je sve ok idemo na home page
            header("Location: home.php");
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>FON: Zakazivanje kolokvijuma</title>

</head>
<body>
    <div class="login-form">
        <div class="main-div">
            <form method="POST" action="#">
                <div class="container">
                    <label class="username">Korisnicko ime</label>
                    <input type="text" name="username" class="form-control"  required>
                    <br>
                    <label for="password">Lozinka</label>
                    <input type="password" name="password" class="form-control" required>
                    <button type="submit" class="btn btn-primary" name="submit">Prijavi se</button>
                </div>

            </form>
        </div>

        
    </div>
</body>
</html>