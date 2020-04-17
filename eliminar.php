<?php   
require './Classes/Usuario.php';
 
use Classes\Usuario;
    
$data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$param= filter_input_array(INPUT_GET, FILTER_DEFAULT);

//$getCod = $_GET['codigo'] ;
//$cod = $param['codigo'];
//$param['codigo']

    if(isset($data['excluir'])){  
     $usu->delete($param['codigo']);

    }
 header("Location:index.php");

?>
