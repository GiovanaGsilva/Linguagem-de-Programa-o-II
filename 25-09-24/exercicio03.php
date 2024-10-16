<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exemplo 3 - Análise Números </title>
</head>
<body class="bg-info-subtle">
         <form> 
                <div class= " shadow-lg p-3 mb-5  card w-50 mx-auto mt-5">
                        <div class = "card-body">
                        <h5 class= "card-title text-center"> Análise números </h5>
                                <p class = "text align: justify">Elaborar programa que lê dois números quaisquer e mostra
                                    na tela uma mensagem indicando qual é o maior, ou se são iguais.
                                </p>
                                <div class= "row">
                                        <div class="col-md-4">
                                                <label> Número 01</label>
                                                <input type="number" name="num1" class="w-100"> 
                                        </div>
                                        <div class="col-md-4">
                                                <label> Número 02</label>
                                                <input type="number" name="num2" class="w-100"> 
                                        </div>
                                        <div class="col-md-2">
                                                <br>
                                                <input  class=" btn btn-success w-100" type= "submit" value="Analisar"/> 
                                        </div>
                                        <div class="col-md-2">
                                                <br>
                                                <input class=" btn btn-warning w-100" type= "reset" value="Limpar"/> 
                                        </div>

                                <table class="table table-bordered table-striped mt-3 ">
                                     <thead>
                                        <tr>
                                            <th>Resultado</th>
                                         </tr>
                                         
                                     </thead>
                                     <tbody>
                                        <?php
                                            if(empty($_GET)){ //primeiro acesso página
                                            echo' <tr>';
                                                    '<th>Nenhuma operação</th>';
                                                '</tr>';
                                            }else {
                                                //apertou o botão analisar
                                                $n1 = $_GET['num1'];
                                                $n2 = $_GET['num2'];

                                                $maior = 0;
                                                $menor = 0;
                                                $msg = "São iguais";

                                                if ($n1>$n2){
                                                    $maior =$n1;
                                                    $menor = $n2;
                                                    $msg ="O maior número: $maior e Menor: $menor";
                                                   

                                                }else if($n1<$n2){
                                                    $maior =$n2;
                                                    $menor = $n1;
                                                    $msg ="O maior número: $maior e Menor: $menor";
                                              
                                
                                                }else
                                               echo' <tr>';
                                               echo     "<th> $msg;</th>";
                                               echo '</tr>';
                                                

                                            }
                                        ?>
                                        
        
                                        </tr>
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


        


                                            