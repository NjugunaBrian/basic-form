<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="includes/formHandler.php" method="POST">
            <label for='firstname'>FirstName</label>
            <input id='firstname' name='firstname' type='text' placeholder='Firstname'/>
            <br>
            <label for='secondname'>SecondName</label>
            <input id='secondname' name='secondname' type='text' placeholder='Secondname'/>
            <br>
            <label for='favoritepet'>Favorite Pet?</label>
            <select id='favoritepet' name='favoritepet'>
                <option value='none'>None</option>
                <option value='dog'>Dog</option>
                <option value='cat'>Cat</option>
                <option value='bird'>Bird</option>
            </select>
            <br>

            <button  type='submit'>Submit</button>
        </form>
    </main>

</body>
</html>