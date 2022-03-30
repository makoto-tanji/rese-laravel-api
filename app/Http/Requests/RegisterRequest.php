<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;

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
            //
            'name' => 'required | unique:users,name',
            'email' => 'required | email |unique:users,email',
            'password' => 'required | unique:users,password'
            // RegisterForm.vue 62行目
            // メールアドレスがすでに登録されています
            // でまとめられている
            // TODO
            // そのユーザー名は既に登録されています
            // そのパスワードは既に使われています
            // エラーにあったアラートを表示させたい
            // TODO
            // emailに関してはここで
            // unique:users,email
            // を指定しなくても、バリデーションが効いている
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
            'password.unique' => 'そのパスワードはすでに使用されています',
        ];
    }
}
