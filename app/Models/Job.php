<?php

namespace App\Models;

class Job
{
    public static function getAllJobs(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Software Engineer',
                'salary' => '$80,000',
                'location' => 'New York'
            ],
            [
                'id' => 2,
                'title' => 'Product Manager',
                'salary' => '$95,000',
                'location' => 'San Francisco'
            ],
            [
                'id' => 3,
                'title' => 'UX Designer',
                'salary' => '$75,000',
                'location' => 'Remote'
            ]
        ];
    }
}