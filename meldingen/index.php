<!doctype html>
<html lang="nl">



<?php
session_start();
if(!isset($_SESSION['user_id']))
{
    $msg = "Je moet eerst inloggen!";
    header("Location: ../login.php?msg=$msg");
    exit;
}
?>



<head>
    <title>StoringApp / Meldingen</title>
    <?php require_once '../head.php'; ?>
</head>

<body>

    <?php require_once '../header.php'; ?>
    
    <div class="container">
        <h1>Meldingen</h1>
        <a href="create.php">Nieuwe melding &gt;</a>

        <?php if(isset($_GET['msg']))
        {
            echo "<div class='msg'>" . $_GET['msg'] . "</div>";
        } ?>
<form action="" method="GET">
    <select name="status">
        <option value="">- kies status om te filteren - </option>
            <option value="A">Attractie</option>
            <option value="A">Draaiend</option>
            <option value="A">Kinder</option>
            <option value="A">Horeca</option>
            <option value="A">Show</option>
            <option value="A">Water</option>
            <option value="A">Overig</option>
    </select>
    <input type="submit" value="filter">
</form>

       <?php
       require_once '../backend/conn.php';
       $query = "SELECT * FROM meldingen";
       $statement = $conn->prepare($query);
       $statement->execute();
       $meldingen = $statement->fetchAll(PDO::FETCH_ASSOC);
       ?>

       <table>
           <tr>
                <th>Attractie</th>
                <th>Type</th>
                <th>Melder</th>
                <th>Overige info</th>
                <th>Aanpassen</th>
           </tr>
           
            <?php foreach($meldingen as $melding): ?>
            <tr>
                <td><?php echo $melding['attractie'];?></td>
                <td><?php echo $melding['type'];?></td>
                <td><?php echo $melding['melder'];?></td>
                <td><?php echo $melding['overige_info'];?></td>
                <td><a href="edit.php?id= <?php echo $melding['id'];?>">Aanpassen</a></td>
            </tr>
    
            <?php endforeach; ?>

        </table>

      

       
       
       

       

        
    </div>  

</body>

</html>
