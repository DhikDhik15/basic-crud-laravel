<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidateUpdateRequest extends FormRequest
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
            'name' => 'required',
            'education' => 'required',
            'birthday' => 'required|date',
            'experience' => 'required',
            'last_position' => 'required',
            'applied_position' => 'required',
            'top_5' => 'required',
            'email' => 'required|email:rfc,dns',
            'phone' => 'required|max:13',
        ];
    }

    public function data()
    {
        return $data = [
            'id' => $this->candidate,
            'name' => $this->name,
            'education' => $this->education,
            'birthday' => $this->birthday,
            'experience' => $this->experience,
            'last_position' => $this->last_position,
            'applied_position' => $this->applied_position,
            'top_5' => $this->top_5,
            'email' => $this->email,
            'phone' => $this->phone,
        ];
    }
}
