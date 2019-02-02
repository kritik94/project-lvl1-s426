<?php

namespace BrainGames\Game\Gcd;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.' ;

function genRiddle()
{
    $firstNumber = rand(2, 100);
    $secondNumber = rand(2, 100);

    $question = sprintf('%d %d', $firstNumber, $secondNumber);
    $answer = (string) findGcd($firstNumber, $secondNumber);

    return [
        'question' => $question,
        'answer' => $answer,
    ];
}

function findGcd(int $first, int $second)
{
    for ($potential = $first; $potential > 0; $potential--) {
        if ($first % $potential === 0 && $second % $potential === 0) {
            return $potential;
        }
    }
}