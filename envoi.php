<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="stylesheet" href="mycss.css">
</head>
<body>
<div class="container">
    <h4>Retours sur la séance</h4>
    <hr>
    <div class="panel-body">
        Vos retours ont bien été envoyés
        <?php
            $message ="";
            $objet =$_POST['Prénom'];
            $objet .= "";
            $objet .= $_POST['Nom'];
            foreach ($_POST as $key => $value) {

                    $message .= $key;
                    $message.= "\n";
                    $message.= $value;
                    $message.= "\n\n";

            }
            mail('eq-art@eq-art.com',$objet,$message,$objet);
        ?>
    </div>
</div>

</body>
</html>