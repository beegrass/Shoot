<div class="hero-container" style="background-image: url(<?php echo $heroImg; ?>)">
    <h1><?php echo strtoupper($title); ?></h1>
</div>
<section class="what">
    <div class="def-img">
        <div class="what-desc">
            <h2>What Is It?</h2>
            <p><?php echo $principleDesc; ?></p>
        </div>
        <img src="<?php echo $mainImg; ?>" alt="<?php echo $imgAltText; ?>">
    </div>
    <p></p>
    <ul class="what-list">
        <?php
        foreach ($descList as $listPoint):
        ?>
            <li><?php echo $listPoint; ?></li>
        <?php endforeach; ?>
    </ul>
</section>
<section class="reg">
    <h2>Importance</h2>
    <p><?php echo $importance; ?></p>
</section>
<section class="reg">
    <h2>Why Use It?</h2>
    <p><?php echo $whyUse; ?></p>
</section>
<section class="reg">
    <h2>Accessibility</h2>
    <div><?php echo $accessibility; ?></div>
</section>
<section class="principle-pract">
    <h2>In Practice</h2>