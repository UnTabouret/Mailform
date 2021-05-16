<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Action</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h4 class="panel-title">Retours de <?php echo $_POST['Prénom']." ".$_POST['Nom']?></h4>
        </div>
        <div class="panel-body">
            <?php

            foreach ($_POST as $key => $value) {
                if ($key != 'Prénom' && $key != 'Nom') {
                    echo "<strong>" . $key . "</strong>";
                    echo "<br>";
                    echo $value;
                    echo "<br>";
                }
            }

            ?>
        </div>
    </div>
</div>
</body>
</html>