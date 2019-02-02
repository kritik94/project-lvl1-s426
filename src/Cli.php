<?php

namespace BrainGames\Cli;

use function \BrainGames\Engine\run;

function runPromt()
{
    run();
}

function runEven()
{
    run(
        '\BrainGames\Game\Even\genRiddle',
        \BrainGames\Game\Even\DESCRIPTION
    );
}

function runCalc()
{
    run(
        '\BrainGames\Game\Calc\genRiddle',
        \BrainGames\Game\Calc\DESCRIPTION
    );
}
