<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|unique:customers|email',
            'contact_no' => 'digits:10|numeric|unique:customers,contact_no',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'pincode' => 'required|numeric|digits:6',
        ];
    }
    public function messages()
    {
        return [
            'fname.required' => 'First Name is required',
            'lname.required' => 'Last Name is required',
            'contact_no.digits' => 'ContactRequest No. must be 10 digits',
            'contact_no.numeric' => 'Please insert a valid ContactRequest No.',
        ];
    }
}
