<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFilmRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'description' => 'required',
            'release_year' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'director' => 'required|max:255',
            'rating' => 'nullable|numeric|min:0|max:10',
            'duration' => 'required|integer|min:1',
        ];
    }
}
