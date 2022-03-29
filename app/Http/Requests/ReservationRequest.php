<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
        // 以下追加
        return true;
        // TODO
        // フォームリクエストの使用許可・不許可の指定をしたい
        // ログインしていないと予約できないからここで権限判定しなくてもよい？
        // if ($this->path() == 'http://127.0.0.1:8000/api/auth/reservation') {
        //     return true;
        // } else {
        //     return false;
        // }
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
            'shop_id' => 'required',
            'user_id' => 'required',
            'number_of_people' => 'required',
            'reservation_date' => 'required | date'
        ];
    }
}
