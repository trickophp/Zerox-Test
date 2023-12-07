<?php 

    $title = $value['title'];
    $description = $value['description'];
    $cards = $value['retirement_plan_cards'];

?>

<div class="retirement-plan">
    <div class="container">
        <div class="retirement-plan-wrap">
            <h2><?= $title ?></h2>
            <p><?= $description ?></p>
            <div class="retirement-plan-cards">  
                <?php foreach($cards as $card): ?>
                    <div class="retirement-plan-card">
                        <img src="<?= $card['card_image'] ?>" alt="image">
                        <div class="retirement-plan-card-copy">
                            <h3><?= $card['card_title'] ?></h3>
                            <p><?= $card['card_description'] ?></p>
                            <a href="<?= $card['card_link']['url'] ?>"><?= $card['card_link']['title'] ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>