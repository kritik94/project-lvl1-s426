<?php

namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

function run()
{
    line('Welcome to the Brain Game!' . PHP_EOL);
    $name = prompt('May I have your name?', false, ' ');
    line("Hello, %s!", $name);
}
