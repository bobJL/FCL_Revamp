<?php include 'header.php'; ?>
<div class="row">
    <div class="col"></div>
    <div class="col">
        <div class="form-group">
        <form action="?op=create" method="POST">
            <legend>Maak een nieuw evenement aan</legend>
            <input type="hidden" name="id">
            <label>Activiteit naam: </label><input type="text" name="activiteit_naam" class="form-control">
            <label>Activiteit datum: </label><input type="date" name="activiteit_datum" class="form-control">
            <label>Activiteit tijd: </label><input type="text" name="activiteit_tijd" class="form-control">

            <label>Activiteit benodigdheden: </label><input type="text" name="activiteit_benodigdheden" class="form-control">
            <label>Activiteit beschrijving </label><input type="text" name="activiteit_beschrijving" class="form-control">
            <label>Vrijwilligers: </label><input type="text" name="activiteit_vrijwilligers" class="form-control">
            <input type="hidden" name="event" class="form-control">
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Inzenden</button>
        </form>
        </div>
    </div>
    <div class="col"></div>



</div>
<?php include 'footer.php'; ?>