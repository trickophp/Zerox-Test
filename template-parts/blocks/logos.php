<?php 

    $subtitle = $value['subtitle'];
    $logos = $value['logo_slider'];

?>




<div class="logos">
    <div class="container">
        <i class="arrow arrow-left fas fa-chevron-left" onclick="navigateSlider(-5, 'arrow')"></i>
        <div class="slider-container">
            <div class="slider">
                <?php foreach($logos as $index => $logo): ?>
                    <div class="slide">
                        <img src="<?= $logo['logo'] ?>" alt="image" data-index="<?= $index ?>">
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="navigation"></div>
        </div>
        <i class="arrow arrow-right fas fa-chevron-right" onclick="<?php if(wp_is_mobile()) { ?>navigateSliderMobile(1, 'arrow')<?php } else { ?>navigateSlider(5, 'arrow')<?php } ?>"></i>
    </div>
</div>
