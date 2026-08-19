<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UpdateExpenseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'description' => [
                'required',
                'string',
                'max:255',
            ],

            'amount' => [
                'required',
                'numeric',
                'min:0.01',
            ],

            'category_id' => [
                'nullable',
                Rule::exists('categories', 'id')
                    ->where('user_id', auth()->id()),
            ],

            'expense_date' => [
                'required',
                'date',
            ],

            'payment_method' => [
                'nullable',
                'string',
                'max:50',
            ],

            'notes' => [
                'nullable',
                'string',
            ],
        ];
    }
}
