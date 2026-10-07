<?php
declare(strict_types=1);
$produkty = ["banan", "jabłko", "pomarańcza", "truskawka", "czereśnia"];
$liczby = [3, 420, 67, 69, 2137];



/**
 * Oblicza sigmę czyli sumę wartości elementów
 * 
 *  @param array $liczby
 *  @return float
 * 
 */
function sigma(array $liczby):float{
    $wynik = 0;
    
    for ($i = 0; $i < count($liczby); $i++){
        $wynik += $liczby[$i];
    }
    return $wynik;
}

echo sigma($liczby);

/**
 * Wyszukuje i zwraca największą wartość w tablicy
 *
 * @param array $tab
 * @return float Zwraca największą wartość w tablicy
 */
function maksimum(array $tab) :float {
    $max = $tab[0];    
    foreach($tab as $el){
        if($max < $el){
            $max=$el;
        }
    }
    return $max;
}
/**
 * Wyszukuje i zwraca najmniejszą wartość w tablicy
 *
 * @param array $tab
 * @return float Zwraca najmniejszą wartość w tablicy
 */
function minimum(array $tab) :float {
    $min = $tab[0];    
    foreach($tab as $el){
        if($min > $el){
            $min=$el;
        }
    }
    return $min;
}
print_r($liczby);

echo "\nMaksimum to:" . maksimum($liczby);
echo "\nMinimum to:" . minimum($liczby);

/**
 * Odwraca przekazaną tablicę. Przekazanie jej jako referencji `&` modyfikuje oryginał.
 *
 * @param array $tablica o dowolnym rozmiarze i typie wartości elementów.
 * @return void Modyfikowany jest oryginał.
 */
function odwracanie(array &$tablica) : void {

    $temp=[];

    for ($i=count($tablica)-1; $i >= 0; $i--) { 
        $temp[]=$tablica[$i];
    }
    $tablica=$temp;
}

$owoce = array("banan", "jabłko", "pomarańcza", "truskawka", "czereśnia");
odwracanie($owoce);




?>