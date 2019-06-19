<?php include 'header.php'; ?>

<form action="?op=create" method="POST">
    <legend>Maak een nieuw evenement aan</legend>
    <input type="hidden" name="product_id">
    <label>Activiteit naam: </label><input type="text" name="activiteit_naam">
    <label>Activiteit benodigdheden: </label><input type="text" name="activiteit_benodigdheden">
    <label>Activiteit beschrijving </label><input type="text" name="activiteit_beschrijving">
    <label>Vrijwilligers: </label><input type="text" name="acitviteit_vrijwilligers">
    <label>Event </label><input type="text" name="event">
    <button type="submit" name="submit">Sturen</button>
</form>

<?php include 'footer.php'; ?>