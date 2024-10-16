<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exemplo 4 - Divisão </title>
</head>
<body class="bg-info-subtle">
         <form> 
                <div class= " shadow-lg p-3 mb-5  card w-50 mx-auto mt-5">
                        <div class = "card-body">
                        <h5 class= "card-title text-center"> Divisão Tratada </h5>
                                <p class = "text align: justify">Um jogo consiste em se retirar duas fichas de um saco
contendo fichas brancas e pretas. Dependendo da combinação de cores das fichas
retiradas, o jogador ser pago na seguinte proporção: Ou seja, com duas fichas brancas o jogador perde tudo, com uma branca e uma preta
recebe metade do que apostou, com um preta e uma branca recebe seu dinheiro de
volta e com duas pretas recebe o dobro. Elaborar um programa que lê as cores das
duas fichas e calcula o rateio. Procure alguma função PHP que possa sortear
randomicamente as 2 fichas.


                                </p>
                                <div class= "row">
                                        <div class="col-md-8">
                                                <label>Número Aposta</label>
                                                <input type="number" name="num" class="w-100"> 
                                        </div>
                                        
                                        <div class="col-md-2">
                                                <br>
                                                <input  class=" btn btn-success w-100" type= "submit" value="Sortear"/> 
                                        </div>
                                        <div class="col-md-2">
                                                <br>
                                                <input class=" btn btn-warning w-100" type= "reset" value="Limpar"/> 
                                        </div>
                                        <table class="table text-center mt-3 table-bordered table-striped">
  <thead >
    <tr>
      <th scope="col">Primeira Ficha</th>
      <th scope="col">Segunda Ficha</th>
      <th scope="col">Rateio</th>
      <th scope="col">Valor a ser pago</th>
    </tr>
  </thead>
  <tbody >
    <?php
if(empty($_GET)){ //primeiro acesso página
    echo' <tr>';
          echo  '<th>Nenhuma </th>';
          echo  '<th>Nenhuma</th>';
          echo  '<th>0</th>';
          echo  '<th>0.00</th>';
        '</tr>';
    }else {
        $aposta = $_GET['num'];
        $n1 = rand(1,2);
        $n2 = rand(1,2);
        $rateio = 0;
        $valorpago= 0;

        $f1 = ($n1==1)?'Preta':'Branca'; 
        $f2 = ($n2==1)?'Preta':'Branca'; 
        if ($n1==1 && $n2 ==2){
            $rateio = 0;
        }else if($n1==2 && $n2==1){
            $rateio = .5;
        }else if($n1==1 && $n2==2){
            $rateio = 1;
        } else 
            $rateio = 2;
            $valorpago = $aposta *$rateio;

            echo '<tr>';
            echo "<td> $f1 </td>";
            echo "<td> $f2 </td>";
            echo "<td> $rateio </td>";
            echo "<td> $valorpago </td>";
            echo '<tr>';
        }

    
    ?>
  </tbody>
</table>                                
                                <div class="cold-md-12">
                                        <a href="index.php">Voltar</a>
                                </div>




                        </div>
                </div>
        </form>
</body>
</html>
