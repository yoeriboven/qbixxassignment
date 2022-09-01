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
            'items.*.*.title' => ['required', 'string'],
            'items.*.*.paragraph' => ['required'],
            'items.*.*.type' => ['required', 'integer', 'in:0,1,2'],
        ];
    }

    public function messages()
    {
        return [
            'items.*.*.title.required' => 'Titles are required',
            'items.*.*.title.string' => 'Titles need to be strings',
            'items.*.*.paragraph.required' => 'Paragraphs are required',
            'items.*.*.type.required' => 'A type is required',
            'items.*.*.type.integer' => 'A type needs to have an integer value',
            'items.*.*.type.in' => 'Invalid type.',
        ];
    }
}
