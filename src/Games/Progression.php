<?php

namespace BrainGames\Games\Progression;

use function BrainGames\GameEngine\engineGameLaunch as start;
use function Config\GameDescription\gameDesription;

const MIN_START = 1;
const MAX_START = 200;
const MIN_LENGTH = 5;
const MAX_LENGTH = 10;
const MIN_STEP = 3;
const MAX_STEP = 8;

function passProgressionResponse(): array
{
    $step = random_int(MIN_STEP, MAX_STEP);
    $startOfProgression = random_int(MIN_START, MAX_START);
    $progression = [];

    $progression = createProgression($startOfProgression, $step);
    $hiddenElementProgress = random_int(0, count($progression) - 1);

    $correctAnswer = $progression[$hiddenElementProgress];
    $progression[$hiddenElementProgress] = '..';

    $questionGame = implode(" ", $progression);
    return [$questionGame, $correctAnswer];
}

function createProgression(int $startOfProgression, int $step): array
{
    $maxProgressionLenght = random_int(MIN_LENGTH, MAX_LENGTH) - 1;
    return range($startOfProgression, $startOfProgression + $step * ($maxProgressionLenght), $step);
}

function generateRound(): array
{
    return passProgressionResponse();
}

function runGameBrainProgression(): void
{
    start(__NAMESPACE__ . '\\generateRound', gameDesription('brain-progression'));
}
