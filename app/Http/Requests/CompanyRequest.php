<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'website' => 'required'
            ];
            if ($this->getMethod() == 'POST') {
            $rules += ['logo' => 'required |image|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=100,min_height=100'];
            }
            else{
            
            $rules += ['logo' => 'image|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=100,min_height=100'];
            }
            return $rules;

    }
}
