<?php

$data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

?>
<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="formulario">

            <form method="post" action="">


           
            <label for="name">name</label>
          <p> <?php  echo $data['name'];?> </p>
            <br/><br/>

            <label for="E-mail">E-mail</label>
           <p> <?php  echo $data['E-mail'];?> </p>
            <br/><br/>

            <label for="Login">login</label>
            <p> <?php  echo $data['login'];?> </p>
            <br/><br/>

            <label for="password">password</label>
            <p> <?php  echo $data['password'];?> </p>

            <label for="password-Confirm">password Confirm</label>
           <p> <?php  echo $data['Confirm'];?> </p>

            <button type="submit" name="salvar" id="salvar">ok</button>

        </form>
        </div>
    
</body>
</html>
