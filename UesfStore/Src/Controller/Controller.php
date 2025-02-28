<?php
require_once dirname(__FILE__).'/../Model/User.php';
require_once dirname(__FILE__).'/../Model/Usuario.php';

require_once dirname(__FILE__).'/../Model/Anuncio.php';
require_once dirname(__FILE__).'/../Model/Servico.php';
require_once dirname(__FILE__).'/../Model/Produto.php';

/**
* 
*/
class Controller
{

    public function __construct()
    {

    }

    public function buscarAnuncio($nome,$decricao,$categoria)
    {
        //return new Produto("Celular LG", "Celulares e telefone", "299,99", "HDHDUSHSUDHSUF", "Usado", "1");
    }
    public function cadastrarProduto($titulo,$categoria,$descricao,$preco,$fotoVideo,$quantidade)	
    {
        $mensagem="";
        $exception=0;
        if($titulo=="")
        {
            $mensagem.="Titulo,";
            $exception=1;
        }
        if($categoria=="")
        {
            $mensagem.="Categoria,";
            $exception=1;
        }
        if($descricao=="")
        {
            $mensagem.="Descricao,";
            $exception=1;
        }
        if($preco=="")
        {
            $mensagem.="Preco,";
            $exception=1;
        }
        if($quantidade=="")
        {
            $mensagem.=",";
            $exception=1;
        }
       
        if($exception==1)
        {
            throw new CampoPreenchidoErradoException($mensagem);
        }
        //Mandar para o banco de dados. Pode lançar uma exceção (FalhaEnvioException)
    }
    public function cadastrarServico($titulo,$categoria,$descricao,$preco,$fotoVideo,$aCombinar)	
    {   
        $mensagem="";
        $exception=0;
        if($titulo=="")
        {
            $mensagem.=",Titulo";
            $exception=1;
        }
        if($categoria=="")
        {
            $mensagem.="Categoria,";
            $exception=1;
        }
        if($descricao=="")
        {
            $mensagem.="Descrição,";
            $exception=1;
        }
        if($preco=="")
        {
            $mensagem.="Preco,";
            $exception=1;
        }
        if($aCombinar=="")
        {
            $mensagem.="aCombinar,";
            $exception=1;
        }
        if($exception==1)
        {
            throw new CampoPreenchidoErradoException($mensagem);
        }
        //Mandar para o banco de dados. Pode lançar uma exceção (FalhaEnvioException)
    }
    public function editarAnuncio($titulo,$categoria,$descricao,$preco,$fotoVideo,$dataPublicacao,$dataVencimento)
    {

    }
    public function autenticarAnuncio($anuncio)
    {

    }
    public function checarAnuncio()
    {

    }
    public function enviarAlerta()
    {

    }
    public function buscarUsuario($nome)
    {

    }
    public function cadastrarUsuario($nome,$email,$sexo,$telefone,$celular,$senha,$senhaConfirmacao,$foto,$status)
    {
        $mensagem="";
        $exception=0;
        if($nome=="")
        {
            $mensagem.="Nome,";
            $exception=1;
        }
        if($email=="")
        {
            $mensagem.="Email,";
            $exception=1;
        }
        //Checar e-mail throw new EmailInvalidoException;

        if($sexo=="")
        {
            $mensagem.="Sexo,";
            $exception=1;
        }
        if(strlen($telefone)!=11)
        {
            $mensagem.="Telefone,";
            $exception=1;
        }
        if(strlen($celular)!=11)
        {
            $mensagem.="Celular,";
            $exception=1;
        }
        if(strlen($senha)<6 | $senha != $senhaConfirmacao)
        {
            $mensagem.="Senha,";
            $exception=1;
        }
        /*Buscar usuario e lançar UsuarioJaCadastradoException
        $usuario = $this->buscarUsuario($email);
        if($usuario instanceof Usuario)
        {
            if($email==$usuario->getEmail())
            {
                throw new UsuarioJaCadastradoException();
            }
        }
        */
        if($exception==1)
        {
            throw new CampoPreenchidoErradoException($mensagem);
        }
        //Mandar para o banco de dados. Pode lançar uma exceção (FalhaEnvioException)
    }
    public function editarCadastro($nome,$email,$sexo,$senha,$foto,$status,$telefone)
    {

    }
    public function autenticarUsuario($usuario)
    {

    }
    public function entrarEmContato($mensagem)
    {

    }
    public function login($email)
    {

    }
    public function recuperarSenha($email)
    {

    }
    public function exportarRelatorio()
    {

    }
    public function enviarMensagem($mensagem)
    {

    }
    public function excluirMensagem($mensagem)
    {

    }
    public function doacao()
    {
 
    }
    public function conectarBancoDeDados()
    {

    }
}
?>