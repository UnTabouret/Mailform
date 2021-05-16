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
        <form method="post" action="envoi.php">

            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" class="form-control" name="Prénom" id="prenom"
                       placeholder="Entrez votre prénom" value="Jean">
            </div>

            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" name="Nom" id="nom"
                       placeholder="Entrez votre nom" value="Dupont">
            </div>

            <div class="form-group">
                <label for="apprecie">J'ai apprécié :</label>
                <textarea class="form-control" rows="5" id="apprecie"
                          name="A_apprécié"></textarea>
            </div>

            <div class="form-group">
                <label for="prefere">J'aurais encore plus apprécié :</label>
                <textarea class="form-control" rows="5" id="prefere"
                          name="Aurait_préféré"></textarea>
            </div>

            <div class="form-group">
                <label for="prochaine">Pour la prochaine séance, j'aurais besoin de :</label>
                <textarea class="form-control" rows="5" id="prochaine"
                          name="Besoin_prochaine_séance"></textarea>
            </div>
            <button type="submit" class="btn">Envoyer</button>
        </form>
    </div>
</div>

</body>
</html>