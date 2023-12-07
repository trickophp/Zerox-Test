<?php
    $cards = $value['benefit_card'];
?>

<div class="benefits">
    <div class="container">
        <div class="benefits-wrap">
            <?php foreach($cards as $card): ?>
                <div class="benefits-wrap">
                    <div class="benefits-card">
                        <img src="<?= $card['icon'] ?>" alt="image">
                        <h3><?= $card['title'] ?></h3>
                        <p><?= $card['description'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>