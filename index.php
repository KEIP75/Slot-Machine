<?php
// index.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Machine à sous</title>
    <link rel="stylesheet" href="./public/style.css">
</head>
<body>
    <!-- Ma navbar -->
    <nav class="navbar">
        
        <!-- Left -->
        <div class="centralise">
            <div class="navleft">
                <img class="logo" src="assets/logo/logo.png" alt="logo">
            </div>
        </div>

        <!-- Middle -->
         <ul class="navmid">
            <a href="/machine-slot"><li>Accueil</li></a>
            <a href=""><li>Fonctionnalité</li></a>
            <a href=""><li>À propos</li></a>
            <a href=""><li>Contact</li></a>
         </ul>

         <!-- Right -->
          <ul class="navright">
            <a href="/machine-slot/index.php"><li>Jouer</li></a>
            <a href=""><li>Test</li></a>
          </ul>
    </nav>

    <!-- Mon container -->
    <div class="container">
        <h1>💲Machine à sous💲</h1>
        <article class="slot-machine">
            <div class="reel" id="reel1">🍒</div>
            <div class="reel" id="reel2">🍒</div>
            <div class="reel" id="reel3">🍒</div>
        </article>
        <!-- Mon bouton -->
        <button id="spinButton">Jouer⚡</button>
        <p id="result"></p>
    </div>
    <script src="./public/script.js"></script>
</body>
</html>
