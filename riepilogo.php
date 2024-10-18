<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome  = $_GET["name"];
        $cognome  = $_GET["surname"];
        $email  = $_GET["email"];
        echo "<h1>Dati INVIATI</h1>";
        echo "<table style='border: 1px solid black; border-collapse: collapse;'><tr><th>nome</th><th>Cognome</th><th>Email</th></tr><tr><td>$nome</td><td>$cognome</td><td>$email</td>";
    ?>
</body>
</html>