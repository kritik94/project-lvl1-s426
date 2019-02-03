<?php

namespace BrainGames\Game\Progression;

const DESCRIPTION = 'What number is missing in the progression?';
const PROGRESSION_LENGTH = 10;

function runGame()
{
    \BrainGames\Engine\run(getRiddleGenerator(), DESCRIPTION);
}

function getRiddleGenerator()
{
    return function () {
        $startNumber = rand(1, 10);
        $step = rand(1, 10);
        $endNumber = $startNumber + $step * PROGRESSION_LENGTH - 1;
        $hiddenElementPosition = rand(0, PROGRESSION_LENGTH - 1);

        $progression = range($startNumber, $endNumber, $step);
        $answer = (string) $progression[$hiddenElementPosition];

        $progression[$hiddenElementPosition] = '..';
        $question = implode(' ', $progression);

        return [
            'question' => $question,
            'answer' => $answer,
        ];
    };
}
