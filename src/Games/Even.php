<?php

namespace BrainGames\Games\Even;

use function BrainGames\GameEngine\engineGameLaunch as start;
use function Config\GameDescription\gameDesription;

const MIN_RAND = 1;
const MAX_RAND = 99;

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function generateRound(): array
{
    $questionGame = random_int(MIN_RAND, MAX_RAND);

    $correctAnswer = isEven($questionGame) ? 'yes' : 'no';

    return [$questionGame, $correctAnswer];
}

function runGameBrainEven(): void
{
    start(__NAMESPACE__ . '\\generateRound', gameDesription('brain-even'));
}
