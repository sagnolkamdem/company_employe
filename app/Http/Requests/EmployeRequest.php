<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EmployeRequest extends Request
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
            'prenom' => 'required|min:2|max:200',
            'nom_de_famille' => 'required|min:2|max:200',
            'company_id' => 'required',
            'email' => 'required|email',
            'telephone' => 'required|min:9|max:20'
        ];
    }
}
