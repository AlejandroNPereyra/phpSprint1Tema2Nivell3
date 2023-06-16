<?php

/*- Exercici 1

El sedàs d'Eratòstenes és un algoritme pensat per a trobar nombres primers dins d'un interval donat. 
Basant-te en la informació de l'enllaç adjunt, implementa el sedàs d'Eratòstenes dins d'una funció, 
de tal forma que puguem invocar la funció per a un número concret.*/

$limitNumber = $_POST['number'];

function Eratosthenes ($limitNumber) {

    $isPrime = array_fill(0, $limitNumber + 1, true);

    $isPrime[0] = false;
    $isPrime[1] = false;

    for ($i = 2; $i * $i <= $limitNumber; $i++) {

        if ($isPrime[$i]) {
            
            for ($j = $i * $i; $j <= $limitNumber; $j += $i) {

                $isPrime[$j] = false;
            }
        }
    }

    $primes = [];

    for ($i = 2; $i <= $limitNumber; $i++) {

        if ($isPrime[$i]) {
            
            $primes[] = $i;

        }
    }

    return $primes;
}

$primes = Eratosthenes($limitNumber);

echo "Prime numbers up to ".$limitNumber." are: ";

foreach ($primes as $prime) {

    echo $prime . " ";

}

?>