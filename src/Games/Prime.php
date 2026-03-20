<?php

namespace BrainGames\Games\Prime;

use function BrainGames\GameEngine\engineGameLaunch as start;
use function Config\Gamedescription\gameDesc;

const MIN_RAND = -100;
const MAX_RAND = 100;

function isPrime(int $number): bool
{
    if ($number <= 1) {
        return false;
    }
    for ($divider = 2; $divider * $divider <= $number; $divider++) {
        if ($number % $divider === 0) {
            return false;
        }
    }
    return true;
}

function runGameBrainPrime(): void
{
    $generateRound = function (): array {

        $primeNumber = random_int(MIN_RAND, MAX_RAND);

        $correctAnswer = isPrime($primeNumber) ? 'yes' : 'no';

        return [$primeNumber, $correctAnswer];
    };
    start($generateRound, gameDesc('brain-prime'));
}
