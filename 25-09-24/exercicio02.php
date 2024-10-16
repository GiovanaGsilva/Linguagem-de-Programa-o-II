<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exemplo 2 - Tabuada </title>
</head>
<body class="bg-info-subtle">
         <form> 
                <div class= " shadow-lg p-3 mb-5  card w-50 mx-auto mt-5">
                        <div class = "card-body">
                        <h5 class= "card-title text-center"> Tabuada</h5>
                                <div class= "row">
                                        <div class="col-md-6">
                                        <label> Informe um número</label>
                                        <input  type="number" name="cpnum" class="w-100"> 
                                        </div>
                                        <div class="col-md-3">
                                        <br>
                                        <input  class=" btn btn-success w-100" type= "submit" value="Gerar"/> 
                                        </div>
                                        <div class="col-md-3">
                                                <br>
                                                <input class=" btn btn-warning w-100" type= "reset" value="Limpar"/> 
                                        </div>
                                        <div class="cold-md-12">
                                                <a href="index.php">Voltar</a>
                                        </div>
                                      
                                </div>
                         
                        </div>
                </div>
        </form>
</body>
</html>
<?php
  if (!empty ($_GET)){
        $num = $_GET['cpnum'];
        header('Location:exercicio02resp.php?n='.$num);
     }

     ?>

