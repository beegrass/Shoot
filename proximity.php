<?php 
  $title = 'Proximity';
  $filename = 'proximity.php';
  include('assets/inc/nav.php');
?>

<section class="hero-banner">
  <h1>PROXIMITY</h1>
</section>


<main>
<section class="what-is-it">
  <div class="what-text">
    <h2>What is it?</h2>
    <p>Proximity refers to the practice<br>
    of making groups of related<br>
    items together to visually<br>
    represent their relationship.</p>
  </div>
  <div class="what-img">
    <img src="assets/images/proximity-content.jpg" alt="Cluster of stars" />
  </div>
</section>

<section class="proximity-points">
  <ul>
    <li><strong>Font Consistency:</strong> Group related text elements together, such as headings with their corresponding body text. This helps users quickly identify relationships and makes the content easier to process.</li>
    <li><strong>Color Palette:</strong> Use proximity to group elements with similar functions, like placing interactive elements close together in the same color family. This helps create visual clusters, guiding users to important areas on the page.</li>
    <li><strong>UI Design:</strong> Place related buttons, icons, or navigation options near one another to suggest their connection. This grouping helps users understand that elements work together, improving usability.</li>
    <li><strong>Layout & Spacing:</strong> Proper proximity between elements—such as text blocks and images—enhances comprehension. Keeping related items close together creates a sense of unity, while enough space between unrelated items avoids clutter.</li>
  </ul>
</section>

<section class="proximity-text-section">
  <h2>Importance</h2>
  <p>
    Proximity reduces the need for visual interpretations (e.g. lines and borders between items) by allowing the user to form connections between items based on their position to other items on an interface. This principle offers great visual clarity, enhancing the readability of a website.
  </p>
</section>

<section class="proximity-text-section">
  <h2>Accessibility</h2>
  <p>
    Proximity considers different visual impairments by creating clear visual distinctions between the content of the site. An effective implementation also decreases the cognitive load experienced by the user, as it reduces the mental effort needed by the user to form connections and relationships between items.
  </p>
  <h3>In Practice</h3>
</section>



<section>
  
  <div id="star-container">
    <!-- Group A -->
    <div class="star group-a">★</div>
    <div class="star group-a">★</div>
    <div class="star group-a">★</div>
    <div class="star group-a">★</div>
    <div class="star group-a">★</div>

    <!-- Group B -->
    <div class="star group-b">✶</div>
    <div class="star group-b">✶</div>
    <div class="star group-b">✶</div>
    <div class="star group-b">✶</div>
    <div class="star group-b">✶</div>
  </div>
  <p class="caption">Hover over the starry sky to see how proximity practices group the stars together</p>
</section>

</main>

<script src="assets/js/proximity.js"></script>
<?php include('assets/inc/footer.php'); ?>
