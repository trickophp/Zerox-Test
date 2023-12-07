<?php 

    $subtitle = $value['subtitle'];
    $title = $value['title'];
    $description = $value['description'];
    $image = $value['image'];
    $list = $value['the_401_pitfalls_list'];

?>


<div class="the-401-pitfalls">
    <div class="container">
        <div class="the-401-pitfalls-wrap">
            <img src="<?= $image ?>" alt="image">
            <div class="the-401-pitfalls-copy">
                <span><?= $subtitle ?></span>
                <h2><?= $title ?></h2>
                <p><?= $description ?></p>
                <div class="the-401-pitfalls-list">
                    <?php foreach($list as $list_item): ?>  
                        <div class="the-401-pitfalls-list-wrap">
                            <?= $list_item['list_icon'] ?>
                            <div class="the-401-pitfalls-list-copy">
                                <h3><?= $list_item['list_title'] ?></h3>
                                <p><?= $list_item['list_description'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>