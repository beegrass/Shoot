<?php
$title = 'Repetition';
$filename = 'repetition.php';
include('assets/inc/nav.php');

$bannerImg = "url('assets/images/repetitionBanner.png')";
$bannerTxt = strtoupper($title);

$description = "<b>Repetition</b> refers to the consistent use of design elements in a site. Some elements that should use consistency are the colors, fonts, the general layout and the imagery included.";
$featureImg = "url('assets/images/repetitionImg.png')";

$descList = array(
    "Typography Consistency: Using the same fonts and styles for headings, body text, and buttons.",
    "Color Scheme: Maintaining a consistent palette across the website.",
    "UI Elements: Keeping button styles, icons, and navigation menus uniform.",
    "Spacing & Layout: Ensuring consistent padding, margins, and grid structures."
);

$importance = "Repetition creates cohesion and unity among your pages, which makes the site easier to navigate and aesthetically pleasing. <br><br> 
                Repetition enhances readability by creating a structured layout, creating familiarity for the user to guide the eye and improve the flow of your content reading. <br><br>
                A consistent structure can help users predict where key elements are, such as the nav bar, creating a better experience for users.";

$accessibility = "All users can benefit from the proper implementation of repetition. Through the consistency and predictability of a site’s layout, content structure, and navigation, the cognitive load on a user is decreased, as they will only need to take in those elements once and will better retain the information that a site is conveying. <br><br>
                    A repetition of style can also benefit those with color blindness, as they won’t need to interpret the color schemes of each individual page.";

// tentatively adding in the page template
//include('assets/inc/principle-page.php'
?>

<!-- Repetition Unique Stuffs -->
<div class="main-content">
    <h2 class="section-title">In Practice</h2>
    <div class="practice">
        <p>Let's take a look at a website with no repetition...</p>
        <img src="assets/images/arngren.png" alt="a section of the Arngren website">
        <p>This website utilizes different font types, sizes, and colors. The images used are also different styles. Though there's a lot of contrast, there's little to no repetition and it's hard to read and navigate the site.</p>
        <p>Now let's look at a clip of an improved redesign of this website...</p>
        <img src="assets/images/argrenRedesign.png" alt="a neat redesign of the Arngren website">
        <p>What about this new design is better? Let's go over it.</p>
        <p>To start, this design uses a set color palette and typeface to separate different UI elements. Notice how item information is now grouped into cards? Cards are a great way to make different UI elements distinct from one another while ensuring elements with the same functionality all look the same. Now we can easily read what the trending items are.</p>
    </div>
</div>


<?php include('assets/inc/footer.php'); ?>