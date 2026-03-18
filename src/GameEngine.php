<?php

namespace BrainGames\GameEngine;

use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\run;

const QUESTIONS_COUNT = 3;

function engineGameLaunch(array $gameData, string $gameDescription): void
{
    $messages = require_once __DIR__ . '/../config/messages.php';

    $playerName = run();

    line("{$gameDescription}");

    foreach ($gameData as [$question, $correctAnswer]) {
        line($messages['question'], $question);
        $userAnswer = prompt($messages['your_answer']);
        if ((string) $correctAnswer === $userAnswer) {
            line($messages['correct']);
        } else {
            line("'{$userAnswer}' {$messages['wrong']} '{$correctAnswer}'.");
            line($messages['try_again'], $playerName);
            exit;
        }
    }
    line($messages['congrats'], $playerName);
}
