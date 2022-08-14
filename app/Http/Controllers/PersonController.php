<?php

namespace App\Http\Controllers;

class PersonController extends Controller
{
    public function __invoke()
    {
        $persons = [
            [
                'id' => 1,
                'name' => 'Vasya',
                'age' => 41,
                'job' => 'developer'
            ],
            [
                'id' => 1,
                'name' => 'Petja',
                'age' => 28,
                'job' => 'developer'
            ],
            [
                'id' => 1,
                'name' => 'Olya',
                'age' => 17,
                'job' => 'rest'
            ],
        ];
        return $persons;
    }
}
