<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class SubscriberRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'required', 'string'],
            'last_name' => ['sometimes', 'required', 'string'],
            'email' => ['required', 'email', 'max:254'],
            'status' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
