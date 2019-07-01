<?php require 'old/header.php'; ?>

<div class="detail-page">
    <div class="row detail-row">
        <?php
        while ($data = $activiteiten->fetch(PDO::FETCH_ASSOC)) { ?>
            <div class="Activiteit">
                <h1><?php echo $data['activiteit_naam']; ?></h1>
                <h4>Benodigdheden </h4>
                <p><?php echo $data['activiteit_benodigdheden']; ?></p>
                <h4>Beschrijving</h4>
                <p><?php echo $data['activiteit_beschrijving']; ?></p>
                <h4>Vrijwilligers</h4>
                <p><?php echo $data['activiteit_vrijwilligers']; ?></p>
                <h4>Datum</h4>
                <p><?php echo $data['datum']; ?></p>
            </div>
        <?php }

        while ($data1 = $checklist->fetch(PDO::FETCH_ASSOC)) { ?>
        <div class="Benodigdheden">
            <h1>Benodigdheden</h1>
            <h4>Item</h4>
            <p><?php echo $data1['item_naam']; ?></p>
            <h4>Event</h4>
            <p><?php echo $data1['event_naam']; ?></p>
            <h4>Beschrijving</h4>
            <p><?php echo $data1['item_beschrijving']; ?></p>
            <h4>Spullen beschikbaar?<?php
                if ($data1['item_done'] === null) {
                    echo ' <i class="fas fa-times kruis"></i>';
                } else {
                    echo ' <i class="fas fa-check vinkje"></i>';
                } ?></h4>
        </div>
    </div>
    <?php }
    while ($data2 = $evenementen->fetch(PDO::FETCH_ASSOC)) { ?>
        <div class="row">

            <div class="Event-details">
                <h1>Event details</h1>
                <h4>event</h4>
                <p><?php echo $data2['event_name']; ?></p>
                <h4>Event locatie</h4>
                <p><?php echo $data2['event_locatie']; ?></p>
                <h4>Beschrijving</h4>
                <p><?php echo $data2['event_beschrijving']; ?></p>
                <h4>Datum</h4>
                <p><?php echo $data2['event_datum']; ?></p>
            </div>
        </div>
    <?php } ?>
</div>

<?php require "old/footer.php"; ?>

