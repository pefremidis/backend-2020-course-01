<?php

namespace App\Http\Requests;

use App\Models\Movie;
use Illuminate\Foundation\Http\FormRequest;

class MovieFormRequest extends FormRequest
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
            'title' => 'required',
            'rating' => 'required|numeric|max:10|min:0'
        ];
    }

    public function insert() {
        return Movie::create($this->validated());
    }

    public function update(Movie $movie) {
        return $movie->fill($this->validated())->save();
    }

    public function delete(Movie $movie) {
        dd($movie);
        return $movie->delete();
    }
}
