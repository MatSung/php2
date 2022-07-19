<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>skaiciuotuvas</title>
</head>

<body>
    <form method="GET" action="skaic.php">
        <input id="user" name="user" value="<?php echo isset($_GET["user"]) ? $_GET["user"] : ""; ?>" />
        <input id="pass" name="pass" value="<?php echo isset($_GET["pass"]) ? $_GET["pass"] : ""; ?>" />
        <button name="patvirtinti" type="submit">prisijungti</button>
    </form>

    <div>
        <?php
        if (isset($_GET["patvirtinti"])) {
            if ($_GET["user"] == "admin" && $_GET["pass"] == "password") {
                header("Location: http://localhost/10-php/php2/account.php");
                exit();
            } else {
                //send to 404.php
                header("Location: http://localhost/10-php/php2/404.php");
                exit();
            }
        }
        ?>
    </div>
</body>

</html>