<div class="hero-container">
    <h1><?php echo strtoupper($principleName); ?></h1>
    <img src="<?php echo strtoupper($heroImg); ?>" alt="hero image" class="contrast-hero">
</div>
<section>
    <h2>What Is It?</h2>
    <p><?php echo $principleDesc; ?></p>

    <ul>
        <?php
        foreach ($descList as $listPoint):
        ?>
            <li><?php echo $listPoint; ?></li>
        <?php endforeach; ?>
    </ul>
</section>
<section>
    <h2>Importance</h2>
    <p><?php echo $importance; ?></p>
</section>
<section>
    <h2>Why Use It?</h2>
    <p><?php echo $whyUse; ?></p>
</section>
<section>
    <h2>Accessibility</h2>
    <div><?php echo $accessibility; ?></div>
</section>
<section>
    <h2>In Practice</h2>