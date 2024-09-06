<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Submission;
use App\Events\SubmissionSaved;

class ProcessSubmission implements ShouldQueue
{
    private $data;
    /**
     * Create a new job instance.
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $submission = Submission::create($this->data);
        event(new SubmissionSaved($submission));
    }
}
