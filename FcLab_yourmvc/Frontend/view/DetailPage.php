<?php
require 'old/header.php';
while ($data = $products->fetch(PDO::FETCH_ASSOC)) {
    ?>

    <div class="detail-page">
        <div class="Activiteit">
            <h1><p><?php echo $data['activiteit_naam']; ?></p></h1>
            <h4>Benodigdheden </h4>
            <p><?php echo $data['activiteit_benodigdheden']; ?></p>
            <h4>Beschrijving</h4>
            <p><?php echo $data['activiteit_beschrijving']; ?></p>
            <h4>Vrijwilligers</h4>
            <p><?php echo $data['acitviteit_vrijwilligers']; ?></p>
        </div>
        <div class="Checklist">
            <h1><p><?php echo $data['activiteit_naam']; ?></p></h1>
            <h4>Benodigdheden </h4>
            <p><?php echo $data['activiteit_benodigdheden']; ?></p>
            <h4>Beschrijving</h4>
            <p><?php echo $data['activiteit_beschrijving']; ?></p>
            <h4>Vrijwilligers</h4>
            <p><?php echo $data['acitviteit_vrijwilligers']; ?></p>
        </div>
        <div class="Evenementen">
            <h1><p><?php echo $data['activiteit_naam']; ?></p></h1>
            <h4>Benodigdheden </h4>
            <p><?php echo $data['activiteit_benodigdheden']; ?></p>
            <h4>Beschrijving</h4>
            <p><?php echo $data['activiteit_beschrijving']; ?></p>
            <h4>Vrijwilligers</h4>
            <p><?php echo $data['acitviteit_vrijwilligers']; ?></p>
        </div>
        <div class="Vrijwilligers">
            <h1><p><?php echo $data['activiteit_naam']; ?></p></h1>
            <h4>Benodigdheden </h4>
            <p><?php echo $data['activiteit_benodigdheden']; ?></p>
            <h4>Beschrijving</h4>
            <p><?php echo $data['activiteit_beschrijving']; ?></p>
            <h4>Vrijwilligers</h4>
            <p><?php echo $data['acitviteit_vrijwilligers']; ?></p>
        </div>
    </div>

    <?php
}
