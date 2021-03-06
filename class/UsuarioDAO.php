<?php
  class UsuarioDAO
  {

    private $conecta;

      public function __construct($conecta)
      {
        $this->conecta = $conecta;
      }


      public function adicionaUsuario($nome)
      {
        $nome = addslashes($nome);

        $query="INSERT INTO usuario (nome) VALUES ('{$nome}')";
        $resultado = mysqli_query($this->conecta, $query);

        return $resultado;
      }


      public function removeUsuario($nome)
      {
        $nome = addslashes($nome);
        
        $query = "DELETE FROM usuario WHERE nome = '{$nome}'";
        $resultado = mysqli_query($this->conecta, $query);

        return $resultado;
      }


      public function selecionaId($nome)
      {
        $nome = addslashes($nome);
        $query = "SELECT id_usuario FROM usuario WHERE nome = '{$nome}'";
        $resultado = mysqli_query($this->conecta, $query);

        $usuario = mysqli_fetch_assoc($resultado);
        return $usuario['id_usuario'];
      }


      public function buscaNome($userId){
            $query = "SELECT nome FROM usuario WHERE id_usuario = '{$userId}'";
            $resultado = mysqli_query($this->conecta, $query);

            $usuario = mysqli_fetch_assoc($resultado);
            return $usuario['nome'];
      }


  }
