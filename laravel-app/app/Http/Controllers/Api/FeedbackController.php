<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\FeedbackSavers\FeedbackSaverFactory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request, FeedbackSaverFactory $factory): JsonResponse
    {
        $payload = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string'],
            'target' => ['required', 'string'],
        ]);

        $saver = $factory->make($payload['target']);
        $saver->save($payload);

        return response()->json([
            'status' => 'ok',
        ]);
    }
}
