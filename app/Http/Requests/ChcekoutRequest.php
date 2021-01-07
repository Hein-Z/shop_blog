<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ChcekoutRequest extends FormRequest
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
        $emailValidate = Auth::check() ? 'required|email' : 'required|email|unique:users';
        return [
            'email' => $emailValidate,
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'province' => 'required',
            'postalcode' => 'required',
            'phone' => 'required',
        ];

    }

    function messages()
    {
        $login = '<a href="\login">Login</a>';
        return [
            'email.unique' => 'You already has a account ' . $login . ' please  to continue',
        ];
    }
}
