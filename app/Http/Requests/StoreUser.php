<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
                'name' => 'required|min:3|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|confirmed|min:3|max:10',
                'cpf' => 'required',
                'rg' => 'required',
                'zipcode' => 'required',
                'street' => 'required',
                'number' => 'required',
                'zip' => 'required',
                'city' => 'required',
                'state' => 'required',
                // 'photo' => 'sometimes|image|mimes:jpeg,jpg,png'
            ];
    }
}
