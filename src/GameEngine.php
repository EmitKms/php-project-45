<?php

namespace BrainGames\GameEngine;

use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\run;
use function Config\Messages\message;

const QUESTIONS_COUNT = 3;

function engineGameLaunch(array $gameData, string $gameDescription): void
{

    $playerName = run('welcome');

    line("{$gameDescription}");

    foreach ($gameData as [$question, $correctAnswer]) {
        line(message('question'), $question);
        $userAnswer = prompt(message('your_answer'));
        if ((string) $correctAnswer === $userAnswer) {
            line(message('correct'));
        } else {
            line(message('wrong'), $userAnswer, $correctAnswer);
            line(message('try_again'), $playerName);
            exit;
        }
    }
    line(message('congrats'), $playerName);
}
