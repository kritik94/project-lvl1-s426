<?php

namespace BrainGames\Game\Greeting;

use function cli\line;
use function cli\prompt;

function runGame()
{
    line('Welcome to the Brain Game!' . PHP_EOL);

    $name = prompt('May I have your name?', false, ' ');
    line("Hello, %s!", $name);
}
