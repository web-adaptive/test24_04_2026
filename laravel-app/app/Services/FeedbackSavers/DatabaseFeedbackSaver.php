<?php

namespace App\Services\FeedbackSavers;

use Illuminate\Support\Facades\Log;

class DatabaseFeedbackSaver implements FeedbackSaverInterface
{
    public function save(array $payload): void
    {
        Log::info('Feedback saved to database channel', $payload);
    }
}
