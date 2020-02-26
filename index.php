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
        <div class="row">
            <div class="col s12 center">
                <h2>USERS</h2>
                <form action="create.php" method="POST">
                    <input type="text" name="first_name" require placeholder="Primeiro Nome">
                    <input type="text" name="last_name" require placeholder="Ultimo Nome">
                    <input type="number" name="matricula" require placeholder="Matricula">
                    <button class="btn waves-effect waves-ligth" type="submit" value="submit">Submit<i class="material-icons right">send</i></button>
                </form>
            </div>
        </div>
    </div>

    <?php
        require_once 'connection.php';
        $users = $con -> query("SELECT * FROM users");
    ?>

    <div class="row">
        <div class="col s12">
            <table class="centered highlight">
                <thead>
                    <th>PRIMEIRO NOME</th>
                    <th>ULTIMO NOME</th>
                    <th>MATRICULA</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </thead>
                <?php
                if ($users) {
                    # code...
                    while($user = $users -> fetch_assoc()){
                
                   
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $user['primary_name']?></td>
                        <td><?php echo $user['last_name']?></td>
                        <td><?php echo $user['matricula']?></td>
                        <td><a href="edit.php?id=<?php echo $user['id']?>">Edit</a></td>
                        <td><a href="delete.php?id=<?php echo $user['id']?>">Delete</a></td>
                    </tr>
                </tbody>   
                <?php } }else { ?>
                    <tbody>
                    <tr>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                        <td><a href="index.php">Edit</a></td>
                        <td><a href="index.php">Delete</a></td>
                    </tr>
                </tbody>   
                    
               <?php }?>
            </table>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>