<?php 
//atividade avaliativa Sabrina

abstract class Robo {
   public $nome;
   public $informs[
     
   ];

   public function __construct($nome){
    $this->nome = $nome;
    
   }
       abstract public function operar();
}

//-----------------------------------------------------

class Explorador extends Robo{
    public function operar(){
        return "Preparando maquina";
    }
}
class Engenheiro extends Robo{
    public function operar(){
        return "Preparando maquina";
    }
}
class Defensor extends Robo{
    public function operar(){
        return "Preparando maquina";
    }
}

//________________________________________________________________//


//________________________________________________________________//

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
                 
                    $robo = new Explorador($nome);
               }
           else if($modelo === "engenheiro"){
                 $robo = new Engenheiro($nome);

                }
            else if($modelo === "Defensor"){
                $robo = new Defensor($nome);
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
    <form class="" method="POST">

        <label for="nome">Nome do Robo: </label>
        <input type="text" id="nome" nome="nome">

        <label for="nome">Modelo do Robo: </label>
        <input type="text" id="modelo" nome="modelo">

        <label for="nome">Nome do operador: </label>
        <input type="text" id="operador" nome="operador">
        <button class="submit">Enviar</button>
    </form>
    <h1>Estaçao espacial</h1>
    <p>Nome do Robo: <?=$nome?></p>
    <p>Modelo do robo cadastrado: <?=$modelo?></p>
    <p>Nome do operador: <?=$operador?></p>
</body>
</html>