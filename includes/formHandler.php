<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['secondname']);
    $favoritepet = htmlspecialchars($_POST['favoritepet']);

    echo "These is the information that the user has filled in:";
    echo '<br>';
    echo $firstname;
    echo '<br>';
    echo $lastname;
    echo '<br>';
    echo $favoritepet;
}

?>