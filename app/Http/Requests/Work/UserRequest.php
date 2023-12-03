<?php

namespace App\Http\Requests\Work;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'address' => 'max:30'
        ];
    }
    public function messages() {
      return [
        'address.max' => '30文字以内に収めてください',
      ];
    }
}
