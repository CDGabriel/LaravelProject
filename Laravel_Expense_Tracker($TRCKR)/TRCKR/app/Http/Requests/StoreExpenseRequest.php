<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreExpenseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'description' => ['required', 'string', 'max:255'],

            'amount' => ['required', 'numeric', 'min:0.01'],

            'category_id' => [
                'nullable',
                Rule::exists('categories', 'id')
                    ->where('user_id', auth()->id()),
            ],

            'expense_date' => ['required', 'date'],

            'payment_method' => ['required', 'string', 'max:50'],

            'notes' => ['nullable', 'string'],
        ];
    }
}