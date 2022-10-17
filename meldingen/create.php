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
    <title>StoringApp / Meldingen / Nieuw</title>
    <?php require_once '../head.php'; ?>
</head>

<body>

    <?php require_once '../header.php'; ?>

    <div class="container">
        <h1>Nieuwe melding</h1>

        <form action="../backend/meldingenController.php" method="POST">
            <input type="hidden" name="action" value="create">
            <input type="hidden" name="id" value="<?php echo $melding['id'];?>">
        
            <div class="form-group">
                <label for="attractie">Naam attractie:</label>
                <input type="text" name="attractie" id="attractie" class="form-input">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <!-- hier komt een dropdown -->
                <select name="type" id="group">
                    <option value="">- Kies je attractie - </option>
                    <option value="Achtbaan">Achtbaan</option>
                    <option value="Draaiend">Draaiend</option>
                    <option value="KinderAttractie">KinderAttractie</option>
                    <option value="Horeca">Horeca</option>
                    <option value="Show">Show</option>
                    <option value="WaterAttractie">WaterAttractie</option>
                    <option value="Overig">Overig</option>
                </select>
            </div>
            <div class="form-group">
                <label for="capaciteit">Capaciteit p/uur:</label>
                <input type="number" min="0" name="capaciteit" id="capaciteit" class="form-input">
            </div>

            <div class="form-group">
                <label for="check">Prioriteit</label>
                <input type="checkbox" name="check" id="check"
                >
                <label for="Prioriteit">De Attractie heeft prioriteit</label>
            </div>
            <div class="form-group">
                <label for="melder">Naam melder:</label>
                <input type="text" name="melder" id="melder" class="form-input">
            </div>

            <div class="form-group">
                <label form="overig">Overige info</label>
                <textarea name="overige_info" id="overig" class="form-input" rows="4"></textarea>
            </div>
            
            <input type="submit" value="Verstuur melding">

        </form>
    </div>  

</body>

</html>
