<?php
 $m1 = $_GET['med1'];
 $m2 = $_GET['med2'];
 $fio = sqrt($m1**2 +$m2**2)*100;
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Resposta Exericio 01</title>
</head>
<body class= "bg-info-subtle" >

<div class="card w-50 shadow-lg p-3 mb-5  rounded mx-auto mt-5 ">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Parede 01 (m)</th>
      <th scope="col">Parede 02 (m)</th>
      <th scope="col">Comprimento Fio</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $m1  ?></td>
      <td><?php echo $m2  ?></td>
      <td><?php echo round ($fio,2)  ?></td>
    </tr>
  </tbody>
</table> 

<div class="col-md-12 m-3"> 
  <a href="exercicio01.php">Voltar<a>
</div>

</div>

    
</body>
</html>