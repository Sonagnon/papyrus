<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnnotationCreateRequest extends FormRequest
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
                'contenu'=> 'nullable|max:255',
                'date'=> 'nullable|max:255',
                'document_id'=>'nullable|max:255',
                'user_id'=> 'nullable|min:255'
                

        ];
    }
}
