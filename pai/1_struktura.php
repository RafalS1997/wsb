<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "tekst<br>";
    $name= "janusz";
    $surname= "kowalski";

    echo $name." ".$surname,"<br>";
    echo $name." ".$surname,"<br>";

    echo "$name $surname";
    echo '$name $surname';

    //heredoc
    echo <<<SHOW
    <hr>
        imię: $name<br>
        nazwisko: $surname
    <hr>
SHOW;

     <<<SHOW
    <hr>
        imię: $name<br>
        nazwisko: $surname
    <hr>
    ?>

</body>
</html>
