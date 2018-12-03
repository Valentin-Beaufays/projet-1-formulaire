<?php include 'assets/php/script.php' ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Hackers Poulette</title>
</head>
<body>

<form action="#" method="post">

    <p>Nom: <input type="text" name="name" /></p>
    <p>Prénom: <input type="text" name="firstName" /></p>
    <p>Email: <input type="text" name="email" /></p>
    <p>Pays: <input type="text" name="country" /></p>
    <p>Message: <input type="text" name="message" /></p>
    <p>Sexe:</p>
    <ul>
        <li><input type="radio" name="gender" value="homme" />Homme</li>
        <li><input type="radio" name="gender" value="femme" />Femme</li>
        <li><input type="radio" name="gender" value="non-binaire" />Non-binaire</li>
        <li><input type="radio" name="gender" value="autre" />Autre</li>
    </ul>
    <select name="optionSelector">
        <option name="option1" value="option1">option 1</option>
        <option name="option2" value="option2">option 2</option>
        <option name="option3" value="option3">option 3</option>
    </select>
    <input type="submit" name="submit"/>

</form>
    
<script src="assets/js/jquery.js"></script>
<script src="assets/js/script.js"></script>    
</body>
</html>