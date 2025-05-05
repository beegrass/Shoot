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
            also guides user attention and can be used to create a visual hierarchy. The contrast principle should be properly implemented in all webpages for the benefit of the reader as well as for the one who created the webpage.
        As previously stated, contrast greatly improves the readability of a website/webpage by allowing readers to easily digest information on a page without having to strain their eyes or focus in on certain areas that have blended in with the background.
        It also helps readers to discern the overall layout and hierarchy of a website/webpage, allowing the readers to discover and understand important elements and concepts of the website that the author is trying to convey, increasing overall understanding. Lastly, readers who have visual impairments will have difficulty
        reading through the content of a website when contrast isn't being properly applied. Therefore, by following the accessibility standards below, the author of the website can increase its usability across a wider audience. ";

$accessibility = "<p>The Web Accessibility Guidelines (WCAG) set standards to ensure digital content is accessible to everyone. Some key requirements include:</p><br>
                <p>Minimum Contrast for Text:</p>
                <ul class='contrast-accesibility'>
                    <li>Regular-sized text (below 18pt or 14pt bold) must have a contrast ratio of at least 4.5:1 against its background</li>
                    <li>Large-text (18pt or 14pt bold and above) must have a minimum ratio of 3:1</li>
                </ul><br>
                <p>Non-text Elements:</p>
                <ul class='contrast-accesibility'>
                    <li>Icons, buttons, and graphical elements must have a contrast ratio of at least 3:1</li>
                </ul><br>
                <p>Avoid Color-Only Indicators:</p>
                <ul class='contrast-accesibility'>
                    <li>Color should never be used as the only means of conveying information, indicating an action, prompting a response, or distinguishing a visual element</li>
                </ul>";

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
