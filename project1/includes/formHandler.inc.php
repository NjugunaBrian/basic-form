<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $pwd = $_POST["password"];
    $email = $_POST["email"];

    try{
        require_once "dbh.inc.php"; //link to that file

        $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";

        // updating users
        //$query = "UPDATE users SET username = :username, pwd = :pwd, email = :email WHERE id = 1;";
        

        $stmt = $pdo->prepare($query);

        $options = [
            'cost' => 12
        ];

        $hashedpwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':pwd', $hashedpwd);
        $stmt->bindParam(':email', $email);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");


        die();

    } catch (PDOException $e) {
        die("Query failed " . $e->getMessage());

    }
    
} else {
    header("Location: ../index.php");
}

?>