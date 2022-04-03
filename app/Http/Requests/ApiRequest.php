<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
// 以下追加
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ApiRequest extends FormRequest
{
    // 各フォームリクエストに継承させるためのクラス
    // フォームリクエストにバリデーションエラーがある場合、フォームリクエスト内で
    // 元の画面にリダイレクトするため、コントローラの処理にたどりつかない
    // リダイレクトを防ぐために以下をオーバーライド
    protected function failedValidation(Validator $validator): void
    {
        $data = $validator->errors()->toArray();

        throw new HttpResponseException(response()->json([
            'error' => $data
        ], 422));
    }
}
