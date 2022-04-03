<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
// 以下追加
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class RegisterRequest extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->path() === 'api/auth/register' ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 以下追加
            'name' => 'required | unique:users,name',
            'email' => 'required | email |unique:users,email',
            'password' => 'required'
        ];
    }
    // messages()追加
    public function messages()
    {
        return [
            'name.required' => 'お名前を入力してください',
            'name.unique' => 'そのユーザー名はすでに使用されています',
            'email.required' => 'メールアドレスを入力してください',
            'email.unique' => 'そのメールアドレスはすでに使用されています',
            'password.required' => 'パスワードを入力してください',
        ];
    }
}
