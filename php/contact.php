<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

    $retour = mail("1994.art@gmail.com","Essai","Hello World","");

    if ($retour)
    {
        echo "<p>L'email a bien été envoyé.<p>";
    }
    ?>
</body>
</html>
