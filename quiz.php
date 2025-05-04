<?php 
    $title = 'Quiz';
    $filename = 'quiz.php';
    include('assets/inc/nav.php');
?>
<script src="assets/scripts/quiz.js" defer></script>
<div class="hero-container" style="background-image: url(assets/images/quiz-hero.jpg)">
    <h1>QUIZ</h1>
</div>
<div class="quiz-card">
    <h2>Contrast:</h2>
    <div class="question-container">
        <p>1. What is the minimum contrast ratio required for normal text to meet WCAG AA standards?</p>
        <ul id="q1">
            <li data-answer="A" class="option">2:1</li>
            <li data-answer="B" class="option">4:5:1</li>
            <li data-answer="C" class="option">3:6:2</li>
            <li data-answer="D" class="option">2:5:1</li>
        </ul>    
    </div>
    <div class="question-container">
        <p>2. Which of the following is the best way to ensure good contrast in web design?</p>
        <ul id="q2">
            <li data-answer="A" class="option">Use bright colors only</li>
            <li data-answer="B" class="option">Rely on user settings</li>
            <li data-answer="C" class="option">Use high contrast between text and background</li>
            <li data-answer="D" class="option">Choose colors based on aesthetics only</li>
        </ul>
    </div>
    <div class="question-container">
        <p>3. Why is contrast important for accessibility?</p>
        <ul id="q3">
            <li data-answer="A" class="option">It improves readability for users with low vision</li>
            <li data-answer="B" class="option">It makes the website look more colorful</li>
            <li data-answer="C" class="option">It reduces page load time</li>
            <li data-answer="D" class="option">It is required for mobile responsiveness</li>
        </ul>
    </div>

    <h2>Repetition:</h2>
    <div class="question-container">
        <p>4. Repetition helps users with cognitive disabilities because it:</p>
        <ul id="q4">
            <li data-answer="A" class="option">Increases loading speed</li>
            <li data-answer="B" class="option">Creates predictable patterns</li>
            <li data-answer="C" class="option">Adds more colors</li>
            <li data-answer="D" class="option">Hides navigation menu</li>
        </ul>
    </div>

    <div class="question-container">
        <p>5. What element of repetition helps color blind users the most?</p>
        <ul id="q5">
            <li data-answer="A" class="option">Using different shades of the same color</li>
            <li data-answer="B" class="option">Repeating color choices consistently across pages</li>
            <li data-answer="C" class="option">Avoiding color completely</li>
            <li data-answer="D" class="option">Changing the color scheme on every page</li>
        </ul>
    </div>

    <div class="question-container">
        <p>6. When can excessive repetition negatively impact user experience?</p>
        <ul id="q6">
            <li data-answer="A" class="option">When repeated elements become predictable, reducing cognitive load</li>
            <li data-answer="B" class="option">When users rely on consistent layouts to navigate efficiently</li>
            <li data-answer="C" class="option">When repeating decorative elements creates unnecessary visual clutter</li>
            <li data-answer="D" class="option">When color schemes remain consistent across all pages</li>
        </ul>
    </div>

    <h2>Alignment:</h2>
    <div class="question-container">
        <p>7. Which of the following is the best example of alignment enhancing accessibility?</p>
        <ul id="q7">
            <li data-answer="A" class="option">Placing buttons randomly across the page</li>
            <li data-answer="B" class="option">Center-aligning all text, including long paragraphs</li>
            <li data-answer="C" class="option">Keeping form fields aligned in a consistent way</li>
            <li data-answer="D" class="option">Making the navigation bar different on every page</li>
        </ul>
    </div>

    <div class="question-container">
        <p>8. What is a common accessibility mistake with alignment?</p>
        <ul id="q8">
            <li data-answer="A" class="option">Left-aligning body text</li>
            <li data-answer="B" class="option">Center-aligning small paragraphs</li>
            <li data-answer="C" class="option">Aligning buttons in a grid</li>
            <li data-answer="D" class="option">Center-aligning large blocks of text</li>
        </ul>
    </div>

    <div class="question-container">
        <p>9. A form uses left-aligned labels and right-aligned input fields. What usability issue might this create?</p>
        <ul id="q9">
            <li data-answer="A" class="option">Users must scan horizontally to match labels and fields</li>
            <li data-answer="B" class="option">The form loads faster</li>
            <li data-answer="C" class="option">It improves mobile responsiveness</li>
            <li data-answer="D" class="option">The text becomes bold automatically</li>
        </ul>
    </div>

    <h2>Proximity:</h2>
    <div class="question-container">
        <p>10. What is the main benefit of proximity in web design?</p>
        <ul id="q10">
            <li data-answer="A" class="option">Adding space between every element</li>
            <li data-answer="B" class="option">Grouping related items together to show their connection</li>
            <li data-answer="C" class="option">Making the page more colorful</li>
            <li data-answer="D" class="option">Allowing users to zoom in easily</li>
        </ul>
    </div>

    <div class="question-container">
        <p>11. Which of the following is not an example of proximity improving accessibility?</p>
        <ul id="q11">
            <li data-answer="A" class="option">Placing form labels close to input fields</li>
            <li data-answer="B" class="option">Grouping navigation links by category</li>
            <li data-answer="C" class="option">Adding more white space to every section</li>
            <li data-answer="D" class="option">Keeping error messages near the field that caused the error</li>
        </ul>
    </div>

    <div class="question-container">
        <p>12. How does proximity help users with visual impairments?</p>
        <ul id="q12">
            <li data-answer="A" class="option">It makes the page brighter</li>
            <li data-answer="B" class="option">It reduces clutter and improves clarity</li>
            <li data-answer="C" class="option">It increases text size</li>
            <li data-answer="D" class="option">It makes the text bold</li>
        </ul>
    </div>

    <p id="err"></p>
    <button id="submitBtn">Check Answers</button>

    <h2 id="keyh2"></h2>
    <ul id="key">

    </ul>
</div>

<?php include('assets/inc/footer.php'); ?>