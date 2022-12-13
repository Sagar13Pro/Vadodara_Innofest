<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProposalValidator extends FormRequest
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
            'image.*' => 'mimes:png,jpeg|image|max:512',
            '_teamName' => 'max:50',
            '_mentorsName' => 'max:50',
            '_mentorContactNo' => 'size:10',
            '_institute' => 'max:50',
            '_teamMembers' => 'max:20',
            '_teamLeaderContactNo' => 'size:10'
        ];
    }
    public function message()
    {
        return [
            '_teamName.required' => 'The team name is required'
        ];
    }
}
