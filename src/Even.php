<?php

namespace BrainGames\Even;

use function \cli\line;
use function \cli\prompt;

const RIGHT_ANSWERS_FOR_WINNING = 3;

function run()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if number even otherwise answer "no".' . PHP_EOL);

    $name = prompt('May I have your name?', false, ' ');
    line("Hello, %s!" . PHP_EOL, $name);

    for ($step = 1; $step <= RIGHT_ANSWERS_FOR_WINNING; $step++) {
        $questionNumber = rand(1, 100);
        $correctAnswer = isEven($questionNumber) ? 'yes' : 'no';

        line('Question: %d', $questionNumber);
        $answer = prompt('Your answer', false, ': ');

        if ($answer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, Bill!");

            return;
        }
    }

    line('Congratulations, %s!', $name);
}

function isEven($number)
{
    return $number % 2 === 0;
}
