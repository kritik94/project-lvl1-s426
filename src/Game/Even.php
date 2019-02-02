<?php

namespace BrainGames\Game\Even;

const DESCRIPTION = 'Answer "yes" if number even otherwise answer "no".' ;

function genRiddle()
{
    $question = rand(1, 100);
    $answer = isEven($question) ? 'yes' : 'no';

    return [
        'question' => $question,
        'answer' => $answer,
    ];
}

function isEven($number)
{
    return $number % 2 === 0;
}
