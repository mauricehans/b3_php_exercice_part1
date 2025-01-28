<?php

/**
 * ÉNONCÉ:
 * Refactoriser le code ci-dessous en créant une classe Statistics
 */
class Statistics {
    protected array $numbers;

    public function __construct(array $numbers)
    {
        $this->numbers = $numbers;
    }

    public function getSum(): float
    {
        $sum = 0;
        foreach ($this->numbers as $number) {
            $sum += $number;
        }
        return $sum;
    }

    public function getAverage(): float
    {
        if (count($this->numbers) === 0) {
            return 0;
        }
        return $this->getSum() / count($this->numbers);
    }

    public function getMin(): float
    {
        if (count($this->numbers) === 0) {
            return 0;
        }
        $min = $this->numbers[0];
        foreach ($this->numbers as $number) {
            if ($number < $min) {
                $min = $number;
            }
        }
        return $min;
    }

    public function getMax(): float
    {
        if (count($this->numbers) === 0) {
            return 0;
        }
        $max = $this->numbers[0];
        foreach ($this->numbers as $number) {
            if ($number > $max) {
                $max = $number;
            }
        }
        return $max;
    }
}
/**
 * 
 * ------------------------------------------------------------------------------------------------------
 */

$numbers = [10, 5, 8, 20, 3, 15];


/**
 * Calcule la somme d'un tableau de nombres
 */
function getSum(array $numbers): float
{
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

/**
 * Calcule la moyenne d'un tableau de nombres
 */
function getAverage(array $numbers): float
{
    if (count($numbers) === 0) {
        return 0;
    }
    return getSum($numbers) / count($numbers);
}

/**
 * Trouve la valeur minimale d'un tableau de nombres
 */
function getMin(array $numbers): float
{
    if (count($numbers) === 0) {
        return 0;
    }
    $min = $numbers[0];
    foreach ($numbers as $number) {
        if ($number < $min) {
            $min = $number;
        }
    }
    return $min;
}

/**
 * Trouve la valeur maximale d'un tableau de nombres
 */
function getMax(array $numbers): float
{
    if (count($numbers) === 0) {
        return 0;
    }
    $max = $numbers[0];
    foreach ($numbers as $number) {
        if ($number > $max) {
            $max = $number;
        }
    }
    return $max;
}

/**
 * 
 * ------------------------------------------------------------------------------------------------------
 */
echo "Tableau de nombres : " . implode(", ", $numbers) . "<br>";
echo "Somme : " . getSum($numbers) . "<br>";
echo "Moyenne : " . getAverage($numbers) . "<br>";
echo "Valeur minimale : " . getMin($numbers) . "<br>";
echo "Valeur maximale : " . getMax($numbers) . "<br>";
