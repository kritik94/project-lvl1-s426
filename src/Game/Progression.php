<?php

namespace BrainGames\Game\Progression;

const DESCRIPTION = 'What number is missing in the progression?';
const PROGRESSION_STEPS = 10;

function genRiddle()
{
    $startNumber = rand(1, 10);
    $step = rand(1, 10);
    $endNumber = $startNumber + $step * PROGRESSION_STEPS - 1;
    $hidden = rand(1, 8);

    $progression = range($startNumber, $endNumber, $step);
    $answer = (string) $progression[$hidden];

    $progression[$hidden] = '..';
    $question = implode(' ', $progression);

    return [
        'question' => $question,
        'answer' => $answer,
    ];
}
