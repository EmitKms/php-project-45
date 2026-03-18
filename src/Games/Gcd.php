<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\GameEngine\engineGameLaunch as start;

use const BrainGames\GameEngine\QUESTIONS_COUNT;

const MIN_RAND = 10;
const MAX_RAND = 90;
const GAME_DESCRIPTION = "Find the greatest common divisor of given numbers.";

function calculateDivisorGcd(int $a, int $b): int
{
    if ($b === 0) {
        return $a;
    }
    return calculateDivisorGcd($b, $a % $b);
}

function runGameBrainGcd(): void
{
    $gameData = [];
    for ($i = 0; $i < QUESTIONS_COUNT; $i++) {
        $numberRandFirst = random_int(MIN_RAND, MAX_RAND);
        $numberRandSecond = random_int(MIN_RAND, MAX_RAND);
        $correctAnswer = calculateDivisorGcd($numberRandFirst, $numberRandSecond);
        $question = "{$numberRandFirst} {$numberRandSecond}";
        $gameData[] = [$question, $correctAnswer];
    }
    start($gameData, GAME_DESCRIPTION);
}
