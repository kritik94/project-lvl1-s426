<?php

namespace BrainGames\Games\Calc;

const DESCRIPTION = 'What is the result of the expression?' ;
const OPERATIONS = ['+', '-', '*'];

function genRiddle()
{
    $operation = chooseRand(OPERATIONS);
    $leftOperand = rand(0, 10);
    $rightOperand = rand(0, 10);

    $question = sprintf('%d %s %d', $leftOperand, $operation, $rightOperand);
    $answer = (string) calcAnswer($operation, $leftOperand, $rightOperand);

    return [
        'question' => $question,
        'answer' => $answer,
    ];
}

function chooseRand($array)
{
    return $array[array_rand($array, 1)];
}

function calcAnswer($operation, $leftOperand, $rightOperand)
{
    switch ($operation) {
        case '+':
            return $leftOperand + $rightOperand;
        case '-':
            return $leftOperand - $rightOperand;
        case '*':
            return $leftOperand * $rightOperand;
    }
}
