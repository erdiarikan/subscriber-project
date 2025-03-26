<?php

declare(strict_types=1);

namespace App\Jobs;

use App\Models\Subscriber;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

final class CreateSubscriberJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(private readonly array $subscriberData)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Subscriber::create($this->subscriberData);
    }
}
