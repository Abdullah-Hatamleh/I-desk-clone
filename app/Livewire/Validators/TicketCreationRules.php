<?php

namespace App\Livewire\Validators;

class TicketCreationRules
{
    public static function rules(): array
    {
        return [
            'priority'        => 'required|in:low,medium,high,critical',
            'country'         => 'nullable|string|max:100',
            'customerName'    => 'nullable|string|max:255',
            'customerNumber'  => 'nullable|string|max:50',
            'customerEmail'   => 'nullable|email|max:255',
            'site'            => 'required|string|max:255',
            'phone'           => 'required|string|max:50',
            'customerId'      => 'required|string|max:50',
            'anydeskId'       => 'required|string|max:50',
            'issues'          => 'required|array|min:1',
            'comment'         => 'nullable|string|max:2000',
            'attachment'      => 'nullable|file|max:20480|mimes:jpg,jpeg,png,pdf,doc,docx,xlsx,xls',
            'thirdCategory'   => 'required|exists:categories,id',
        ];
    }

    public static function messages(): array
    {
        return [
            'priority.required' => 'Please select a priority.',
            'country.required'  => 'The country field is required.',
            'issues.required'   => 'Please select at least one issue.',
            'thirdCategory.required' => 'Please select all categories.',
        ];
    }
}
