<?php
namespace Classes;

require 'Conexao.php';

use Classes\Conexao;


class Usuario
{

    private $conexao;

    public function __construct()
    {
        $this->conexao=Conexao::getConexao();
    }

    public function listar()
    {

        $sql = "SELECT * FROM usuario;";
        $q = $this->conexao->prepare($sql);
        $q->execute();
        return $q;
    }

    public function inserir($nome, $email, $login, $senha)
    {
        $sql = "INSERT INTO usuario (nome,email,login,senha) values (?,?,?,?);";
        $q = $this->conexao->prepare($sql);
        $senha =md5($senha);
        $q->bindParam(1,$nome);
        $q->bindParam(2,$email);
        $q->bindParam(3,$login);
        $q->bindParam(4,$senha);
        $q->execute();            
    }

    public function editar($codigo,$nome, $email, $login, $senha )
    {
        
        $sql = "UPDATE usuario SET nome=?, email=?, login=?, senha=? where codigo =? ;";
        $q = $this->conexao->prepare($sql);
        $senha =md5($senha);
        $q->bindParam(1,$nome);
        $q->bindParam(2,$email);
        $q->bindParam(3,$login);
        $q->bindParam(4,$senha);
        $q->bindParam(5,$codigo);
        $q->execute();              
    }
    public function delete($codigo)
    {                       
        $sql = "DELETE FROM usuario WHERE codigo = ?;";
        $q = $this->conexao->prepare($sql);      
        $q->bindParam(1,$codigo);
        $q->execute();               
    }

}
