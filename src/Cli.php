<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;



function run(): string
{
    $messages = require_once __DIR__ . '/../config/messages.php';

    line($messages['welcome']);
    $name = prompt($messages['ask_name']);
    line(sprintf($messages['hello'], $name));

    return $name;
}
