<?php include 'header.php'; ?>
<div class="row">
    <div class="col"></div>
    <div class="col">
        <form action="?op=create" method="POST">
            <legend>Maak een nieuw evenement aan</legend>
            <input type="hidden" name="id">
            <label>Activiteit naam: </label><input type="text" name="activiteit_naam">
            <label>Activiteit datum: </label><input type="date" name="activiteit_datum">
            <label>Activiteit tijd: </label><input type="text" name="activiteit_tijd">

            <label>Activiteit benodigdheden: </label><input type="text" name="activiteit_benodigdheden">
            <label>Activiteit beschrijving </label><input type="text" name="activiteit_beschrijving">
            <label>Vrijwilligers: </label><input type="text" name="activiteit_vrijwilligers">
            <label>Event </label><input type="text" name="event">
            <button type="submit" name="submit">Sturen</button>
        </form>
    </div>
    <div class="col"></div>



</div>
<?php include 'footer.php'; ?>