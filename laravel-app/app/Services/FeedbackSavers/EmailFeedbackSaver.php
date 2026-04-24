<?php

namespace App\Services\FeedbackSavers;

use Illuminate\Support\Facades\Log;

class EmailFeedbackSaver implements FeedbackSaverInterface
{
    public function save(array $payload): void
    {
        Log::info('Feedback saved to email channel', $payload);
    }
}
