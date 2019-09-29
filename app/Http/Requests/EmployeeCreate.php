<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeCreate extends FormRequest
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
            // 'Username' => ['required', 'string', 'max:255','unique:blooddonarusers'],
            // 'FullName' => ['required', 'string', 'max:255'],
            'email' => ['email'],
            // 'password' => ['required', 'string', 'min:5', 'confirmed'],
            // 'gender' => ['required'],
            // 'date_order' => ['required','date','before:-18 years','after:-60 years'],
            // 'bloodGroupId' => 'required',
            // 'MobileNumber' => ['phone:Country','unique:blooddonarusers'],
            // 'Country' => ['required_with:mobileNumber'],
        ];
    }

    public function message()
    {
        return [
            'email' => "Invalid Email",
            // 'Username.required' => 'Username is required!',
            // 'FullName.required' => 'Name is required!',
            // 'date_order.before' => 'Your age should be under 18-60',
            // 'date_order.after' => 'Your age should be under 18-60',
        ];
    }
}
