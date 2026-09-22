<?php

// funtion zamienTekst(string $tekst): string{
//     return strtoupper($tekst);
// }
echo WypiszLiczbyPierwszeZZakresu(20);
//funkcja czyPierwsza(int $n):bool - sprawdza czy liczba jest pierwsza potem napisz
function czyPierwsza(int $n): bool{
    if ($n < 2) {
        return false;
    }
    for($i = 2; $i <= sqrt($n); $i++){
        if (($n % $i) == 0) {
            return false;
        }
    }
    return true;
}





// druga funkcję która wypisuje wszsytie liczby
//  pierwsze z przedziału korzystając z tej pierwszej

function WypiszLiczbyPierwszeZZakresu($początek, $koniec){
    for($i = $początek; $i <= $koniec; $i++){
        if(czyPierwsza($i)){
            echo $i;
        }
    }
}



?>