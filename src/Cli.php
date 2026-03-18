<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function run(string $messageEndingWithS = 'welcomes'): string
{
    $messages = require __DIR__ . '/../config/messages.php';

    line($messages[$messageEndingWithS]);
    $name = prompt($messages['ask_name']);
    line(sprintf($messages['hello'], $name));

    return $name;
}
