<?php
/**
 * Created by PhpStorm.
 * User: anass
 * Date: 25-6-2019
 * Time: 21:25
 */
?>
<?php include 'header.php'; ?>

<?php
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

$sql = "SELECT * FROM activiteiten";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $activiteit_naam = $row['activiteit_naam']
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<form action="?op=update" method="POST">
    <legend>Maak een nieuw evenement aan</legend>
    <input type="hidden" name="product_id">
    <label>Activiteit naam: </label><input type="text" name="activiteit_naam" value="<?php echo $activiteit_naam; ?>">
    <label>Activiteit tijd: </label><input type="text" name="activiteit_tijd" value="<?php echo $activiteit_tijd; ?>">
    <label>Activiteit datum: </label><input type="date" name="activiteit_datum" value="<?php echo $activiteit_datum; ?>">
    <label>Activiteit benodigdheden: </label><input type="text" name="activiteit_benodigdheden" value="<?php echo $activiteit_benodigdheden; ?>">
    <label>Activiteit beschrijving </label><input type="text" name="activiteit_beschrijving" value="<?php echo $activiteit_beschrijving; ?>">
    <label>Vrijwilligers: </label><input type="text" name="acitviteit_vrijwilligers" value='<?php echo $activiteit_vrijwilligers; ?>'>
    <button type="submit" name="submit">Sturen</button>
</form>

<?php include 'footer.php'; ?>


<? /*php include 'header.php'; ?>


<form action="?op=update" method="POST">
    <legend>Maak een nieuw evenement aan</legend>
    <input type="hidden" name="product_id">
    <label>Activiteit naam: </label><input type="text" name="activiteit_naam" value="<?php echo $activiteit_naam; ?>">
    <label>Activiteit tijd: </label><input type="text" name="activiteit_tijd" value="<?php echo $activiteit_tijd; ?>">
    <label>Activiteit datum: </label><input type="date" name="activiteit_datum" value="<?php echo $activiteit_datum; ?>">
    <label>Activiteit benodigdheden: </label><input type="text" name="activiteit_benodigdheden" value="<?php echo $activiteit_benodigdheden; ?>">
    <label>Activiteit beschrijving </label><input type="text" name="activiteit_beschrijving" value="<?php echo $activiteit_beschrijving; ?>">
    <label>Vrijwilligers: </label><input type="text" name="acitviteit_vrijwilligers" value='<?php echo $activiteit_vrijwilligers; ?>'>
    <button type="submit" name="submit">Sturen</button>
</form>

<?php include 'footer.php'; ?>

<?php
/**
 * Created by PhpStorm.
 * User: anass
 * Date: 25-6-2019
 * Time: 21:25
 */
?>