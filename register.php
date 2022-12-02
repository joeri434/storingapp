<?php
session_start();
if(!isset($_SESSION['user_id']) == false)
{
    $msg = "Je hebt jezelf geregistreerd";
    header("Location: index.php?msg=$msg");
    exit;
}
?>

<!doctype html>
<html lang="nl">



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
    

        <form action="backend/registerController.php" method="POST">


            <div class="form-gorup">
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
    
            </div>

            <div class="form-group">
                <label for="password">Wachtwoord:</label>
                <input type="password" name="password" id="password">
            </div>

            <div class="form-group">
                <label for="password_check">herhaal WW:</label>
                <input type="password" name="password_check" id="password_check">
            </div>

            <div class="form-group">
                <input type="submit" value="Register">
            </div>
        </form>
       
    </div>

</body>

</html>


    
