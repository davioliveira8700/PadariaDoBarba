<?php
   
   class Produto extends CI_Controller{

    public function __construct(){
        parent::__construct();

        
        if( !isset($_SESSION["tesi2022"])) {
            
            header("location: /index.php/login");
        }
    }
    public function index(){

        $this->load->model("ProdutoModel");
       $produtos = $this->ProdutoModel->selecionarTodos();
        $tabela = "";
       
       
      
        foreach($produtos as $item){
      //localhost:8080/alterar
      //
        $tabela = $tabela . "
        <tr>
            <td style='cursor: pointer'><a href='/index.php/produto/alterar?codigo=" . $item->id ."'>✏️</a>
            <a href='/index.php/produto/excluir?codigo=" . $item->id ."'>❌</a></td>

            <td>" . $item->nome ."</td>
            <td>" . $item->perecivel ."</td>
            <td>" . $item->valor ."</td>
            <td>" . $item->tipo_produto ."</td>
            <td>
                 <img src='" . $item->imagem . "' style='width:100px'/>                 
            </td>
        </tr>  
            
        ";
       }
     $data =array(
            "lista_produtos" => $produtos,
            "tabela" => $tabela,
            "titulo" => "Você está na Padaria do Barba"
        );
    
        $this->template->load("templates/adminTemplate","produto/index", $data);
    }
    
    //alteração de produtos
   public function alterar(){
    $this->load->model("ProdutoModel");  
    
    $id = $_GET["codigo"];

    $retorno = $this->ProdutoModel->buscarId( $id );
    
    $data = array(
        "titulo"=>"Alteração de Produto",
        "produto"=>$retorno[0]

    );
            $this->load->view("produto/formAlterar", $data);
   }
      //salva os dados atulizados
   public function salvaralteracao(){
        $this->load->model("ProdutoModel");
         
         $id = $_POST["id"];
         $nome = $_POST["nome"];
         $tipo_produto = $_POST["tipo_produto"];
         $valor = $_POST["valor"];
         $imagem = $_POST['imagem'];
         
     
         $retorno = $this->ProdutoModel->salvaralteracao($id, $nome, $tipo_produto, $valor, $imagem );

         if ($retorno == true ){
         header('location: /index.php/produto');
         }
         else {
             echo "Houve erro na alteração ";
         }
        
   }
     //criar novo
    public function novo(){
        $nome = $_POST['nome'];
        $perecivel = $_POST['perecivel'];
        $valor = $_POST['valor'];
        $tipo_produto = $_POST['tipo_produto'];
        $imagem = $_POST['imagem'];
        

       $data = array(
           "nome" => $nome,
           "perecivel" => ($perecivel=="on")?(1):(0),
           "valor" => $valor,
           "tipo_produto" => $tipo_produto,
           "imagem" => $imagem
           
       );

       
       $this->load->model("produtomodel");
       $this->produtomodel->inserir($data);

       header("location: /index.php/produto");

    }

    


    public function formNovo(){
        $this->template->load("templates/admintemplate","/produto/formNovo");

    }

   /* public function salvarnovo(){

        $this->load->model("ProdutoModel");
         
         
         $nome = $_POST["nome"];
         $tipo_produto = $_POST["tipo_produto"];
         $valor = $_POST['valor'];
         $imagem = $_POST["imagem"];
         $perecivel = $_POST['perecivel'];
         
     
         $retorno = $this->ProdutoModel->salvarnovo($nome, $tipo_produto, $valor, $imagem, $perecivel );

         header("location: /index.php/produto");

    }*/
    
    public function excluir(){

        $this->load->model("ProdutoModel");

        $id = $_GET["codigo"];

        $this->ProdutoModel->excluir($id);

        header("location: /index.php/produto");
    }

   }

?>