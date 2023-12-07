<?php
    $subtitle = $value['subtitle'];
    $title = $value['title'];
    $description = $value['description'];
    $button_1 = $value['button_1'];
    $button_2 = $value['button_2'];
    $image = $value['image'];
?>

<div class="hero">
    <div class="hero-layer"></div>
    <div class="hero-copy">
        <span><?= $subtitle ?></span>
        <h1><?= $title ?></h1>
        <p><?= $description ?></p>
        <div class="hero-buttons">
            <a class="btn-primary" href="<?= $button_1['url'] ?>"><?= $button_1['title'] ?></a>
            <a class="btn-secondary" href="<?= $button_2['url'] ?>"><?= $button_2['title'] ?></a>
        </div>
    </div>
    <div class="hero-img">
        <img src="<?= $image ?>" alt="image">
    </div>
</div>