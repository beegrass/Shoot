<?php
$title = 'Proximity';
$filename = 'proximity.php';
include('assets/inc/nav.php');

$heroImg = "assets/images/proximity-hero.jpg";
$mainImg = "assets/images/proximity-content.jpg";
$imgAltText = "Cluster of stars in space";
$principleDesc = "<b>Proximity</b> refers to the practice of making groups of related items together to visually represent their relationship.";
$descList = array(
    "<b>Font Consistency:</b> Group related text elements together, such as headings with their corresponding body text. This helps users quickly identify relationships and makes the content easier to process.",
    "<b>Color Palette:</b> Use proximity to group elements with similar functions, like placing interactive elements close together in the same color family. This helps create visual clusters, guiding users to important areas on the page.",
    "<b>UI Design:</b> Place related buttons, icons, or navigation options near one another to suggest their connection. This grouping helps users understand that elements work together, improving usability.",
    "<b>Layout & Spacing:</b> Proper proximity between elements—such as text blocks and images—enhances comprehension. Keeping related items close together creates a sense of unity, while enough space between unrelated items avoids clutter."
);

$importance = "Proximity reduces the need for visual interpretations (e.g. lines and borders between items) by allowing the user to form connections between items based on their position to other items on an interface. This principle offers great visual clarity, enhancing the readability of a website. ";

$whyUse = "";

$accessibility = "Proximity considers different visual impairments by creating clear
                    visual distinctions between the content of the site. An effective
                    implementation also decreases the cognitive load experienced by the
                    user, as it reduces the mental effort needed by the user to form
                    connections and relationships between items.";

include('assets/inc/principle.php');
?>

<?php include('assets/inc/footer.php'); ?>