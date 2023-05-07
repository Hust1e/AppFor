<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'event_name' => ['required'],
            'event_description' => ['required'],
            'event_type' => ['required'],
            'event_date' => ['required'],
            'event_img' => ['required'],
            'event_price' => ['required'],
        ];
    }
}
