<?php
  class ProdutoModel extends CI_Model{

    public function selecionarTodos(){
        //SELECT * FROM produto
        $retorno = $this->db->query("SELECT * FROM produto");
        return $retorno->result();
    }

    public function buscarId( $id ) {

       $retorno = $this->db->query("SELECT * FROM produto WHERE id=" . $id );

       return $retorno->result();
    }
    //salvar alterções no produto
   public function salvaralteracao($id, $nome, $tipo_produto, $valor, $imagem ){
     $sql = "UPDATE produto 
     SET 
     nome = '" . $nome . "' ,
     tipo_produto ='" . $tipo_produto . "',
     valor = " . $valor . ",
     imagem = '" . $imagem . "'
     WHERE id= " . $id . "
     ";

     $this->db->query($sql);
     return true;

   }

    public function inserir($data) {

        $this->db->insert("produto",$data);

        return true;

    }

    /*public function salvarnovo($nome, $tipo_produto, $valor, $imagem, $perecivel ){
      $sql = "INSERT INTO produto
                          (nome, tipo_produto, valor, imagem, perecivel)
                          VALUES 
                          ('" .$nome . "', '" . $tipo_produto. "', ".$valor." , '" . $imagem. "', " . $perecivel. ")";

      $this->db->query( $sql );
      return true;

    }*/

    public function excluir($id){
      $sql="DELETE FROM produto WHERE id=" . $id;
      $this->db->query( $sql );
      return true;
    }

  }
?>