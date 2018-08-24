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
            'content' => 'bail|required|string|max:3000',
            'image' => 'bail|image|mimes:jpeg,png,jpg,gif,svg|max:3072|file',
        ];
    }


    public function messages()
    {
        return [
            'content.required'  => 'Nội dung post không được bỏ trống !',
            'content.max'       => 'Nội dung tối đa :max kí tự !',
            'image.image'       => 'File tải lên không phải là ảnh !',
            'image.max'         => 'Ảnh tải lên tối đa 3MB',
            'image.file'        => 'Ảnh tải lên không thành công !',
        ];
    }
}
