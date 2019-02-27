<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTask extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'task_type_id' => 'required|integer',
            'company' => 'required|string|max:255',
            'contact_id' => 'required|integer',
            'objective' => 'required|string|max:255',
            'user_id' => 'required|integer',
            'due_date' => 'required|string|max:255',
            'due_time' => 'required|string|max:255',
            'remind_date' => 'required|string|max:255',
            'remind_time' => 'required|string|max:255',
            'priority_id' => 'required|integer',
        ];
    }
}
