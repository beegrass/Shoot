<?php 
    $title = 'Quiz';
    $filename = 'quiz.php';
    include('assets/inc/nav.php');
?>
<div class="hero-container">
    <img src="assets/images/quiz-hero.jpg" alt="quiz">
    <h1>QUIZ</h1>
</div>
<div class="quiz-card">
    <h2>Contrast:</h2>
    <div class="question-container">
        <p>1. What is the minimum contrast ratio required for normal text to meet WCAG AA standards?</p>
        <ul id="q1">
            <li>2:1</li>
            <li>4:5:1</li>
            <li>3:6:2</li>
            <li>2:5:1</li>
        </ul>
    </div>
    <div class="question-container">
        <p>2. Which of the following is the best way to ensure good contrast in web design?</p>
        <ul id="q2">
            <li>Use bright colors only</li>
            <li>Rely on user settings</li>
            <li>Use high contrast between text and background</li>
            <li>Choose colors based on aesthetics only</li>
        </ul>
    </div>
    <div class="question-container">
        <p>3. Why is contrast important for accessibility?</p>
        <ul id="q3">
            <li>It improves readability for users with low vision</li>
            <li>It makes the website look more colorful</li>
            <li>It reduces page load time</li>
            <li>It is required for mobile responsiveness</li>
        </ul>
    </div>

    <h2>Repetition:</h2>
    <div class="question-container">
        <p>4. Repetition helps users with cognitive disabilities because it:</p>
        <ul id="q4">
            <li>Increases loading speed</li>
            <li>Creates predictable patterns</li>
            <li>Adds more colors</li>
            <li>Hides navigation menu</li>
        </ul>
    </div>

    <div class="question-container">
        <p>5. What element of repetition helps color blind users the most?</p>
        <ul id="q5">
            <li>Using different shades of the same color</li>
            <li>Repeating color choices consistently across pages</li>
            <li>Avoiding color completely</li>
            <li>Changing the color scheme on every page</li>
        </ul>
    </div>

    <div class="question-container">
        <p>6. When can excessive repetition negatively impact user experience?</p>
        <ul id="q6">
            <li>When repeated elements become predictable, reducing cognitive load</li>
            <li>When users rely on consistent layouts to navigate efficiently</li>
            <li>When repeating decorative elements creates unnecessary visual clutter</li>
            <li>When color schemes remain consistent across all pages</li>
        </ul>
    </div>

    <h2>Alignment:</h2>
    <div class="question-container">
        <p>7. Which of the following is the best example of alignment enhancing accessibility?</p>
        <ul id="q7">
            <li>Placing buttons randomly across the page</li>
            <li>Center-aligning all text, including long paragraphs</li>
            <li>Keeping form fields aligned in a consistent way</li>
            <li>Making the navigation bar different on every page</li>
        </ul>
    </div>

    <div class="question-container">
        <p>8. What is a common accessibility mistake with alignment?</p>
        <ul id="q8">
            <li>Left-aligning body text</li>
            <li>Center-aligning small paragraphs</li>
            <li>Aligning buttons in a grid</li>
            <li>Center-aligning large blocks of text</li>
        </ul>
    </div>

    <div class="question-container">
        <p>9. A form uses left-aligned labels and right-aligned input fields. What usability issue might this create?</p>
        <ul id="q9">
            <li>Users must scan horizontally to match labels and fields</li>
            <li>The form loads faster</li>
            <li>It improves mobile responsiveness</li>
            <li>The text becomes bold automatically</li>
        </ul>
    </div>

    <h2>Proximity:</h2>
    <div class="question-container">
        <p>10. What is the main benefit of proximity in web design?</p>
        <ul id="q10">
            <li>Adding space between every element</li>
            <li>Grouping related items together to show their connection</li>
            <li>Making the page more colorful</li>
            <li>Allowing users to zoom in easily</li>
        </ul>
    </div>

    <div class="question-container">
        <p>11. Which of the following is not an example of proximity improving accessibility?</p>
        <ul id="q11">
            <li>Placing form labels close to input fields</li>
            <li>Grouping navigation links by category</li>
            <li>Adding more white space to every section</li>
            <li>Keeping error messages near the field that caused the error</li>
        </ul>
    </div>

    <div class="question-container">
        <p>12. How does proximity help users with visual impairments?</p>
        <ul id="q12">
            <li>It makes the page brighter</li>
            <li>It reduces clutter and improves clarity</li>
            <li>It increases text size</li>
            <li>It makes the text bold</li>
        </ul>
    </div>
</div>

<?php include('assets/inc/footer.php'); ?>