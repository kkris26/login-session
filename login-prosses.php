<?php
session_start();
if(empty($_SESSION["username"])){
    if(!empty($_POST['username']) && !empty($_POST['password'])){
        $data['username'] = $_POST['username'];
        $data['password'] = $_POST['password'];

        $myfile = fopen("data.json", "r");
        $user = json_decode(fread($myfile, filesize("data.json")));
        if($data['username'] == $user->username && $data['password'] == $user->password){
            $_SESSION['username'] = $data['username'];
            header('location: dashboard.php');
        }
        else{
            echo "login gagal";
        }
        fclose($myfile);
    }
    else{
        echo "email dan pasword kosong";
    }
}
else{
            header('location: welcome.php');
}