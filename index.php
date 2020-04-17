<?php
use Classes\Usuario;

 require './Classes/Usuario.php';


    //cria um novo usuario
    $usu = new Usuario();
   $usuario = $usu->listar();
?>
<!DOCTYPE html>
    <html lang="pt-Br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/cadastro.css">
        <title>lista</title>


    </head>
    <body>
    <div class="container">
        <div class="formulario">
            <a href="adicionar.php"><button>new user</button></a>
                <table>
                    <thead class="row">
                        <tr>
                            <td>Código</td>
                            <td>Nome</td>
                            <td>E-mail</td>
                            <td>Login</td>
                        </tr>
                    </thead>

                    <tbody class="collum">

                        <?php foreach ($usuario as $index => $usuario) {?>

                        <tr>
                            <td><?php echo $usuario['codigo'];?></td>
                            <td><?php echo $usuario['nome'];?></td>
                            <td><?php echo $usuario['email'];?></td>
                            <td><?php echo $usuario['login'];?></td>
                            <td>
                                <a href="editar.php?codigo=<?php echo $usuario['codigo'];?>">Editar</a> |
                                <a href="eliminar.php?codigo=<?php echo $usuario['codigo'];?>">Excluir</a>
<!--   -->
                            </td>
                        </tr>

                        <?php }?>

                    </tbody>

                </table>


            </div>
        </div>
    </body>
    </html>
