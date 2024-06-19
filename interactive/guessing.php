<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale=1.0">
    <title>Guessing game</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']); ?>" method="POST">
    <label for="userInput">Guess the number:</label>
        <input type="text" id="userInput" name="userInput" required>
        <input type="submit" value="submit"> 

    </form>

    <?php
    function processUserInput($input) {

        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        if(!is_numeric($input)){
            echo "Input is not a number!";
        }
        
        return $input;
    }

    function guessNumber($input, $randomNumber){
        if ($randomNumber == processUserInput($input)) {
            echo "You have guessed right! The number is " . $randomNumber;
        }else{
            echo "Try again!";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userInput = $_POST['userInput'];

        //Generate a random number between 1 and 10
        $randomNumber = mt_rand(1, 10);

        $result = guessNumber($userInput, $randomNumber);

        echo $result;
    }
    //I have to take the result and compare it to a random number we generated.
    // Generate a random number between 1 and 100
    


    ?>
</body>





</html>





