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
    "Typography Consistency: Using the same fonts and styles for headings, body text, and buttons.",
    "Color Scheme: Maintaining a consistent palette across the website.",
    "UI Elements: Keeping button styles, icons, and navigation menus uniform.",
    "Spacing & Layout: Ensuring consistent padding, margins, and grid structures."
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
            <img src="assets/images/bcontrast.jpg">
        </div>
        <div class="contrast without">
            <img src="assets/images/gcontrast.jpg">
        </div>   
    </div>

    <script src="assets/scripts/script.js"></script>

    <small>Play Around with the before and after slider to see how contrast matters!</small>
    </section>
</main>
<?php include('assets/inc/footer.php'); ?>
