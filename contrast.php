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

$importance = "Contrast is crucial to make websites accessible to people with visual impairments like color blindness, low 
            vision, and cognitive disabilities. Besides making websites readable, it 
            also guides user attention and can be used to create a visual hierarchy";

$whyUse = "The contrast principle should be properly implemented in all webpages for the benefit of the reader as well as for the one who created the webpage.
        As previously stated, contrast greatly improves the readability of a website/webpage by allowing readers to easily digest information on a page without having to strain their eyes or focus in on certain areas that have blended in with the background.
        It also helps readers to discern the overall layout and hierarchy of a website/webpage, allowing the readers to discover and understand important elements and concepts of the website that the author is trying to convey, increasing overall understanding. Lastly, readers who have visual impairments will have difficulty
        reading through the content of a website when contrast isn't being properly applied. Therefore, by following the accessibility standards below, the author of the website can increase its usability across a wider audience. ";

$accessibility = "All users can benefit from the proper implementation of repetition. Through the consistency and predictability of a site's layout, content structure, and navigation, the cognitive load on a user is decreased, as they will only need to take in those elements once and will better retain the information that a site is conveying. <br><br>
                        A repetition of style can also benefit those with color blindness, as they won't need to interpret the color schemes of each individual page.";

include('assets/inc/principle.php');
?>

<div class="box-container">
    <div class="contrast with">
        <img src="assets/images/bcontrast.jpg">
    </div>
    <div class="contrast without">
        <img src="assets/images/gcontrast.jpg">
    </div>
</div>

<p class="caption">Play Around with the before and after slider to see how contrast matters!</p>
</section>
</main>
<?php include('assets/inc/footer.php'); ?>