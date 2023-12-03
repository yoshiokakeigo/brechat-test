<?php

namespace App\Http\Requests\Work;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
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
            'title' => 'max:100|required',
            'rule' => 'max:300',
        ];
    }
    public function messages() {
      return [
        'title.required' => '必須',
        'title.max' => '100文字以内に入力してください',
        'rule.max' => '300文字以内に入力してください',
      ];
    }
}
