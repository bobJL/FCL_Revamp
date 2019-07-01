
<?php include 'header.php'; ?>

<?php

$id = $_GET['id'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fcl_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT activiteit_naam, Time_FORMAT(`tijd`, '%H:%i') AS `tijd`, datum, activiteit_benodigdheden, activiteit_beschrijving, activiteit_vrijwilligers FROM activiteiten WHERE `id` = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        $activiteit_naam = $row['activiteit_naam'];
        $activiteit_tijd = $row['tijd'];
        $activiteit_datum = $row['datum'];
        $activiteit_benodigdheden = $row['activiteit_benodigdheden'];
        $activiteit_beschrijving = $row['activiteit_beschrijving'];
        $activiteit_vrijwilligers = $row['activiteit_vrijwilligers'];
    }
} else {
    echo "0 results";

}

$conn->close();
?>
<div class="row">
    <div class="col"></div>
    <div class="col">
        <div class="form-group">
<form action="?op=update" method="POST">
    <legend>Pas een evenement aan</legend>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label>Activiteit naam: </label><input type="text" name="activiteit_naam" value="<?php echo $activiteit_naam; ?>" class="form-control">
    <label>Activiteit tijd: </label><input type="time" name="activiteit_tijd" value="<?php echo $activiteit_tijd; ?>" class="form-control">
    <label>Activiteit datum: </label><input type="date" name="activiteit_datum" value="<?php echo $activiteit_datum; ?>" class="form-control">
    <label>Activiteit benodigdheden: </label><input type="text" name="activiteit_benodigdheden" value="<?php echo $activiteit_benodigdheden; ?>" class="form-control">
    <label>Activiteit beschrijving </label><input type="text" name="activiteit_beschrijving" value="<?php echo $activiteit_beschrijving; ?>" class="form-control">
    <label>Vrijwilligers: </label><input type="text" name="activiteit_vrijwilligers" value='<?php echo $activiteit_vrijwilligers; ?>' class="form-control">
    <button type="submit" name="submit" class="btn btn-primary" >Inzenden</button>
</form>
        </div>
    </div>
    <div class="col"></div>



</div>

<?php include 'footer.php'; ?>




