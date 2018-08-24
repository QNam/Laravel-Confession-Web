<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'comment' => 'bail|required|string|max:400',
        ];
    }


    public function messages()
    {
        return [
            'comment.required'  => 'Nội dung comment không được bỏ trống !',
            'comment.max'       => 'Nội dung tối đa 400 kí tự !',
        ];
    }
}
