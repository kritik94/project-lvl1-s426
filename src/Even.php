<?php

namespace BrainGames\Even;

use function \cli\line;
use function \cli\prompt;

function run()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if number even otherwise answer "no".' . PHP_EOL);

    $name = prompt('May I have your name?', false, ' ');
    line("Hello, %s!" . PHP_EOL, $name);

    $rightAnswersForWinning = 3;

    for ($step = 1; $step <= $rightAnswersForWinning; $step++) {
        $number = rand(1, 100);
        $correctAnswer = $number % 2 === 0 ? 'yes' : 'no';

        line('Question: %d', $number);
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
