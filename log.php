
<?php
    include './data/config.php';
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $file = fopen('./data/users.json','r');
        $usArray = json_decode(fread($file,filesize('./data/users.json')),true);
        foreach($usArray as $user){
            if($user['email']==$email && $user['pass']==$pass){
                $_SESSION['logUser'] = $user;
                header("Location: ".$baseName.'users.php');
                exit();
                break;
            }
        }
        header("Location: ".$baseName.'index.php?msg=1');
        exit();
    }
?>