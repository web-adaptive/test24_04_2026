<?php

namespace App\Services\FeedbackSavers;

use InvalidArgumentException;

class FeedbackSaverFactory
{
    public function make(string $channel): FeedbackSaverInterface
    {
        if ($channel === 'database') {
            return new DatabaseFeedbackSaver();
        }

        if ($channel === 'email') {
            return new EmailFeedbackSaver();
        }

        throw new InvalidArgumentException('Unsupported save channel.');
    }
}
