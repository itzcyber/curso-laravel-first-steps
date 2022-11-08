<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
{


    protected function prepareForValidation()
    {
        $this->merge(
            [
                'slug' => str($this->title)->slug()
            ]
        );
    }
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title" => "required|min:5|max:255",
            "slug" => [Rule::unique('posts')]
        ];
    }

    public static function myRules()
    {
        return [
            "title" => "required|min:5|max:255",
            "slug" => [Rule::unique('posts')]
        ];
    }
}
