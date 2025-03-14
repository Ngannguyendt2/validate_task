<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerTableRequest extends FormRequest
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
            //
            'name'=>'required|min:2|max:50',
            'email'=>'required|unique',
            'image'=>'mimes:jpeg,png,image',
        ];
    }
    public function messages()
    {
        $messages=[
            'name.required' => 'We need to know your full name!',
            'name.min' => 'Name size must be between 2 and 50!',
            'name.max' => 'Name size must be between 2 and 50!',
            'email.required' => 'We need to know your email!',
            'email.unique' => 'Email addresses must be unique',
            'image.mimes'=>'The image must be in jpeg,png,image format'
        ];
        return $messages; // TODO: Change the autogenerated stub
    }
}
