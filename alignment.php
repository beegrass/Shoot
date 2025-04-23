<?php 
    $title = 'Alignment';
    $filename = 'alignment.php';
    include('assets/inc/nav.php');
?>
<main>
    <div class="sub-container">
        <h1>ALIGNMENT</h1>
        <img src="assets/images/alignment-hero.jpg" alt="Alignment Header" class="contrast-hero">
    </div>
    <section>
        <aside class="main-image">
            <img src="assets/images/alignment-content.jpg" alt="Planets in alignment">
        </asid>
        <h2>What is it?</h2>
        <p><bold>Alignment</bold> refers to arranging 
        elements in a way that creates order and organization on your site.
        In web design, tools like grids, columns and flexbox enforce proper
        alignment.
        </p>
        <ul>
            <li>
                <bold>Text Consistency:</bold> Ensure that Text
                elements such as headings, body text, and buttons are properly
                aligned, creating a clear visual flow that guides the user's eye
                across the page
            </li>
            <li>
                <bold>UI Design:</bold> Buttons, icons, and navigation menus should align
                with other page elements, ensuring a clean and structured layout. Proper alignment
                reinforces a sense of order and organization.
            </li>
            <li>
                <bold>Spacing & Layout:</bold> Maintain consistent alignment throughout the layout.
                Aligning elements horizontally or vertically ensures that the page doesn't feel chaotic,
                improving readability and visual appeal.
            </li>
        </ul>
    </section>
    <section>
        <h2>Importance</h2>
        <p>
            
        </p>
    </section>
    <section>
        <h2>Accessibility</h2>
        <p>
            A site's accessibility is improved through proper alignment, as it creates
            predictable interaction areas. With this, users with motor impairments can 
            find and interact with certain elements without confusion. An example of 
            proper alignment is keeping the form fields aligned across different pages
            to reduce the effort to navigate through the form. It is important; however, 
            to responsibly implement center-aligning text. This alignment is often good for 
            a small amount of text, but it could decrease how readable your site is when 
            used for bigger chunks.
        </p>
    </section>
    <section class="alignment-box">
        <div id="stars"></div>

        <div class="buttons">
        <button data-align="flex-start" class="active">Left</button>
        <button data-align="center">Center</button>
        <button data-align="flex-end">Right</button>
        </div>

        <p class="desc">Play around with these alignment controls to see why alignment is so critical</p>
    </section>
</main>
<?php include('assets/inc/footer.php'); ?>