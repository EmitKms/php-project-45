<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\GameEngine\engineGameLaunch as start;
use function Config\Gamedescription\gameDesc;

const MIN_RAND = 10;
const MAX_RAND = 90;


function calculateDivisorGcd(int $a, int $b): int
{
    if ($b === 0) {
        return $a;
    }
    return calculateDivisorGcd($b, $a % $b);
}

function runGameBrainGcd(): void
{
    $generateRound = function (): array {

        $numberRandFirst = random_int(MIN_RAND, MAX_RAND);
        $numberRandSecond = random_int(MIN_RAND, MAX_RAND);

        $correctAnswer = calculateDivisorGcd($numberRandFirst, $numberRandSecond);
        $question = "{$numberRandFirst} {$numberRandSecond}";

        return [$question, $correctAnswer];
    };
    start($generateRound, gameDesc('brain-gcd'));
}
