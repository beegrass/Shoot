<?php
$title = 'Repetition';
$filename = 'repetition.php';
include('assets/inc/nav.php');

$heroImg = "assets/images/repetition-hero.jpg";
$mainImg = "assets/images/repetition-content.jpg";
$imgAltText = "Surface of the moon";
$principleDesc = "<b>Repetition</b> refers to the consistent use of design elements in a site. Some elements that should use consistency are the colors, fonts, the general layout and the imagery included.";
$descList = array(
    "<b>Typography Consistency:</b> Using the same fonts and styles for headings, body text, and buttons.",
    "<b>Color Scheme:</b> Maintaining a consistent palette across the website.",
    "<b>UI Elements:</b> Keeping button styles, icons, and navigation menus uniform.",
    "<b>Spacing & Layout:</b> Ensuring consistent padding, margins, and grid structures."
);

$importance = "Repetition creates cohesion and unity among your pages, which makes the site easier to navigate and aesthetically pleasing. It also
                enhances readability by creating a structured layout, creating familiarity for the user to guide the eye and improve the flow of your content reading.
                Using repetition to generate a consistent structure can help users predict where key elements are, such as the nav bar, creating a better experience for users.";

$accessibility = "<p>All users can benefit from the proper implementation of repetition. Through the consistency and predictability of a site's layout, content structure, and navigation, the cognitive load on a user is decreased, as they will only need to take in those elements once and will better retain the information that a site is conveying. <br><br>
                    A repetition of style can also benefit those with color blindness, as they won't need to interpret the color schemes of each individual page.</p>";

include('assets/inc/principle.php');
?>

<!-- Repetition Unique Stuffs -->
    <div class="practice">
        <p>Let's take a look at a website with no repetition...</p>
        <img src="assets/images/arngren.png" alt="a section of the Arngren website">
        <p>This website utilizes different font types, sizes, and colors. The images used are also different styles. Though there's a lot of contrast, there's little to no repetition and it's hard to read and navigate the site.</p>
        <p>Now let's look at a clip of an improved redesign of this website...</p>
        <img src="assets/images/arngrenRedesign.png" alt="a neat redesign of the Arngren website">
        <p>What about this new design is better? Let's go over it.</p>
        <p>To start, this design uses a set color palette and typeface to separate different UI elements. Notice how item information is now grouped into cards? Cards are a great way to make different UI elements distinct from one another while ensuring elements with the same functionality all look the same. Now we can easily read what the trending items are.</p>
    </div>
</section>


<?php include('assets/inc/footer.php'); ?>
