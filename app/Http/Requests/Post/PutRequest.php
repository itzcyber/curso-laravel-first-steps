<?php

namespace App\Http\Requests\Post;

use Illuminate\Support\Str;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class PutRequest extends FormRequest
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

    public function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        if($this->expectsJson()){
        $response = new Response($validator->errors(),422);
        throw new ValidationException($validator, $response);
        }
    }

    public function rules()
    {
        return [
            "title" => "required|min:5|max:255",
            "slug" => [],
            "content" => "required|min:1",
            "category_id" => "required",
            "description" => "required|min:1|max:255",
            "posted" => "required",
            "image" => "mimes:jpeg,jpg,png|max:10240"
        ];
    }

    public static function myRules($post)
    {
        return [
            "title" => "required|min:5|max:255",
            "slug" => [Rule::unique('posts')->ignore($post->id)],
            "content" => "required|min:1",
            "category_id" => "required",
            "description" => "required|min:1|max:255",
            "posted" => "required",
            "image" => "mimes:jpeg,jpg,png|max:10240"
        ];
    }
}
