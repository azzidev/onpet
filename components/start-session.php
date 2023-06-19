<?php
	include('connectDB.php');
	include('functions.php');

	$email = clearString($_GET['email']);
	$password = clearString($_GET['password']);

	$query = mysqli_query($conn, "SELECT * FROM `users_onpet` WHERE `email_user`='$email'");
	$verify = mysqli_num_rows($query);

	if($verify !== false){
		$object = mysqli_fetch_object($query);
		$hash_db = $object->password_user;

        if (password_verify($password, $hash_db)) { 
            session_start();

            $_SESSION['id_user'] = $object->onpet_id;
            $_SESSION['name_user'] = $object->name_user;
            $_SESSION['email_user'] = $object->email_user;
			$_SESSION['contact_user'] = $object->contact_user;
			$_SESSION['social_user'] = $object->social_user;
			$_SESSION['address_user'] = $object->address_user;

            header("Location: ../app/inicio");
        }else{
            header("Location: ../login");
        }
	}else{
		header("Location: ../login");
	}
?>