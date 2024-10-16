<?php
 $num = $_GET['n'];

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exemplo 1 - Comprimento do Fio </title>
</head>
<body class="bg-info-subtle">

<div class="card w-25 shadow-lg p-3 mb-5  rounded mx-auto mt-5 text-center">
<table class="table">
  <tbody>
<?php
 
 for ($i=0;$i<=10; $i++){
  echo '<tr>';
     echo'<td>'.$num.' X '.$i.' = '.$num*$i.'</td>';
     echo '</tr>';

 }
?>                                
</tbody>
</table> 
<div class="cold-md-12">
   <a href="index.php">Voltar</a>
</div>

</div>
     
</body>
</html>
