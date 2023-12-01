<?php

namespace App\AOC\TwentyThree\code\Days;

use App\AOC\TwentyThree\code\Puzzle;
use Illuminate\Support\Facades\File;

class One implements Puzzle
{
    public function solvePartA(): string|null
    {
        return null; //todo: implement
    }

    public function solvePartB(): string|null
    {
      return null; //todo: implement
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
