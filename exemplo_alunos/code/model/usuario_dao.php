<?php
    require_once '../db/conexao.php';
    require_once 'usuario.php';

    class UsuarioDao{

        private $conexao;

        public function __construct()
        {
            $conexao = new Conexao();
            $this->conexao = $conexao->conectar();
        }

        public function inserir(Usuario $usuario)
        {
            # code...
            // Codigo utilizado para codificar a senha na hora de salvar no banco: password_hash('admin', PASSWORD_DEFAULT);
        }

        public function validar(Usuario $usuario){
            $sql = "SELECT * FROM tb_usuario WHERE login = :login";
            //echo $sql;
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(':login', $usuario->login,);
            $stmt->execute();
          
            $res = $stmt->fetch(PDO::FETCH_OBJ);

            return $res;
        }

    }
?>