<?php

namespace BrainGames\Even;

use function BrainGames\Cli\run;
use function Cli\Line;
use function Cli\Prompt;

const MIN_RAND = 1;
const MAX_RAND = 500;
const QUESTIONS_COUNT = 3;

function isEven(int $number)
{
    return $number % 2 === 0;
}

function runGameBrainEven()
{
    $name = run();
    print_r("Answer 'yes' if the number is even, otherwise answer 'no'.\n");
    $gameData = [];
    for ($i = 0; $i < QUESTIONS_COUNT; $i++) {
        $questionGame = rand(MIN_RAND, MAX_RAND);
        $correctAnswer = isEven($questionGame) ? 'yes' : 'no';
        $gameData[] = [$questionGame, $correctAnswer];
    }
    foreach ($gameData as [$question, $correctAnswer]) {
        line("Question: {$question}");
        $userAnswer = prompt("Your answer");
        if ((string) $correctAnswer === $userAnswer) {
            line("Correct!\n");
        } else {
            line("{$userAnswer} is wrong answer! ;(. Correct answer was {$correctAnswer}");
            line("Let's try again, {$name}!\n");
            exit;
        }
    }
    line("Congratulations, {$name}");
}
