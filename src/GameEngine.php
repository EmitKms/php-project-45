<?php

namespace BrainGames\GameEngine;

use function Cli\Line;
use function Cli\Prompt;

const QUESTIONS_COUNT = 3;

function engineGameLaunch(array $gameData, string $gameDescription)
{
    line('Welcome to the Brain Game!');
    $playerName = prompt('May I have your name?');
    line("Hello, %s!", $playerName);
    line("{$gameDescription}");

    foreach ($gameData as [$question, $correctAnswer]) {
        line("Question: {$question}");
        $userAnswer = prompt("Your answer");
        if ((string) $correctAnswer === $userAnswer) {
            line("Correct!");
        } else {
            line("'{$userAnswer}' is wrong answer! ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, %s!", $playerName);
            exit;
        }
    }
    line("Congratulations, %s!", $playerName);
}
