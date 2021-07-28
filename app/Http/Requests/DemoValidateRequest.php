<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DemoValidateRequest extends FormRequest
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
            'name'=>'required|min:5|max:20',
            'description'=>'required|min:5|max:20',
            'price'=>'numeric'
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'vui long nhap ten',
            'name.min'=>'ten it nhat phai 5 ki tu',
            'name.max'=>'ten phai nho 20 ki tu',
            'description.required'=>'vui long nhap mo ta',
            'description.min'=>'mo ta it nhat la 5 ki tu',
            'description.max'=>'mo ta khong qua 20 ki tu',
            'price.min'=>'gia la kiu so',
        ];
    }
    public function withValidator($validator){
        $validator->after(function ($validator){
            if ($this->get('nme')=='chinh'){
                $validator->errors()->add('name', 'khong the nhap voi ten chinh');
            };
        });
    }
}
