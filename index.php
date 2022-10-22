<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <title>Login</title>
</head>

<body>
    
    <?php
        if(isset($_GET['op'])) {
            $opção = $_GET['op'];
        } else {
            $opção = 'menuLogin';
        }

        switch($opção) {
            case 'login_func';
                require_once('funcs/login.inc.php');
                break;
            case 'PasswordGenerator';
                require_once('PasswordGenerator');
                break;
            case 'menuLogin';
            default;
                solicitarMenuLogin();
        }
    ?>

    <?php
    
    function solicitarMenuLogin() {
    ?>
    <form action="index.php?op=login_func" method="POST">
        <main class="container" id="container">
            <div class="container-title">
                <h1 class="title">Login</h1>
            </div>
            <div class="input-field">
                <input class="textbox" type="email" name="email" id="email" placeholder="Email" required>
                <input class="textbox" type="password" name="password" id="password" placeholder="Password" required>
                <input id="submit" class="submit" type="submit" value="Logar">
            </div>
        </main>
    </form>
    <script src="js/default.js"></script>
    
    <?php
}
    ?>
</body>
</html>