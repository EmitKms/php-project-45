<?php

namespace BrainGames\Games\Even;

use function BrainGames\GameEngine\engineGameLaunch as start;
use function Config\Gamedescription\gameDesc;

const MIN_RAND = 1;
const MAX_RAND = 99;

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function runGameBrainEven(): void
{
    $generateRound = function (): array {

        $questionGame = random_int(MIN_RAND, MAX_RAND);

        $correctAnswer = isEven($questionGame) ? 'yes' : 'no';

        return [$questionGame, $correctAnswer];
    };

    start($generateRound, gameDesc('brain-even'));
}
