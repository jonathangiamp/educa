<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentsRequest extends FormRequest
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
          'game_name' => 'bail|required',
          'game_picture' => 'bail|required',
          'comment' => 'bail|required',
          'comeback_url' => 'bail|required',
          'url_emote' => 'bail|required',
          'level' => 'bail|required',
          'matieres' => 'bail|required',
        ];
    }
}
