<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const RIGHT_ANSWERS_FOR_WINNING = 3;

function run($genRiddle, $description)
{
    line('Welcome to the Brain Game!');
    line($description . PHP_EOL);

    $name = prompt('May I have your name?', false, ' ');
    line("Hello, %s!" . PHP_EOL, $name);

    for ($step = 1; $step <= RIGHT_ANSWERS_FOR_WINNING; $step++) {
        $riddle = $genRiddle();
        ['question' => $question, 'answer' => $correctAnswer] = $riddle;

        line('Question: %s', $question);
        $playerAnswer = prompt('Your answer', false, ': ');

        if ($playerAnswer === $correctAnswer) {
            line('Correct!');
        } else {
            line(
                "'%s' is wrong answer ;(. Correct answer was '%s'.",
                $playerAnswer,
                $correctAnswer
            );
            line("Let's try again, Bill!");

            return;
        }
    }

    line('Congratulations, %s!', $name);
}
