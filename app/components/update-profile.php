<?php
    include("connectDB.php");
    include("functions.php");
    include("../includes/preset.php");

    $temp = parse_str($_POST['form'], $form);
    $checks = $_POST['checks'];

    date_default_timezone_set("America/Sao_Paulo");
    $today = date("Y-m-d H:i:s");

    $getUserData = mysqli_query($conn, "SELECT * FROM `users_onpet` WHERE `onpet_id`='".$_SESSION['id_user']."'");
    $obj=mysqli_fetch_object($getUserData);

    $jsonContactObj = json_decode($obj->contact_user, true);
    
    //NAME USER
    $name_owner = clearString($form['nome-dono']);
    if($name_owner == ""){
        $name_owner = $name_owner ? "" : $obj->name_user;
    }

    //CONTACT SECTION
    $phone_number = $form['celular-principal'];
    $phone_number_secondary = $form['celular-secundario'];
        if($phone_number == "" OR $phone_number_secondary == ""){
            $phone_number = $phone_number ? "" : $jsonContactObj->phone_number;
        }
        //BUILD JSON
        $json_contact = '
            {
                "phone_number": "'.$phone_number.'",
                "phone_number_secondary": "'.$phone_number_secondary.'"
            }
        ';

    //SOCIAL SECTION
    $facebook_social = clearString($form['facebook-link']);
    $instagram_social = clearString($form['instagram-link']);
    $twitter_social = clearString($form['twitter-link']);
        //BUILD JSON
        $json_social = '
            {
                "facebook": "'.$facebook_social.'",
                "instagram": "'.$instagram_social.'",
                "twitter": "'.$twitter_social.'"
            }
        ';

    //ADDRESS SECTION
    $postal_code = clearString($form['cep-dono']);
    $number_home = clearString($form['numero-dono']);
    $complement_address = clearString($form['complemento-dono']);
    $street_address = clearString($form['endereco-dono']);
    $city_address = clearString($form['cidade-dono']);
    $state_address = clearString($form['estado-dono']);
        //BUILD JSON
        $json_address = '
            {
                "postal_code": "'.$postal_code.'",
                "number_home": "'.$number_home.'",
                "complement_address": "'.$complement_address.'",
                "street_address": "'.$street_address.'",
                "city_address": "'.$city_address.'",
                "state_address": "'.$state_address.'"
            }
        ';

    $_SESSION['name_user'] = $name_owner;
    $_SESSION['contact_user'] = $json_contact;
    $_SESSION['social_user'] = $json_social;
    $_SESSION['address_user'] = $json_address;

    $query = mysqli_query($conn, "UPDATE `users_onpet` SET `name_user`='$name_owner',`contact_user`='$json_contact',`social_user`='$json_social',`address_user`='$json_address',`usage_permission`='$checks',`last_modify`='$today' WHERE `onpet_id`='".$_SESSION['id_user']."'");
?>