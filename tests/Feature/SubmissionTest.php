<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use App\Models\Submission;
use App\Jobs\ProcessSubmission;
use Tests\TestCase;

class SubmissionTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_submission_endpoint(): void
    {
        $payload = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'message' => 'This is a test message.'
        ];

        $response = $this->json('POST', '/api/submit', $payload);
        $response->assertStatus(202);

        $this->assertDatabaseHas('submissions', $payload);
    }
}
