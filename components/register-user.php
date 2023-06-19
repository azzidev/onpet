<?php
    include('connectDB.php');
    include('functions.php');

    $name = clearString($_POST['name']);
    $email = clearString($_POST['email']);
    $password = password_hash(clearString($_POST['password']), PASSWORD_DEFAULT);

    date_default_timezone_set("America/Sao_Paulo");
    $today = date("Y-m-d H:i:s");

    $query = mysqli_query($conn, "INSERT INTO `users_onpet` (`name_user`, `email_user`, `password_user`, `date_register`, `last_modify`, `account_status`) VALUES ('$name', '$email', '$password', '$today', '$today', 'Active')");

    if($id = mysqli_insert_id($conn)){
        session_start();

        $_SESSION['id_user'] = $id;
        $_SESSION['name_user'] = $name;
        $_SESSION['email_user'] = $email;
    
        header("Location: ../app/inicio");
    }else{
        header("Location: ../registrar?error=RE001");
    }
?>