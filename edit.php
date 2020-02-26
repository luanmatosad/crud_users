<?php
    require_once 'connection.php';
    $id = $_GET['id'];
    $users = $con->query("SELECT * FROM users WHERE id='$id'");
    if($user = $users -> fetch_assoc()){
       
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top:3%">
            <div class="col s12 center">
                <h2>UPDATE</h2>
                <form action="update.php" method="POST">
                    <input type="hidden" name="id" value="<?=$user['id']?>">
                    <input type="text" name="first_name" value="<?= $user['primary_name']?>" require placeholder="Primeiro Nome">
                    <input type="text" name="last_name" value="<?= $user['last_name']?>" require placeholder="Ultimo Nome">
                    <input type="number" name="matricula" value="<?=  $user['matricula']?>" require placeholder="Matricula">
                    <button class="btn waves-effect waves-ligth" type="submit" value="submit">Edit<i class="material-icons right"></i></button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>