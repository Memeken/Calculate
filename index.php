<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calcul</title>
</head>
<body>
    <form method="POST" action="">
        <input type="number" min="0" name="x">
        <input type="number" min="0" name="y">
        <input type="submit" name="addition" value="+">
        <input type="submit" name="substraction" value="-">
        <input type="submit" name="multiplication" value="x">
        <input type="submit" name="division" value="/">
    </form>
    <p>
        <?php

            require 'class.php';

            if(!empty($_POST['x']) && !empty($_POST['y'])){
                if(isset($_POST['addition'])){
                    $addition = new Calculate($_POST['x'], $_POST['y']);
                    echo $addition->addition();
                }elseif(isset($_POST['substraction'])){
                    $substraction = new Calculate($_POST['x'], $_POST['y']);
                    echo $substraction->substraction();
                }elseif(isset($_POST['multiplication'])){
                    $multiplication = new Calculate($_POST['x'], $_POST['y']);
                    echo $multiplication->multiplication();
                }elseif(isset($_POST['division'])){
                    $division = new Calculate($_POST['x'], $_POST['y']);
                    echo $division->division();
                }
            }else{
                echo'Vous devez rentrer un nombre dans chaque case';
            }
        ?>
    </p>
    
</body>
</html>