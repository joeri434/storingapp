<!doctype html>
<html lang="nl">

<?php
session_start();
if(!isset($_SESSION['user_id']) == false)
{
    $msg = "Je bent ingelogd";
    header("Location: index.php?msg=$msg");
    exit;
}
?>

<head>
    <title>StoringApp</title>
    <?php require_once 'head.php'; ?>
</head>

<body>

    <?php require_once 'header.php'; ?>
    
    <div class="container home">
        <?php
        if(isset($_GET['msg']))
        {
            echo "<div class='msg'>" . $_GET['msg'] . "</div>";
        }
        ?>


        <form action="backend/loginController.php" method="POST">


            <div class="form-gorup">
                <label for="username">Gebruikersnaam</label>
                <input type="text" name="username" id="username">
    
            </div>

            <div class="form-group">
                <label for="password">Wachtwoord:</label>
                <input type="password" name="password" id="password">
            </div>

                <input type="submit" value="Login">
            </form>
       
    </div>

</body>

</html>


    
