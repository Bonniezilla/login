<?php
    include('conexao.php');

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "SELECT id, email FROM users WHERE email = '{$email}' AND password = '{$password}';";
    
    $result = mysqli_query($con, $query);

    $row = mysqli_num_rows($result);

    if($row == 1) {
        $_SESSION['email'] = $email;
        header('Location: PasswordGenerator');
    } else {
        header('Location: index.php');
    }
?>