<?php 
//atividade avaliativa Sabrina

abstract class Robo {
   public $nome;
   public $modelo;
   public $energia;
   public $potencia;
   public $funcao;

   public function __construct($modelo, $nome, $energia, $potencia,$funcao){
    $this->nome = $nome;
    $this->modelo = $modelo;
    $this->energia = $energia;
    $this->potencia = $potencia;
    $this->funcao = $funcao;
   
  
  public function getExplorador(){
    return this->Explorador;
  }
  public function getEngenheiro(){
    return this->Engenheiro;
  }
  public function getDefensor(){
    return this->Defensor;
  }
  //request method
  if ($_SERVER["REQUEST_METHOD"]==="POST"){
    $nome = $_POST["nome"] ?? "";
    $operador = $_POST["operador"] ?? "";
    $modelo = $_POST["modelo"] ?? "";

    if($nome === "" || $modelo == "" || $operador){
        $mensagem == "Campos nao preenchidos";
    }
    else{
            if($modelo === "explorador"){
              $potencia = 20;
              $energia = 100;
              $funcao = "Investigar Planetas";
           }
    else if($modelo === "engenheiro"){
            $potencia = 15;
            $energia = 120;
            $funcao = "Reparar equipamentos";

      }
    else if($modelo === "Defensor"){

        }
    }

    }
  }
}

?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estaçao Espacial</title>
</head>
<body>
    <form>

        <label>
        
        </label>
    </form>
</body>
</html>