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
    <header class="header">
        <a href="index.php" class="logo"></a>
        <input class="menu-btn" type="checkbox" id="menu-btn">
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
            <li><a href="contrast.php">Contrast</a></li>
            <li><a href="repetition.php">Repetition</a></li>
            <li><a href="alignment.php">Alignment</a></li>
            <li><a href="proximity.php">Proximity</a></li>
            <li class="dropdown">
                <a class="dropbtn">Resources</a>
                <ul class="dropdown-content">
                    <li><a href="quiz.php">Quiz</a></li>
                    <li><a href="works_cited.php">Works Cited</a></li>
                </ul>
            </li>
        </ul>
    </header>