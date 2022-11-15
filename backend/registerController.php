<?php
//check of iemand niet is ingelogd
/// TODO: start sessie
if(isset($_SESSION['user_id']))
{
    die("kan niet registreren - je bent al ingelogd");

}

$email = 
if(filter_var)()===)
{

}

$password = $_POST['password'];
$password_check = 
if()
{
    die("Wachtwoorden zin niet gelik!");
}

require_once 'conn.php';
$sql = "SELECT * FROM users WHERE username = :email";
$statement = $conn->prepare($query);
$statement->execute([":email" => $email]);
if($statement->rowCount() > 0)
{
    die("Error: Email is al in gebruik");
}

if(empty())
{
    die("Wachtwoord mag niet leeg zijn!");
}
$hash =

$query = "INSERT INTO users (username, password) VALUES (:email, :hash)";
$statement = $conn->prepare($query);
$statement->execute([":username" => $email, ":password" => $password
]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

header("Location: ../index.php");
?>
