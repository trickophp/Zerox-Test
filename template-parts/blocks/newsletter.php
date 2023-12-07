<?php 

    $title = $value['title'];
    $description = $value['description'];
    $button = $value['button'];

?>

<div class="newsletter">
    <div class="container">
        <div class="newsletter-wrap">
            <h2><?= $title ?></h2>
            <p><?= $description ?></p>
            <a class="btn-primary" href="<?= $button['url'] ?>"><?= $button['title'] ?></a>
        </div>
    </div>
</div>