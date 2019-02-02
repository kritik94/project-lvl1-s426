<?php

namespace BrainGames\Game\Prime;

const DESCRIPTION = 'What number is missing in the progression?';

function genRiddle()
{
    $questionNumber = rand(1, 100);

    return [
        'question' => (string) $questionNumber,
        'answer' => isPrime($questionNumber) ? 'yes' : 'no'
    ];
}

function isPrime($number)
{
    if ($number <= 2) {
        return true;
    }

    $halfNumber = floor($number / 2);

    for ($denom = $halfNumber; $denom >= 2; $denom--) {
        if ($number % $denom === 0) {
            return false;
        }
    }

    return true;
}
