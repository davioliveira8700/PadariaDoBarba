<?php

      class Login extends CI_Controller{
         
        
      
        public function __construct(){
            parent::__construct();
        
        $this->load->model("LoginModel");
        }
        
            
        
            
        
        public function SalvarRegistro(){
           echo $_POST["nome"];
           echo $_POST["email"];

           $num1 = rand(0, 9);
           $num2 = rand(0, 9);
           $num3 = rand(0, 9);
           $num4 = rand(0, 9);
           $num5 = rand(0, 9);
           $num6 = rand(0, 9);

           $chave = $num1 . '' . $num2 . ''.
                    $num3 . '-' . $num4 . ''.
                    $num5 . '' . $num6 . '';

                    echo $chave;

           $data = array(
                     "email"=> $_POST["email"],
                     "nome" => $_POST["nome"],
                     "chave" => "321-543"

           );

           $this->load->model("LoginModel");
           $retorno = $this->LoginModel->registrar($data);

           if( $retorno )
           echo "Veja seu email, para continuar o cadastro";
           else
           "Erro ao criar o usuario";
          }
          public function Registro(){
              $this->load->view('login/register');
          }

          public function RegistrarSenha(){
              $this->load->view('login/registrarsenha');
          }
          public function AlterarSenha(){
              
             
            $email = $_POST["email"];
              $senha =  $_POST["senha"];
              $chave = $_POST["chave"];

              $this->load->model("LoginModel");

              $retorno = $this->LoginModel->CriarSenha($email, $senha, $chave);
              if($retorno)
                echo "Senha cadastrada com sucesso.";
                else
                echo "Senha não pode ser cadastrada.";
           }
           //tela de login
           public function Index(){
               $this->template->load("templates/adminLogin", "login/login");
           
           }
           public function ValidaLogin(){
               $email = $_POST["email"];
               $senha = $_POST["senha"];
              
               $this->load->model("LoginModel");

               $retorno = $this->LoginModel->ValidaLogin($email, $senha);

               if($retorno){
                   $_SESSION["tesi2022"] =array(
                       "email" => $email,
                       "admin" => true
                   );
                   header ("location: /index.php");
              
                   echo "Login executado com sucesso";
               }
               else{
                   echo "Usuario e/ou senha invalido";
               }
           }
      }


?>