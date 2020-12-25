<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
        $arr = explode('@', $this->route()->getActionName());
        $method = $arr[1];  // The controller method
    
       
        switch ($method) {
            case 'store':
                return [
                    'description'=>[ 'max:150'],
                    'name' => ['required', 'string', 'max:20'], 
                    'titel' => ['required'], 
                    'file'=>['required'],
                ];
                break;
                
            case 'update':
                return [
                    'description'=>[ 'max:150'],
                    'titel' => ['required'], 
                    'name' => ['required', 'string', 'max:20'], 
                ];
                break;
         }
    }
    public function messages()
    {
        return [
            'description.max' => 'يجب تشرح الموظف لا يتجاوز  150 حرف', 
            'titel.required' => 'يجب اختيار وصف الموظف', 
            'name.required' => 'يجب كتابة اسم الموظف', 
            'name.max' => 'يجب كتابة اسم الموظف لا يتاجوز 20 حرف', 
            'file.required' => 'يجب تحميل صورة  الموظف', 
        ];
    }
}
