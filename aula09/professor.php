<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professor PHP</title>
</head>
<body>
    
    <?php
        $nota = array(7,10,9,8,6);
        $faltas = array(1,0,1,1,1,1,0);

        function calcularMedia($notas) {

            $soma=0;
            $totalNotas= count($nota);
            $somaNotas =sumArray($nota)

            for ($notas =0; $notas < $totalNotas; $notas++){
                $somaNotas += $nota[$notas];
            };
           $mediaNotas= $totalNotas/$somaNotas;

        }
    ?>

</body>
</html>