<?php

declare(strict_types=1);

namespace Interfaces\Admin\Clients\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:4', 'max:30'],
//            'items.*.*.title' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'items.*.*.title.required' => 'Titles are required',
        ];
    }
}
