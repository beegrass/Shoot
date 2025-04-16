<!DOCTYPE html>
<html lang="en">

<!-- https://stackoverflow.com/questions/59820346/how-to-turn-the-navbar-into-a-hamburger-menu-when-on-mobile -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas+Neue">
    <title><?php echo $title ?></title>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="branding">
                <a href="index.php" class="logo"></a>
            </div>
            <label for="input-hamburger" class="hamburger"><span class="navicon"></span></label>
            <input type="checkbox" id="input-hamburger" class="hamburger-btn" hidden>
            <ul class="menu">
                <li><a href="contrast.php" class="menu-link">Contrast</a></li>
                <li><a href="alignment.php" class="menu-link">Repetition</a></li>
                <li><a href="repetition.php" class="menu-link">Alignment</a></li>
                <li><a href="proximity.php" class="menu-link">Proximity</a></li>
                <li class="has-dropdown">
                    <a href="#" class="menu-link">Resources
                        <span class="arrow"></span>
                    </a>
                    <ul class="submenu">
                        <li><a href="quiz.php" class="menu-link">Quiz</a></li>
                        <li><a href="works_cited.php" class="menu-link">Work Cited</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <script>
        const hamburger = document.querySelector('.hamburger');
        hamburger.addEventListener('click', function() {
            this.classList.toggle('close');
        })
    </script>