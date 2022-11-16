<?php

namespace App\Http\Requests\Category;

use Illuminate\Support\Str;

use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

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

    public function authorize()
    {
        return true;
    }

        //validaciones
    public function rules()
    {
        return [
            "title" => "required|min:5|max:255",
            //"slug" => [Rule::unique('posts')]
        ];
    }

    public static function myRules()
    {
        return [
            "title" => "required|min:5|max:255",
            //"slug" => [Rule::unique('posts')]
        ];
    }

    public function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        if($this->expectsJson()){
        $response = new Response($validator->errors(),422);
        throw new ValidationException($validator, $response);
        }
    }
}
