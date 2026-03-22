<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\GameEngine\engineGameLaunch as start;
use function Config\GameDescription\gameDesription;

const MIN_RAND = 10;
const MAX_RAND = 90;

function calculateDivisorGcd(int $a, int $b): int
{
    if ($b === 0) {
        return $a;
    }
    return calculateDivisorGcd($b, $a % $b);
}

function generateRound(): array
{
    $numberRandFirst = random_int(MIN_RAND, MAX_RAND);
    $numberRandSecond = random_int(MIN_RAND, MAX_RAND);

    $correctAnswer = calculateDivisorGcd($numberRandFirst, $numberRandSecond);
    $question = "{$numberRandFirst} {$numberRandSecond}";

    return [$question, $correctAnswer];
};

function runGameBrainGcd(): void
{
    start(__NAMESPACE__ . '\\generateRound', gameDesription('brain-gcd'));
}
