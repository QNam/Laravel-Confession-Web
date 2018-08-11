<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'content' => 'required|string|max:3000',
        ];
    }


    public function message()
    {
        return [
            'content.required'  => 'Nội dung post không được bỏ trống !',
            'content.max'       => 'Nội dung tối đa 3000 kí tự !',
        ];
    }
}
