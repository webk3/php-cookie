<?php
setcookie('login',$_POST['login'],time() +3600,"/", "localhost");
setcookie('password',$_POST['password'], time() +3600,"/","localhost");
if (!$_COOKIE['login'] && !$_COOKIE['password']){
    echo "remplir tous les champ";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>exercice3</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Exercice3</h1>
    <form method="post">
        <div>
            <div>
                <label>login</label>
            </div>
            <input type="text" name="login" placeholder="login">
        </div>
        <div>
            <div>
                <label>password</label>
            </div>
            <input type="password" name="password" placeholder="......">
        </div>
        <button type="submit">valid</button>
    </form>
</body>
</html>