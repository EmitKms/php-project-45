<?php

namespace BrainGames\Games\Progression;

use function BrainGames\GameEngine\engineGameLaunch as start;

use const BrainGames\GameEngine\QUESTIONS_COUNT;

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
    $hiddenElementProgress = array_rand($progression);
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

function runGameBrainProgression()
{
    $gameDescription = "What number is missing in the progression?";
    $gameData = [];
    for ($i = 0; $i < QUESTIONS_COUNT; $i++) {
        $gameData[] = passProgressionResponse();
    }
    start($gameData, $gameDescription);
}
