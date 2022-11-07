<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreRequest extends FormRequest
{


    protected function prepareForValidation()
    {
        $this->merge(
            [
                //'slug' => Str::slug($this->title),
                //'slug' => Str::of($this->title)->slug()->append("-adicional")
                'slug' => str($this->title)->slug()
            ]
        );
    }

    static public function myRules()
    {
        return [
            "title" => "required|min:5|max:255",
            "slug" => "unique:posts",
            "category_id" => "required",
            "content" => "required|min:5",
            "description" => "required|min:5|max:255",
            "posted" => "required"
        ];
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
            "title" => "required|min:1|max:255",
            "slug" => "required|min:1|max:255",
            "content" => "required|min:1",
            "category_id" => "required",
            "description" => "required|min:1|max:255",
            "posted" => "required"
        ];
    }
}
