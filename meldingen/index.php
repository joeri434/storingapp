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



    <?php
    require_once '../backend/conn.php';
    
    
    
    
    if(empty($_GET['type'])){
       $query = "SELECT * FROM meldingen";
       $statement = $conn->prepare($query);
       $statement->execute();
    }
    else{
        $type = $_GET['type'];
        $query = "SELECT * FROM meldingen WHERE type = :type ORDER BY gemeld_op ASC";
        $statement = $conn->prepare($query);
        $statement->execute([":type" => $type]);
    }
       
       
       
       
       $meldingen = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>
    

    
        




    <p>Aantal meldingen: <strong><?php echo count($meldingen); ?></strong></p>

    <form action="" method="GET">
        <select name="type" id="type">
        <option value="">- kies status om te filteren - </option>
            <option value="Achtbaan">Achtbaan</option>
            <option value="Draaiend">Draaiend</option>
            <option value="KinderAttractie">KinderAttractie</option>
            <option value="Horeca">Horeca</option>
            <option value="Show">Show</option>
            <option value="WaterAttractie">WaterAttractie</option>
            <option value="Overig">Overig</option>
        </select>
        <input type="submit" value="filter">
    </form>
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
