<?php

namespace App\Http\Requests;

use App\Models\Budget;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;

class UpdateBudgetRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'category_id' => [
                'nullable',
                Rule::exists('categories', 'id')
                    ->where('user_id', auth()->id()),
            ],

            'amount' => [
                'required',
                'numeric',
                'min:0.01',
            ],

            'month' => [
                'required',
                'integer',
                'between:1,12',
            ],

            'year' => [
                'required',
                'integer',
                'min:2000',
                'max:2100',
            ],
        ];
    }

    public function after(): array
    {
        return [
            function (Validator $validator) {
                $budget = $this->route('budget');

                $exists = Budget::query()
                    ->where('user_id', auth()->id())
                    ->where('month', $this->month)
                    ->where('year', $this->year)
                    ->whereKeyNot($budget->id)
                    ->when(
                        $this->category_id === null,
                        fn($query) => $query->whereNull('category_id'),
                        fn($query) => $query->where(
                            'category_id',
                            $this->category_id
                        )
                    )
                    ->exists();

                if ($exists) {
                    $validator->errors()->add(
                        'month',
                        'A budget for this category and month already exists.'
                    );
                }
            },
        ];
    }
}