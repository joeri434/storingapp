<?php

$action = $_POST['action'];

if($action == "create")
{
    
//Variabelen vullen
    $attractie = $_POST['attractie'];
    $type = $_POST['type'];
    $capaciteit = $_POST['capaciteit'];


    if(isset($_POST['prioriteit']))
    {
    $prioriteit = true;
    }
    else
    {
    $prioriteit = false;
    }
    if(empty($attractie))
    {
    $errors[] = "Vul de attractie-naam in!";
    }
    if(!isset($type))
    {
    $errors[] = "Kies wel een type!";
    }
    if(!is_numeric($capaciteit))
    {
    $errors[] = "Vul voor de capaciteit een geldig getal in!";
    }
    $melder = $_POST['melder'];
    if(empty($melder))
    {
    $errors[] = "Vul de melder in!";
    }

    $overige_info = $_POST['overige_info'];
    if(isset($errors))
    {
    var_dump($errors);
    die();
    }



    //1. Verbinding
    require_once 'conn.php';



    //2. Query
    $query = "INSERT INTO meldingen (attractie, type, capaciteit, prioriteit, melder, overige_info) VALUES (:attractie, :type, :capaciteit, :prioriteit, :melder, :overige_info)";



    //3. Prepare
    $statement = $conn->prepare($query);



    //4. Execute



    $statement->execute([
    ":attractie" => $attractie,
    ":type" => $type,
    ":capaciteit" => $capaciteit,
    ":prioriteit" => $prioriteit,
    ":melder" => $melder,
    ":overige_info" => $overige_info
    ]);

    header("Location: ../meldingen/index.php?msg=Meldingen opgeslagen!");


}

if($action == "update")
{
    $id = $_POST['id'];
    $capaciteit = $_POST['capaciteit'];
    if(isset($_POST['prioriteit']))
    {
        $prioriteit = true;
    }
    else
    {
        $prioriteit = false;
    }
    $melder = $_POST['melder'];
    if(empty($melder))
    {
    $errors[] = "Vul de melder in!";
    }

    $overige_info = $_POST['overig'];
    if(isset($errors))
    {
    var_dump($errors);
    die();
    }




    require_once 'conn.php';
    $query = "UPDATE meldingen SET capaciteit = :capaciteit, prioriteit = :prioriteit, melder = :melder, overige_info = :overige_info  WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":capaciteit" => $capaciteit,
        ":prioriteit" => $prioriteit,
        ":melder" => $melder,
        ":overige_info" => $overige_info,

        "id" => $id
    ]);

    //stuur gebruiker terug naar overzicht
    header("Location: ../meldingen/index.php?msg=Meldingen aangepasts!");

}

if($action == "delete")
{

}



