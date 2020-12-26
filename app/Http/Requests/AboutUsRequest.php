<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutUsRequest extends FormRequest
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
                    'description'=>['required', 'max:150'],
                    'details'=>['required'],
                    'titel' => ['required', 'string', 'max:40'], 
                    'file'=>['required'],
                ];
                break;
                
            case 'update':
                return [
                    'description'=>['required', 'max:150'],
                    'details'=>['required'],
                    'titel' => ['required', 'string', 'max:40'], 
                ];
                break;
         }
    }
    public function messages()
    {
        return [
            'description.required' => 'يجب كتابة تشرح للنشاط', 
            'description.max' => 'يجب تشرح النشاط لا يتجاوز  150 حرف', 
            
            'details.required' => 'يجب كتابة تفاصيل النشاط', 

            'titel.required' => 'يجب كتابة كلمة بداية ', 
            'image.required' => 'يجب تحميل صورة  للمشروع', 
        ];
    }
}
