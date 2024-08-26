<?php
require_once 'config.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="./search.php" method="POST">
    <label for="search">Search for user:</label>
    <input id="search" type="text" name="usersearch" placeholder="Search..."  />
    
    <button>Search</button>
</form>
    
</body>
</html>