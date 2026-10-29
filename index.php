<?php 
//atividade avaliativa Sabrina

abstract class Robo {
   public $nome;
   public $modelo;
   public $energia;
   public $potencia;

   public function __construct($modelo, $nome, $energia, $potencia){
    $this->nome = $nome;
    $this->modelo = $modelo;
    $this->energia = $energia;
    $this->potencia = $potencia;
   }
   if($modelo === "explorador"){
      
   };


  public function getExplorador(){
    return this->Explorador;
  }
  public function getEngenheiro(){
    return this->Engenheiro;
  }
  public function getDefensor(){
    return this->Defensor;
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
    
</body>
</html>