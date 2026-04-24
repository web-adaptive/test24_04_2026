<?php

namespace App\Services\FeedbackSavers;

interface FeedbackSaverInterface
{
    public function save(array $payload): void;
}
