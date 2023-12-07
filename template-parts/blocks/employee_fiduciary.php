<?php 

    $title = $value['title'];
    $description = $value['description'];
    $list = $value['employee_fiduciary_list'];
    $button = $value['button'];

?>

<div class="employee-fiduciary">
    <div class="employee-fiduciary-layer"></div>
    <div class="container">
        <div class="employee-fiduciary-wrap">
            <h2><?= $title ?></h2>
            <p><?= $description ?></p>
            <div class="employee-fiduciary-list">
            <?php foreach($list as $list_item): ?>  
                <div class="employee-fiduciary-list-wrap">
                    <?= $list_item['list_icon_svg'] ?>
                    <div class="employee-fiduciary-list-copy">
                        <h3><?= $list_item['list_title'] ?></h3>
                        <p><?= $list_item['list_description'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
                <div class="employee-fiduciary-btn">  
                    <a class="btn-primary" href="<?= $button['url'] ?>"><?= $button['title'] ?></a>
                </div>
            </div>
        </div>
    </div>
</div>