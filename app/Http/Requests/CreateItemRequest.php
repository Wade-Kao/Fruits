<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //驗證該使用者是否有權限來提交此表單請求，如無權限將跳出403錯誤
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
            'title' => 'required|max:5',
            'size' => 'required',
        ];
    }
}
