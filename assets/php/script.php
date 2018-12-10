<?php
    $nameInputError = "";
    $firstNameInputError = "";
    $emailInputError = "";
    $countryInputError = "";
    $messageInputError = "";
    $genderInputError = "";
    $NotFill = "<label class=\"NotFillOutput\">Ce champ est obligatoire</label>";
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $firstName = $_POST["firstName"];
        $email = $_POST["email"];
        $country = $_POST["country"];
        $message = $_POST["message"];
        $optionSelector = $_POST["optionSelector"];
        if(empty($name)){
            $nameInputError = $NotFill;
        }
        if(empty($firstName)){
            $firstNameInputError = $NotFill;
        }
        if(empty($email)){
            $emailInputError = $NotFill;
        }
        if(empty($country)){
            $countryInputError = $NotFill;
        }
        if(empty($message)){
            $messageInputError = $NotFill;
        }
        if(!isset($_POST['gender'])){
            $genderInputError = $NotFill;
        }
    }
?>