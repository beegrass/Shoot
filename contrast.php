<?php
$title = 'Contrast';
$filename = 'contrast.php';
include('assets/inc/nav.php');

$heroImg = "assets/images/contrast-hero.jpg";
$mainImg = "assets/images/contrast-astro.jpg";
$imgAltText = "Astronaut floating in space";
$principleDesc = "<b>Contrast</b> refers to the difference between elements, such as test and background,
        to ensure readability and accessibility.";
$descList = array(
    "<b>Color Contrast:</b> difference in brightness and hue between text, backgrounds, and UI elements",
    "<b>Size Contrast:</b> like different sized fonts or element proportions",
    "<b>Shape Contrast:</b> differentiating buttons, icons, and other elements through shape",
    "<b>Typography Contrast:</b> using different font weights, styles, or families",
    "<b>Spatial Contrast:</b> using white-space to separate and emphasize content"
);

$importance = "Repetition creates cohesion and unity among your pages, which makes the site easier to navigate and aesthetically pleasing. <br><br> 
                    Repetition enhances readability by creating a structured layout, creating familiarity for the user to guide the eye and improve the flow of your content reading. <br><br>
                    A consistent structure can help users predict where key elements are, such as the nav bar, creating a better experience for users.";

$whyUse = "";

$accessibility = "All users can benefit from the proper implementation of repetition. Through the consistency and predictability of a site's layout, content structure, and navigation, the cognitive load on a user is decreased, as they will only need to take in those elements once and will better retain the information that a site is conveying. <br><br>
                        A repetition of style can also benefit those with color blindness, as they won't need to interpret the color schemes of each individual page.";

include('assets/inc/principle.php');
?>

<div class="box-container">
    <div class="contrast with">
        <img id="desktopContrast" class="desktop-image" src="assets/images/bcontrast.jpg">
        <img id="middleContrast" class="middle-image" src="assets/images/bcontrast_sm.jpg">
        <img id="mobileContrast" class="mobile-image" src="assets/images/bcontrast_sm.jpg">
    </div>
    <div class="contrast without">
        <img class="desktop-image" src="assets/images/gcontrast.jpg">
        <img class="middle-image" src="assets/images/gcontrast_sm.jpg">
        <img class="mobile-image" src="assets/images/gcontrast_sm.jpg">
    </div>
</div>

<p class="caption">Play Around with the before and after slider to see how contrast matters!</p>
</section>
</main>
<?php include('assets/inc/footer.php'); ?>
