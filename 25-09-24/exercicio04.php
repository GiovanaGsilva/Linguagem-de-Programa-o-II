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
                                <p class = "text align: justify">Escrever um programa que lê dois números e efetua uma
                                divisão, mas somente se o divisor for diferente de zero; quando isto ocorrer, é
                                mostrada uma mensagem de erro apropriada.
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
                                                <input  class=" btn btn-success w-100" type= "submit" value="Calcular"/> 
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
                                           
                                                if (empty($_GET)) { // primeiro acesso à página
                                                    echo '<tr>';
                                                    echo '<th>Nenhuma operação</th>';
                                                    echo '</tr>';
                                                } else {
                                                    // apertou o botão analisar
                                                    $n1 = $_GET['num1'];
                                                    $n2 = $_GET['num2'];
                                                
                                                    $divisao = 0;
                                                    $msg = "O segundo número não pode ser zero!";
                                                
                                                    // Verificar se ambos são iguais a zero
                                                    if ($n1 == 0 && $n2 == 0) {
                                                        $msg = "Ambos os números são zero!";
                                                    } elseif ($n2 != 0) {  // Verifica se $n2 não é zero para evitar divisão por zero
                                                        $divisao = $n1 / $n2;
                                                        $msg = "O valor é: $divisao";
                                                    }
                                                
                                                    echo '<tr>';
                                                    echo "<th>$msg</th>";
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


        


                                            