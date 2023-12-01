<?php

namespace App\AOC\TwentyThree\code\Days;

use App\AOC\TwentyThree\code\Puzzle;
use Illuminate\Support\Facades\File;

class One implements Puzzle
{
    public function solvePartA(): string|null
    {
        return '12345';
    }

    public function solvePartB(): string|null
    {
        return '56789';
    }

    public function getPuzzleInput(): string
    {
        return File::get(storage_path('../app/AOC/TwentyThree/input/One.input'));
    }

    public function getTitle(): string
    {
        return 'Day 1: Trebuchet calibration';
    }
}
