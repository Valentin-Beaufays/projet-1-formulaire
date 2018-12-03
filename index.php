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
<section class="message">
<form action="#" method="post">

    <div class="form-group">
        <label for="nameInput">Nom: </label>
        <input type="text" class="form-control" id="nameInput" name="name" />
    </div>
    <div class="form-group">
        <label for="firstNameInput">Prénom: </label>
        <input type="text" class="form-control" id="firstNameInput" name="firstName" />
    </div>
    <div class="form-group">
        <label for="emailInput">Email: </label>
        <input type="email" class="form-control" id="emailInput" name="email" />
    </div>
    <div class="form-group">
        <label for="countryInput">Pays: </label>
        <input type="text" class="form-control" id="countryInput" name="country" />
    </div>
    <div class="form-group">
        <label for="messageInput">Message: </label>
        <textarea class="form-control" id="messageInput" name="message" rows="3"></textarea>
    </div>
    <fieldset class="form-group">
        <legend>Sexe:</legend>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" id="optionsHomme" name="gender" value="homme" />
                Homme
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" id="optionFemme" name="gender" value="femme" />
                Femme
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" id="optionNonBinaire" name="gender" value="non-binaire" />
                Non-binaire
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" id="optionAutre" name="gender" value="autre" />
                Autre
            </label>
        </div>
    </fieldset>
    <div class="form-group">
        <label for="selectOption">options: </label>
        <select multiple class="form-control" id="selectOption" name="optionSelector">
            <option selected name="optionAutre" value="autre">Autre...</option>
            <option name="option1" value="option1">option 1</option>
            <option name="option2" value="option2">option 2</option>
            <option name="option3" value="option3">option 3</option>
        </select>
    </div>
    <button type="submit" class="btn">Valider</button>
</form>
</section>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/script.js"></script>    
</body>
</html>