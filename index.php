<?php 
    $title = 'Home';
    $filename = 'index.php';
    include('assets/inc/nav.php');
?>
<main>
    <div class="hero-home">
        <h1>CRAP</h1>
        <h2>Design Principles</h2>
    </div>
    <div class="home-card-container">
        <p>Make your user interfaces more user friendly with CRAP!</p>
        <a href="contrast.php">
            <div class="home-card">
                <img class="home-card-image" src="assets/images/contrast_card.jpg" alt="contrast card image">
                <p><span class="bold_cards">Contrast</span> emphasizes the most important features of a document by utilizing a variety of design strategies.</p>
            </div>
        </a>
        <a href="repetition.php">
            <div class="home-card">
                <img class="home-card-image" src="assets/images/repetition_card.jpg" alt="repetition card image">
                <p><span class="bold_cards">Repetition</span> unifies a website through the use of consistent designs, colors, and styles throughout all pages</p>
            </div>
        </a>
        <a href="alignment.php">
            <div class="home-card">
                <img class="home-card-image" src="assets/images/alignment_card.jpg" alt="alignment card image">
                <p><span class="bold_cards">Alignment</span> creates the structure of a document and is essential for ordering and organizing information.</p>
            </div>
        </a>
        <a href="proximity.php">
            <div class="home-card">
                <img class="home-card-image" src="assets/images/proximity_card.jpg" alt="proximity card image">
                <p><span class="bold_cards">Proximity</span> associates ideas and information with each other based on their position within a document.</p>
            </div>
        </a>
    </div>
</main>
<?php include('assets/inc/footer.php'); ?>