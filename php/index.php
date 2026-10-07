<?php
declare(strict_types=1);

$matrixA = [
    [1, 2],
    [3, 4]
];
$matrixB = [
    [5, 4],
    [8, 2]
];


    function sumMatrix(array $matrixA, array $matrixB): array{
    $matrixC = [];
    for($i=0; $i < count($matrixA); $i++){
        for($j=0; $j < count($matrixA[$i]); $j++)
            $matrixC[$i][$j] = $matrixA[$i][$j] + $matrixB[$i][$j];
    }
    return $matrixC;
    }
    echo "<pre>";
    $matrixC = sumMatrix($matrixA, $matrixB);
    echo "<pre>";


    function createMatrixHTML(array $matrix):string{
        $html = "<tabela>";
        
        foreach($matrix as $row){
            $html .= "<tr>";
            foreach($row as $item){
                $html .= "<td>" . $item ."</td>";
            }
            $html .= "</tr>";
        }


        return $html . "</table>";

    }


    /**
 * Przyjmuje dwuwymiarową tablicę i zwraca kod html reprezentujący macierz.
 *
 * @param array $tablica2D
 * @return string Kod html w postaci ciągu znaków (`<tbody>`).
 */
function wizualizatorMacierzy(array $tablica2D): string
{
    $html = "<tbody>";
    foreach ($tablica2D as $wiersz) {
        $html .= "<tr>";
        foreach ($wiersz as $kolumna) {
            $html .= "<td>" . $kolumna . "</td>";
        }
        $html .= "</tr>";
    }
    $html .= "</tbody>";

    return $html;
}

?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macierze</title>
    <style>
        hr{
    margin: 40px 0;
}
.obliczenia {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 40px;
    width: 400px;
}

.obliczenia table {
    border-left: 1px solid;
    border-right: 1px solid;
    padding: 0 2px 0 8px;
}

.obliczenia td {
    width: 20px;
    padding: 2px 5px;
}

span{
    width: 20px;
    text-align: center;
}
    </style>
</head>
<body>
    <div class="obliczenia">
    <table>
        <?php echo wizualizatorMacierzy($matrixA) ?>
    </table>
    <span>+</span>
    <table>
        <?php echo wizualizatorMacierzy($matrixB) ?>
    </table>
    <span>=</span>
    <table>
        <?php echo wizualizatorMacierzy($matrixC) ?>
    </table>
</div>
</body>
</html>