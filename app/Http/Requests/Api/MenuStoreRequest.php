<?php

namespace App\Http\Requests\Api;

class MenuStoreRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'link' => 'required',
            'parent_id' => 'required|numeric',
        ];
    }
}
