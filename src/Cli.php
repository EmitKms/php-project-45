<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;
use function Config\Messages\message;

function run(string $plural = 'welcomes'): string
{
    line(message($plural));
    $name = prompt(message('ask_name'));
    line(sprintf(message('hello'), $name));

    return $name;
}
