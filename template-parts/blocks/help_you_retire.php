<?php 

    $title = $value['title'];
    $description = $value['description'];
    $image = $value['image'];
    $button = $value['button'];

?>

<div class="help-you-retire">
    <div class="container">
        <div class="help-you-retire-wrap">
            <img src="<?= $image ?>" alt="image">
            <h2><?= $title ?></h2>
            <p><?= $description ?></p>
            <a class="calculate-btn" href="<?= $button['url'] ?>"><?= $button['title'] ?></a>
        </div>
    </div>
</div>