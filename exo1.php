<?php 
    $number = 5;
    $name = "bob";
    $users = ["Ahmed", "Jean", "Michael"];
    $tableau_associatif = [
        "nom" => "Jean",
        "age" => 30
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 1</title>
</head>
<body>
    <h1><?= "Le nombre de $name vaut $number"; ?></h1>
    <p>
        <?php echo "Le meilleur ami de $name est $users[1]"; ?>
    </p>

    <p>
        <?php echo "Le meilleur ami de $tableau_associatif[nom] a $tableau_associatif[age] ans."; ?>
    </p>
</body>
</html>