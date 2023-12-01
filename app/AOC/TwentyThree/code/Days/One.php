<?php

namespace App\AOC\TwentyThree\code\Days;

use App\AOC\TwentyThree\code\Puzzle;
use Illuminate\Support\Facades\File;

class One implements Puzzle
{
    public function solvePartA(): string|null
    {
        $input = explode("\n", $this->getPuzzleInput());

        return array_sum(array_map(function($item) {
            $numeric = preg_replace('/[^0-9]/', '', $item);
            return (int) $numeric[0].$numeric[-1];
        }, $input));
    }

    public function solvePartB(): string|null
    {
        $input = explode("\n", $this->getPuzzleInput());

        return array_sum(array_map(function($item) {
            $matches = [];
            preg_match_all('/(?=(one|two|three|four|five|six|seven|eight|nine|1|2|3|4|5|6|7|8|9))/', $item, $matches);

            $string = str_replace(
                ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'],
                [1, 2, 3, 4, 5, 6, 7, 8, 9],
                implode('', $matches[1])
            );

            return (int) $string[0].$string[-1];
        }, $input));
    }

    public function getPuzzleInput(): string
    {
        return trim(File::get(storage_path('../app/AOC/TwentyThree/input/One.input')));
    }

    public function getTitle(): string
    {
        return 'Day 1: Trebuchet calibration';
    }
}
