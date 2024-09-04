<?php
//Import file Film
require __DIR__ . "/Classes/Film.php";

$myFilm = new Film('Star-terk', 5);
$newFilm = new Film('Il Mago di Oz', 4.5);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boh</title>
</head>
<body>
    <?php echo $myFilm->infoFilm();?> <br>
    <?php echo $newFilm->infoFilm();?>
</body>
</html>