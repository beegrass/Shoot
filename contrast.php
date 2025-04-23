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
<div class="hero-container">
    <h1>Contrast</h1>
    <img src="assets/images/contrast-hero.jpg" alt="contrast header" class="contrast-hero">
</div>
<main class="contrast-main">

    <aside class="main-image"><img src="assets/images/contrast-astro.jpg" alt="astronaut"></aside>

    <section>
        <h2>What Is It?</h2>
        <p><b>Contrast</b> refers to the difference between elements, such as test and background, 
        to ensure readability and accessibility.</p>

        <p>There are five main types of contrast when it comes to web design. These types are:</p>

        <ul>
            <li><b>Color Contrast:</b> difference in brightness and hue between text, backgrounds, and UI elements</li>
            <li><b>Size Contrast:</b> like different sized fonts or element proportions</li>
            <li><b>Shape Contrast:</b> differentiating buttons, icons, and other elements through shape</li>
            <li><b>Typography Contrast:</b> using different font weights, styles, or families</li>
            <li><b>Spatial Contrast:</b> using white-space to separate and emphasize content</li>
        </ul>

        <h2>Importance</h2>
        <p>Contrast is crucial to make websites accessible to people with visual impairments like color blindness, low 
            vision, and cognitive disabilities. Besides making websites readable, it 
            also guides user attention and can be used to create a visual hierarchy.</p>

        <h3>Why Use It?</h3>
        <p>The contrast principle should be properly implemented in all webpages for the benefit of the reader as well as for the one who created the webpage.
        As previously stated, contrast greatly improves the readability of a website/webpage by allowing readers to easily digest information on a page without having to strain their eyes or focus in on certain areas that have blended in with the background.
        It also helps readers to discern the overall layout and hierarchy of a website/webpage, allowing the readers to discover and understand important elements and concepts of the website that the author is trying to convey, increasing overall understanding. Lastly, readers who have visual impairments will have difficulty
        reading through the content of a website when contrast isn't being properly applied. Therefore, by following the accessibility standards below, the author of the website can increase its usability across a wider audience. 
        </p>

        <h2>Accessibility</h2>
        <p>The Web Accessibility Guidelines (WCAG) set standards to ensure digital content is accessible to everyone. Some key requirements include:</p>

        <p>Minimum Contrast for Text:</p>
        <ul>
            <li>Regular-sized text (below 18pt or 14pt bold) must have a contrast ratio of at least 4.5:1 against its background</li>
            <li>Large-text (18pt or 14pt bold and above) must have a minimum ratio of 3:1</li>
        </ul>

        <p>None-text Elements:</p>
        <ul>
            <li>Icons, buttons, and graphical elements must have a contrast ratio of at least 3:1</li>
        </ul>

        <p>Avoid Color-Only Indicators:</p>
        <ul>
            <li>Color should never be used as the only means of conveying information, indicating an action, prompting a response, or distinguishing a visual element</li>
        </ul>
    </section>

    <h2>In Practice</h2>

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
</main>
<?php include('assets/inc/footer.php'); ?>
