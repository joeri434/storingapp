<!doctype html>
<html lang="nl">

<head>
    <?php require_once 'head.php';?>
</head>
<body>
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
 </body>

 </html>