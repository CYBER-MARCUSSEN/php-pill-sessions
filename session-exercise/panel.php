<?php

require_once("./validate.php");
checkSession();

$email = $_SESSION["email"];
$aemail = explode("@", $email);
$user = $aemail[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Page</title>
</head>
<body>
    <h1>Welcome <?=$user?></h1>

    <div> 
    <a class="nav-link" href="./close_session.php">Sortir</a>
    </div>
</body>
</html>