<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->path() === 'api/auth/reservation' ;
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
            'reservation_date' => 'required|date_format:Y-m-d H:i|after:now + 1hours'
        ];
    }
    // messages()追加
    public function messages()
    {
        return [
            'number_of_people.required' => '人数を選択してください',
            'reservation_date.required' => '日時を選択してください',
            'reservation_date.date_format' => '日時を選択してください',
            'reservation_date.after' => '現時刻から1時間後よりお選びください',
        ];
    }
}
