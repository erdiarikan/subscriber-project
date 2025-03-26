<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\SubscriberRequest;
use App\Http\Resources\SubscriberResource;
use App\Jobs\CreateSubscriberJob;
use App\Models\Subscriber;
use Illuminate\Http\JsonResponse;

final class SubscriberController extends Controller
{
    public function index()
    {
        return SubscriberResource::collection(Subscriber::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return JsonResponse
     */
    public function store(SubscriberRequest $request)
    {
        CreateSubscriberJob::dispatch($request->validated());

        return response()->json(['Your subscriber will be added shortly.'], 201);
    }

    public function storeWeb(SubscriberRequest $request)
    {
        CreateSubscriberJob::dispatch($request->validated());

        return redirect()->back()->with('success', 'Subscriber added successfully!');
    }
}
