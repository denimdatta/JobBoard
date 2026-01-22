<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * Represents a class for managing job-related operations.
 *
 * This class provides methods for retrieving all job listings
 * and finding a specific job by its unique identifier (ID).
 */
class Job
{
    /**
     * Retrieves a list of all available jobs.
     *
     * @return array
     */
    public static function getAllJobs(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Software Engineer',
                'salary' => '$80,000',
                'location' => 'New York',
            ],
            [
                'id' => 2,
                'title' => 'Product Manager',
                'salary' => '$95,000',
                'location' => 'San Francisco',
            ],
            [
                'id' => 3,
                'title' => 'UX Designer',
                'salary' => '$75,000',
                'location' => 'Remote',
            ],
        ];
    }

    /**
     * Retrieves a specific job by its ID.
     *
     * This method searches for a job within the list of all jobs
     * using the provided ID. If no job is found with the given ID,
     * a 404 HTTP response is triggered with the message "Job not found."
     *
     * @param int $id The unique identifier of the job to be retrieved.
     * @return array The job details matching the provided ID.
     *
     * @throws HttpException If the job is not found.
     */
    public static function find(int $id): array
    {
        $job = Arr::first(static::getAllJobs(), fn ($job) => $job['id'] === $id);

        abort_if(! $job, 404, 'Job not found.');

        return $job;
    }
}
