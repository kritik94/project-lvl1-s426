<?php

namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

const RIGHT_ANSWERS_FOR_WINNING = 3;

function run($genRiddle = null, $description = '')
{
    line('Welcome to the Brain Game!');
    line($description . PHP_EOL);

    $name = prompt('May I have your name?', false, ' ');
    line("Hello, %s!" . PHP_EOL, $name);

    if (is_null($genRiddle)) {
        return;
    }

    for ($step = 1; $step <= RIGHT_ANSWERS_FOR_WINNING; $step++) {
        $riddle = $genRiddle();
        $question = $riddle['question'];
        $correctAnswer = $riddle['answer'];

        line('Question: %s', $question);
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

