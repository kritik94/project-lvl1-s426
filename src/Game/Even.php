<?php

namespace BrainGames\Game\Even;

const DESCRIPTION = 'Answer "yes" if number even otherwise answer "no".';

function runGame()
{
    \BrainGames\Engine\run(getRiddleGenerator(), DESCRIPTION);
}

function getRiddleGenerator()
{
    return function () {
        $question = rand(1, 100);
        $answer = isEven($question) ? 'yes' : 'no';

        return [
            'question' => $question,
            'answer' => $answer,
        ];
    };
}

function isEven($number)
{
    return $number % 2 === 0;
}
