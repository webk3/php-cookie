<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>exercice php</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>exercice php</h1>
    <form>
        <div class="form-group">
            <label>User Agent :</label>

            <div>
                <?php
               echo $_SERVER["HTTP_USER_AGENT"];
                ?>
            </div>
        </div>
        <div class="form-group">
            <label >Adresse IP : </label>

            <div>
                <?php
                echo $_SERVER["REMOTE_ADDR"]
                ?>
            </div>
        </div>
        <div class="form-group">
            <label>Nom du Serveur :</label>

            <div>
                <?php
                echo $_SERVER['HTTP_HOST'];
                ?>
            </div>
        </div>
    </form>
</body>
</html>