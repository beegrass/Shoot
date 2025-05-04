<?php
$title = 'Alignment';
$filename = 'alignment.php';
include('assets/inc/nav.php');

$heroImg = "assets/images/alignment-hero.jpg";
$mainImg = "assets/images/alignment-content.jpg";
$imgAltText = "Planets in alignment";
$principleDesc = "<b>Alignment</b> refers to arranging 
        elements in a way that creates order and organization on your site.
        In web design, tools like grids, columns and flexbox enforce proper
        alignment.";
$descList = array(
    "<b>Text Consistency:</b> Ensure that Text
                    elements such as headings, body text, and buttons are properly
                    aligned, creating a clear visual flow that guides the user's eye
                    across the page",
    "<b>UI Design:</b> Buttons, icons, and navigation menus should align
                    with other page elements, ensuring a clean and structured layout. Proper alignment
                    reinforces a sense of order and organization.",
    "<b>Spacing & Layout:</b> Maintain consistent alignment throughout the layout.
                    Aligning elements horizontally or vertically ensures that the page doesn't feel chaotic,
                    improving readability and visual appeal."
);

$importance = "Alignment is important because it helps to create a visually appealing and organized layout. 
            If implemented properly, it makes content easier to scan, which improves readability and enhances the overall experience for the user.
            Proper Alignment also establishes a clear hierarchy, which guides the user's attention and creates a sense of order and professionalism.
            Alignment plays a crucial role in responsive web design. By aligning elements well, you ensure that the content reorganizes appropriately 
            across screen sizes.";

$whyUse = "";

$accessibility = "A site's accessibility is improved through proper alignment, as it creates
            predictable interaction areas. With this, users with motor impairments can
            find and interact with certain elements without confusion. An example of
            proper alignment is keeping the form fields aligned across different pages
            to reduce the effort to navigate through the form. It is important; however,
            to responsibly implement center-aligning text. This alignment is often good for
            a small amount of text, but it could decrease how readable your site is when
            used for bigger chunks.";

include('assets/inc/principle.php');
?>

<section class="alignment-box">
    <div id="stars"></div>

    <div class="buttons">
        <button data-align="flex-start" class="active">Left</button>
        <button data-align="center">Center</button>
        <button data-align="flex-end">Right</button>
    </div>

    <p class="desc">Play around with these alignment controls to see why alignment is so critical</p>
</section>
</section>
</main>
<?php include('assets/inc/footer.php'); ?>