<?php

$user = $_POST['user'];
$password = $_POST['password'];

if ($user == 'etecmcm' and $password == 141){
    header('location: painel/index.html');
    exit();
}
else{
    echo"
        <script type='text/javascript'>
            alert('Usuário não encontrado')
            window.location='index.html'
        </script>";
}

?>